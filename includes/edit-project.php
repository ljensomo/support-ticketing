<?php
	require_once('connection.php');

		$id = $_POST['project_id'];
		$name = $_POST['project_name'];
		$desc = $_POST['description'];

		$query = "UPDATE projects SET project_name = ?, description = ? WHERE id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($name,$desc,$id));

		echo json_encode(['success' => true, 'message' => 'Project updated successfully!']);