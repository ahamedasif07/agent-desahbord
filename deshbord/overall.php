<div class="bg-gray-100">
    <div class="flex min-h-screen">

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Dashboard Overview</h2>
                    <p class="text-gray-600 mt-1">Welcome back! Here's your business summary</p>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-gray-600" id="currentDate"></span>

                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total Properties</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2" id="totalProperties">0</p>
                            <p class="text-green-600 text-sm mt-2">+12% from last month</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🏠</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Properties Sold</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2" id="propertiesSold">0</p>
                            <p class="text-green-600 text-sm mt-2">+8% from last month</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">✅</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Active Listings</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2" id="activeListings">0</p>
                            <p class="text-blue-600 text-sm mt-2">Currently available</p>
                        </div>
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">📋</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total Revenue</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2" id="totalRevenue">$0</p>
                            <p class="text-green-600 text-sm mt-2">+15% from last month</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">💰</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Sales Chart -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Monthly Sales</h3>
                    <canvas id="salesChart"></canvas>
                </div>

                <!-- Property Types Chart -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Property Types</h3>
                    <canvas id="propertyTypesChart"></canvas>
                </div>
            </div>

            <!-- Recent Properties & Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Recent Properties -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Recent Properties</h3>
                    <div class="space-y-4" id="recentProperties"></div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Recent Activity</h3>
                    <div class="space-y-4" id="recentActivity"></div>
                </div>
            </div>
        </main>

    </div>

    <script>
        // Set current date
        const dateOptions = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        document.getElementById('currentDate').textContent = new Date().toLocaleDateString('en-US', dateOptions);

        // Sample data - In real application, this would come from PHP/database
        const dashboardData = {
            totalProperties: 48,
            propertiesSold: 15,
            activeListings: 33,
            totalRevenue: 2500,
            recentProperties: [{
                    name: 'Luxury Villa',
                    location: 'Beverly Hills',
                    price: '$2,500,000',
                    status: 'Active'
                },
                {
                    name: 'Modern Apartment',
                    location: 'Downtown',
                    price: '$450,000',
                    status: 'Pending'
                },
                {
                    name: 'Beach House',
                    location: 'Malibu',
                    price: '$1,800,000',
                    status: 'Active'
                },
                {
                    name: 'Family Home',
                    location: 'Suburbs',
                    price: '$650,000',
                    status: 'Sold'
                }
            ],
            recentActivity: [{
                    action: 'New inquiry for Luxury Villa',
                    time: '2 hours ago'
                },
                {
                    action: 'Property listed: Modern Apartment',
                    time: '5 hours ago'
                },
                {
                    action: 'Contract signed for Beach House',
                    time: '1 day ago'
                },
                {
                    action: 'Price updated for Family Home',
                    time: '2 days ago'
                },
                {
                    action: 'New client registered',
                    time: '3 days ago'
                }
            ]
        };

        // Update stats with animation
        function animateValue(id, start, end, duration, prefix = '', suffix = '') {
            const obj = document.getElementById(id);
            const range = end - start;
            const increment = end > start ? 1 : -1;
            const stepTime = Math.abs(Math.floor(duration / range));
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                obj.textContent = prefix + current.toLocaleString() + suffix;
                if (current === end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        animateValue('totalProperties', 0, dashboardData.totalProperties, 1000);
        animateValue('propertiesSold', 0, dashboardData.propertiesSold, 1000);
        animateValue('activeListings', 0, dashboardData.activeListings, 1000);
        animateValue('totalRevenue', 0, dashboardData.totalRevenue, 1500, '$', '');

        // Sales Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 15, 25, 22, 30],
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Property Types Chart
        const typesCtx = document.getElementById('propertyTypesChart').getContext('2d');
        new Chart(typesCtx, {
            type: 'doughnut',
            data: {
                labels: ['Apartments', 'Houses', 'Villas', 'Commercial'],
                datasets: [{
                    data: [30, 25, 20, 25],
                    backgroundColor: [
                        'rgb(59, 130, 246)',
                        'rgb(16, 185, 129)',
                        'rgb(245, 158, 11)',
                        'rgb(139, 92, 246)'
                    ]
                }]
            },
            options: {
                responsive: true
            }
        });

        // Populate recent properties
        const recentPropsContainer = document.getElementById('recentProperties');
        dashboardData.recentProperties.forEach(prop => {
            const statusColor = prop.status === 'Sold' ? 'green' : prop.status === 'Pending' ? 'yellow' : 'blue';
            recentPropsContainer.innerHTML += `
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="font-semibold text-gray-800">${prop.name}</p>
                        <p class="text-sm text-gray-600">${prop.location}</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">${prop.price}</p>
                        <span class="text-xs px-2 py-1 bg-${statusColor}-100 text-${statusColor}-800 rounded">${prop.status}</span>
                    </div>
                </div>
            `;
        });

        // Populate recent activity
        const activityContainer = document.getElementById('recentActivity');
        dashboardData.recentActivity.forEach(activity => {
            activityContainer.innerHTML += `
                <div class="flex items-start gap-3 p-3 hover:bg-gray-50 rounded-lg">
                    <div class="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                    <div class="flex-1">
                        <p class="text-gray-800">${activity.action}</p>
                        <p class="text-sm text-gray-500">${activity.time}</p>
                    </div>
                </div>
            `;
        });
    </script>
</div>