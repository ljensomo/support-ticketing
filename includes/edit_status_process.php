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
    //openWindow($goto = "../status.php");
} else {
    $vldt_stts = "SELECT * FROM status WHERE status_id=?";
    $vldt_res = $db->prepare($vldt_stts);
    $vldt_res->execute(array($id));
    $vldt_row = $vldt_res->fetch(PDO::FETCH_NUM);

    if($name==$vldt_row[1] && $description==$vldt_row[2]){
        echo "same";
    }else{

            $slct_stts = "SELECT * FROM status WHERE status_desc = ?";
            $slct_res = $db->prepare($slct_stts);
            $slct_res->execute(array($name));
            $slct_row = $slct_res->fetch(PDO::FETCH_NUM);

            if($slct_row[0]>=1){
                if($vldt_row[0]==$slct_row[0]){
                    $sql = "UPDATE status SET status_desc =?, description=? WHERE status_id =?";
                    $qry = $db->prepare($sql);
                    $qry->execute(array($name,$description,$id));
                    echo "success";
                }else{
                    echo "invalid";
                }                
            }else{
                $sql = "UPDATE status SET status_desc =?, description=? WHERE status_id =?";
                $qry = $db->prepare($sql);
                $qry->execute(array($name,$description,$id));
                echo "success";
            }
    }
}
?>