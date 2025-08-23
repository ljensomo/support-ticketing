<?php
	//require 'connection.php';
if($row[11]==4){
$sql_count = "SELECT
COUNT(a.ticket_id)							
FROM tickets AS a
JOIN ticket_progress AS b 
ON a.ticket_id=b.ticket_id
JOIN ticket_details AS c
ON a.ticket_id=c.ticket_id
JOIN projects AS d 
ON a.project=d.proj_id
JOIN STATUS AS e
ON b.before_status=e.status_id 
JOIN users AS f
ON f.user_id=a.reporter_id
WHERE f.company_id=? ORDER BY a.ticket_id DESC";
$stmt_count = $db->prepare($sql_count);
$stmt_count->execute(array($row[4]));
$client_row_count = $stmt_count->fetch(PDO::FETCH_NUM);


$client_open_count = "SELECT 
COUNT(a.ticket_id)
FROM tickets AS a 
JOIN projects AS b
ON a.project=b.proj_id
JOIN users AS c
ON a.reporter_id=c.user_id
JOIN ticket_details AS d
ON a.ticket_id=d.ticket_id
JOIN ticket_progress AS e 
ON a.ticket_id=e.ticket_id
JOIN STATUS AS f 
ON e.before_status=f.status_id 
WHERE f.status_id=1 OR f.status_id=4 AND company_id=?";
$stmt_count_open = $db->prepare($client_open_count);
$stmt_count_open->execute(array($row[4]));
$client_count_tickets = $stmt_count_open->fetch(PDO::FETCH_NUM);



$assigned_tickets = "SELECT
COUNT(a.ticket_id)								
FROM tickets AS a
JOIN ticket_progress AS b 
ON a.ticket_id=b.ticket_id
JOIN ticket_details AS c
ON a.ticket_id=c.ticket_id
JOIN projects AS d 
ON a.project=d.proj_id
JOIN STATUS AS e
ON b.before_status=e.status_id 
JOIN users AS f
ON f.user_id=a.reporter_id
WHERE f.company_id=? AND b.before_status=2
OR b.before_status=5";
$stmt_ass_tickets = $db->prepare($assigned_tickets);
$stmt_ass_tickets->execute(array($row[4]));
$client_all_pending=$stmt_ass_tickets->fetch(PDO::FETCH_NUM);


$closed_tckts = "SELECT
COUNT(a.ticket_id)								
FROM tickets AS a
JOIN ticket_progress AS b 
ON a.ticket_id=b.ticket_id
JOIN ticket_details AS c
ON a.ticket_id=c.ticket_id
JOIN projects AS d 
ON a.project=d.proj_id
JOIN STATUS AS e
ON b.before_status=e.status_id 
JOIN users AS f
ON f.user_id=a.reporter_id
WHERE f.company_id=? AND b.before_status=3 OR b.before_status=7	";
$res_closed = $db->prepare($closed_tckts);
$res_closed->execute(array($row[4]));
$row_closed = $res_closed->fetch(PDO::FETCH_NUM);

}else{

$sql_count = "SELECT
COUNT(a.ticket_id)							
FROM tickets AS a
JOIN ticket_progress AS b 
ON a.ticket_id=b.ticket_id
JOIN ticket_details AS c
ON a.ticket_id=c.ticket_id
JOIN projects AS d 
ON a.project=d.proj_id
JOIN STATUS AS e
ON b.before_status=e.status_id 
JOIN users AS f
ON f.user_id=a.reporter_id
WHERE f.company_id=? AND f.user_id=?";
$stmt_count = $db->prepare($sql_count);
$stmt_count->execute(array($row[4],$row[0]));
$client_row_count = $stmt_count->fetch(PDO::FETCH_NUM);

$client_open_count = "SELECT 
COUNT(a.ticket_id)
FROM tickets AS a 
JOIN projects AS b
ON a.project=b.proj_id
JOIN users AS c
ON a.reporter_id=c.user_id
JOIN ticket_details AS d
ON a.ticket_id=d.ticket_id
JOIN ticket_progress AS e 
ON a.ticket_id=e.ticket_id
JOIN STATUS AS f 
ON e.before_status=f.status_id 
WHERE f.status_id=1 AND c.user_id=?";
$stmt_count_open = $db->prepare($client_open_count);
$stmt_count_open->execute(array($row[0]));
$client_count_tickets = $stmt_count_open->fetch(PDO::FETCH_NUM);

$assigned_tickets = "SELECT
COUNT(a.ticket_id)								
FROM tickets AS a
JOIN ticket_progress AS b 
ON a.ticket_id=b.ticket_id
JOIN ticket_details AS c
ON a.ticket_id=c.ticket_id
JOIN projects AS d 
ON a.project=d.proj_id
JOIN STATUS AS e
ON b.before_status=e.status_id 
JOIN users AS f
ON f.user_id=a.reporter_id
WHERE f.company_id=? AND b.before_status=2 AND f.user_id=?";
$stmt_ass_tickets = $db->prepare($assigned_tickets);
$stmt_ass_tickets->execute(array($row[4],$row[0]));
$client_all_pending=$stmt_ass_tickets->fetch(PDO::FETCH_NUM);

$closed_tckts = "SELECT
COUNT(a.ticket_id)								
FROM tickets AS a
JOIN ticket_progress AS b 
ON a.ticket_id=b.ticket_id
JOIN ticket_details AS c
ON a.ticket_id=c.ticket_id
JOIN projects AS d 
ON a.project=d.proj_id
JOIN STATUS AS e
ON b.before_status=e.status_id 
JOIN users AS f
ON f.user_id=a.reporter_id
WHERE f.company_id=? AND b.before_status=3 AND f.user_id=?";
$res_closed = $db->prepare($closed_tckts);
$res_closed->execute(array($row[4],$row[0]));
$row_closed = $res_closed->fetch(PDO::FETCH_NUM);

}
	//echo $row_count[0];
?>