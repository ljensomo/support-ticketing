<?php  

	header("Content-Type: application/json");

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "ticketing";

	try{
		$con = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);
	} catch (PDOException $e){
		throw new Exception($e->getMessage());
	}

	$query = "SELECT
					COUNT(t.ticket_id) AS numbers,
					DATE_FORMAT(date_created,'%M %Y') AS date_created
				FROM tickets AS t
				JOIN ticket_progress AS tp
				ON t.ticket_id=tp.ticket_id
				GROUP BY DATE_FORMAT(date_created,'%M %Y')";
	$stmt = $con->prepare($query);
	$stmt->execute();

	$data = array();

	foreach($stmt as $row){
		$data[] = $row;
	}

	echo json_encode($data);
?>