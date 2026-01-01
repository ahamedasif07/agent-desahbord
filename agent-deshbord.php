<?php
/*
Template Name: agent-deshbord
*/
get_header();
?>

<div>
    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-900 text-white flex-shrink-0 hidden md:flex flex-col">
            <div class="p-6 text-2xl font-bold border-b border-slate-800">
                <span class="text-blue-500">Estate</span>Admin
            </div>
            <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-800 transition">
                    <span class="mr-3 text-xl">🏠</span> Total Listings
                </a>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-800 transition">
                    <span class="mr-3 text-xl text-green-500">🟢</span> Available Listings
                </a>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-800 transition">
                    <span class="mr-3 text-xl text-yellow-500">🟡</span> Under Application
                </a>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-800 transition">
                    <span class="mr-3 text-xl text-red-500">🔴</span> Rented Listings
                </a>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-800 transition">
                    <span class="mr-3 text-xl">📩</span> New Leads
                </a>
            </nav>
            <div class="p-4 border-t border-slate-800 text-sm text-slate-400">
                &copy; 2024 Admin Panel
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- NAVBAR -->
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-8">
                <!-- Profile Section -->
                <div class="flex items-center space-x-3">
                    <div
                        class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
                        <?php echo strtoupper(substr("Admin Name", 0, 1)); ?>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-800">Admin Name</p>
                        <p class="text-xs text-gray-500">Super Admin</p>
                    </div>
                </div>

                <!-- Login/Logout Button -->
                <div>
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg text-sm font-medium transition duration-300">
                        Logout <i class="fa-solid fa-right-from-bracket ml-1"></i>
                    </button>
                </div>
            </header>

            <!-- MAIN BODY -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-8">

                <!-- DASHBOARD CARDS -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Applicant Card -->
                    <div
                        class="bg-blue-600 p-6 rounded-2xl text-white shadow-lg transform hover:scale-105 transition duration-300">
                        <p class="text-blue-100 text-sm uppercase font-bold">Applicant</p>
                        <h3 class="text-3xl font-bold mt-1">128</h3>
                        <p class="text-xs mt-2 italic text-blue-200">+5 since yesterday</p>
                    </div>

                    <!-- Process Card -->
                    <div
                        class="bg-orange-500 p-6 rounded-2xl text-white shadow-lg transform hover:scale-105 transition duration-300">
                        <p class="text-orange-100 text-sm uppercase font-bold">Process</p>
                        <h3 class="text-3xl font-bold mt-1">45</h3>
                        <p class="text-xs mt-2 italic text-orange-100">Pending review</p>
                    </div>

                    <!-- Complete Card -->
                    <div
                        class="bg-emerald-500 p-6 rounded-2xl text-white shadow-lg transform hover:scale-105 transition duration-300">
                        <p class="text-emerald-100 text-sm uppercase font-bold">Complete</p>
                        <h3 class="text-3xl font-bold mt-1">1,240</h3>
                        <p class="text-xs mt-2 italic text-emerald-100">Successfully closed</p>
                    </div>

                    <!-- Waiting Card -->
                    <div
                        class="bg-amber-400 p-6 rounded-2xl text-white shadow-lg transform hover:scale-105 transition duration-300">
                        <p class="text-amber-100 text-sm uppercase font-bold">Waiting</p>
                        <h3 class="text-3xl font-bold mt-1">18</h3>
                        <p class="text-xs mt-2 italic text-amber-100">Awaiting feedback</p>
                    </div>
                </div>

                <!-- ACTION BAR -->
                <div class="bg-white p-4 rounded-xl shadow-sm flex items-center justify-between border border-gray-100">
                    <button
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-lg font-semibold flex items-center shadow-md transition">
                        Add More Properties
                    </button>

                    <button
                        class="bg-slate-800 hover:bg-slate-900 text-white h-10 w-10 rounded-full flex items-center justify-center shadow-lg transition transform active:scale-90">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

                <!-- TABLE AREA (PLACEHOLDER) -->
                <div
                    class="mt-8 bg-white rounded-xl shadow-sm border border-gray-100 h-64 flex items-center justify-center text-gray-400 border-dashed border-2">
                    Your Main Content (Tables/Lists) goes here...
                </div>

            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>