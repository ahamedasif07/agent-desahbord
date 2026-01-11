<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);
header('Content-Type: application/json');

// ১. ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

if ($conn->connect_error) {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}