<?php 

	require_once('connection.php');

	$group_id = $_POST['group_id'];

	if(isset($_POST['project_id'])){
		
		$project_id = $_POST['project_id'];

		$count = "SELECT COUNT(id) FROM group_projects WHERE group_id = ? AND project_id = ?";
		$stmt_count = $db->prepare($count);
		$stmt_count->execute(array($group_id,$project_id));

		if($row = ($stmt_count->fetchColumn() > 0 )){
			echo 'Project was already assigned in the group.';
		}else{
			$query = "INSERT INTO group_projects (group_id,project_id) VALUES (?,?)";
			$stmt = $db->prepare($query);
			$stmt->execute(array($group_id,$project_id));

			echo 'Added!';
		}

	}else if(isset($_POST['user_id'])){

		$user_id = $_POST['user_id'];

		$count = "SELECT COUNT(id) FROM group_members WHERE group_id = ? AND user_id = ?";
		$stmt_count = $db->prepare($count);
		$stmt_count->execute(array($group_id,$user_id));

		if($row = ($stmt_count->fetchColumn() > 0 )){
			echo 'User was already added in the group.';
		}else{		

			$query = "INSERT INTO group_members (group_id,user_id) VALUES (?,?)";
			$stmt = $db->prepare($query);
			$stmt->execute(array($group_id,$user_id));

			echo 'Added!';
		}

	}else if(isset($_POST['groupname'])){

		$groupname = $_POST['groupname'];

		$count = "SELECT COUNT(id) FROM groups WHERE id != ? AND group_name = ?";
		$stmt_count = $db->prepare($count);
		$stmt_count->execute(array($group_id,$groupname));

		if($row = ($stmt_count->fetchColumn() > 0 )){
			echo 'Ooops! Invalid groupname.';
		}else{		

			$query = "UPDATE groups SET group_name = ? WHERE id = ?";
			$stmt = $db->prepare($query);
			$stmt->execute(array($groupname,$group_id));

			echo 'Updated!';
		}

	}


?>