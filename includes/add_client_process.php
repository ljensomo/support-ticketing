<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';

$company_name = $_POST['company_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$role = 4;
$contact_no = $_POST['contact_no'];
$options = array('cost' => 11);
$password = password_hash($_POST['confirm_password'], PASSWORD_BCRYPT, $options);
$token = $hasher->generateToken($email);
$required = array($company_name, $email, $password, $role);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sqlUser = "Select COUNT(*) from client_info where username=?";
$resUser = $db->prepare($sqlUser);
$resUser->execute(array($username));

if ($error) {
    openWindow($goto = "../login.php");
} else if ($rowUser = ($resUser->fetchColumn() > 0)) {
    msgAlert($alert = "Username already used, Please try using another username!");
    openWindow($goto = "../add_user.php");
} else {
    $sqlAdd = "INSERT INTO companies(company_name,contact_no,email_address)VALUES(?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($company_name,$contact_no,$email));

    $sqlUser2 = "SELECT id FROM companies WHERE company_name = ?";
    $resUser2 = $db->prepare($sqlUser2);
    $resUser2->execute(array($company_name));
    $rowUser2 = $resUser2->fetch(PDO::FETCH_NUM);

    $sqlAdd2 = "INSERT INTO users(fname,company_id,is_active)VALUES(?,?,?)";
    $qryAdd2 = $db->prepare($sqlAdd2);
    $qryAdd2->execute(array($company_name,$rowUser2[0],0));

    $sqlUser3 = "SELECT user_id FROM users WHERE fname = ?";
    $resUser3 = $db->prepare($sqlUser3);
    $resUser3->execute(array($company_name));
    $rowUser3 = $resUser3->fetch(PDO::FETCH_NUM);

    $sqlAdd3 = "INSERT INTO user_accounts(user_id,username,password)VALUES(?,?,?)";
    $qryAdd3 = $db->prepare($sqlAdd3);
    $qryAdd3->execute(array($rowUser3[0],$username,$password));

    $sqlAdd4 = "INSERT INTO users_roles(user_id,user_role)VALUES(?,?)";
    $qryAdd4 = $db->prepare($sqlAdd4);
    $qryAdd4->execute(array($rowUser3[0], $role));

    msgAlert($alert = "Registration Successful!");
    openWindow($goto = "../view_client.php ?>");
}
?>