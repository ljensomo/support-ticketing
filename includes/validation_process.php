<?php
require_once 'connection.php';
include 'functions.php';

$userlevel = $_POST['sel_issue_type'];


if ($userlevel== 1){
	openWindow($goto = "../add_user.php");
}else {
	openWindow($goto = "../add_client.php");
}


?>