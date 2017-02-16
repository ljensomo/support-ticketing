<?php

require_once 'connection.php';
include 'functions.php';

$name = $_POST['name'];
$description = $_POST['description'];

$required = array($name);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sql = "SELECT COUNT(*) FROM severity WHERE severity =?";
$qry = $db->prepare($sql);
$qry->execute(array($name));

if ($error) {

    openWindow($goto = "../add_severity.php");
} else if ($row = ($qry->fetchColumn() > 0)) {
    msgAlert($alert = "Invalid");
    openWindow($goto = "../add_severity.php");
} else {
    $sqlAdd = "INSERT INTO severity(severity,description) VALUES (?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($name,$description));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../severity.php");
}
?>