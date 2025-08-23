<?php 

	require_once('connection.php');

	$attachment = $_FILES['file']['name'];
	$tid = $_POST['attachment_tid'];

	if ($attachment) {
	
	    if (!$_FILES['file']['error']) {
	
	        $currentdir = getcwd();
	        $target = $currentdir . '../../attachment/' . $attachment;
	
	
	       	   move_uploaded_file($_FILES['file']['tmp_name'], $target);
		      
		      $add_dtails = "INSERT INTO ticket_details(ticket_id,attachment)VALUES(?,?)";
		      $stmt_dtails = $db->prepare($add_dtails);
		      $stmt_dtails->execute(array($tid,$attachment));

		      header('location: ../client-ticket-details.php?tid=' . $tid . '');
	
	    } else {
	          
	          echo 'Error Uploading attachment.';

	    }
	}

?>