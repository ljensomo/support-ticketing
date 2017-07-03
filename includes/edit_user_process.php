<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$role = $_POST['role'];

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
    $sql = "UPDATE users SET fname =?, mname=?, lname=?, username=?, userlevel_id=? WHERE userId =?";
    $qry = $db->prepare($sql);
    $qry->execute(array($fname,$mname,$lname,$username,$role,$id));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../users.php");
}
?>