<?php
	session_start();
	require_once("connection.php");

	//session_start();
	$username = $_POST['txtusername'];
	$pass = $_POST['txtpass'];

	$sql="SELECT * FROM users WHERE username = '".$username."' AND PASSWORD = '".$pass."'";

			if($res = $con->query($sql)){
				if($res->fetchColumn()>0){
					
					foreach ($con->query($sql) as $row){	

							$_SESSION['username'] =$row['username'];
							$_SESSION['fname'] =$row['fname'];
							$_SESSION['mname'] =$row['mname'];
							$_SESSION['lname'] =$row['lname'];
							$_SESSION['password'] =$row['password'];


							//print_r($_SESSION);

							echo "<script>window.location='http://localhost/Thesis_ticketing/Index.php'</script>";	
					}

				}else{
				//echo "no record count";
				echo "<script>window.location='http://localhost/Thesis_ticketing/error502.php'</script>";
				}
			}	
 ?>
