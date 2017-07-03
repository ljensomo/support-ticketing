<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$company_name = $_POST['company_name'];
$username = $_POST['username'];


$required = array($company_name);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($error) {

    openWindow($goto = "../clients.php");
} else {
    $sql = "UPDATE users SET company_name =?, username=? WHERE userId =?";
    $qry = $db->prepare($sql);
    $qry->execute(array($company_name,$username,$id));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../clients.php");
}
?>