<?php
	require_once('connection.php');

    $project_id = $_POST['project_id'];
    $support_id = $_POST['support'];

    // validate if the support is already assigned to the project
    $check_sql = "SELECT id FROM project_supports WHERE project_id = ? AND support_id = ?";
    $check_stmt = $db->prepare($check_sql);
    $check_stmt->execute([$project_id, $support_id]);

    if ($check_stmt->rowCount() > 0) {
        echo json_encode(['success' => false, 'message' => 'Support is already assigned to this project.']);
        exit;
    }

    $sql = "INSERT INTO project_supports (project_id, support_id) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    if ($stmt->execute([$project_id, $support_id])) {
        echo json_encode(['success' => true, 'message' => 'Support added successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to add support.']);
    }