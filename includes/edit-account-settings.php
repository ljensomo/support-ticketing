<?php  

	require_once('connection.php');



	if(isset($_POST['contact'])){
		$user_id = $_POST['userid'];
		$number = $_POST['number'];
		$email = $_POST['email'];

		$query = "UPDATE users SET cnum = ? , email = ? WHERE user_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($number,$email,$user_id));
	}elseif(isset($_POST['info'])){
		$user_id = $_POST['userid'];
		$fname = $_POST['fname'];
		$mi = $_POST['mi'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];

		$query = "UPDATE users SET fname = ?, mname = ?, lname = ?, uname = ? WHERE user_id = ?";
		$stmt = $db->prepare($query);
		$stmt->execute(array($fname,$mi,$lname,$uname,$user_id));
	}elseif (!$_FILES['fileUpload']['error']) {
		$file = $_FILES['fileUpload']['name'];
		$user_id = $_POST['userid'];

		$query_1 = "SELECT user_id,uname FROM users WHERE user_id = ?";
		$stmt_1 = $db->prepare($query_1);
		$stmt_1->execute(array($user_id));
		$imgname = $stmt_1->fetch(PDO::FETCH_NUM);

		$extension = end(explode(".",$file));
		$filename = $imgname[1] . "" . $imgname[0] . "." . $extension;

		if ($file) {
		
		    if (!$_FILES['fileUpload']['error']) {
		
		        $currentdir = getcwd();
		        $target = $currentdir . '../../images/avatars/' . $filename;
		
		
		       	  move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target);
		        
		       	  $query_2 = "UPDATE users SET profile_pic = ? WHERE user_id = ?";
		       	  $stmt_2 = $db->prepare($query_2);
		       	  $stmt_2->execute(array($filename,$user_id));

		       	  header('location: ../my-account.php');
		
		    } else {
		          msgAlert($alert = "Image size too large!");

		    }
		}

	}else{
		header('location: ../my-account.php');
	}

?>