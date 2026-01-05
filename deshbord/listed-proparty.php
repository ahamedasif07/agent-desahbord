<?php
// ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "agent-dashbord");
$conn->set_charset("utf8mb4");

// নতুন ডাটা আগে দেখানোর জন্য ORDER BY id DESC
$sql = "SELECT * FROM properties ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // ইমেজ পাথ ঠিক করা ( uploads ফোল্ডার থেকে)
        $image_path = "uploads/" . $row['heading_image'];
        if (empty($row['heading_image'])) {
            $image_path = "https://via.placeholder.com/400x300?text=No+Image";
        }
?>
        <!-- প্রপার্টি কার্ড -->
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
                <div class="mt-4">
                    <a href="#" class="inline-block bg-blue-600 text-white font-medium py-2 px-6 rounded-lg">Details Dekhun</a>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "<p class='text-center text-gray-500 py-10'>No properties found yet.</p>";
}
$conn->close();
?>