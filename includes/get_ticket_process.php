<?php 
	
	include 'connection.php';

	$id = $_POST['id'];
	$supp_id = $_POST['sid'];
	
	$sql = "UPDATE ticket_progress SET assignto_id = ?, before_status = ? WHERE ticket_id = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute(array($supp_id,5,$id));
	
	//header("location:../tickets.php");
	echo $supp_id ;

?>