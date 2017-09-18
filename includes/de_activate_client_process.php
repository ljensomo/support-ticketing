<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];

$sql = "UPDATE users SET is_active =? WHERE user_id =?";
$qry = $db->prepare($sql);
$qry->execute(array(0,$id));
    //msgAlert($alert = "Successfully De-activated");
    //openWindow($goto = "../clients.php");

?>