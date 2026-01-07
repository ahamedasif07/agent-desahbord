<?php
global $wpdb; // ওয়ার্ডপ্রেসের গ্লোবাল ডাটাবেজ অবজেক্ট

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($id > 0) {
    // প্রপার্টি টেবিলের নাম আপনার ডাটাবেজ অনুযায়ী ঠিক করে নিন
    $table_name = 'properties';
    $property = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $id), ARRAY_A);
}

if (!$property) {
    echo "Property not found!";
    return;
}
