<?php 
	
	include 'connection.php';

	$id = $_POST['id'];
	$supp_id = $_POST['sid'];
	
	$sql = "UPDATE tickets SET assign_to = ?, before_status = ? WHERE ticket_id = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute(array($supp_id,5,$id));
	
	//header("location:../tickets.php");
	echo "success";

?>