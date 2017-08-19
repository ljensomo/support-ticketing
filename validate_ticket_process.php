<?php 

require 'function.php';
require 'connection.php';

$id = $_POST['id'];

$sql = "SELECT * FROM tickets WHERE ticket_id = ?";
$stmt = $db->prepare($sql);
$stmt->execute(array($id));
$row = $stmt->fetch(PDO::FETCH_NUM);

if($row[10] == ""){
	echo "get";
}else{
	echo "taken";
}

?>