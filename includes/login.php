
<?php

session_start();
include 'connection.php';
include 'functions.php';

$user = $_POST['user'];
$pw = $_POST['pw'];

$sql = "SELECT 
	a.user_id,	
	a.fname,
	a.mname,
	a.lname,
	a.company_name,
	a.cnum,
	a.email,
	a.is_active,
	a.uname,
	a.pass,
	d.user_desc,
	d.userlevel_id
	
FROM users AS a JOIN users_roles AS c 
ON a.user_id=c.user_id
JOIN roles AS d 
ON c.user_role=d.userlevel_id WHERE uname = BINARY ?";

$res = $db->prepare($sql);
$res->execute(array($user));
$row = $res->fetch(PDO::FETCH_NUM);

$required = array($user, $pw);
$error = false;
foreach ($required as $fields) {
    if (empty($fields))
 {
        $error = true;
    }
}

if ($error) {

    openWindow($goto = "../login.html");
} else if ($row[0] == "") {
    echo "none";
    //msgAlert($alert = "The username and password you entered did not match our records. Please double-check and try again.");
    //openWindow($goto = "../login.html");
} else if ($row[7] == 0) {
	echo "not active";
    //msgAlert($alert = "The user you entered is not yet activated. Please contact your administrator to activate your account.");
    //openWindow($goto = "../login.html");
} else if (password_verify($pw, $row[9])) {
    $_SESSION['admin'] = $row[8];
    if($row[11]== 4){
         //openWindow($goto = "../homebanner.php");
		 echo "client";
    } else{
	     echo "admin";
    //openWindow($goto = "../index.php");
	}

    /*if ($row['userlevel_id'] == '1') {
        $_SESSION['admin'] = $row['username'];
        msgAlert($alert = "Login Successful");
        openWindow($goto = "../index.php");
    } else {
        msgAlert($alert = "Access Denied");
        openWindow($goto = "../login.html");
    }*/
} else if (!password_verify($pw, $row[9])) {
    echo "incorrect";
    //msgAlert($alert = "The password you entered is incorrect. Please try again");
    //openWindow($goto = "../login.html");
}
?>
