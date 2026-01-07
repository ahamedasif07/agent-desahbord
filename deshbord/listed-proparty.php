<?php

/**
 * Template Name: Agent Dashboard Property List
 */

// ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "agent-dashbord");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

// ডাটা নিয়ে আসা
$sql = "SELECT * FROM properties ORDER BY id DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $image_name = !empty($row['heading_image']) ? $row['heading_image'] : '';

        // ইমেজ পাথ লজিক: চাইল্ড থিম > deshbord > uploads
        if (!empty($image_name)) {
            // আপনার ফোল্ডারের বানান 'deshbord' হলে এটাই রাখুন
            $image_path = get_stylesheet_directory_uri() . "/deshbord/uploads/" . $image_name;
        } else {
            $image_path = "https://via.placeholder.com/400x300?text=No+Image";
        }
?>
        <div id="property-card-<?php echo $row['id']; ?>"
            class="group flex flex-col md:flex-row bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:border-green-200 transition-all duration-300 max-w-4xl mx-auto my-6">

            <div class="md:w-72 lg:w-80 h-56 md:h-auto overflow-hidden relative bg-gray-100">
                <img src="<?php echo $image_path; ?>" alt="<?php echo htmlspecialchars($row['property_name']); ?>"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                    onerror="this.src='https://via.placeholder.com/400x300?text=Image+Not+Found';">

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
                        <button onclick="openEditModal(<?php echo $row['id']; ?>)"
                            class="flex-1 sm:flex-none border border-green-100 text-green-600 hover:bg-green-600 hover:text-white font-semibold py-2 px-5 rounded-xl transition-all duration-200 text-sm text-center">
                            Edit
                        </button>
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

<div id="editModal"
    class="fixed inset-0 z-50 hidden overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
        <div class="p-6 border-b flex justify-between items-center sticky top-0 bg-white z-10">
            <h2 class="text-2xl font-bold text-gray-800">Edit Property</h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-red-500 text-2xl">&times;</button>
        </div>

        <form id="edit-property-form" class="p-4 md:p-10 space-y-8" enctype="multipart/form-data">
            <input type="hidden" name="property_id" id="edit_property_id">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Property Name</label>
                    <input type="text" name="property_name" id="edit_name"
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Price (BDT)</label>
                    <input type="text" name="total_price" id="edit_price"
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                        required>
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-6 border-t">
                <button type="button" onclick="closeModal()"
                    class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg">Cancel</button>
                <button type="submit"
                    class="px-10 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 shadow-md">Update
                    Property</button>
            </div>
        </form>
    </div>
</div>