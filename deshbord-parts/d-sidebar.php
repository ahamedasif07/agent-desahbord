<?php
/* Template Name: agent-dashboard */

$admin_name = "Admin Name";
?>

<style>
    /* মেইন বডির ডিফল্ট স্ক্রল বন্ধ করা */
    html,
    body {
        height: 100% !important;
        margin: 0 !important;
        padding: 0 !important;

    }

    /* সাইডবার ট্রানজিশন */
    .sidebar-transition {
        transition: width 0.3s ease;
    }

    /* ওয়ার্ডপ্রেস অ্যাডমিন বার থাকলে ড্যাশবোর্ডকে নিচে নামানো */
    .admin-bar .fixed.inset-0 {
        top: 32px;
    }

    @media screen and (max-width: 782px) {
        .admin-bar .fixed.inset-0 {
            top: 46px;
        }
    }

    /* কাস্টম স্ক্রলবার ডিজাইন (ঐচ্ছিক - দেখতে সুন্দর লাগবে) */
    .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb {
        background-color: #cbd5e1;
        border-radius: 10px;
    }
</style>

<div class="   w-64 overflow-hidden -top-6  fixed inset-0">

    <aside id="sidebar"
        class="sidebar-transition w-64 bg-slate-900 text-white flex flex-col flex-shrink-0 h-full border-r border-slate-700">
        <div class="h-16 flex items-center justify-between px-4 border-b border-slate-700 flex-shrink-0">
            <span id="logo-text" class="text-xl font-bold truncate">MyPanel</span>
            <div onclick="toggleSidebar()" class="p-2 hover:bg-slate-800 rounded cursor-pointer">
                <i id="menuIcon" class="fa-solid fa-bars text-white text-xl"></i>
                <i id="closeIcon" class="fa-solid fa-xmark text-white text-xl hidden"></i>
            </div>
        </div>

        <nav class="flex-1 mt-4 px-2 space-y-2 overflow-y-auto custom-scrollbar">
            <a href="#" class="flex items-center p-3 hover:bg-blue-600 rounded-lg group">
                <i data-lucide="layout-dashboard" class="min-w-[24px]"></i>
                <span class="ml-3 sidebar-text">Dashboard</span>
            </a>
            <a href="#" class="flex items-center p-3 hover:bg-blue-600 rounded-lg group">
                <i data-lucide="users" class="min-w-[24px]"></i>
                <span class="ml-3 sidebar-text">Users</span>
            </a>
        </nav>

        <div class="p-4 border-t border-slate-700 flex-shrink-0">
            <a href="logout.php" class="flex items-center p-3 hover:bg-red-500 rounded-lg transition-colors">
                <i data-lucide="log-out" class="min-w-[24px]"></i>
                <span class="ml-3 sidebar-text">Logout</span>
            </a>
        </div>
    </aside>



</div>

<script>
    lucide.createIcons();

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const sidebarTexts = document.querySelectorAll('.sidebar-text');
        const logoText = document.getElementById('logo-text');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        if (sidebar.classList.contains('w-64')) {
            sidebar.classList.replace('w-64', 'w-20');
            logoText.classList.add('hidden');
            sidebarTexts.forEach(text => text.classList.add('hidden'));
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        } else {
            sidebar.classList.replace('w-20', 'w-64');
            setTimeout(() => {
                logoText.classList.remove('hidden');
                sidebarTexts.forEach(text => text.classList.remove('hidden'));
            }, 100);
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }
    }
</script>