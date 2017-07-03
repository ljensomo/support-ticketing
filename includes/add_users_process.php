<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$cnum = $_POST['contact'];
$email = $_POST['mail'];
$role = $_POST['role'];
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
    openWindow($goto = "../login.php");
} else if ($rowUser = ($resUser->fetchColumn() > 0)) {
    msgAlert($alert = "Username already used, Please try using another username!");
    openWindow($goto = "../add_user.php");
} else {
    $sqlAdd = "INSERT INTO users(fname,mname,lname,email,cnum,is_active)VALUES(?,?,?,?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($firstname, $middlename, $lastname, $email, $cnum, 0));

    
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

    msgAlert($alert = "Registration Successful!");
    openWindow($goto = "../users.php");
}
?>