<?php
ob_start();
header('Content-Type: application/json');

// Database Connection
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['user_email'] ?? '';
    $pass  = $_POST['password'] ?? '';

    // ১. ইউজারকে খোঁজা
    $stmt = $conn->prepare("SELECT id, password, full_name FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // ২. পাসওয়ার্ড চেক করা
        if (password_verify($pass, $user['password'])) {
            // সেশন শুরু করা (Login ধরে রাখার জন্য)
            if (!session_id()) session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];

            echo json_encode(['status' => 'success', 'message' => 'Login successful! Redirecting...']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Wrong password!']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Email not found!']);
    }
}
$conn->close();
exit;