<?php

require_once 'connection.php';
include 'functions.php';



$project = htmlspecialchars($_POST['project']);
$trans_no = htmlspecialchars($_POST['trans_no']);
$reporter = htmlspecialchars($_POST['reporter']);	
$company_id = htmlspecialchars($_POST['company_id']);
$before_status = 1;

 $time_loader="SELECT NOW()";
 $time_res=$db->prepare($time_loader);
 $time_res->execute();
 $time_row=$time_res->fetch(PDO::FETCH_NUM);

$date = $time_row[0];;


$required = array($project,$trans_no,$reporter,$date);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}


if ($error) {
	echo "error";
   // openWindow($goto = "../client.php");
} else {
    $sqlAdd = "INSERT INTO tickets(company_id,project_id,transaction_no,date_created,reporter,before_status) VALUES(?,?,?,?,?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($company_id,$project,$trans_no,$date,$reporter,$before_status));
        
    echo "success";

  //  msgAlert($alert = "Issue sent successfully!");
//    openWindow($goto = "../view_tickets.php?name=$companyname");
}
?>