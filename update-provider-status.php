<?php
// update-provider-status.php
header('Content-Type: application/json');
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $status = $_POST['status'] ?? null;

    if (!$id || !$status) {
        echo json_encode(['success' => false, 'msg' => 'Invalid parameters']);
        exit;
    }

    $conn = getDatabaseConnection();

    // Make sure status is valid
    $validStatuses = ['pending', 'active', 'suspended'];
    if (!in_array($status, $validStatuses)) {
        echo json_encode(['success' => false, 'msg' => 'Invalid status']);
        exit;
    }

    $stmt = $conn->prepare("UPDATE hostel_providers SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'msg' => 'Database update failed']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'msg' => 'Invalid request']);
}
