<?php

require_once 'connection.php';
include 'functions.php';

$id = $_GET['id'];

if ($id != null) {
    $sql = "DELETE FROM severity where severity_id=?";
    $qry = $db->prepare($sql);
    $qry->execute(array($id));
    openWindow($goto = "../severity.php");
}
?>