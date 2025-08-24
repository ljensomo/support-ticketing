<?php
	require_once 'connection.php';

	$cid = $_POST['company'];
	$prjct_id = $_POST['project'];
	$date_implemented = $_POST['date_implemented'];

	$sql_vldt = "SELECT id FROM company_projects WHERE company_id = ? AND project_id = ?";
	$vldt_res = $db->prepare($sql_vldt);
	$vldt_res->execute(array($cid,$prjct_id));
	if($vldt_res->rowCount() > 0){
		echo json_encode(array("success" => false, "message" => "The selected project is already added."));
	}else{
		$sql = "INSERT INTO company_projects (company_id, project_id, date_implemented) VALUES (?,?,?)";
		$qry = $db->prepare($sql);
		$qry->execute(array($cid, $prjct_id, $date_implemented));

		echo json_encode(array("success" => true, "message" => "Project added successfully."));
	}
