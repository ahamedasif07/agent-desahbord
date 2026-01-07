<?php
// ইমেজ অ্যারে
$images = [
    "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1000",
    "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800",
    "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800",
    "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800",
    "https://images.unsplash.com/photo-1600573472591-ee6b68d14c68?w=800",
    "https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=800"
];
?>

<div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-4xl mx-auto">
    <div class="relative overflow-hidden bg-gray-200" style="height: 500px;">
        <!-- মেইন ইমেজ -->
        <img id="main-display-image" src="<?php echo $images[0]; ?>" alt="Property"
            class="w-full h-full object-cover transition-opacity duration-300 ease-in-out transform hover:scale-110 cursor-zoom-in">

        <div class="absolute top-4 left-4">
            <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-md">Featured</span>
        </div>
    </div>

    <div class="grid grid-cols-3 md:grid-cols-6 gap-2 p-4 bg-gray-100">
        <?php foreach ($images as $index => $url): ?>
            <!-- এখানে changeImage এ 'this' প্যারামিটার যোগ করা হয়েছে -->
            <img src="<?php echo $url; ?>" onclick="changeImage('<?php echo $url; ?>', this)"
                class="gallery-item w-full h-24 object-cover rounded cursor-pointer border-4 <?php echo $index == 0 ? 'border-green-500' : 'border-transparent'; ?> transition-all hover:opacity-80">
        <?php endforeach; ?>
    </div>
</div>