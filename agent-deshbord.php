<?php
/*
Template Name: agent-dashboard
*/
get_header();

// Define admin name to avoid undefined variable
$admin_name = "Admin Name";
?>
<div class="flex h-screen overflow-hidden">

    <aside id="sidebar" class="sidebar-transition w-64 bg-slate-900 text-white flex flex-col">
        <div class="h-16 flex items-center justify-between px-4 border-b border-slate-700">
            <span id="logo-text" class="text-xl font-bold truncate">MyPanel</span>

            <div onclick="toggleSidebar()" class="p-2 hover:bg-slate-800 rounded cursor-pointer">
                <!-- Menu Icon -->
                <i id="menuIcon" class="fa-solid fa-bars text-white text-xl"></i>

                <!-- Close Icon -->
                <i id="closeIcon" class="fa-solid fa-xmark text-white text-xl hidden"></i>
            </div>
        </div>


        <nav class="flex-1 mt-4 px-2 space-y-2">
            <a href="#" class="flex items-center p-3 hover:bg-blue-600 rounded-lg group">
                <i data-lucide="layout-dashboard" class="min-w-[24px]"></i>
                <span class="ml-3 sidebar-text">Dashboard</span>
            </a>
            <a href="#" class="flex items-center p-3 hover:bg-blue-600 rounded-lg group">
                <i data-lucide="users" class="min-w-[24px]"></i>
                <span class="ml-3 sidebar-text">Users</span>
            </a>
            <a href="#" class="flex items-center p-3 hover:bg-blue-600 rounded-lg group">
                <i data-lucide="settings" class="min-w-[24px]"></i>
                <span class="ml-3 sidebar-text">Settings</span>
            </a>
        </nav>

        <div class="p-4 border-t border-slate-700">
            <a href="logout.php" class="flex items-center p-3 hover:bg-red-500 rounded-lg transition-colors">
                <i data-lucide="log-out" class="min-w-[24px]"></i>
                <span class="ml-3 sidebar-text">Logout</span>
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">

        <header class="h-16 bg-white shadow-sm flex items-center justify-between px-8">
            <h2 class="text-lg font-medium text-gray-700">Welcome, Admin</h2>
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                    A
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-gray-500">Total Revenue</p>
                    <h3 class="text-2xl font-bold">$12,850</h3>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-gray-500">New Users</p>
                    <h3 class="text-2xl font-bold">1,240</h3>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-gray-500">Active Sessions</p>
                    <h3 class="text-2xl font-bold">45</h3>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-10 text-center border-2 border-dashed border-gray-200">
                <p class="text-gray-400">Add your PHP dynamic data here...</p>
            </div>
        </main>
    </div>
</div>
<script>
    // Initialize Lucide Icons
    lucide.createIcons();

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const sidebarTexts = document.querySelectorAll('.sidebar-text');
        const logoText = document.getElementById('logo-text');

        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        if (sidebar.classList.contains('w-64')) {
            // 👉 Sidebar CLOSE
            sidebar.classList.replace('w-64', 'w-20');
            logoText.classList.add('hidden');
            sidebarTexts.forEach(text => text.classList.add('hidden'));

            // ICON TOGGLE
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

        } else {
            // 👉 Sidebar OPEN
            sidebar.classList.replace('w-20', 'w-64');

            setTimeout(() => {
                logoText.classList.remove('hidden');
                sidebarTexts.forEach(text => text.classList.remove('hidden'));
            }, 100);

            // ICON TOGGLE
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }
    }
</script>




<?php get_footer(); ?>