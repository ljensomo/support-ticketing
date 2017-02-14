<?php
$host="localhost";
$user="root";
$pass="";
$dbname="ticketing";

try{
	$con = new pdo("mysql:host={$host};dbname={$dbname}",$user,$pass);	
		//echo "AYS";
}catch (PDOException $e) {
		//echo "ERROR:" . $e->getMessage();

}
?>

