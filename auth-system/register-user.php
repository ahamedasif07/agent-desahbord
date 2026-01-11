<?php

/**
 * User Registration Handler
 * Path: wp-content/themes/astra-child/auth/register-user.php
 */

ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);
header('Content-Type: application/json');

// ১. ডাটাবেজ কানেকশন (আপনার "agent-dashbord" ডাটাবেজ ব্যবহার করছি)
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

if ($conn->connect_error) {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit;
}
$conn->set_charset("utf8mb4");

// ২. ইউজার টেবিল না থাকলে অটো তৈরি করা
$table_sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    password VARCHAR(255) NOT NULL,
    user_role VARCHAR(50) DEFAULT 'agent',
    status VARCHAR(20) DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
$conn->query($table_sql);

// ৩. ডাটা রিসিভ করা (AJAX POST থেকে)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

$full_name = $conn->real_escape_string($_POST['full_name'] ?? '');
$email     = $conn->real_escape_string($_POST['user_email'] ?? '');
$phone     = $conn->real_escape_string($_POST['user_phone'] ?? '');
$raw_pass  = $_POST['password'] ?? '';

// ভ্যালিডেশন
if (empty($full_name) || empty($email) || empty($raw_pass)) {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'সবগুলো ফিল্ড পূরণ করুন!']);
    exit;
}

// ৪. ডুপ্লিকেট ইমেইল চেক করা
$check_email = $conn->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
$check_email->bind_param("s", $email);
$check_email->execute();
$res = $check_email->get_result();

if ($res->num_rows > 0) {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'এই ইমেইলটি দিয়ে আগেই অ্যাকাউন্ট খোলা হয়েছে!']);
    $check_email->close();
    $conn->close();
    exit;
}
$check_email->close();

// ৫. পাসওয়ার্ড হ্যাশ করা (সিকিউরিটির জন্য)
$hashed_password = password_hash($raw_pass, PASSWORD_DEFAULT);

// ৬. ডাটাবেজে ইনসার্ট করা
$stmt = $conn->prepare("INSERT INTO users (full_name, email, phone, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $full_name, $email, $phone, $hashed_password);

ob_end_clean();

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'অ্যাকাউন্ট তৈরি সফল হয়েছে!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'সিস্টেম এরর: ' . $stmt->error]);
}

$stmt->close();
$conn->close();