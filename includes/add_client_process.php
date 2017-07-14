<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';

$company_name = htmlspecialchars($_POST['company_name']);
$email = htmlspecialchars($_POST['email']);


$contact_no = htmlspecialchars($_POST['contact_no']);
$options = array('cost' => 11);
//$role = 4;
//$username = htmlspecialchars($_POST['username']);
//$password = htmlspecialchars(password_hash($_POST['confirm_password'], PASSWORD_BCRYPT, $options));
$token = $hasher->generateToken($email);
$required = array($company_name, $email);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sql_validate = "SELECT * FROM companies WHERE company_name = ?";
$res_validate = $db->prepare($sql_validate);
$res_validate->execute(array($company_name));


if ($error) {
    //openWindow($goto = "../login.php");
    echo "none";
} else if ($row_validate = ($res_validate->fetchColumn() > 0)) {
    //msgAlert($alert = "Username already used, Please try using another username!");
    //openWindow($goto = "../add_user.php");
    echo "exist";
} else {
    $sqlAdd = "INSERT INTO companies(company_name,contact_no,email_address)VALUES(?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($company_name,$contact_no,$email));

    $sqlUser2 = "SELECT id FROM companies WHERE company_name = ?";
    $resUser2 = $db->prepare($sqlUser2);
    $resUser2->execute(array($company_name));
    $rowUser2 = $resUser2->fetch(PDO::FETCH_NUM);
	
	echo $rowUser2[0];
	
    }
?>