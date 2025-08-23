<?php
require_once 'connection.php';

$cid = $_POST['cid'];
$prjct_id = $_POST['prjct'];
$date_implemented = $_POST['date_implemented'];

$sql_vldt = "SELECT COUNT(company_id) FROM company_proj WHERE company_id=? AND project_id=?";
$vldt_res = $db->prepare($sql_vldt);
$vldt_res->execute(array($cid,$prjct_id));
$vldt_row=$vldt_res->fetch(PDO::FETCH_NUM);
if($vldt_row[0]>0){
	echo "exist";
}else{
	$sql = "INSERT INTO company_proj(company_id,project_id,date_implemented)VALUES(?,?,?)";
	$qry = $db->prepare($sql);
	$qry->execute(array($cid,$prjct_id,$date_implemented));
	echo "success";
}
?>