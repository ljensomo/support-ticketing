<?php  

	require('connection.php');

	if(isset($_POST['project_id'])){
		$project_id = $_POST['project_id'];

		$query = "DELETE FROM group_projects WHERE id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($project_id));
		// Done		
	}else if(isset($_POST['member_id'])){
		$member_id = $_POST['member_id'];

		$query = "DELETE FROM group_members WHERE id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($member_id));
		// Done			
	}


?>