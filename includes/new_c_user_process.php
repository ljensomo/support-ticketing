<?php
    require_once './connection.php';
    include './hashgenerator.php';

    header('Content-Type: application/json');

    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $username = htmlspecialchars($_POST['username']);
    $role = 4;
    $options = array('cost' => 11);
    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT, $options));
    $token = $hasher->generateToken($username);
    $cid = $_POST['company_id'];

    $sqlUser = "SELECT id FROM users WHERE username = ?";
    $resUser = $db->prepare($sqlUser);
    $resUser->execute(array($username));

    if ($rowUser = ($resUser->rowCount() > 0)) {
        echo json_encode(['success' => false, 'message' => 'Username already exists. Please choose another username.']);
    } else {
        $sql = "INSERT INTO users (fname,mname,lname,contact_no,email,username,password) VALUES (?,?,?,?,?,?,?) ";
        $stmt = $db->prepare($sql);
        $stmt->execute(array($fname,$mname, $lname, $contact, $email, $username, $password));

        $user_id = $db->lastInsertId();
            
        $sql2 = "INSERT INTO user_roles (user_id,role_id) VALUES (?,?)";
        $stmt2 = $db->prepare($sql2);
        $stmt2->execute(array($user_id, $role));
        
        $sql3 = "INSERT INTO company_users (company_id,user_id) VALUES (?,?)";
        $stmt3 = $db->prepare($sql3);
        $stmt3->execute(array($cid, $user_id));

        echo json_encode(['success' => true, 'message' => 'New user has been added.']);
    }