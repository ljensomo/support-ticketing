<?php
	$issue_type = $_POST['sel_issue_type'];
	$comp_name  = $_POST['txtCname'];
	$reporter  = $_POST['txtReporter'];
	$cnum  = $_POST['txtCnum'];
	$e_mail  = $_POST['txtEmail'];
	$prob_summary  = $_POST['txtPsummary'];
	$desc  = $_POST['txtArea'];
	$sev  = $_POST['sel_sev'];
	$attch  = $_POST['txtAttach'];
	$date = date("Y-n-j");

	require_once('..\connection.php');

	try {
		$sql ="INSERT INTO ticket(companyname,reporter,email_add,cnum,problem_desc,issuetype_id,severity_id,ticketstatus_id,transactionid,attachment,date_created)
		values ('".$comp_name."',
		'".$reporter."',
		'".$e_mail."',
		'".$cnum."',
		'".$prob_summary."',
		'".$issue_type."',
		'".$sev."',
		'".''."',
		'".''."',
		'".$attch."',
		'".$date."')";

		$statement = $con->prepare($sql);
		$statement->execute();

		echo "<script>window.location='http://localhost/Thesis_ticketing/saved.php'</script>";	
			
	} catch (Exception $e) {
		echo "Error ".$e->getMessage();
	}
	
	
?>