<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';

$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$company_id = $_POST['company_id'];
$project_id = $_POST['project_id'];
$username = $_POST['username'];
$cnum = $_POST['contact_no'];
$email = $_POST['email_add'];
$role = 5;
$options = array('cost' => 11);
$password = password_hash($_POST['confirm_password'], PASSWORD_BCRYPT, $options);
$token = $hasher->generateToken($username);

$required = array($firstname, $lastname, $username, $password);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sqlUser = "Select COUNT(*) from users where username=?";
$resUser = $db->prepare($sqlUser);
$resUser->execute(array($username));



if ($error) {
    openWindow($goto = "../add_reporters.php");
} else if ($rowUser = ($resUser->fetchColumn() > 0)) {
    msgAlert($alert = "Username already used, Please try using another username!");
    openWindow($goto = "../add_user.php");
} else {
    $sqlAdd = "INSERT INTO users(fname,mname,lname,email,cnum,is_active,company_id)VALUES(?,?,?,?,?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($firstname, $middlename, $lastname, $email, $cnum, 0,$company_id));

    
    $sqlUser2 = "SELECT user_id FROM users WHERE fname = ? AND mname = ? AND lname = ? ";
    $resUser2 = $db->prepare($sqlUser2);
    $resUser2->execute(array($firstname,$middlename,$lastname));
    $rowUser2 = $resUser2->fetch(PDO::FETCH_NUM);
    
    $sqlAdd2 = "INSERT INTO user_accounts(user_id,username,password)VALUES(?,?,?)";
    $qryAdd2 = $db->prepare($sqlAdd2);
    $qryAdd2->execute(array($rowUser2[0], $username, $password));        

    $sqlAdd3 = "INSERT INTO users_roles(user_id,user_role)VALUES(?,?)";
    $qryAdd3 = $db->prepare($sqlAdd3);
    $qryAdd3->execute(array($rowUser2[0], $role));        

    $sqlAdd4 = "INSERT INTO reporters(user_id,project_id)VALUES(?,?)";
    $qryAdd4 = $db->prepare($sqlAdd4);
    $qryAdd4->execute(array($rowUser2[0],$project_id));

    msgAlert($alert = "Registration Successful!");
    openWindow($goto = "../representatives.php");
}
?>