<?php

/**
 * Property Submit Handler
 * Path: wp-content/themes/astra-child/deshbord/property-submit.php
 */

// আউটপুট বাফারিং শুরু (যাতে কোনো ওয়ার্নিং JSON নষ্ট না করে)
ob_start();

// Error reporting (development এর জন্য ১ দিন, প্রোডাকশনে ০ দিবেন)
error_reporting(E_ALL);
ini_set('display_errors', 0); // ১ দিলে ব্রাউজারে এরর দেখাবে যা AJAX এর জন্য ক্ষতিকর

// JSON response এর জন্য header set করা
header('Content-Type: application/json');

// ১. ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

// কানেকশন চেক
if ($conn->connect_error) {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

// Character set সেট করা (বাংলা text এর জন্য)
$conn->set_charset("utf8mb4");

// ২. টেবিল না থাকলে অটোমেটিক তৈরি করার কুয়েরি
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

if (!$conn->query($table_sql)) {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Table creation failed: ' . $conn->error]);
    exit;
}

// ৩. Upload folder setup
// যেহেতু ফাইলটি deshbord ফোল্ডারের ভেতরে, তাই শুধু /uploads/ দিলেই হবে
$upload_path = __DIR__ . "/uploads/";

if (!file_exists($upload_path)) {
    if (!@mkdir($upload_path, 0777, true)) {
        ob_end_clean();
        echo json_encode(['status' => 'error', 'message' => 'Uploads folder create error. Please create it manually.']);
        exit;
    }
}

// ৪. ডাটা সাবমিট হ্যান্ডলিং
// AJAX থেকে পাঠালে 'submit' প্যারামিটার না থাকতে পারে, তাই $_POST চেক করা হচ্ছে
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

// Required fields চেক করা
$required_fields = ['property_name', 'property_type', 'total_price', 'city', 'area', 'full_address', 'construction_status', 'prop_size'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        ob_end_clean();
        echo json_encode(['status' => 'error', 'message' => 'Missing field: ' . $field]);
        exit;
    }
}

// টেক্সট ডাটা রিসিভ
$p_name = $conn->real_escape_string($_POST['property_name']);
$p_type = $conn->real_escape_string($_POST['property_type']);
$price = $conn->real_escape_string($_POST['total_price']);
$price_sqft = $conn->real_escape_string($_POST['price_per_sqft'] ?? '');
$city = $conn->real_escape_string($_POST['city']);
$area = $conn->real_escape_string($_POST['area']);
$zip = $conn->real_escape_string($_POST['zip_code'] ?? '');
$address = $conn->real_escape_string($_POST['full_address']);
$map = $conn->real_escape_string($_POST['map_link'] ?? '');
$status = $conn->real_escape_string($_POST['construction_status']);
$transaction = $conn->real_escape_string($_POST['transaction_type'] ?? 'New');
$size = intval($_POST['prop_size']);
$beds = intval($_POST['bedroom_count'] ?? 0);
$baths = intval($_POST['bathroom_count'] ?? 0);
$balcony = intval($_POST['balcony_count'] ?? 0);
$garage = intval($_POST['garage_count'] ?? 0);
$handover = $conn->real_escape_string($_POST['handover_date'] ?? '');
$building = $conn->real_escape_string($_POST['building_type'] ?? 'RCC');
$road = intval($_POST['road_width'] ?? 0);
$developer = $conn->real_escape_string($_POST['developer_name'] ?? '');
$desc = $conn->real_escape_string($_POST['property_description'] ?? '');
$features = isset($_POST['features']) && is_array($_POST['features']) ? implode(", ", $_POST['features']) : "";

// ৫. ব্যানার ইমেজ আপলোড
$heading_img = "";
if (!empty($_FILES['heading_image']['name'])) {
    $file_ext = strtolower(pathinfo($_FILES['heading_image']['name'], PATHINFO_EXTENSION));
    $heading_img = uniqid() . "_main." . $file_ext;
    if (!move_uploaded_file($_FILES['heading_image']['tmp_name'], $upload_path . $heading_img)) {
        ob_end_clean();
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload main image']);
        exit;
    }
} else {
    ob_end_clean();
    echo json_encode(['status' => 'error', 'message' => 'Main image is required']);
    exit;
}

// ৬. গ্যালারি ইমেজ আপলোড
$gallery_files = [];
for ($i = 1; $i <= 6; $i++) {
    $field_name = "gallery_image_" . $i;
    if (!empty($_FILES[$field_name]['name'])) {
        $file_ext = strtolower(pathinfo($_FILES[$field_name]['name'], PATHINFO_EXTENSION));
        $filename = uniqid() . "_gal" . $i . "." . $file_ext;
        if (move_uploaded_file($_FILES[$field_name]['tmp_name'], $upload_path . $filename)) {
            $gallery_files[] = $filename;
        }
    }
}
$gallery_str = implode(",", $gallery_files);

// ৭. ভিডিও আপলোড
$video_name = "";
if (!empty($_FILES['property_video']['name'])) {
    $file_ext = strtolower(pathinfo($_FILES['property_video']['name'], PATHINFO_EXTENSION));
    $video_name = uniqid() . "_video." . $file_ext;
    move_uploaded_file($_FILES['property_video']['tmp_name'], $upload_path . $video_name);
}

// ৮. ডাটাবেজে ডাটা পাঠানো
$stmt = $conn->prepare("INSERT INTO properties (
    property_name, property_type, total_price, price_per_sqft, 
    city, area, zip_code, full_address, map_link, 
    construction_status, transaction_type, prop_size, bedroom_count, 
    bathroom_count, balcony_count, garage_count, features, 
    handover_date, building_type, road_width, developer_name,
    heading_image, gallery_images, property_video, property_description
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

// টাইপ স্ট্রিং চেক (মোট ২৫টি: s=১৯টি, i=৬টি)
// sss ssss ssss (11) + iiii i (5) + sss (3) + i (1) + sssss (5) = 25
$types = "sssssssssssiiiiisssisssss";

$stmt->bind_param(
    $types,
    $p_name,
    $p_type,
    $price,
    $price_sqft,
    $city,
    $area,
    $zip,
    $address,
    $map,
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

ob_end_clean(); // সব বাফার পরিষ্কার করা

if ($stmt->execute()) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Property posted successfully!',
        'property_id' => $stmt->insert_id
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
