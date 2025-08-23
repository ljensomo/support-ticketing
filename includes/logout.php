<?php

session_start();

include 'connection.php';
include 'functions.php';

    $query = "UPDATE users SET line_status = ? WHERE uname = ?";
    $stmt = $db->prepare($query);
    $stmt->execute(array(0,$_SESSION['admin']));

logout();
?>