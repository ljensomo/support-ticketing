<?php

require_once 'connection.php';
include 'functions.php';

$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);

$required = array($name);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sql = "SELECT COUNT(*) FROM resolution WHERE resolution_id =?";
$qry = $db->prepare($sql);
$qry->execute(array($name));

if ($error) {
    echo "none";
    //openWindow($goto = "../add_resolution.php");
} else if ($row = ($qry->fetchColumn() > 0)) {
    msgAlert($alert = "Invalid");
    openWindow($goto = "../add_resolution.php");
} else {
    $sqlAdd = "INSERT INTO resolution(resolution,description) VALUES (?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($name,$description));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../resolution.php");
}
?>