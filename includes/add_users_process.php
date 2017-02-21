<?php

require_once 'connection.php';
include 'functions.php';

$fname = $_POST['txtfname'];
$mname = $_POST['txtmname'];
$lname = $_POST['txtlname'];
$role = $_POST['sel_role'];
$uname = $_POST['txtEmail'];
$pass  = $_POST['txtpass'];

$required = array($uname);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sql = "SELECT COUNT(*) FROM users WHERE fname =?";
$qry = $db->prepare($sql);
$qry->execute(array($fname));

if ($error) {

    openWindow($goto = "../add_user.php");
} else if ($row = ($qry->fetchColumn() > 0)) {
    msgAlert($alert = "Invalid");
    openWindow($goto = "../add_user.php");
} else {
    $sqlAdd = "INSERT INTO users(fname,mname,lname,username,password,userlevel_id,is_active) VALUES (?,?,?,?,?,?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($fname,$mname,$lname,$uname,$pass,$role,0));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../users.php");
}
?>