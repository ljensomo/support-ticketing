<?php

require_once 'connection.php';
include 'functions.php';

$companyname = $_POST['txtCname'];
$reporter = $_POST['txtReporter'];
$email = $_POST['txtCnum'];	
$cnum = $_POST['txtEmail'];
$subject = $_POST['txtPsummary'];
$issuetype  = $_POST['sel_issue_type'];
$severity  = $_POST['sel_sev'];

$transaction  = $_POST['txtNO'];
$attachment = $_POST['txtAttach'];
$date = date("Y-n-j");


$required = array($companyname,$reporter,$email,$cnum,$subject,$issuetype,$severity,$transaction,$attachment,$date);
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
    $sqlAdd = "INSERT INTO ticket(companyname,reporter,email_add,cnum,problem_desc,issuetype_id,severity_id,ticketstatus_id,transactionid,attachment,date_created) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($companyname,$reporter,$email,$cnum,$subject,$issuetype,$severity,1,$transaction,$attachment,$date));
    msgAlert($alert = "Successfully Saved");
    openWindow($goto = "../create.php");
}
?>