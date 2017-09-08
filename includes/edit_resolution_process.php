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
    //openWindow($goto = "../resolution.php");
} else {
    $vldt_rsltn = "SELECT * FROM resolution WHERE resolution_id=?";
    $vldt_res = $db->prepare($vldt_rsltn);
    $vldt_res->execute(array($id));
    $vldt_row = $vldt_res->fetch(PDO::FETCH_NUM);

    if($name==$vldt_row[1] && $description==$vldt_row[2]){
        echo "same";
    }else{

            $slct_rsltn = "SELECT * FROM resolution WHERE resolution = ?";
            $slct_res = $db->prepare($slct_rsltn);
            $slct_res->execute(array($name));
            $slct_row = $slct_res->fetch(PDO::FETCH_NUM);

            if($slct_row[0]>=1){
                if($vldt_row[0]==$slct_row[0]){
                    $sql = "UPDATE resolution SET resolution =?, description=? WHERE resolution_id =?";
                    $qry = $db->prepare($sql);
                    $qry->execute(array($name,$description,$id));
                    echo "success";
                }else{
                    echo "invalid";
                }                
            }else{
                $sql = "UPDATE resolution SET resolution =?, description=? WHERE resolution_id =?";
                    $qry = $db->prepare($sql);
                    $qry->execute(array($name,$description,$id));
                    echo "success";
            }
    }
}

?>