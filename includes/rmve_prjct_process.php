<?php 
	
	require_once 'connection.php';

	$cid = $_POST['cid'];
	$pid = $_POST['pid'];

	$sql = "DELETE FROM company_proj WHERE company_id = ? AND project_id = ?";
	$qry = $db->prepare($sql);
	$qry->execute(array($cid,$pid));


	
?>