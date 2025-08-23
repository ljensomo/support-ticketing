<?php  

	$query = "SELECT 
				COUNT(t.ticket_id)
				FROM tickets AS t
				JOIN ticket_progress AS tp
				ON t.ticket_id=tp.ticket_id
				WHERE tp.before_status IN (1,4)";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$allopentickets = $stmt->fetch(PDO::FETCH_NUM);

	$query2 = "SELECT 
				COUNT(t.ticket_id)
				FROM tickets AS t
				JOIN ticket_progress AS tp
				ON t.ticket_id=tp.ticket_id
				WHERE tp.before_status IN (3,7)";
	$stmt2 = $db->prepare($query2);
	$stmt2->execute();
	$allclosedtickets = $stmt2->fetch(PDO::FETCH_NUM);

	$query3 = "SELECT 
				COUNT(t.ticket_id)
				FROM tickets AS t
				JOIN ticket_progress AS tp
				ON t.ticket_id=tp.ticket_id
				WHERE tp.before_status IN (2,4,5,6)";
	$stmt3 = $db->prepare($query3);
	$stmt3->execute();
	$allinprogresstickets = $stmt3->fetch(PDO::FETCH_NUM);

	$query4 = "SELECT
				COUNT(ticket_id)
				FROM tickets";
	$stmt4 = $db->prepare($query4);
	$stmt4->execute();
	$alltickets = $stmt4->fetch(PDO::FETCH_NUM);

?>