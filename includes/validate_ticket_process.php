<?php 

require 'connection.php';
require 'functions.php';

$id = $_POST['id'];

$sql_loader = "SELECT * FROM tickets WHERE ticket_id = ?";
$stmt = $db->prepare($sql_loader);
$stmt->execute(array($id));
$row = $stmt->fetch(PDO::FETCH_NUM);

if($row[10] == ""){
	echo "get";
}else{
	echo "taken";
}


?>