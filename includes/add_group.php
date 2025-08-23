<?php  

	require_once('connection.php');

	$groupname = $_POST['group_name'];

	$query = 'SELECT COUNT(id) FROM groups WHERE group_name = ?';
	$stmt = $db->prepare($query);
	$stmt->execute(array($groupname));

	if($row = $stmt->fetchColumn() > 0 ){
		echo 'Invalid Group Name.';
	}else{
		$query2 = 'INSERT INTO groups(group_name) VALUES(?)';
		$stmt2 = $db->prepare($query2);
		$stmt2->execute(array($groupname));

		echo 'Added!';
	}

?>