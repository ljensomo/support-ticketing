<?php  

	require_once('connection.php');

	$support_id = $_POST['support_id'];
	$project_id = $_POST['project_id'];	

	if ( isset($_POST['add'] ) ) {

		$validate = "SELECT 
						id
					FROM assigned_projects
					WHERE user_id = ?
					AND assigned_project = ?";
		$stmt_val = $db->prepare($validate);
		$stmt_val->execute(array($support_id,$project_id));
		$count = $stmt_val->rowCount();

		if ( $count <= 0 ){

			$query = "INSERT INTO assigned_projects (user_id,assigned_project,isdeleted) VALUES (?,?,?)";
			$stmt = $db->prepare($query);
			$stmt->execute(array($support_id,$project_id,0));

			echo 'success';

		}else{

			echo 'Ooops! the selected support was already added in the project.';

		}



	} elseif ( isset($_POST['remove'] ) ) {

		$query = "DELETE FROM assigned_projects WHERE user_id = ? AND assigned_project = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($support_id,$project_id));

		echo 'success';

	}

	

?>