<?php 
	require_once 'connection.php';

	$tid = $_POST['id'];

	$sql = "UPDATE ticket_progress SET before_status = ?, assignto_id=?, resolution_id = ? WHERE ticket_id = ?";
	$res = $db->prepare($sql);
	$res->execute(array(4,'',0,$tid));

?>