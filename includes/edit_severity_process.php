<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$required = array($name);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($error) {

    openWindow($goto = "../severity.php");
} else {
    $sql = "UPDATE severity SET severity =?, description=? WHERE severity_id =?";
    $qry = $db->prepare($sql);
    $qry->execute(array($name,$description,$id));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../severity.php");
}
?>