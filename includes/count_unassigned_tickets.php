<?php
	//require 'connection.php';
	
	$sql_count = "SELECT COUNT(ticket_id) FROM tickets WHERE before_status = 1 OR before_status = 4";
	$stmt_count = $db->prepare($sql_count);
	$stmt_count->execute();
	$row_count = $stmt_count->fetch(PDO::FETCH_NUM);
	
	$assigned_tickets = "SELECT COUNT(ticket_id) FROM tickets WHERE assign_to = ?";
	$stmt_ass_tickets = $db->prepare($assigned_tickets);
	$stmt_ass_tickets->execute(array($row[0]));
	$no_ass_tickets=$stmt_ass_tickets->fetch(PDO::FETCH_NUM);

	//echo $row_count[0];
?>