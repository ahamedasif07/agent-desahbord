<?php
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['property_id'])) {
    $id = intval($_POST['property_id']);

    $sql = "DELETE FROM properties WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "success"; // জাভাস্ক্রিপ্ট এই 'success' লেখাটি চেক করবে
    } else {
        echo "error";
    }
}
$conn->close();
