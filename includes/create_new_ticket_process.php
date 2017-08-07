<html>
<a href="../attachment/asd.txt"></a>
</html>
<?php

require_once 'connection.php';
include 'functions.php';


$reporter = $_POST['id'];
$project = htmlspecialchars($_POST['project']);
$trans_no = htmlspecialchars($_POST['trans_no']);
$type = htmlspecialchars($_POST['type']);
$subject = htmlspecialchars($_POST['subject']);
$desc = htmlspecialchars($_POST['desc']);
$file = $_FILES['file']['name'];
$before_status = 1;

$required = array($project,$trans_no,$reporter);
$error = false;

foreach ($required as $fields) {
    if (empty($fields)) {
        $error = true;
    }
}

if ($file) {

    if (!$_FILES['file']['error']) {

        $currentdir = getcwd();
        $target = $currentdir . '../../attachment/' . basename($_FILES['file']['name']);

        if ($_FILES['file']['size'] > (40024000)) {

            $valid_file = false;
           // msgAlert($alert = "File too large. Upload image not exceeding 1mb in size.");
           echo "File too large.";
        } else {
            $valid_file = true;
        }

        if ($valid_file) {

            move_uploaded_file($_FILES['file']['tmp_name'], $target);
        }
    } else {
       // msgAlert($alert = "Invalid");
       echo "Invalid";

    }
}

if ($error) {
	echo "error";
   // openWindow($goto = "../client.php");
} else {
    $sqlAdd = "INSERT INTO tickets(project,transaction_no,issue_subject,issue_desc,reporter_id,attchment,before_status) VALUES(?,?,?,?,?,?,?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($project,$trans_no,$subject,$desc,$reporter,$file,$before_status));
        
    echo "success";

  //  msgAlert($alert = "Issue sent successfully!");
//    openWindow($goto = "../view_tickets.php?name=$companyname");
}
?>