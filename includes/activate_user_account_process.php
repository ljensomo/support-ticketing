<?php

require_once 'connection.php';
include 'functions.php';

$id = $_GET['cid'];


$required = array($id);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($error) {
    echo "error";
    //openWindow($goto = "../users.php");
} else {
    $sql = "UPDATE users SET is_active = ? WHERE user_id =?";
    $qry = $db->prepare($sql);
    $qry->execute(array(1,$id));
    
    //msgAlert($alert = "Successfully Activated");
    openWindow($goto = "../login.html");
}
?>