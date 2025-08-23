<?php
	require_once 'connection.php';

	$tid = $_POST['tid'];
	$support = $_POST['support'];

	$query_1 = "SELECT user_id,fname,mname,lname FROM users WHERE user_id = ?";
	$stmt_1 = $db->prepare($query_1);
	$stmt_1->execute(array($support));
	$name = $stmt_1->fetch(PDO::FETCH_NUM);

	$query_2 = "SELECT ticket_id,
						reporter_id,
						u.email
				FROM tickets AS t
				JOIN users AS u
				ON t.reporter_id=u.user_id
				WHERE t.ticket_id = ?";
	$stmt_2 = $db->prepare($query_2);
	$stmt_2->execute(array($tid));
	$notif_to = $stmt_2->fetch(PDO::FETCH_NUM);

	if(isset($_POST['svrty'])){

		$stts = $_POST['stts'];
		$svrty = $_POST['svrty'];

		$query = "UPDATE ticket_progress SET before_status = ?, severity_id=? WHERE ticket_id=?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($stts,$svrty,$tid));

		$activity = '<strong>' . $name[1] . ' ' . $name[3] . '</strong>' . ' updated your ticket.';
		$link = 'client-ticket-details.php?tid=' . $tid;

		$query_3 = "INSERT INTO notifications (activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
		$stmt_3 = $db->prepare($query_3);
		$stmt_3->execute(array($activity,$notif_to[0],$link,0,$notif_to[1]));

				include '../mailer/PHPMailerAutoload.php';
				// $name = $_POST['fullname'];
				$email = $notif_to[2];
				$mailer = new PHPMailer();
				$mailer->IsSMTP();
				$mailer->Host = 'smtp.gmail.com:465';
				$mailer->SMTPAuth = TRUE;
				$mailer->Port = 465;
				$mailer->mailer ="smtp";
				$mailer->SMTPSecure = 'ssl';
				$mailer->IsHTML(true);
				$mailer->SMTPOptions = array('ssl' => array(
										'verify_peer' => false,
										'verify_peer_name' => false,
										'allow_self_signed' => true)
										);
				$mailer->Username = 'ticketing.system189@gmail.com';
				$mailer->Password = 'samplepassword123';
				$mailer->From = 'ticketing@gmail.com';
				$mailer->FromName = 'Fortis Technologies Support';
				$mailer->Body = $activity;
				$mailer->Subject = 'Fortis Support Ticketing ';
				$mailer->AddAddress($email);
				if(!$mailer->send()){
				// echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mailer->ErrorInfo;
				} else {
				// echo 'Successfully sent';
					echo "success";
				}		



	}else if(isset($_POST['resolution_id'])){

		$resolution = $_POST['resolution_id'];
		$status = $_POST['status_id'];
		$date = date('Y-m-d H:i:s');

		$query = "UPDATE ticket_progress SET before_status = ?, resolution_id=?, date_resolved=? WHERE ticket_id=?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($status,$resolution,$date,$tid));

		$activity = '<strong>' . $name[1] . ' ' . $name[3] . '</strong>' . ' closed your ticket.';
		$link = 'client-view-ticket-details.php?tid=' . $tid;

		$query_3 = "INSERT INTO notifications (activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
		$stmt_3 = $db->prepare($query_3);
		$stmt_3->execute(array($activity,$notif_to[0],$link,0,$notif_to[1]));		


				include '../mailer/PHPMailerAutoload.php';
				// $name = $_POST['fullname'];
				$email = $notif_to[2];
				$mailer = new PHPMailer();
				$mailer->IsSMTP();
				$mailer->Host = 'smtp.gmail.com:465';
				$mailer->SMTPAuth = TRUE;
				$mailer->Port = 465;
				$mailer->mailer ="smtp";
				$mailer->SMTPSecure = 'ssl';
				$mailer->IsHTML(true);
				$mailer->SMTPOptions = array('ssl' => array(
										'verify_peer' => false,
										'verify_peer_name' => false,
										'allow_self_signed' => true)
										);
				$mailer->Username = 'ticketing.system189@gmail.com';
				$mailer->Password = 'samplepassword123';
				$mailer->From = 'ticketing@gmail.com';
				$mailer->FromName = 'Fortis Technologies Support';
				$mailer->Body = $activity;
				$mailer->Subject = 'Fortis Support Ticketing ';
				$mailer->AddAddress($email);
				if(!$mailer->send()){
				// echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mailer->ErrorInfo;
				} else {
				// echo 'Successfully sent';
					echo "success";
				}

	}


?>