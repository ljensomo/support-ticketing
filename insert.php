<?php 
require_once('connection.php');

$companyName = $_POST['txtCname'];
$reporter = $_POST['txtReporter'];
$number = $_POST['txtCnum'];
$Email = $_POST['txtEmail'];
$problem = $_POST['txtPsummary'];
$Area = $_POST['txtArea'];

$query = "INSERT INTO ticket(CompanyName,Reporter)VALUES(?,?,?)";
$data = array($companyName,$reporter,'');
$stmt = $con->prepare($query);
$stmt->execute($data);


?>