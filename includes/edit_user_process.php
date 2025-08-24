<?php

    require_once 'connection.php';
    include 'functions.php';

    $id = $_POST['id'];
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $lname = htmlspecialchars($_POST['lname']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);


    $sql = "UPDATE users SET fname = ?, mname = ?, lname = ?, contact_no = ?, email = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute(array($fname,$mname,$lname,$contact,$email,$id));

    echo json_encode(array("success" => true, "message" => "User updated successfully."));
?>