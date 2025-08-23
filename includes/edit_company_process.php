<?php
	require_once 'connection.php';

	$id = $_POST['id'];
	$cname = $_POST['cname'];
	$code = $_POST['code'];
	$email = $_POST['email'];

	$vldt_qry = "SELECT COUNT(id) FROM companies WHERE company_name = ? AND id != ?";
	$qry_res = $db->prepare($vldt_qry);
	$qry_res->execute(array($cname,$id));
	$qry_row = $qry_res->fetch(PDO::FETCH_NUM);

	if($qry_row[0]>0){
		echo "invalid";
	}else{
		$sql = "UPDATE companies SET company_name=?,company_tin_code=?,email_address=? WHERE id=?";
		$res = $db->prepare($sql);
		$res->execute(array($cname,$code,$email,$id));
		echo "success";
	}

?>