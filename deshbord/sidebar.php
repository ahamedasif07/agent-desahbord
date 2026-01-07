<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --header-height: 60px;
            --sidebar-width: 250px;
            --primary-color: #276737;
            --secondary-color: #0a4e25;
            --text-light: #ecf0f1;
            --bg-light: #f4f6f7;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        .dashboard-container {
            display: grid;
            grid-template-columns: var(--sidebar-width) 1fr;
            grid-template-rows: var(--header-height) 1fr;
            grid-template-areas:
                "header header"
                "aside main";
            height: 100vh;
            width: 100vw;
            overflow: hidden;
        }

        header {
            grid-area: header;
            background-color: var(--primary-color);
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            z-index: 101;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .menu-btn {
            display: none;
            cursor: pointer;
            font-size: 24px;
            user-select: none;
        }

        aside {
            grid-area: aside;
            background-color: var(--secondary-color);
            color: var(--text-light);
            display: flex;
            flex-direction: column;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease-in-out;
            z-index: 100;
        }

        aside ul {
            list-style: none;
            padding-top: 10px;
        }

        aside li {
            padding: 15px 20px;
            cursor: pointer;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: background 0.2s;
        }

        aside li:hover,
        aside li.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 4px solid #3498db;
        }

        main {
            grid-area: main;
            background-color: var(--bg-light);
            padding: 20px;
            overflow-y: auto;
            position: relative;
        }

        .content-card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            animation: fadeIn 0.4s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99;
            opacity: 0;
            transition: opacity 0.3s;
        }

        /* Loading Spinner */
        .loading {
            display: none;
            text-align: center;
            padding: 40px;
        }

        .loading.show {
            display: block;
        }

        @media (max-width: 768px) {
            .dashboard-container {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "header"
                    "main";
            }

            .menu-btn {
                display: block;
            }

            aside {
                position: fixed;
                top: var(--header-height);
                left: 0;
                bottom: 0;
                width: var(--sidebar-width);
                transform: translateX(-100%);
                box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
            }

            aside.show {
                transform: translateX(0);
            }

            .overlay.show {
                display: block;
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Header -->
        <header>
            <div class="brand">
                <span class="menu-btn" onclick="toggleSidebar()">☰</span>
                <h3 class="text-white text-2xl md:text-3xl font-semibold">Admin Panel</h3>
            </div>
            <div class="flex items-center gap-3">
                <img src="https://i.pravatar.cc/150?u=admin" alt="Admin"
                    class="md:w-12 md:h-12 w-10 h-10 border border-gray-200 rounded-full object-cover">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-100 leading-tight">Admin</span>
                    <span class="text-sm text-gray-100">Elite Realty Agency</span>
                </div>
            </div>
        </header>

        <!-- Sidebar -->
        <aside id="sidebar">
            <nav class="flex h-full flex-col justify-between pb-3">
                <ul>
                    <li data-page="create-new" class="active">Create New</li>
                    <li data-page="Listed-proparty">Listed Proparty</li>
                    <li data-page="analytics">Analytics</li>
                    <li data-page="messages">Messages</li>
                    <li data-page="details">details</li>
                    <li data-page="login">login</li>
                    <li data-page="settings">Settings</li>
                </ul>

                <div class="flex justify-center">
                    <button
                        class="flex w-[80%] cursor-pointer justify-center items-center gap-3 bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" x2="9" y1="12" y2="12"></line>
                        </svg>
                        <span class="text-base">Logout</span>
                    </button>
                </div>
            </nav>
        </aside>

        <div class="overlay" id="overlay" onclick="toggleSidebar()"></div>

        <!-- Main Content -->
        <main id="main-content">
            <div class="loading" id="loading">
                <svg class="inline w-12 h-12 text-gray-200 animate-spin fill-green-600" viewBox="0 0 100 101"
                    fill="none">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
                <p class="mt-4 text-gray-600">Loading...</p>
            </div>

            <!-- Default content will be loaded by PHP -->
            <div id="content-area">
                <?php
                // Default page - Create New
                get_template_part('/deshbord/add-proparty');
                ?>
            </div>
        </main>
    </div>

    <script>
        const mainContent = document.getElementById('content-area');
        const loading = document.getElementById('loading');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const menuItems = document.querySelectorAll('aside li');

        // Menu click handler
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                const pageName = this.getAttribute('data-page');
                loadPage(pageName, this);
            });
        });

        // Load page function
        function loadPage(pageName, element) {
            // Show loading
            loading.classList.add('show');
            mainContent.style.opacity = '0.3';

            // Update active menu
            menuItems.forEach(item => item.classList.remove('active'));
            if (element) element.classList.add('active');

            // Fetch content via AJAX
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `action=load_dashboard_page&page=${pageName}`
                })
                .then(response => response.text())
                .then(html => {
                    mainContent.innerHTML = html;
                    loading.classList.remove('show');
                    mainContent.style.opacity = '1';
                })
                .catch(error => {
                    console.error('Error:', error);
                    mainContent.innerHTML =
                        '<div class="content-card"><h1>Error</h1><p>Failed to load content.</p></div>';
                    loading.classList.remove('show');
                    mainContent.style.opacity = '1';
                });

            // Close sidebar on mobile
            if (window.innerWidth <= 768) {
                closeSidebar();
            }
        }

        function toggleSidebar() {
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        }

        function closeSidebar() {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        }
    </script>

    <!-- mordal open js -->
    <!-- add popartuy modal -->
    <script>
        // Form Submit Handler
        $('#property-form').on('submit', function(e) {
            e.preventDefault();

            // Show success modal
            const modal = document.getElementById('successModal');
            modal.style.display = 'flex';

            // Optional: Send form data to server
            // const formData = new FormData(this);
            // fetch('/submit-property', { method: 'POST', body: formData });
        });

        // মডাল বন্ধ করার ফাংশন
        function closeSuccessModal() {
            $('#successModal').hide();
        }

        // নতুন প্রপার্টি অ্যাড করার জন্য স্ক্রল আপ
        function addAnotherProperty() {
            $('#successModal').hide();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }


        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeSuccessModal();
            }
        });
    </script>

    <!-- masage mordal  js -->
    <script>
        function openMessageModal(name, message, image) {
            document.getElementById('modalName').innerText = name;
            document.getElementById('modalMsg').innerText = message;
            document.getElementById('modalImg').src = image;

            const modal = document.getElementById('msgModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeMessageModal() {
            const modal = document.getElementById('msgModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function sendReply(e) {
            e.preventDefault();
            const reply = document.getElementById('replyText').value;
            alert("Reply sent: " + reply);
            closeMessageModal();
            document.getElementById('replyText').value = "";
        }
    </script>
</body>