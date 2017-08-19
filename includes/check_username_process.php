<?php
	
	include 'connection.php';

	$username = $_POST['uname'];
	
	$sql_loader = "SELECT username FROM user_accounts WHERE username = ?";
	$stmt = $db->prepare($sql_loader);
	$stmt->execute(array($username));
	$row=$stmt->fetch(PDO::FETCH_NUM);
	
	if($row[0] == ""){
		echo "proceed";
	}else{
		echo "existing";
	}

?>
