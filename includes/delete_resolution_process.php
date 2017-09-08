<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['resolution_id'];

if ($id != null) {
    $sql = "DELETE FROM resolution where resolution_id=?";
    $qry = $db->prepare($sql);
    $qry->execute(array($id));
    openWindow($goto = "../resolution.php");
}
?>