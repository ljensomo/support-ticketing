<?php

require_once 'connection.php';
include 'functions.php';

$code = $_POST['company'];
$company_id = $_POST['company_name'];

$query = "SELECT id,company_name,company_tin_code,email_address FROM companies WHERE id = ?;";
$stmt = $db->prepare($query);
$stmt->execute(array($company_id));
$row = $stmt->fetch(PDO::FETCH_NUM);

if($row[2] == $code){
	echo "valid";
}else{
	echo "invalid";
}

?>