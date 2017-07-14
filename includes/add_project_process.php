<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$project_description = htmlspecialchars($_POST['name']);

$required = array($project_description,$id);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sql = "SELECT COUNT(*) FROM company_proj WHERE project_desc =?";
$qry = $db->prepare($sql);
$qry->execute(array($project_description));

if ($error) {

    echo "null";
} else if ($row = ($qry->fetchColumn() > 0)) {
    echo "Invalid";
   
} else {
    $sqlAdd = "INSERT INTO company_proj(company_id,project_desc) VALUES (?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($id,$project_description));

    echo "success";  
     //msgAlert($alert = "Successfully Saved");
    //openWindow($goto = "../clients.php");
}
?>