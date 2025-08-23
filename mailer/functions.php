<?php 

	function email_send() {
		if(isset($_POST['send'])){
			include 'PHPMailerAutoload.php';
			$name = $_POST['fullname'];
			$email = $_POST['email'];
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
			$mailer->FromName = 'Fortis Techologies Support Ticketing';
			$mailer->Body = 'New Ticket/ Ticket Updates.';
			$mailer->Subject = 'Fortis Support Ticketing ';
			$mailer->AddAddress($email);
			if(!$mailer->send()){
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mailer->ErrorInfo;
			} else {
				echo 'Successfully sent';
			}		
		}
	}















 ?>