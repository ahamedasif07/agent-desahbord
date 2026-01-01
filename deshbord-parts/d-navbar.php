<?php
$admin_name = "Admin Name";
?>
<header
    class="h-16 bg-white shadow-sm flex items-center justify-between px-8 border-b border-gray-200 fixed w-full z-30">
    <!-- Left Section -->
    <div class="flex items-center space-x-4">
        <!-- Menu Icon -->
        <div id="menuToggle" class="text-2xl cursor-pointer hover:text-indigo-600 transition md:hidden">
            ☰
        </div>

        <!-- Admin Profile -->
        <div class="flex items-center space-x-3">
            <div
                class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold ring-2 ring-indigo-100">
                <?= strtoupper(substr($admin_name, 0, 1)); ?>
            </div>
            <div class="leading-tight">
                <p class="text-sm font-bold text-gray-800"><?= $admin_name; ?></p>
                <p class="text-xs text-green-500 font-medium">Online</p>
            </div>
        </div>
    </div>

    <!-- Logout Button -->
    <div>
        <button
            class="bg-gray-100 hover:bg-red-50 text-gray-700 hover:text-red-600 px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 border border-gray-200">
            Log Out <i class="fa-solid fa-right-from-bracket ml-1"></i>
        </button>
    </div>
</header>

<!-- ================= JS Toggle Feature ================= -->
<script>
    const menuToggle = document.getElementById("menuToggle");
    // Sidebar ID যেটা তুমি অন্য component এ রেখেছ
    const sidebar = document.getElementById("sidebar");

    menuToggle.addEventListener("click", () => {
        // Tailwind CSS class toggle
        sidebar.classList.toggle("-translate-x-full");
    });
</script>