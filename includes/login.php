<?php
    session_start();
    include 'connection.php';

    if(!isset($_POST['username']) || !isset($_POST['password'])) {
        echo json_encode(array('success' => false, 'message' => 'Invalid login access.'));
    }

    $user = $_POST['username'];
    $pw = $_POST['password'];

    // $sql = "SELECT 
    // 	a.user_id,	
    // 	a.fname,
    // 	a.mname,
    // 	a.lname,
    // 	a.company_id,
    // 	a.cnum,
    // 	a.email,
    // 	a.is_active,
    // 	a.uname,
    // 	a.pass,
    // 	d.user_desc,
    // 	d.userlevel_id
        
    // FROM users AS a JOIN users_roles AS c 
    // ON a.user_id=c.user_id
    // JOIN roles AS d 
    // ON c.user_role=d.userlevel_id WHERE uname = BINARY ?";

    $sql = 'SELECT * FROM users WHERE username = BINARY ?';

    $res = $db->prepare($sql);
    $res->execute(array($user));
    $row = $res->fetch(PDO::FETCH_NUM);

    if ($res->rowCount() == 0) {
        echo json_encode(array('success' => false, 'message' => 'Invalid login credentials.'));
    } else if ($row[7] == 0) {
        echo json_encode(array('success' => false, 'message' => 'User account is not activated.'));
    } else if (!password_verify($pw, $row[9])) {
        $_SESSION['admin'] = $row[8];
        // if($row[11]==4 || $row[11]==5){
        //      //openWindow($goto = "../homebanner.php");
        // 	 echo "client";
        // } else{
        //      echo "admin";
        // //openWindow($goto = "../index.php");
        // }

        $query = "UPDATE users SET is_online = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute(array(1,$row[0]));
        /*if ($row['userlevel_id'] == '1') {
            $_SESSION['admin'] = $row['username'];
            msgAlert($alert = "Login Successful");
            openWindow($goto = "../index.php");
        } else {
            msgAlert($alert = "Access Denied");
            openWindow($goto = "../login.html");
        }*/

        echo json_encode(array('success' => true, 'message' => 'Login successful.'));
    } else if (!password_verify($pw, $row[9])) {
        echo json_encode(array('success' => false, 'message' => 'The password you entered is incorrect. Please try again.'));
    }
?>
