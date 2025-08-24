<?php

    require_once 'connection.php';
    include 'functions.php';

    $id = $_POST['id'];
    $is_active = $_POST['action'];

    $sql = "UPDATE users SET is_active = ?, is_online = 0 WHERE id = ?";
    $qry = $db->prepare($sql);
    $qry->execute(array($is_active, $id));

    echo json_encode(array('success'=>true,'message'=>'User account status updated successfully!'));