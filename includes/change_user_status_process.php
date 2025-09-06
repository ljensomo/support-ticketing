<?php
    require_once 'connection.php';
    include 'functions.php';
    
    header('Content-Type: application/json');

    $user_id = $_POST['user_id'];
    $status = $_POST['status'];

    $sql = "UPDATE users SET is_active = ? WHERE id = ?";
    $qry = $db->prepare($sql);
    $qry->execute(array($status, $user_id));

    echo json_encode(['success' => true, 'message' => 'User status has been changed.']);