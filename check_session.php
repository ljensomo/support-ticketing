<?php
	session_start();
	
	if($_SESSION['username']==""){
		echo "<script>window.location='http://localhost/Thesis_ticketing/login.php'</script>";
	}
?>