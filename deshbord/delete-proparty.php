<?php
// ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['property_id'])) {
    $id = intval($_POST['property_id']); // সিকিউরিটির জন্য intval ব্যবহার করুন

    // ডাটা ডিলিট করার কুয়েরি
    $sql = "DELETE FROM properties WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error: " . $conn->error;
    }
}

$conn->close();
