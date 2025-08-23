<?php

	require_once('connection.php');

	if(isset($_POST['request'])){

		$ticket_id = $_POST['ticket_id'];
		$sender = $_POST['sender'];
		$user_id = $_POST['user_id'];

		$validate = "SELECT 
					id,ticket_id,request_from,request_to,request_status
					FROM ticket_transfer
					WHERE ticket_id = ?
					AND request_from = ?
					AND request_status = ?";
		$stmt_validate = $db->prepare($validate);
		$stmt_validate->execute(array($ticket_id,$sender,0));
		$count = $stmt_validate->rowCount();

		if( $count > 0 ){
			echo 'Already requested.';
		}else{
			$query = "INSERT INTO ticket_transfer(ticket_id,request_from,request_to,request_status) VALUES (?,?,?,?)";
			$stmt = $db->prepare($query);
			$stmt->execute(array($ticket_id,$sender,$user_id,0));

			$query2 = "SELECT
						tt.id,
						u.fname,
						u.lname
						FROM
						ticket_transfer AS tt
						JOIN users AS u
						ON tt.request_from=u.user_id
						WHERE tt.ticket_id=? AND tt.request_from=? AND tt.request_status=?";
			$stmt2 = $db->prepare($query2);
			$stmt2->execute(array($ticket_id,$sender,0));
			$details = $stmt2->fetch(PDO::FETCH_NUM);

			$activity = $details[1] . " " . $details[2] . " is requesting to transfer ticket.";
			$table = "ticket-transfer.php?tid=" . $ticket_id;

			$query3 = "INSERT INTO notifications (activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
			$stmt3 = $db->prepare($query3);
			$stmt3->execute(array($activity,$details[0],$table,0,$user_id));
		}

	}else if(isset($_POST['reply'])){

		$ticket_id = $_POST['ticket_id'];
		$from = $_POST['from'];
		$sender = $_POST['sender'];

		$query = "UPDATE ticket_transfer SET request_status = ? WHERE ticket_id = ? AND request_from = ? AND request_to = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array(1,$ticket_id,$from,$sender));

		$query2 = "UPDATE ticket_progress SET assignto_id = ? WHERE ticket_id = ?";
		$stmt2 = $db->prepare($query2);
		$stmt2->execute(array($sender,$ticket_id));	

		$query3 = "SELECT
						user_id,fname,mname,lname
					FROM users
					WHERE user_id=?";
		$stmt3 = $db->prepare($query3);
		$stmt3->execute(array($sender));
		$user = $stmt3->fetch(PDO::FETCH_NUM);

		$activity = $user[1] . " " . $user[3] . " accepted your ticket request.";
		$link = "my-tickets.php";

		$query3 = "INSERT INTO notifications (activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
		$stmt3 = $db->prepare($query3);
		$stmt3->execute(array($activity,$user[0],$link,0,$from));		

	}

?>