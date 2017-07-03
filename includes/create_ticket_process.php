<?php

require_once 'connection.php';
include 'functions.php';



$companyname = $_POST['company_name'];
$reporter = $_POST['txtReporter'];
$email = $_POST['txtCnum'];	
$cnum = $_POST['txtEmail'];
$subject = $_POST['txtPsummary'];
$problem = $_POST['txtArea'];
$transaction  = $_POST['txtNO'];
$attachment = $_POST['txtAttach'];
$date = date("Y-n-j");


$required = array($companyname,$reporter,$email,$cnum,$subject,$transaction,$attachment,$date);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

$sql = "SELECT COUNT(*) FROM ticket WHERE transactionID =?";
$qry = $db->prepare($sql);
$qry->execute(array($transaction));

if ($error) {

    openWindow($goto = "../create.php");
} else if ($row = ($qry->fetchColumn() > 0)) {
    msgAlert($alert = "Invalid");
    openWindow($goto = "../create.php");
} else {
    $sqlAdd = "INSERT INTO ticket(companyname,reporter,email_add,cnum,problem_sum,problem_desc,ticketstatus_id,transactionid,attachment,date_created,severity_id,issue_type_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($companyname,$reporter,$email,$cnum,$subject,$problem,1,$transaction,$attachment,$date,0,0));
    msgAlert($alert = "Issue sent successfully!");
    openWindow($goto = "../view_tickets.php?name=$companyname");
}
?>