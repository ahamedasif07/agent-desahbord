<?php
// ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ডাটাবেজে বাংলা সাপোর্ট করার জন্য
$conn->set_charset("utf8mb4");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ফরম থেকে আসা ডাটাগুলো ভেরিয়েবলে রাখা
    $id = intval($_POST['property_id']);
    $property_name = mysqli_real_escape_string($conn, $_POST['property_name']);
    $total_price = mysqli_real_escape_string($conn, $_POST['total_price']);

    // নিচের ফিল্ডগুলো যদি আপনার ডাটাবেজে থাকে তবে এগুলোও আপডেট হবে
    // $city = mysqli_real_escape_string($conn, $_POST['city']);
    // $area = mysqli_real_escape_string($conn, $_POST['area']);

    // SQL UPDATE কুয়েরি
    $sql = "UPDATE properties SET 
            property_name = '$property_name', 
            total_price = '$total_price'
            WHERE id = $id";

    if ($conn->query($sql)) {
        echo "success"; // AJAX এই 'success' লেখাটি পড়েই সাকসেস মেসেজ দেখাবে
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
