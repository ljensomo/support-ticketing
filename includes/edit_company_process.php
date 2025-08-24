<?php
	require_once 'connection.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$priority = $_POST['priority'];

	$vldt_qry = "SELECT id FROM companies WHERE company_name = ? AND id <> ?";
	$qry_res = $db->prepare($vldt_qry);
	$qry_res->execute(array($name,$id));

	if($qry_res->rowCount() > 0){
		echo json_encode(array('success' => false, 'message' => 'Invalid name, company name already exists.'));
	}else{
		$sql = "UPDATE companies SET company_name = ?, contact_no = ?, email = ?, priority_level_id = ? WHERE id = ?";
		$res = $db->prepare($sql);
		$res->execute(array($name,$contact,$email,$priority,$id));
		echo json_encode(array('success' => true, 'message' => 'Company details updated successfully.'));
	}