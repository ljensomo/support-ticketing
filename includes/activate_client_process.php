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

    openWindow($goto = "../client.php");
} else {
    $sql = "UPDATE users SET is_active =? WHERE user_id =?";
    $qry = $db->prepare($sql);
    $qry->execute(array(1,$id));
    msgAlert($alert = "Successfully Activated");
    openWindow($goto = "../clients.php");
}
?>