<?php 
	
	require 'connection.php';
	require 'functions.php';
	
	$id = $_POST['id'];
	
	$sql_loader = "SELECT * FROM status WHERE status_id = ?";
	$stmt = $db->prepare($sql_loader);
	$stmt->execute(array($id));
	$row = $stmt->fetch(PDO::FETCH_NUM);

?>


<input class="form-control" placeholder="Name" id="name" name="name" type="text" value="<?php echo $row[1]; ?>">
<input class="form-control" placeholder="Description" id="description" name="description" type="text" value="<?php echo $row[2]; ?>"> 
