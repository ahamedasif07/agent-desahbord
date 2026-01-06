<?php
// ডাটাবেজ কানেকশন (চেক করুন ইউজার ও পাসওয়ার্ড ঠিক আছে কিনা)
$conn = new mysqli("localhost", "root", "", "agent-dashbord");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

// সব ডাটা দেখানোর জন্য কুয়েরি
$sql = "SELECT * FROM properties ORDER BY id DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // লুপের মাধ্যমে সব ডাটা প্রিন্ট করা
    while ($row = $result->fetch_assoc()) {
        $image_name = !empty($row['heading_image']) ? $row['heading_image'] : '';
        $image_path = "uploads/" . $image_name;

        // ফাইলটি আসলে ফোল্ডারে আছে কিনা চেক করা
        if (empty($image_name)) {
            $image_path = "https://via.placeholder.com/400x300?text=No+Image";
        }
?>
        <div
            class="flex flex-col md:flex-row bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition duration-300 max-w-4xl mx-auto my-5">
            <div class="md:w-1/3 h-52 md:h-auto overflow-hidden">
                <img src="<?php echo $image_path; ?>" class="w-full h-full object-cover">
            </div>
            <div class="p-6 md:w-2/3 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2"><?php echo htmlspecialchars($row['property_name']); ?></h2>
                    <div class="text-2xl font-semibold text-green-600 mb-3">৳ <?php echo number_format($row['total_price']); ?>
                    </div>
                    <div class="text-gray-500 text-sm">
                        Location: <?php echo htmlspecialchars($row['area'] . ", " . $row['city']); ?>
                    </div>
                    <p class="mt-2 text-gray-600 text-sm">
                        <?php echo $row['bedroom_count']; ?> Beds | <?php echo $row['bathroom_count']; ?> Baths |
                        <?php echo $row['prop_size']; ?> sqft
                    </p>
                </div>
                <div class="mt-4 flex gap-2">
                    <a href="#" class="bg-blue-600 text-white py-2 px-6 rounded-lg">Details</a>
                    <button onclick="deleteProperty(<?php echo $row['id']; ?>)"
                        class="bg-red-500 text-white py-2 px-6 rounded-lg">Delete</button>
                </div>
            </div>
        </div>
<?php
    } // লুপ শেষ
} else {
    echo "<p class='text-center text-gray-500 py-10'>No properties found yet.</p>";
}
$conn->close();
?>