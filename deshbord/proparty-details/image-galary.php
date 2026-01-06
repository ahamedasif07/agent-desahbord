<div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-4xl mx-auto">

    <div class="relative overflow-hidden bg-gray-200" style="height: 500px;">
        <img id="main-display-image" src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1000"
            alt="Property"
            class="w-full h-full object-cover transition-transform duration-700 ease-in-out transform hover:scale-125 cursor-zoom-in">

        <div class="absolute top-4 left-4">
            <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-md">Featured</span>
        </div>
    </div>

    <div class="grid grid-cols-3 md:grid-cols-6 gap-2 p-4 bg-gray-100">
        <img onclick="updateBanner(this)" src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800"
            class="gallery-item w-full h-24 object-cover rounded cursor-pointer border-4 border-green-500 transition-all hover:opacity-80">

        <img onclick="updateBanner(this)" src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800"
            class="gallery-item w-full h-24 object-cover rounded cursor-pointer border-4 border-transparent transition-all hover:opacity-80">

        <img onclick="updateBanner(this)" src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800"
            class="gallery-item w-full h-24 object-cover rounded cursor-pointer border-4 border-transparent transition-all hover:opacity-80">

        <img onclick="updateBanner(this)" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800"
            class="gallery-item w-full h-24 object-cover rounded cursor-pointer border-4 border-transparent transition-all hover:opacity-80">

        <img onclick="updateBanner(this)" src="https://images.unsplash.com/photo-1600573472591-ee6b68d14c68?w=800"
            class="gallery-item w-full h-24 object-cover rounded cursor-pointer border-4 border-transparent transition-all hover:opacity-80">

        <img onclick="updateBanner(this)" src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=800"
            class="gallery-item w-full h-24 object-cover rounded cursor-pointer border-4 border-transparent transition-all hover:opacity-80">
    </div>
</div>

<script>
    function updateBanner(element) {
        // ১. মেইন ইমেজটি ধরুন
        const mainImg = document.getElementById('main-display-image');

        // ২. মেইন ইমেজের সোর্স পরিবর্তন করুন (এনিমেশন স্মুথ করার জন্য একটু ফেড ইফেক্ট দিতে পারেন)
        mainImg.style.opacity = '0';

        setTimeout(() => {
            mainImg.src = element.src;
            mainImg.style.opacity = '1';
        }, 150); // ছোট একটা ডিলে দিলে ইউজার এক্সপেরিয়েন্স ভালো হয়

        // ৩. সব থাম্বনেইল থেকে গ্রিন বর্ডার রিমুভ করুন
        const allItems = document.querySelectorAll('.gallery-item');
        allItems.forEach(item => {
            item.classList.replace('border-green-500', 'border-transparent');
        });

        // ৪. শুধুমাত্র ক্লিক করা থাম্বনেইলে গ্রিন বর্ডার দিন
        element.classList.replace('border-transparent', 'border-green-500');
    }
</script>