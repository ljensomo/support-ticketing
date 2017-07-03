<?php

require_once 'connection.php';
include 'functions.php';

$transactionID = $_POST['txttransID'];
$email = $_POST['txtemail'];

$required = array($transactionID);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sql = "SELECT COUNT(*) FROM ticket WHERE ID =?";
$qry = $db->prepare($sql);
$qry->execute(array($transactionID));

if ($row = ($qry->fetchColumn() > 0 )){
   
  openWindow($goto = "../view_tickets.php");
} else {
     msgAlert($alert = "Invalid Ticket No.");
    openWindow($goto = "../validate.php");
}   
?>