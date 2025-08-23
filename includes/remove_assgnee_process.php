<?php
include 'connection.php';

	$id = $_POST['id'];
	
	$sql = "DELETE FROM company_proj WHERE id = ?";
	$res = $db->prepare($sql);
	$res->execute(array($id));
?>