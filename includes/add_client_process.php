<?php

require_once './connection.php';
include './hashgenerator.php';
include './functions.php';

$company_name = htmlspecialchars($_POST['name']);
$contact = htmlspecialchars($_POST['contact']);
$email = htmlspecialchars($_POST['email']);
$priority = $_POST['priority'];

$sql_validate = "SELECT id FROM companies WHERE company_name = ?";
$res_validate = $db->prepare($sql_validate);
$res_validate->execute(array($company_name));

if ($row_validate = ($res_validate->rowCount() > 0)) {
    
    echo json_encode(array('success'=>false,'message'=>'Company name already added!'));
} else {
    $sqlAdd = "INSERT INTO companies(company_name,contact_no,email,priority_level_id)VALUES(?,?,?,?)";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($company_name,$contact,$email,$priority));
	
	echo json_encode(array('success'=>true,'message'=>'Company added successfully!'));

}
