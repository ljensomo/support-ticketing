<?php

require_once 'connection.php';
include 'functions.php';

$project = htmlspecialchars($_POST['prjct']);


$sql = "SELECT COUNT(*) FROM projects WHERE proj_desc = ?";
$qry = $db->prepare($sql);
$qry->execute(array($project));

if ($row = ($qry->fetchColumn() > 0)) {
    echo "invalid";
   
} else {
    $sqlAdd = "INSERT INTO projects(proj_desc) VALUES (?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($project));

    echo "success";  
     //msgAlert($alert = "Successfully Saved");
    //openWindow($goto = "../clients.php");
}
?>