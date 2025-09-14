<?php

    require_once 'connection.php';

    $issue = htmlspecialchars($_POST['issue_type']);

    $sqlAdd = "INSERT INTO issue_types (Issue_desc) VALUES (?);";
    $qryAdd = $db->prepare($sqlAdd);
    $qryAdd->execute(array($issue));
    
    echo json_encode(array(
        "success" => true,
        "message" => "Issue Type added successfully."
    ));

?>