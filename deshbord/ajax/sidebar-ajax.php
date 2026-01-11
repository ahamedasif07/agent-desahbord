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