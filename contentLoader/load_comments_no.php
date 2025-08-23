<?php
	 require_once('../includes/connection.php');
	 $ticket_id = $_GET['tid'];

	 $sql = 'SELECT COUNT(id) FROM comments WHERE ticket_id = ?';
	 $result = $db->prepare($sql);
	 $result->execute(array($ticket_id));
	 $comments_no = $result->fetch(PDO::FETCH_NUM);

	 echo $comments_no[0] . ' Comment/s';
 ?>