<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';


$fname = htmlspecialchars($_POST['fname']);
$mname = htmlspecialchars($_POST['mname']);
$lname = htmlspecialchars($_POST['lname']);
$email = htmlspecialchars($_POST['email']);
$cnum = htmlspecialchars($_POST['contact']);
//$company = htmlspecialchars($_POST['company']);
$company=htmlspecialchars($_POST['company_name']);
$username = htmlspecialchars($_POST['username']);
$role = 4;
$options = array('cost' => 11);
$password = htmlspecialchars(password_hash($_POST['pass'], PASSWORD_BCRYPT, $options));
$token = $hasher->generateToken($username);

$required = array($fname, $lname,$cnum,$email, $username, $password);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sqlUser = "SELECT COUNT(*) FROM user_accounts WHERE username=?";
$resUser = $db->prepare($sqlUser);
$resUser->execute(array($username));



if ($error) {
    //openWindow($goto = "../login.html");
    echo "none";
} else if ($rowUser = ($resUser->fetchColumn() > 0)) {
    //msgAlert($alert = "Username already used, Please try using another username!");
    //openWindow($goto = "../add_user.php");
    echo "exist";
} else {
    $sqlAdd = "INSERT INTO users(fname,lname,company_name,mname,cnum,email,uname,pass,is_active)VALUES(?,?,?,?,?,?,?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($fname, $lname, $company,$mname, $cnum, $email,$username,$password, 0));

    $sqlUser2 = "SELECT user_id FROM users WHERE fname = ? and lname = ? and email = ? and cnum = ? and is_active = ?";
    $resUser2 = $db->prepare($sqlUser2);
    $resUser2->execute(array($fname,$lname,$email,$cnum,0));
    $rowUser2 = $resUser2->fetch(PDO::FETCH_NUM);
    
    $number = $rowUser2[0];
    //$number = password_hash($rowUser2[0],PASSWORD_BCRYPT);
    $link = 'localhost/new folder/includes/activate_user_account_process.php?cid='."".$number;
    $message =  'click here to activate your account.';

     
        	
    //msgAlert($alert = "Registration Successful!");
    //openWindow($goto = "../users.php");
   /*	include '../mailer/PHPMailer/PHPMailerAutoload.php';
   	
	$mail = new PHPMailer;
	
	$mail->isSMTP();                            // Set mailer to use SMTP
	//$mail->SMTPDebug = 4;
	$mail->Host = "ssl://smtp.gmail.com"; 
	//$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                     // Enable SMTP authentication
	$mail->Username = 'ticketing.system189@gmail.com';          // SMTP username
	$mail->Password = 'samplepassword123'; // SMTP password
	$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                          // TCP port to connect to
	
	$mail->setFrom('ticketing.system189@gmail.com', 'Fortis Technologies Corp.');
	// $mail->addReplyTo('info@example.com', 'CodexWorld');
	
	$mail->addAddress($email);   // Add a recipient
	//$mail->addAddress('andanarandrian@gmail.com');   // Add a recipient
	
	
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');
	
	$mail->isHTML(true);  // Set email format to HTML
	
	// $bodyContent = '<h2>How to Send Email using PHP in Localhost by CodexWorld</h2>';
	// $bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';
	
	$mail->Subject = 'Welcome to Fortis!';
	// $mail->Body    = $bodyContent;
	//$mail->Body    = 'this is a test number 4!';
	$mail->Body = $_POST['message'];
	
    if(!$mail->send()){
    // echo 'Message could not be sent.';
    	$sql_del = "DELETE FROM users WHERE user_id = ?";
    	$del_res = $db->prepare($sql_del);
    	$del_res->execute(array($rowUser2[0]));
    	
    	echo 'error';
	}else{*/
			$sqlAdd2 = "INSERT INTO user_accounts(user_id,username,password)VALUES(?,?,?)";
		    $qryAdd2 = $db->prepare($sqlAdd2);
		    $qryAdd2->execute(array($rowUser2[0], $username, $password));        
		
		    $sqlAdd3 = "INSERT INTO users_roles(user_id,user_role)VALUES(?,?)";
		    $qryAdd3 = $db->prepare($sqlAdd3);
		    $qryAdd3->execute(array($rowUser2[0], $role));
    	echo "success";
   // }
}
?>