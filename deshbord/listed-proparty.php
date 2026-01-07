<?php
// ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "agent-dashbord");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

$sql = "SELECT * FROM properties ORDER BY id DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $image_name = !empty($row['heading_image']) ? $row['heading_image'] : '';
        $image_path = "uploads/" . $image_name;
        if (empty($image_name)) {
            $image_path = "https://via.placeholder.com/400x300?text=No+Image";
        }
?>
        <div id="property-card-<?php echo $row['id']; ?>"
            class="group flex flex-col md:flex-row bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:border-green-200 transition-all duration-300 max-w-4xl mx-auto my-6">

            <div class="md:w-72 lg:w-80 h-56 md:h-auto overflow-hidden relative">
                <img src="<?php echo $image_path; ?>"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 left-4">
                    <span
                        class="bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow-md">
                        Featured
                    </span>
                </div>
            </div>

            <div class="p-5 md:p-6 flex flex-col justify-between flex-1">
                <div>
                    <div class="flex justify-between items-start mb-2">
                        <h2 class="text-xl font-bold text-gray-900 line-clamp-1 group-hover:text-green-600 transition-colors">
                            <?php echo htmlspecialchars($row['property_name']); ?>
                        </h2>
                        <div class="text-xl font-extrabold text-green-600 whitespace-nowrap">
                            ৳ <?php echo number_format($row['total_price']); ?>
                        </div>
                    </div>

                    <div class="flex items-center text-gray-500 text-sm mb-4">
                        <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <?php echo htmlspecialchars($row['area'] . ", " . $row['city']); ?>
                    </div>

                    <div class="grid grid-cols-3 gap-4 py-4 border-t border-gray-100 mt-2">
                        <div class="flex flex-col items-center md:items-start text-center md:text-left">
                            <span class="text-xs text-green-600 uppercase font-bold opacity-70">Bedrooms</span>
                            <span class="text-gray-800 font-bold"><?php echo $row['bedroom_count']; ?> Beds</span>
                        </div>
                        <div
                            class="flex flex-col items-center md:items-start text-center md:text-left border-x border-gray-100 px-4">
                            <span class="text-xs text-green-600 uppercase font-bold opacity-70">Bathrooms</span>
                            <span class="text-gray-800 font-bold"><?php echo $row['bathroom_count']; ?> Baths</span>
                        </div>
                        <div class="flex flex-col items-center md:items-start text-center md:text-left">
                            <span class="text-xs text-green-600 uppercase font-bold opacity-70">SqFt</span>
                            <span class="text-gray-800 font-bold"><?php echo $row['prop_size']; ?> ft²</span>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <div class="flex gap-2 w-full sm:w-auto">
                        <button onclick="deleteProperty(<?php echo $row['id']; ?>)"
                            class="flex-1 sm:flex-none border border-red-100 text-red-500 hover:bg-red-500 hover:text-white font-semibold py-2 px-5 rounded-xl transition-all duration-200 text-sm">
                            Delete
                        </button>
                        <a href="edit-property.php?id=<?php echo $row['id']; ?>"
                            class="flex-1 sm:flex-none border border-green-100 text-green-600 hover:bg-green-600 hover:text-white font-semibold py-2 px-5 rounded-xl transition-all duration-200 text-sm text-center">
                            Edit
                        </a>
                    </div>
                    <a href="#"
                        class="hidden sm:inline-flex items-center text-green-600 font-bold hover:underline text-sm group/link">
                        View Details
                        <svg class="w-4 h-4 ml-1 transform group-hover/link:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "
    <div class='max-w-4xl mx-auto my-10 p-12 text-center bg-white rounded-2xl border-2 border-dashed border-green-100'>
        <p class='text-green-600 font-medium opacity-80'>No properties listed yet. Start by adding one!</p>
    </div>";
}
$conn->close();
?>