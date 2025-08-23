<?php

require_once 'connection.php';
include 'functions.php';

$issue = htmlspecialchars($_POST['issuetype']);




    $sqlAdd = "INSERT INTO issue(Issue_desc) VALUES (?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($issue));
    //msgAlert($alert = "Successfully Saved");
    //openWindow($goto = "../status.php");

?>