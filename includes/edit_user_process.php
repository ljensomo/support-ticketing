<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$fname = htmlspecialchars($_POST['fname']);
$mname = htmlspecialchars($_POST['mname']);
$lname = htmlspecialchars($_POST['lname']);
$contact = htmlspecialchars($_POST['contact']);
$email = htmlspecialchars($_POST['email']);


$sql = "UPDATE users SET fname =?, mname=?, lname=?, cnum = ?, email=? WHERE user_id =?";
$qry = $db->prepare($sql);
$qry->execute(array($fname,$mname,$lname,$contact,$email,$id));
    //msgAlert($alert = "Successfully Saved");
   //openWindow($goto = "../users.php");
 

?>