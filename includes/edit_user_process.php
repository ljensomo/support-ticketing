<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$fname = htmlspecialchars($_POST['fname']);
$mname = htmlspecialchars($_POST['mname']);
$lname = htmlspecialchars($_POST['lname']);
$username = htmlspecialchars($_POST['username']);
$role = htmlspecialchars($_POST['role']);

$required = array($fname,$mname,$lname,$username,$role);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($error) {
	echo "none";
    //openWindow($goto = "../users.php");
} else {
    $sql = "UPDATE users SET fname =?, mname=?, lname=? WHERE user_id =?";
    $qry = $db->prepare($sql);
    $qry->execute(array($fname,$mname,$lname,$id));
    msgAlert($alert = "Successfully Saved");
   openWindow($goto = "../users.php");
}
?>