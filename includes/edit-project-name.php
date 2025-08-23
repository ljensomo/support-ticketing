<?php

	require_once('connection.php');

	if(isset($_POST['pid'])){
		$pid = $_POST['pid'];
		$pname = $_POST['pname'];

		$query = "UPDATE projects SET proj_desc = ? WHERE proj_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($pname,$pid));

		echo 'Successfully edited.';
	}

?>