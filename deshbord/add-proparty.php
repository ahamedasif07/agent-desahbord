<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ✅ এই লাইনটা যোগ করুন -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">

    <div class="md:p-6">
        <div class="w-full mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-green-700 p-6">
                <h2 class="font-bold text-white uppercase text-center text-2xl">Post Your Property</h2>
            </div>

            <form id="property-form" class="p-4 md:p-10 space-y-12">

                <div class="w-full">
                    <h3 class="text-xl font-semibold border-b-2 border-green-500 pb-2 mb-6">Basic Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Property Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="property_name" placeholder="e.g. Concrete Esteem"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                required>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Property Type <span
                                    class="text-red-500">*</span></label>
                            <select name="property_type"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                required>
                                <option value="">Select Type</option>
                                <option value="Apartment">Apartment/Flats</option>
                                <option value="Land">Land</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Total Price (BDT) <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="total_price" placeholder="e.g. 3.15 Cr."
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                required>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Price per sqft</label>
                            <input type="text" name="price_per_sqft" placeholder="e.g. 13,000"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <h3 class="text-xl font-semibold border-b-2 border-green-500 pb-2 mb-6">Location & Status</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">City / District <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="city" placeholder="e.g. Dhaka"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                required>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Area <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="area" placeholder="e.g. Uttara Sector 4"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                required>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Zip / Post Code</label>
                            <input type="text" name="zip_code" placeholder="e.g. 1230"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Full Address (House, Road No.) <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="full_address" placeholder="e.g. House 12, Road 5"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                required>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Map View Link</label>
                            <input type="url" name="map_link" placeholder="Google Map Link"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Construction Status <span
                                    class="text-red-500">*</span></label>
                            <select name="construction_status"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                required>
                                <option value="">Select Status</option>
                                <option value="Under Construction">Under Construction</option>
                                <option value="Ready">Ready</option>
                                <option value="Upcoming">Upcoming</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Transaction Type</label>
                            <select name="transaction_type"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="New">New</option>
                                <option value="Resale">Resale</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <h3 class="text-xl font-semibold border-b-2 border-green-500 pb-2 mb-6">Property Specifications</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Size (sqft) <span
                                    class="text-red-500">*</span></label>
                            <input type="number" name="prop_size" placeholder="2426" min="0" step="1"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md" required>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Bedrooms</label>
                            <input type="number" name="bedroom_count" placeholder="04" min="0" step="1"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Bathrooms</label>
                            <input type="number" name="bathroom_count" placeholder="05" min="0" step="1"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Balconies</label>
                            <input type="number" name="balcony_count" placeholder="5" min="0" step="1"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Garage</label>
                            <input type="number" name="garage_count" placeholder="1" min="0" step="1"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <h3 class="text-xl font-semibold border-b-2 border-green-500 pb-2 mb-6">Property Features</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 bg-gray-50 p-4 rounded-lg">
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]"
                                value="Mosque" class="w-4 h-4"> <span>Mosque</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]"
                                value="Security" class="w-4 h-4"> <span>Security</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]" value="Lift"
                                class="w-4 h-4"> <span>Lift</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]"
                                value="Fire Exit" class="w-4 h-4"> <span>Fire Exit</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]"
                                value="Parking" class="w-4 h-4"> <span>Parking</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]"
                                value="Generator" class="w-4 h-4"> <span>Generator</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]" value="CCTV"
                                class="w-4 h-4"> <span>CCTV</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]" value="Gym"
                                class="w-4 h-4"> <span>Gym</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" name="features[]"
                                value="Swimming Pool" class="w-4 h-4"> <span>Swimming Pool</span></label>
                    </div>
                </div>

                <div class="w-full">
                    <h3 class="text-xl font-semibold border-b-2 border-green-500 pb-2 mb-6">Construction Details</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Year Built / Handover Date</label>
                            <input type="text" name="handover_date" placeholder="e.g. 2024 or Dec 2025"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Building Type</label>
                            <select name="building_type"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="RCC">RCC Frame Structure</option>
                                <option value="Steel">Steel Structure</option>
                                <option value="Semi-pucka">Semi-pucka</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Front Road Width (ft)</label>
                            <input type="number" name="road_width" placeholder="e.g. 40" min="0" step="1"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700">Developer Name</label>
                            <input type="text" name="developer_name" placeholder="e.g. Navana Real Estate"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white p-6 rounded-xl shadow-sm border border-gray-100 mt-8">
                    <h3 class="text-xl font-semibold border-b-2 border-green-500 pb-2 mb-6 text-gray-800">Property Media
                    </h3>

                    <div class="space-y-8">
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Main Heading Image (Featured) <span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center justify-center w-full">
                                <label
                                    class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-green-50 hover:border-green-400 transition duration-300">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="text-sm text-gray-500 font-medium">Click to upload main property photo
                                        </p>
                                        <p id="main-img-name" class="text-xs text-green-600 mt-2 font-semibold"></p>
                                    </div>
                                    <input type="file" name="heading_image" class="hidden" accept="image/*" required />
                                </label>
                            </div>
                        </div>

                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700 mb-4">Other View Images (Max
                                6)</label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <input type="file" name="gallery_image_1" accept="image/*"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 border border-gray-300 rounded-md transition cursor-pointer">
                                <input type="file" name="gallery_image_2" accept="image/*"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 border border-gray-300 rounded-md transition cursor-pointer">
                                <input type="file" name="gallery_image_3" accept="image/*"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 border border-gray-300 rounded-md transition cursor-pointer">
                                <input type="file" name="gallery_image_4" accept="image/*"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 border border-gray-300 rounded-md transition cursor-pointer">
                                <input type="file" name="gallery_image_5" accept="image/*"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 border border-gray-300 rounded-md transition cursor-pointer">
                                <input type="file" name="gallery_image_6" accept="image/*"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 border border-gray-300 rounded-md transition cursor-pointer">
                            </div>
                        </div>

                        <hr class="border-gray-100">

                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Property Video Tour <span class="text-gray-400 font-normal italic">(Optional)</span>
                            </label>
                            <div class="flex items-center justify-center w-full">
                                <label
                                    class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-green-50 hover:border-green-400 transition duration-300">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-10 h-10 mb-3 text-blue-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <p class="text-sm text-gray-500 font-medium">Click to upload property video
                                            (MP4/MOV)</p>
                                        <p id="video-file-name" class="text-xs text-green-600 mt-2 font-semibold"></p>
                                    </div>
                                    <input type="file" name="property_video" class="hidden"
                                        accept="video/mp4,video/x-m4v,video/*"
                                        onchange="updateFileName(this, 'video-file-name')" />
                                </label>
                            </div>
                            <p class="mt-2 text-xs text-gray-400 italic text-center">Recommended: Max size 50MB, Aspect
                                Ratio 16:9</p>
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <h3 class="text-xl font-semibold border-b-2 border-green-500 pb-2 mb-6">Property Description</h3>
                    <textarea name="property_description" rows="5" placeholder="Describe your property details here..."
                        class="mt-1 block w-full p-4 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"></textarea>
                </div>

                <div class="flex justify-end pt-6">
                    <button type="submit" id="submitBtn"
                        class="w-full md:w-64 bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-10 rounded-lg transition duration-300 shadow-md">
                        Post Property
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); z-index:9999; align-items:center; justify-content:center; padding:20px;">
        <div
            style="background:white; border-radius:20px; max-width:500px; width:100%; padding:40px; text-align:center; box-shadow:0 25px 50px rgba(0,0,0,0.3); animation:modalBounce 0.5s ease-out;">

            <div
                style="margin:0 auto 24px; width:100px; height:100px; background:linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius:50%; display:flex; align-items:center; justify-content:center; animation:iconPulse 1s ease-in-out infinite;">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
                    stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>

            <h2
                style="font-size:32px; font-weight:bold; color:#1f2937; margin:0 0 12px 0; font-family:'Segoe UI', sans-serif;">
                🎉 Congratulations!
            </h2>

            <p style="font-size:18px; color:#6b7280; margin:0 0 32px 0; line-height:1.6;">
                Your property has been successfully posted!<br>
                <span style="font-size:14px; color:#9ca3af;">Our team will review it shortly.</span>
            </p>

            <div style="display:flex; gap:12px; flex-direction:column;">
                <button onclick="closeSuccessModal()"
                    style="width:100%; background:linear-gradient(135deg, #10b981 0%, #059669 100%); color:white; font-weight:600; padding:14px 32px; border-radius:10px; border:none; cursor:pointer; font-size:16px; transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    View Dashboard
                </button>
                <button onclick="addAnotherProperty()"
                    style="width:100%; background:white; color:#059669; font-weight:600; padding:14px 32px; border-radius:10px; border:2px solid #10b981; cursor:pointer; font-size:16px; transition:all 0.2s;"
                    onmouseover="this.style.background='#f0fdf4'" onmouseout="this.style.background='white'">
                    Add Another Property
                </button>
            </div>
        </div>
    </div>

    <style>
        @keyframes modalBounce {
            0% {
                opacity: 0;
                transform: scale(0.5) translateY(-50px);
            }

            60% {
                opacity: 1;
                transform: scale(1.05) translateY(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes iconPulse {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
            }

            50% {
                transform: scale(1.05);
                box-shadow: 0 0 0 20px rgba(16, 185, 129, 0);
            }
        }
    </style>



</body>

</html>