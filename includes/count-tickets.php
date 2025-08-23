<?php 

// DASHBOARD
	$query = "SELECT 
				COUNT(ticket_id)
			FROM tickets AS t
			JOIN users AS u
			ON t.reporter_id=u.user_id
			WHERE u.company_id=?";
	$stmt = $db->prepare($query);
	$stmt->execute(array($row[4]));
	$alltickets = $stmt->fetch(PDO::FETCH_NUM);

	$query_1 = "SELECT 
				COUNT(t.ticket_id)
			FROM tickets AS t
			JOIN users AS u
			ON t.reporter_id=u.user_id
			JOIN ticket_progress AS tp
			ON t.ticket_id=tp.ticket_id
			WHERE u.company_id=?
			AND tp.before_status IN (1,4)";
	$stmt_1 = $db->prepare($query_1);
	$stmt_1->execute(array($row[4]));
	$allopentickets = $stmt_1->fetch(PDO::FETCH_NUM);

	$query_2 = "SELECT 
				COUNT(t.ticket_id)
			FROM tickets AS t
			JOIN users AS u
			ON t.reporter_id=u.user_id
			JOIN ticket_progress AS tp
			ON t.ticket_id=tp.ticket_id
			WHERE u.company_id=?
			AND tp.before_status IN (3,7,17)";
	$stmt_2 = $db->prepare($query_2);
	$stmt_2->execute(array($row[4]));
	$allclosedtickets = $stmt_2->fetch(PDO::FETCH_NUM);

	$query_3 = "SELECT 
					COUNT(t.ticket_id)
				FROM tickets AS t
				JOIN ticket_progress AS tp
				ON t.ticket_id=tp.ticket_id
				JOIN users AS u
				ON t.reporter_id=u.user_id
				WHERE u.company_id=?
				AND tp.before_status IN (2,5,6)";
	$stmt_3 = $db->prepare($query_3);
	$stmt_3->execute(array($row[4]));
	$allinprogresstickets = $stmt_3->fetch(PDO::FETCH_NUM);
// END DASHBOARD

// SIDEBAR COUNT FOR USER

	$query_5 = "SELECT 
				COUNT(t.ticket_id)
			FROM tickets AS t
			JOIN users AS u
			ON t.reporter_id=u.user_id
			JOIN ticket_progress AS tp
			ON t.ticket_id=tp.ticket_id
			WHERE u.company_id=?
			AND tp.before_status IN (1,4)
			AND u.user_id = ?";
	$stmt_5 = $db->prepare($query_5);
	$stmt_5->execute(array($row[4],$row[0]));
	$allusertickets = $stmt_5->fetch(PDO::FETCH_NUM);

	$query_6 = "SELECT 
					COUNT(t.ticket_id)
				FROM tickets AS t
				JOIN ticket_progress AS tp
				ON t.ticket_id=tp.ticket_id
				JOIN users AS u
				ON t.reporter_id=u.user_id
				WHERE tp.before_status IN (2,5,6)
				AND u.user_id=?";
	$stmt_6 = $db->prepare($query_6);
	$stmt_6->execute(array($row[0]));
	$alluserinprogresstickets = $stmt_6->fetch(PDO::FETCH_NUM);

	$query_7 = "SELECT 
				COUNT(t.ticket_id)
			FROM tickets AS t
			JOIN users AS u
			ON t.reporter_id=u.user_id
			JOIN ticket_progress AS tp
			ON t.ticket_id=tp.ticket_id
			WHERE u.company_id=?
			AND tp.before_status IN (3,7,17)
			AND u.user_id = ?";
	$stmt_7 = $db->prepare($query_7);
	$stmt_7->execute(array($row[4],$row[0]));
	$alluserclosedtickets = $stmt_7->fetch(PDO::FETCH_NUM);	

?>