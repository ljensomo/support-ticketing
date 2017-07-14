<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';

$firstname = htmlspecialchars($_POST['firstname']);
$middlename = htmlspecialchars($_POST['middlename']);
$lastname = htmlspecialchars($_POST['lastname']);
$username = htmlspecialchars($_POST['username']);
$cnum = htmlspecialchars($_POST['contact']);
$email = htmlspecialchars($_POST['email']);
$role = htmlspecialchars($_POST['role']);
$options = array('cost' => 11);
$password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT, $options));
$token = $hasher->generateToken($username);

$required = array($firstname, $lastname,$cnum,$email, $username, $password);
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
    $sqlAdd = "INSERT INTO users(fname,mname,lname,email,cnum,is_active)VALUES(?,?,?,?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($firstname, $middlename, $lastname, $email, $cnum, 1));

    
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

    //msgAlert($alert = "Registration Successful!");
    //openWindow($goto = "../users.php");
    
    echo "success";
}
?>