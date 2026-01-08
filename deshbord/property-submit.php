<?php

/**
 * Property Submit Handler
 * Path: wp-content/themes/astra-child/deshbord/property-submit.php
 */

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
$conn->set_charset("utf8mb4");

// ২. টেবিল না থাকলে তৈরি করা (পুরানো স্টাইল)
$table_sql = "CREATE TABLE IF NOT EXISTS properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    property_name VARCHAR(255),
    property_type VARCHAR(100),
    total_price VARCHAR(100),
    price_per_sqft VARCHAR(100),
    city VARCHAR(100),
    area VARCHAR(100),
    zip_code VARCHAR(50),
    full_address TEXT,
    map_link TEXT,
    construction_status VARCHAR(100),
    transaction_type VARCHAR(100),
    prop_size INT,
    bedroom_count INT,
    bathroom_count INT,
    balcony_count INT,
    garage_count INT,
    features TEXT,
    handover_date VARCHAR(100),
    building_type VARCHAR(100),
    road_width INT,
    developer_name VARCHAR(255),
    heading_image VARCHAR(255),
    gallery_images TEXT,
    property_video VARCHAR(255),
    property_description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
$conn->query($table_sql);

// ৩. অটোমেটিক নতুন ফিল্ডগুলো ডাটাবেজে চেক করে অ্যাড করা (সবচেয়ে গুরুত্বপূর্ণ অংশ)
$new_columns = [
    'rental_period'  => "ALTER TABLE properties ADD COLUMN rental_period VARCHAR(50) AFTER total_price",
    'deposit_amount' => "ALTER TABLE properties ADD COLUMN deposit_amount VARCHAR(100) AFTER rental_period",
    'availability'   => "ALTER TABLE properties ADD COLUMN availability VARCHAR(100) AFTER map_link",
    'pet_policy'     => "ALTER TABLE properties ADD COLUMN pet_policy VARCHAR(100) AFTER availability"
];

foreach ($new_columns as $col => $sql) {
    $check = $conn->query("SHOW COLUMNS FROM properties LIKE '$col'");
    if ($check->num_rows == 0) {
        $conn->query($sql);
    }
}

// ৪. ডাটা রিসিভ করা
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

$p_name      = $conn->real_escape_string($_POST['property_name'] ?? '');
$p_type      = $conn->real_escape_string($_POST['property_type'] ?? '');
$price       = $conn->real_escape_string($_POST['total_price'] ?? '');
$r_period    = $conn->real_escape_string($_POST['rental_period'] ?? 'Monthly');
$deposit     = $conn->real_escape_string($_POST['deposit_amount'] ?? '');
$price_sqft  = $conn->real_escape_string($_POST['price_per_sqft'] ?? '');
$city        = $conn->real_escape_string($_POST['city'] ?? '');
$area        = $conn->real_escape_string($_POST['area'] ?? '');
$zip         = $conn->real_escape_string($_POST['zip_code'] ?? '');
$address     = $conn->real_escape_string($_POST['full_address'] ?? '');
$map         = $conn->real_escape_string($_POST['map_link'] ?? '');
$availability = $conn->real_escape_string($_POST['availability'] ?? '');
$pet_policy  = $conn->real_escape_string($_POST['pet_policy'] ?? '');
$status      = $conn->real_escape_string($_POST['construction_status'] ?? '');
$transaction = $conn->real_escape_string($_POST['transaction_type'] ?? 'Rent');
$size        = intval($_POST['prop_size'] ?? 0);
$beds        = intval($_POST['bedroom_count'] ?? 0);
$baths       = intval($_POST['bathroom_count'] ?? 0);
$balcony     = intval($_POST['balcony_count'] ?? 0);
$garage      = intval($_POST['garage_count'] ?? 0);
$handover    = $conn->real_escape_string($_POST['handover_date'] ?? '');
$building    = $conn->real_escape_string($_POST['building_type'] ?? '');
$road        = intval($_POST['road_width'] ?? 0);
$developer   = $conn->real_escape_string($_POST['developer_name'] ?? '');
$desc        = $conn->real_escape_string($_POST['property_description'] ?? '');
$features    = isset($_POST['features']) && is_array($_POST['features']) ? implode(", ", $_POST['features']) : "";

// ৫. ফাইল আপলোড হ্যান্ডলিং
$upload_path = __DIR__ . "/uploads/";
if (!file_exists($upload_path)) mkdir($upload_path, 0777, true);

$heading_img = "";
if (!empty($_FILES['heading_image']['name'])) {
    $heading_img = uniqid() . "_main." . pathinfo($_FILES['heading_image']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['heading_image']['tmp_name'], $upload_path . $heading_img);
}

$gallery_files = [];
for ($i = 1; $i <= 6; $i++) {
    $f = "gallery_image_" . $i;
    if (!empty($_FILES[$f]['name'])) {
        $fn = uniqid() . "_gal$i." . pathinfo($_FILES[$f]['name'], PATHINFO_EXTENSION);
        if (move_uploaded_file($_FILES[$f]['tmp_name'], $upload_path . $fn)) $gallery_files[] = $fn;
    }
}
$gallery_str = implode(",", $gallery_files);

$video_name = "";
if (!empty($_FILES['property_video']['name'])) {
    $video_name = uniqid() . "_video." . pathinfo($_FILES['property_video']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['property_video']['tmp_name'], $upload_path . $video_name);
}

// ৬. ডাটাবেজ ইনসার্ট (২৯টি কলাম এবং ২৯টি ভ্যালু)
$stmt = $conn->prepare("INSERT INTO properties (
    property_name, property_type, total_price, rental_period, deposit_amount, 
    price_per_sqft, city, area, zip_code, full_address, 
    map_link, availability, pet_policy, construction_status, transaction_type, 
    prop_size, bedroom_count, bathroom_count, balcony_count, garage_count, 
    features, handover_date, building_type, road_width, developer_name,
    heading_image, gallery_images, property_video, property_description
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

// Type string (15 's', 5 'i', 9 's' = Total 29)
$types = "sssssssssssssssiiiiisssssssss";

$stmt->bind_param(
    $types,
    $p_name,
    $p_type,
    $price,
    $r_period,
    $deposit,
    $price_sqft,
    $city,
    $area,
    $zip,
    $address,
    $map,
    $availability,
    $pet_policy,
    $status,
    $transaction,
    $size,
    $beds,
    $baths,
    $balcony,
    $garage,
    $features,
    $handover,
    $building,
    $road,
    $developer,
    $heading_img,
    $gallery_str,
    $video_name,
    $desc
);

ob_end_clean();

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Property posted successfully!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
