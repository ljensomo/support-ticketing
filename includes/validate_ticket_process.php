<?php 

	require 'connection.php';
	require 'functions.php';

$id = $_POST['id'];

$sql_loader = "SELECT COUNT(a.ticket_id)
FROM tickets AS a
JOIN ticket_progress AS b 
ON a.ticket_id=b.ticket_id
WHERE b.before_status IN (1,4)
AND a.ticket_id = ?";
$stmt = $db->prepare($sql_loader);
$stmt->execute(array($id));
$row = $stmt->fetch(PDO::FETCH_NUM);

if($row[0]==1){
	echo "get";
}else{
	echo "taken";
}

?>