<?php
	require_once('connection.php');

    $project_id = $_POST['project_id'];
    $support_id = $_POST['support_id'];

    $sql = "DELETE FROM project_supports WHERE project_id = ? AND support_id = ?";
    $stmt = $db->prepare($sql);
    if ($stmt->execute([$project_id, $support_id])) {
        echo json_encode(['success' => true, 'message' => 'Support removed successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to remove support.']);
    }