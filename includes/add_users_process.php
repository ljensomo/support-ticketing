<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
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
    $sqlAdd = "INSERT INTO users(fname,mname,lname,username,password,userlevel_id)VALUES(?,?,?,?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($firstname, $middlename, $lastname, $username, $password, $role));
    msgAlert($alert = "Registration Successful!");
    openWindow($goto = "../users.php");
}
?>