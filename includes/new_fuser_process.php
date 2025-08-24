<?php

    require_once './connection.php';
    include './hashgenerator.php';
    include './functions.php';

    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact_no']);
    $username = htmlspecialchars($_POST['username']);
    $role = $_POST['role'];
    $options = array('cost' => 11);
    $hashed_password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT, $options));
    $token = $hasher->generateToken($username);


    $sqlUser = "SELECT COUNT(id) FROM users WHERE username=?";
    $resUser = $db->prepare($sqlUser);
    $resUser->execute(array($username));

    if ($rowUser = ($resUser->fetchColumn() > 0)) {
        echo json_encode(array('success'=>false, 'message'=>'Username already exists! Please use another username.'));
    } else {
        $sql = "INSERT INTO users(fname,mname,lname,contact_no,email,username,password)VALUES(?,?,?,?,?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute(array($fname,$mname, $lname, $contact, $email, $username, $hashed_password));
        $lastId = $db->lastInsertId();
            
        $sql = "INSERT INTO user_roles (user_id,role_id) VALUES (?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute(array($lastId, $role));

        echo json_encode(array('success'=>true, 'message'=>'User added successfully.'));
    }
?>