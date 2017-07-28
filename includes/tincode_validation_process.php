<?php

require_once 'connection.php';
include 'functions.php';

$code = $_POST['company'];

$query = "SELECT id,company_name,company_tin_code,email_address FROM companies WHERE company_tin_code = ?;";
$stmt = $db->prepare($query);
$stmt->execute(array($code));

if($row= ($stmt->fetchColumn() > 0)){
	echo "valid";
}else{
	echo "invalid";
}

?>