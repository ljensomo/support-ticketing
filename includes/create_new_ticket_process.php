<?php

require_once 'connection.php';
include 'functions.php';


$reporter = $_POST['id'];
$project = htmlspecialchars($_POST['project']);
$trans_no = htmlspecialchars($_POST['trans_no']);
$type = htmlspecialchars($_POST['type']);
$subject = htmlspecialchars($_POST['subject']);
$desc = htmlspecialchars($_POST['desc']);
$file = $_FILES['attachment']['name'];
$before_status = 1;

$required = array($project,$trans_no,$reporter);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sel_tckt = "SELECT
			a.ticket_id,
			d.proj_desc,
			a.transaction_id,
			a.reporter_id,
			a.date_created,
			b.before_status,
			b.after_status,
			b.assignto_id,
			b.assign_from_id,
			b.severity_id,
			b.resolution_id,
			b.date_resolved,
			b.date_taken,
			c.problem_subject,
			c.problem_desc,
			c.attachment,
			c.issue_status,
			e.status_desc,
			d.proj_id
			
			FROM tickets AS a
			JOIN ticket_progress AS b 
			ON a.ticket_id=b.ticket_id
			JOIN ticket_details AS c
			ON a.ticket_id=c.ticket_id
			JOIN projects AS d 
			ON a.project=d.proj_id
			JOIN STATUS AS e
			ON b.before_status=e.status_id
			WHERE d.proj_id=? AND a.transaction_id=? AND c.problem_subject=? AND c.problem_desc=? AND a.reporter_id=?";
$tckt_res = $db->prepare($sel_tckt);
$tckt_res->execute(array($project,$trans_no,$subject,$desc,$reporter));
$tckt_row = $tckt_res->fetch(PDO::FETCH_NUM);
if($tckt_row[0]>=1){
	    msgAlert($alert = "Issue was already created!");
	    openWindow($goto = "../client_create_ticket.php");
}else{
		if ($error) {
			echo "error";
		   // openWindow($goto = "../client.php");
		} else {
		    $sqlAdd = "INSERT INTO tickets(project,transaction_id,reporter_id) VALUES(?,?,?);";
		    $qryAdd = $db->prepare($sqlAdd);
		    $qryAdd->execute(array($project,$trans_no,$reporter));
		    
		    $sel_ticket = "SELECT ticket_id FROM tickets WHERE project = ? AND transaction_id = ? AND reporter_id = ?";
		    $stmt_ticket = $db->prepare($sel_ticket);
		    $stmt_ticket->execute(array($project,$trans_no,$reporter));
		    $row_ticket = $stmt_ticket->fetch(PDO::FETCH_NUM);
			
			$extension = end(explode(".",$file));
			$filename = substr($subject,0,6). "" . $row_ticket[0]. "." . $extension;
			if ($file) {
		
		    if (!$_FILES['attachment']['error']) {
		
		        $currentdir = getcwd();
		        $target = $currentdir . '../../attachment/' . $filename;
		
		
		        move_uploaded_file($_FILES['attachment']['tmp_name'], $target);
		
		    } else {
		        msgAlert($alert = "Invalid");
		    }
		}
		
		    
		    $add_progrss = "INSERT INTO ticket_progress(ticket_id,before_status) VALUES(?,?)";
		    $stmt_prog = $db->prepare($add_progrss);
		    $stmt_prog->execute(array($row_ticket[0],1));
		    
		    $add_dtails = "INSERT INTO ticket_details(ticket_id,problem_subject,problem_desc,attachment,issue_status)VALUES(?,?,?,?,?)";
		    $stmt_dtails = $db->prepare($add_dtails);
		    $stmt_dtails->execute(array($row_ticket[0],$subject,$desc,$filename,1));
		         
		    //echo "success";
		    
		    msgAlert($alert = "Issue sent successfully!");
		    openWindow($goto = "../client_all_tickets.php");
		    //header("location:../client_all_tickets.php");
		}
}		
?>