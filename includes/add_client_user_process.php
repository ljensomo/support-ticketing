<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';


$fname = htmlspecialchars($_POST['fname']);
$mname = htmlspecialchars($_POST['mname']);
$lname = htmlspecialchars($_POST['lname']);
$email = htmlspecialchars($_POST['email']);
$cnum = htmlspecialchars($_POST['contact']);
$cmpny_id = htmlspecialchars($_POST['cid']);
$username = htmlspecialchars($_POST['uname']);
$role = 5;
$options = array('cost' => 11);
$password = htmlspecialchars(password_hash($_POST['pass'], PASSWORD_BCRYPT, $options));
$token = $hasher->generateToken($username);


$sqlUser = "SELECT COUNT(*) FROM users WHERE uname=?";
$resUser = $db->prepare($sqlUser);
$resUser->execute(array($username));



if ($rowUser = ($resUser->fetchColumn() > 0)) {
    //msgAlert($alert = "Username already used, Please try using another username!");    //openWindow($goto = "../add_user.php");

    echo "exist";
} else {
    $sqlAdd = "INSERT INTO users(fname,mname,lname,company_id,cnum,email,uname,pass,is_active)VALUES(?,?,?,?,?,?,?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($fname,$mname, $lname, $cmpny_id, $cnum, $email, $username, $password, 1));

    $sqlUser2 = "SELECT user_id FROM users WHERE uname=?";
    $resUser2 = $db->prepare($sqlUser2);
    $resUser2->execute(array($username));
    $rowUser2 = $resUser2->fetch(PDO::FETCH_NUM);
        
    $sqlAdd3 = "INSERT INTO users_roles(user_id,user_role)VALUES(?,?)";
    $qryAdd3 = $db->prepare($sqlAdd3);
    $qryAdd3->execute(array($rowUser2[0], $role));
    echo "success";
}
?>