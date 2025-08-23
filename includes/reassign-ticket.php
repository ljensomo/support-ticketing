<?php  

	require_once('connection.php');

	if(isset($_POST['support_id'])){

		$ticket_id = $_POST['ticket_id'];
		$support_id = $_POST['support_id'];
		$user_id = $_POST['user_id'];

		$query1 = "SELECT 
						t.ticket_id,
						u.user_id,
						u.fname,
						u.mname,
						u.lname
					FROM ticket_progress AS t 
					JOIN users AS u
					ON t.assignto_id = u.user_id
					WHERE ticket_id = ?";
		$stmt1 = $db->prepare($query1);
		$stmt1->execute(array($ticket_id));
		$row = $stmt1->fetch(PDO::FETCH_NUM);

		$query = "UPDATE ticket_progress SET assignto_id = ? WHERE ticket_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($support_id,$ticket_id));

		$query2 = "SELECT
						user_id,
						fname,
						mname,
						lname
					FROM users 
					WHERE user_id = ?";
		$stmt2 = $db->prepare($query2);
		$stmt2->execute(array($user_id));
		$sender = $stmt2->fetch(PDO::FETCH_NUM);

		$activity2 = 'Your ticket was re-assigned.';
		$link2 = 'view-ticket.php?tid=' . $ticket_id;	

		$query4 = "INSERT INTO notifications (activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
		$stmt4 = $db->prepare($query4);
		$stmt4->execute(array($activity2,$ticket_id,$link2,0,$row[0]));

		$activity = '<strong>' . $sender[1] . ' ' . $sender[3] . '</strong>' . ' re-assigned a ticket to you.';
		$link = 'ticket-details.php?tid=' . $ticket_id;	

		$query3 = "INSERT INTO notifications (activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
		$stmt3 = $db->prepare($query3);
		$stmt3->execute(array($activity,$ticket_id,$link,0,$support_id));

		$query4 = "SELECT user_id,email FROM users WHERE user_id = ?";
		$stmt4 = $db->prepare($query4);
		$stmt4->execute(array($support_id));
		$user_email = $stmt4->fetch(PDO::FETCH_NUM);

				include '../mailer/PHPMailerAutoload.php';
				// $name = $_POST['fullname'];
				$email = $user_email[1];
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

	} elseif ( isset($_POST['assign']) ) {

		$ticket_id = $_POST['ticket_id'];
		$support_id = $_POST['support'];
		$logged_user = $_POST['logged_user'];

		$query = "UPDATE ticket_progress SET assignto_id = ?, before_status = ? WHERE ticket_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($support_id,5,$ticket_id));

		$query4 = "SELECT user_id,email FROM users WHERE user_id = ?";
		$stmt4 = $db->prepare($query4);
		$stmt4->execute(array($support_id));
		$user_email = $stmt4->fetch(PDO::FETCH_NUM);

		$query_1 = "SELECT user_id,fname,mname,lname FROM users WHERE user_id = ?";
		$stmt_1 = $db->prepare($query_1);
		$stmt_1->execute(array($logged_user));
		$name = $stmt_1->fetch(PDO::FETCH_NUM);

		$activity = '<strong>' . $name[1] . ' ' . $name[3] . '</strong>' . ' assigned a ticket to you.';
		$link = 'ticket-details.php?tid=' . $ticket_id;

		$query_2 = "INSERT INTO notifications(activity,activity_id,notif_table,isviewed,notif_to) VALUES (?,?,?,?,?)";
		$stmt_2 = $db->prepare($query_2);
		$stmt_2->execute(array($activity,$ticket_id,$link,0,$support_id));


				include '../mailer/PHPMailerAutoload.php';
				// $name = $_POST['fullname'];
				$email = $user_email[1];
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
