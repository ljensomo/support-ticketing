<?php
    require_once 'connection.php';
    include 'functions.php';

    $project_name = htmlspecialchars($_POST['project_name']);
    $description = htmlspecialchars($_POST['description']);

    $sql = "SELECT id FROM projects WHERE project_name = ?";
    $qry = $db->prepare($sql);
    $qry->execute(array($project_name));

    if ($row = ($qry->rowCount() > 0)) {
        echo json_encode(['success' => false, 'message' => 'Project already exists!']);    

    } else {
        $sqlAdd = "INSERT INTO projects (project_name, description) VALUES (?, ?)";
        $qryAdd = $db->prepare($sqlAdd);
        $qryAdd->execute(array($project_name, $description));

        echo json_encode(['success' => true, 'message' => 'Project added successfully!']);
    }