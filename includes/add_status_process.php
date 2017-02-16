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

$sql = "SELECT COUNT(*) FROM status WHERE status_id =?";
$qry = $db->prepare($sql);
$qry->execute(array($name));

if ($error) {

    openWindow($goto = "../add_status.php");
} else if ($row = ($qry->fetchColumn() > 0)) {
    msgAlert($alert = "Invalid");
    openWindow($goto = "../add_status.php");
} else {
    $sqlAdd = "INSERT INTO status(status_desc,description) VALUES (?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($name,$description));
    msgAlert($alert = "Successfully Saved");`
    openWindow($goto = "../status.php");
}
?>