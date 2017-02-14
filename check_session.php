<?php
	session_start();
	
	if($_SESSION['username']==""){
		echo "<script>window.location='http://localhost/ticketing/login.php'</script>";
	}
?>