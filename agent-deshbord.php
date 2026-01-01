<?php
/* Template Name: agent-dashboard */
get_header();
$admin_name = "Admin Name";
?>

<style>
/* ... আপনার আগের CSS ... */

/* WordPress Admin Bar ফিক্স */
/* যখন লগইন করা থাকে, তখন বডিতে .admin-bar ক্লাস থাকে */
.admin-bar .fixed.inset-0 {
    top: 32px;
    /* ডিফল্ট অ্যাডমিন বারের উচ্চতা */
}

/* মোবাইল ডিভাইসে অ্যাডমিন বার বড় হয় (46px), তাই সেটিও হ্যান্ডেল করা দরকার */
@media screen and (max-width: 782px) {
    .admin-bar .fixed.inset-0 {
        top: 46px;
    }
}

/* সাইডবার যদি fixed পজিশনে থাকে তবে সেটাকেও অ্যাডমিন বারের নিচে নামাতে হবে */
.admin-bar #sidebar {
    padding-top: 0;
}
</style>

<div class="flex h-screen w-full bg-gray-50 overflow-hidden fixed inset-0">

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

    <div class="flex-1 flex flex-col min-w-0 h-full overflow-hidden">

        <header class="h-16 bg-white shadow-sm flex items-center justify-between px-8 flex-shrink-0 z-10">
            <h2 class="text-lg font-medium text-gray-700">Welcome, Admin</h2>
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                    A
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 bg-gray-50">
            <div class="max-w-7xl mx-auto">
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

                <div
                    class="bg-white rounded-xl shadow-sm p-10 text-center border-2 border-dashed border-gray-200 min-h-[1200px]">
                    <p class="text-gray-400">এখন স্ক্রল করলে সাইডবার এবং হেডার তাদের জায়গায় স্থির থাকবে।</p>
                    <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In odit placeat odio laborum doloribus
                        voluptate reiciendis, ipsam itaque facere recusandae exercitationem asperiores impedit
                        perferendis, esse, qui blanditiis consequatur quo aut doloremque cumque error. Suscipit
                        assumenda esse aliquid maxime voluptate quis, ipsum sunt quia distinctio rem. Quas odit sunt
                        deserunt excepturi dolor nesciunt expedita hic velit eaque quod animi temporibus, doloribus
                        nihil earum aperiam adipisci aspernatur? Fugit animi laboriosam enim dolore? Reiciendis dolorum
                        voluptatem atque cumque fugiat itaque nihil ipsam repellendus in molestias obcaecati illum velit
                        harum pariatur nisi eligendi, provident autem, quisquam quod. Cum modi blanditiis animi eius
                        architecto exercitationem eos expedita. Eos nostrum nesciunt amet quisquam similique ducimus
                        tenetur sequi, aut tempora aliquam sunt alias quaerat nam totam esse minus illo neque doloribus
                        reprehenderit provident reiciendis maxime laboriosam saepe. Animi veritatis, facere reiciendis,
                        quo in, sequi eos minus voluptate sed ducimus consectetur aspernatur obcaecati deserunt cum.
                        Sequi repellat voluptatem officia odit alias quasi enim ducimus modi perspiciatis saepe
                        molestias neque expedita autem labore dolore animi facilis, ipsam praesentium doloribus.
                        Officiis expedita ipsum aliquam nihil doloribus magnam exercitationem amet totam vel blanditiis
                        illum minus cumque quaerat dolor, ducimus iure id maxime reiciendis numquam. Mollitia ad, enim
                        vitae velit aliquam aliquid.</h2>
                </div>
            </div>
        </main>
    </div>
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

<?php get_footer(); ?>