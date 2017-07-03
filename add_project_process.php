<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$project_description = $_POST['project_desc'];

$required = array($project_description,id);
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

    openWindow($goto = "../add_project.php");
} else if ($row = ($qry->fetchColumn() > 0)) {
    msgAlert($alert = "Invalid");
    openWindow($goto = "../add_project.php");
} else {
    $sqlAdd = "INSERT INTO company_proj(company_id,project_desc) VALUES (?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($id,$project_desc));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../add_project.php");
}
?>