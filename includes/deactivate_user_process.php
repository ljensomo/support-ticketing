<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$required = array($fname);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($error) {

    openWindow($goto = "../users.php");
} else {
    $sql = "UPDATE users SET is_active =? WHERE id =?";
    $qry = $db->prepare($sql);
    $qry->execute(array(0,$id));
    msgAlert($alert = "Successfully De-Activated");
    openWindow($goto = "../users.php");
}
?>