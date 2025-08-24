<?php

session_start();

include 'connection.php';
include 'functions.php';

    $query = "UPDATE users SET is_online = ? WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute(array(0,$_SESSION['user']['id']));

logout();
?>