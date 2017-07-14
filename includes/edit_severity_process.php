<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);

$required = array($id,$name,$description);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($error) {
	echo "none";
    //openWindow($goto = "../severity.php");
} else {
    $sql = "UPDATE severity SET severity =?, description=? WHERE severity_id =?";
    $qry = $db->prepare($sql);
    $qry->execute(array($name,$description,$id));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../severity.php");
}
?>