<?php 

	require_once 'connection.php';

	if(isset($_POST['support'])){

		$comment = htmlspecialchars($_POST['msg']);
		$tckt_id = $_POST['tckt_id'];
		$user_id = $_POST['user_id'];
		
		$add_cmmnt = "INSERT INTO comments(ticket_id,userid,comment_desc) VALUES(?,?,?)";
		$res = $db->prepare($add_cmmnt);
		$res->execute(array($tckt_id,$user_id,$comment));

		$query = "SELECT user_id,fname,mname,lname FROM users WHERE user_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($user_id));
		$name = $stmt->fetch(PDO::FETCH_NUM);	

		$query_2 = "SELECT ticket_id,reporter_id,u.email
					FROM tickets AS t
					JOIN users AS u
					ON t.reporter_id=u.user_id
					WHERE t.ticket_id = ?";
		$stmt_2 = $db->prepare($query_2);
		$stmt_2->execute(array($tckt_id));
		$notif_to = $stmt_2->fetch(PDO::FETCH_NUM);

		$activity = '<strong>' . $name[1] . ' ' . $name[3] . '</strong>' . ' added a comment on your ticket.';
		$link = 'client-ticket-details.php?tid=' . $tckt_id;

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

	}else if(isset($_POST['client'])){
		$comment = htmlspecialchars($_POST['msg']);
		$tckt_id = $_POST['tckt_id'];
		$user_id = $_POST['user_id'];
		
		$add_cmmnt = "INSERT INTO comments(ticket_id,userid,comment_desc) VALUES(?,?,?)";
		$res = $db->prepare($add_cmmnt);
		$res->execute(array($tckt_id,$user_id,$comment));

		$query = "SELECT user_id,fname,mname,lname FROM users WHERE user_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($user_id));
		$name = $stmt->fetch(PDO::FETCH_NUM);	

		$query_2 = "SELECT ticket_id,assignto_id FROM ticket_progress WHERE ticket_id = ?";
		$stmt_2 = $db->prepare($query_2);
		$stmt_2->execute(array($tckt_id));
		$notif_to = $stmt_2->fetch(PDO::FETCH_NUM);

		$activity = '<strong>' . ' ' . $name[3] . '</strong>' . ' added a comment on your ticket.';
		$link = 'ticket-details.php?tid=' . $tckt_id;

		$query_3 = "INSERT INTO notifications (activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
		$stmt_3 = $db->prepare($query_3);
		$stmt_3->execute(array($activity,$notif_to[0],$link,0,$notif_to[1]));
	}
	



?>

