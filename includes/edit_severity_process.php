<?php

require_once 'connection.php';
include 'functions.php';

$id = $_POST['id'];
$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);

$required = array($id,$name);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($error) {
	echo "none";
    //openWindow($goto = "../severity.php");
} else {
    $vldt_svrty = "SELECT * FROM severity WHERE severity_id=?";
    $vldt_res = $db->prepare($vldt_svrty);
    $vldt_res->execute(array($id));
    $vldt_row = $vldt_res->fetch(PDO::FETCH_NUM);

    if($name==$vldt_row[1] && $description==$vldt_row[2]){
        echo "same";
    }else{

            $slct_svrty = "SELECT * FROM severity WHERE severity = ?";
            $slct_res = $db->prepare($slct_svrty);
            $slct_res->execute(array($name));
            $slct_row = $slct_res->fetch(PDO::FETCH_NUM);

            if($slct_row[0]>=1){
                if($vldt_row[0]==$slct_row[0]){
                    $sql = "UPDATE severity SET severity =?, description=? WHERE severity_id =?";
                    $qry = $db->prepare($sql);
                    $qry->execute(array($name,$description,$id));
                    echo "success";
                }else{
                    echo "invalid";
                }                
            }else{
                $sql = "UPDATE severity SET severity =?, description=? WHERE severity_id =?";
                    $qry = $db->prepare($sql);
                    $qry->execute(array($name,$description,$id));
                    echo "success";
            }
    }
}
?>