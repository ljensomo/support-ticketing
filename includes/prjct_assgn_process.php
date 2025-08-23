<?php 

	include 'connection.php';
	include 'functions.php';

	$user_id = $_POST['user_id'];
	$pid = $_POST['pid'];
	$cid = $_POST['cid'];
	$logged_id = $_POST['logged_id'];
	
	$vldt_assgnee = "SELECT COUNT(id) FROM company_proj WHERE company_id = ? AND project_id = ? AND assignee_id = ?";
	$vldt_res = $db->prepare($vldt_assgnee);
	$vldt_res->execute(array($cid,$pid,$user_id));
	$vldt_row = $vldt_res->fetch(PDO::FETCH_NUM);
	
	if($vldt_row[0]>0){

		echo "assigned";

	}else{

		$assgn_user = "INSERT INTO company_proj(company_id,project_id,assignee_id) VALUES(?,?,?)";
		$res_assgn = $db->prepare($assgn_user);
		$res_assgn->execute(array($cid,$pid,$user_id));
		
		$query = "SELECT user_id,fname,mname,lname FROM users WHERE user_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($logged_id));
		$name = $stmt->fetch(PDO::FETCH_NUM);

		$activity = $name[1] . ' ' . $name[3] . ' assigned you in a project.';
		$link = '#';

		$query_1 = "INSERT INTO notifications (activity, activity_id, notif_table, isviewed, notif_to) VALUES (?,?,?,?,?)";
		$stmt_1 = $db->prepare($query_1);
		$stmt_1->execute(array($activity, $pid, $link, 0, $user_id));

		echo "success";

	}
?>