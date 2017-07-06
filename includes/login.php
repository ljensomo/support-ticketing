
<?php
session_start();
include 'connection.php';
include 'functions.php';

$user = $_POST['user'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM user_info WHERE username = ?";
$res = $db->prepare($sql);
$res->execute(array($user));
$row = $res->fetch(PDO::FETCH_ASSOC);

$required = array($user, $pw);
$error = false;
foreach ($required as $fields) {
    if (empty($fields))
 {
        $error = true;
    }
}

if ($error) {

    openWindow($goto = "../login.html");
} else if ($row == "") {
    echo "none";
    //msgAlert($alert = "The username and password you entered did not match our records. Please double-check and try again.");
    //openWindow($goto = "../login.html");
} else if ($row['is_active'] == 0) {
	echo "not active";
    //msgAlert($alert = "The user you entered is not yet activated. Please contact your administrator to activate your account.");
    //openWindow($goto = "../login.html");
} else if (password_verify($pw, $row['password'])) {
    $_SESSION['admin'] = $row['username'];
    if($row['user_desc']== "Client"){
         //openWindow($goto = "../homebanner.php");
		 echo "client";
    } else{
	     echo "admin";
    //openWindow($goto = "../index.php");
}

    /*if ($row['userlevel_id'] == '1') {
        $_SESSION['admin'] = $row['username'];
        msgAlert($alert = "Login Successful");
        openWindow($goto = "../index.php");
    } else {
        msgAlert($alert = "Access Denied");
        openWindow($goto = "../login.html");
    }*/
} else if (!password_verify($pw, $row['password'])) {
    echo "incorrect";
    //msgAlert($alert = "The password you entered is incorrect. Please try again");
    //openWindow($goto = "../login.html");
}
?>
