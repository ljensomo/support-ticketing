<?php 
	
	require_once 'connection.php';

	$id = $_POST['id'];

	$sql = "DELETE FROM company_projects WHERE id = ?";
	$qry = $db->prepare($sql);
	$qry->execute(array($id));

	echo json_encode(array("success" => true, "message" => "Project removed successfully."));
