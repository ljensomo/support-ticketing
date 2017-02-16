<?php

require_once 'connection.php';
include 'functions.php';

$id = $_GET['id'];

if ($id != null) {
    $sql = "DELETE FROM resolution where resolution_id=?";
    $qry = $db->prepare($sql);
    $qry->execute(array($id));
    openWindow($goto = "../resolution.php");
}
?>