<?php 
session_start();

		// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		echo "not match";		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		echo "matched";		
	}	
?>
