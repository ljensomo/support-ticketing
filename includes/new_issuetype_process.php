<?php

require_once 'connection.php';
include 'functions.php';

$issue = htmlspecialchars($_POST['issue']);

$sql = "SELECT COUNT(*) FROM issue WHERE Issue_desc =?";
$qry = $db->prepare($sql);
$qry->execute(array($issue));

if ($row = ($qry->fetchColumn() > 0)) {
    echo "exist";
    //openWindow($goto = "../add_status.php");
} else {
    $sqlAdd = "INSERT INTO issue(Issue_desc) VALUES (?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($issue));
    echo "success";
    //msgAlert($alert = "Successfully Saved");
    //openWindow($goto = "../status.php");
}
?>