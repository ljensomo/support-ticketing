<?php
    session_start();
    include 'connection.php';

    if(!isset($_POST['username']) || !isset($_POST['password'])) {
        echo json_encode(array('success' => false, 'message' => 'Invalid login access.'));
    }

    $user = $_POST['username'];
    $pw = $_POST['password'];

    $sql = "SELECT 
                u.id,
                CONCAT(u.fname, ' ', u.lname) AS full_name,
                u.username,
                u.password,
                u.avatar,
                r.role_desc,
                ur.role_id,
                u.is_active
            FROM users AS u
            JOIN user_roles AS ur ON u.id=ur.user_id
            JOIN roles AS r ON ur.role_id=r.id
            WHERE BINARY username = ?";

    $res = $db->prepare($sql);
    $res->execute(array($user));
    $row = $res->fetch(PDO::FETCH_ASSOC);

    if ($res->rowCount() == 0) {
        echo json_encode(array('success' => false, 'message' => 'Invalid login credentials.'));
    } else if ($row['is_active'] == 0) {
        echo json_encode(array('success' => false, 'message' => 'User account is not activated.'));
    } else if (!password_verify($pw, $row['password'])) {
        $_SESSION['user']['id'] = $row['id'];
        $_SESSION['user']['full_name'] = $row['full_name'];
        $_SESSION['user']['username'] = $row['username'];
        $_SESSION['user']['role'] = $row['role_desc'];
        $_SESSION['user']['avatar'] = $row['avatar'];
        $_SESSION['user']['role_id'] = $row['role_id'];

        $query = "UPDATE users SET is_online = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute(array(1, $row['id']));

        echo json_encode(array('success' => true, 'message' => 'Login successful.'));
    } else {
        echo json_encode(array('success' => false, 'message' => 'The password you entered is incorrect. Please try again.'));
    }
?>
