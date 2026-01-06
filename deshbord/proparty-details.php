<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concrete Esteem - Property Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- Header Section -->
    <div class="bg-green-700 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold">Concrete Esteem</h1>
                    <p class="text-green-100 mt-1">Uttara Sector 4, Dhaka</p>
                </div>
                <div class="text-right">
                    <p class="text-sm text-green-100">Price</p>
                    <p class="text-2xl md:text-3xl font-bold">৳ 3.15 Cr</p>
                    <p class="text-xs text-green-100">৳13,000 per sqft</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Main Content - Left Side -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Image Gallery -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <!-- Main Image -->
                    <div class="relative">
                        <img id="mainImage" src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800"
                            alt="Property" class="w-full h-96 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                Featured
                            </span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                Ready
                            </span>
                        </div>
                    </div>

                    <!-- Gallery Thumbnails -->
                    <div class="grid grid-cols-3 md:grid-cols-6 gap-2 p-4 bg-gray-50">
                        <img onclick="changeImage(this.src)"
                            src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=200"
                            class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-75 transition border-2 border-green-500">
                        <img onclick="changeImage(this.src)"
                            src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=200"
                            class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-75 transition">
                        <img onclick="changeImage(this.src)"
                            src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=200"
                            class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-75 transition">
                        <img onclick="changeImage(this.src)"
                            src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=200"
                            class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-75 transition">
                        <img onclick="changeImage(this.src)"
                            src="https://images.unsplash.com/photo-1600573472591-ee6b68d14c68?w=200"
                            class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-75 transition">
                        <img onclick="changeImage(this.src)"
                            src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=200"
                            class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-75 transition">
                    </div>
                </div>

                <!-- Property Overview -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b-2 border-green-500 pb-2">
                        Property Overview
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-10 h-10 mx-auto mb-2 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z">
                                </path>
                            </svg>
                            <p class="text-2xl font-bold text-gray-800">2426</p>
                            <p class="text-sm text-gray-600">Sqft</p>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-10 h-10 mx-auto mb-2 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <p class="text-2xl font-bold text-gray-800">4</p>
                            <p class="text-sm text-gray-600">Bedrooms</p>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-10 h-10 mx-auto mb-2 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                            </svg>
                            <p class="text-2xl font-bold text-gray-800">5</p>
                            <p class="text-sm text-gray-600">Bathrooms</p>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-10 h-10 mx-auto mb-2 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                            <p class="text-2xl font-bold text-gray-800">5</p>
                            <p class="text-sm text-gray-600">Balconies</p>
                        </div>
                    </div>
                </div>

                <!-- Property Description -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b-2 border-green-500 pb-2">
                        Property Description
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        Welcome to Concrete Esteem, a premium residential project located in the heart of Uttara Sector
                        4, Dhaka. This stunning 4-bedroom apartment offers modern living with world-class amenities and
                        superior construction quality.
                        <br><br>
                        Spread across 2426 sqft, this property features spacious rooms, 5 well-designed bathrooms, and 5
                        beautiful balconies offering panoramic views. The apartment comes with dedicated garage space
                        and is part of a building with top-notch security features.
                        <br><br>
                        Located in one of Dhaka's most sought-after residential areas, Concrete Esteem provides easy
                        access to schools, hospitals, shopping centers, and major transport routes. The building is
                        equipped with modern facilities including lifts, generator backup, CCTV surveillance, and 24/7
                        security.
                        <br><br>
                        Perfect for families looking for a comfortable and luxurious lifestyle in a prime location.
                        Ready for immediate possession!
                    </p>
                </div>

                <!-- Property Features -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b-2 border-green-500 pb-2">
                        Property Features & Amenities
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Mosque</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">24/7 Security</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Lift</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Fire Exit</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Parking</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Generator</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">CCTV</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Gym</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Swimming Pool</span>
                        </div>
                    </div>
                </div>

                <!-- Video Tour (Optional) -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b-2 border-green-500 pb-2">
                        Property Video Tour
                    </h2>
                    <div class="relative bg-gray-900 rounded-lg overflow-hidden" style="padding-bottom: 56.25%;">
                        <video controls class="absolute top-0 left-0 w-full h-full"
                            poster="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800">
                            <source src="property-tour.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <!-- Location Map -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b-2 border-green-500 pb-2">
                        Location Map
                    </h2>
                    <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.5364823176815!2d90.38753931543298!3d23.869647084501756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c5e59c9b2d4021!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1234567890123!5m2!1sen!2sbd"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                    <p class="text-sm text-gray-600 mt-3">
                        <svg class="inline w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        House 12, Road 5, Uttara Sector 4, Dhaka - 1230
                    </p>
                </div>
            </div>

            <!-- Sidebar - Right Side -->
            <div class="lg:col-span-1 space-y-6">

                <!-- Contact Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 ">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Contact Agent</h3>
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?u=agent" alt="Agent"
                            class="w-16 h-16 rounded-full border-2 border-green-500">
                        <div>
                            <p class="font-bold text-gray-800">Elite Realty Agency</p>
                            <p class="text-sm text-gray-600">Property Consultant</p>
                        </div>
                    </div>

                    <form class="space-y-4">
                        <input type="text" placeholder="Your Name" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <input type="email" placeholder="Your Email" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <input type="tel" placeholder="Your Phone" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <textarea rows="4" placeholder="Your Message" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                        <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg transition">
                            Send Message
                        </button>
                    </form>

                    <div class="mt-6 pt-6 border-t border-gray-200 space-y-3">
                        <a href="tel:+8801234567890"
                            class="flex items-center gap-3 text-gray-700 hover:text-green-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                </path>
                            </svg>
                            <span>+880 123-456-7890</span>
                        </a>
                        <a href="mailto:info@eliterealty.com"
                            class="flex items-center gap-3 text-gray-700 hover:text-green-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span>info@eliterealty.com</span>
                        </a>
                    </div>
                </div>

                <!-- Property Details Card -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-b-2 border-green-500 pb-2">
                        Property Details
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Property Type:</span>
                            <span class="font-semibold text-gray-800">Apartment</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Transaction:</span>
                            <span class="font-semibold text-gray-800">New</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Status:</span>
                            <span class="font-semibold text-green-600">Ready</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Year Built:</span>
                            <span class="font-semibold text-gray-800">2024</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Building Type:</span>
                            <span class="font-semibold text-gray-800">RCC Frame</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Road Width:</span>
                            <span class="font-semibold text-gray-800">40 ft</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Garage:</span>
                            <span class="font-semibold text-gray-800">1 Car</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600">Developer:</span>
                            <span class="font-semibold text-gray-800">Navana Real Estate</span>
                        </div>
                    </div>
                </div>

                <!-- Share Property -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Share Property</h3>
                    <div class="flex gap-3">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-lg transition">
                            <svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">
                                </path>
                            </svg>
                        </button>
                        <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-lg transition">
                            <svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.