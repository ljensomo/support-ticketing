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
    //openWindow($goto = "../status.php");
} else {
    $sql = "UPDATE status SET status_desc =?, description=? WHERE status_id =?";
    $qry = $db->prepare($sql);
    $qry->execute(array($name,$description,$id));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../status.php");
}
?>