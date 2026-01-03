<div class="md:p-6!">
    <div class="w-full! mx-auto! bg-white! shadow-lg! rounded-lg! overflow-hidden!">
        <div class="bg-green-700! p-6!">
            <h2 class="font-bold! text-white! uppercase! text-center! text-2xl!">Post Your Property</h2>
        </div>

        <form id="property-form" class="p-4! md:p-10! space-y-12!">

            <!-- Basic Information -->
            <div class="w-full!">
                <h3 class="text-xl! font-semibold! border-b-2! border-blue-500! pb-2! mb-6!">Basic Information</h3>
                <div class="grid! grid-cols-1! md:grid-cols-2! gap-6!">
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Property Name</label>
                        <input type="text" id="property_name" name="property_name" placeholder="e.g. Concrete Esteem"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Property Type</label>
                        <select id="property_type" name="property_type"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                            <option value="Apartment">Apartment/Flats</option>
                            <option value="Land">Land</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Total Price (BDT)</label>
                        <input type="text" id="total_price" name="total_price" placeholder="e.g. 3.15 Cr."
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Price per sqft</label>
                        <input type="text" id="price_per_sqft" name="price_per_sqft" placeholder="e.g. 13,000"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>
                </div>
            </div>

            <!-- Location & Status -->
            <div class="w-full!">
                <h3 class="text-xl! font-semibold! border-b-2! border-blue-500! pb-2! mb-6!">Location & Status</h3>

                <div class="grid! grid-cols-1! md:grid-cols-2! gap-6!">

                    <!-- ১. City/District -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">City / District</label>
                        <input type="text" id="city" name="city" placeholder="e.g. Dhaka"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                    <!-- ২. Area -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Area</label>
                        <input type="text" id="area" name="area" placeholder="e.g. Uttara Sector 4"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                    <!-- ৩. Zip / Post Code -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Zip / Post Code</label>
                        <input type="text" id="zip_code" name="zip_code" placeholder="e.g. 1230"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                    <!-- ৪. Full Address (House/Road) -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Full Address (House, Road
                            No.)</label>
                        <input type="text" id="full_address" name="full_address" placeholder="e.g. House 12, Road 5"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                    <!-- ৫. Map View Link -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Map View Link</label>
                        <input type="url" id="map_link" name="map_link" placeholder="Google Map Link"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                    <!-- ৬. Construction Status -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Construction Status</label>
                        <select id="construction_status" name="construction_status"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                            <option value="Under Construction">Under Construction</option>
                            <option value="Ready">Ready</option>
                            <option value="Upcoming">Upcoming</option>
                        </select>
                    </div>

                    <!-- ৭. Transaction Type -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Transaction Type</label>
                        <select id="transaction_type" name="transaction_type"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                            <option value="New">New</option>
                            <option value="Resale">Resale</option>
                        </select>
                    </div>

                </div>
            </div>

            <!-- Property Specifications -->
            <div class="w-full!">
                <h3 class="text-xl! font-semibold! border-b-2! border-blue-500! pb-2! mb-6!">Property Specifications
                </h3>
                <div class="grid! grid-cols-2! md:grid-cols-4! lg:grid-cols-5! gap-4!">
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Size (sqft)</label>
                        <input type="number" name="prop_size" placeholder="2426"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Bedrooms</label>
                        <input type="number" name="bedroom_count" placeholder="04"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Bathrooms</label>
                        <input type="number" name="bathroom_count" placeholder="05"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Balconies</label>
                        <input type="number" name="balcony_count" placeholder="5"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Garage</label>
                        <input type="text" name="garage_count" placeholder="1"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md!">
                    </div>
                </div>
            </div>

            <!-- Property Features -->
            <div class="w-full!">
                <h3 class="text-xl! font-semibold! border-b-2! border-blue-500! pb-2! mb-6!">Property Features</h3>
                <div class="grid! grid-cols-2! md:grid-cols-3! lg:grid-cols-4! gap-4! bg-gray-50! p-4! rounded-lg!">
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features" value="Mosque"
                            class="w-4! h-4!"> <span>Mosque</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features"
                            value="Security" class="w-4! h-4!"> <span>Security</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features" value="Lift"
                            class="w-4! h-4!"> <span>Lift</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features"
                            value="Fire Exit" class="w-4! h-4!"> <span>Fire Exit</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features"
                            value="Fire Exit" class="w-4! h-4!"> <span>Fire Exit</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features"
                            value="Fire Exit" class="w-4! h-4!"> <span>Fire Exit</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features"
                            value="Fire Exit" class="w-4! h-4!"> <span>Fire Exit</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features"
                            value="Fire Exit" class="w-4! h-4!"> <span>Fire Exit</span></label>
                    <label class="flex! items-center! space-x-2!"><input type="checkbox" name="features"
                            value="Fire Exit" class="w-4! h-4!"> <span>Fire Exit</span></label>
                </div>
            </div>

            <!-- Construction Details Section -->
            <div class="w-full!">
                <h3 class="text-xl! font-semibold! border-b-2! border-blue-500! pb-2! mb-6!">Construction Details</h3>
                <div class="grid! grid-cols-1! md:grid-cols-2! gap-6!">

                    <!-- ১. Year Built / Handover Date -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Year Built / Handover Date</label>
                        <input type="text" id="handover_date" name="handover_date" placeholder="e.g. 2024 or Dec 2025"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                    <!-- ২. Building Type -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Building Type</label>
                        <select id="building_type" name="building_type"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                            <option value="RCC">RCC Frame Structure</option>
                            <option value="Steel">Steel Structure</option>
                            <option value="Semi-pucka">Semi-pucka</option>
                        </select>
                    </div>

                    <!-- ৩. Road Width (Front) -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Front Road Width (ft)</label>
                        <input type="number" id="road_width" name="road_width" placeholder="e.g. 40"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                    <!-- ৪. Developer Name -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Developer Name</label>
                        <input type="text" id="developer_name" name="developer_name"
                            placeholder="e.g. Navana Real Estate"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>

                </div>
            </div>

            <!-- Property Media Section -->
            <div class="w-full!">
                <h3 class="text-xl! font-semibold! border-b-2! border-blue-500! pb-2! mb-6!">Property Images</h3>

                <div class="space-y-6!">

                    <!-- ১. প্রধান ছবি (Heading Image) -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700! mb-2!">Main Heading Image
                            (Featured)</label>
                        <div class="flex! items-center! justify-center! w-full!">
                            <label
                                class="flex! flex-col! items-center! justify-center! w-full! h-32! border-2! border-gray-300! border-dashed! rounded-lg! cursor-pointer! bg-gray-50! hover:bg-gray-100!">
                                <div class="flex! flex-col! items-center! justify-center! pt-5! pb-6!">
                                    <svg class="w-8! h-8! mb-3! text-gray-400!" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round! stroke-linejoin=" round! stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="text-sm! text-gray-500!">Click to upload main property photo</p>
                                </div>
                                <input type="file" name="heading_image" class="hidden!" accept="image/*!" />
                            </label>
                        </div>
                    </div>

                    <!-- ২. অন্যান্য ছবি (6 Gallery Images) -->
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700! mb-4!">Other View Images (Max
                            6)</label>
                        <div class="grid! grid-cols-1! sm:grid-cols-2! md:grid-cols-3! gap-4!">

                            <!-- Image Field 1 -->
                            <div class="w-full!">
                                <input type="file" name="gallery_image_1" accept="image/*!"
                                    class="block! w-full! text-sm! text-gray-500! file:mr-4! file:py-2! file:px-4! file:rounded-md! file:border-0! file:text-sm! file:font-semibold! file:bg-blue-50! file:text-blue-700! hover:file:bg-blue-100! border! border-gray-300! rounded-md!">
                            </div>

                            <!-- Image Field 2 -->
                            <div class="w-full!">
                                <input type="file" name="gallery_image_2" accept="image/*!"
                                    class="block! w-full! text-sm! text-gray-500! file:mr-4! file:py-2! file:px-4! file:rounded-md! file:border-0! file:text-sm! file:font-semibold! file:bg-blue-50! file:text-blue-700! hover:file:bg-blue-100! border! border-gray-300! rounded-md!">
                            </div>

                            <!-- Image Field 3 -->
                            <div class="w-full!">
                                <input type="file" name="gallery_image_3" accept="image/*!"
                                    class="block! w-full! text-sm! text-gray-500! file:mr-4! file:py-2! file:px-4! file:rounded-md! file:border-0! file:text-sm! file:font-semibold! file:bg-blue-50! file:text-blue-700! hover:file:bg-blue-100! border! border-gray-300! rounded-md!">
                            </div>

                            <!-- Image Field 4 -->
                            <div class="w-full!">
                                <input type="file" name="gallery_image_4" accept="image/*!"
                                    class="block! w-full! text-sm! text-gray-500! file:mr-4! file:py-2! file:px-4! file:rounded-md! file:border-0! file:text-sm! file:font-semibold! file:bg-blue-50! file:text-blue-700! hover:file:bg-blue-100! border! border-gray-300! rounded-md!">
                            </div>

                            <!-- Image Field 5 -->
                            <div class="w-full!">
                                <input type="file" name="gallery_image_5" accept="image/*!"
                                    class="block! w-full! text-sm! text-gray-500! file:mr-4! file:py-2! file:px-4! file:rounded-md! file:border-0! file:text-sm! file:font-semibold! file:bg-blue-50! file:text-blue-700! hover:file:bg-blue-100! border! border-gray-300! rounded-md!">
                            </div>

                            <!-- Image Field 6 -->
                            <div class="w-full!">
                                <input type="file" name="gallery_image_6" accept="image/*!"
                                    class="block! w-full! text-sm! text-gray-500! file:mr-4! file:py-2! file:px-4! file:rounded-md! file:border-0! file:text-sm! file:font-semibold! file:bg-blue-50! file:text-blue-700! hover:file:bg-blue-100! border! border-gray-300! rounded-md!">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Description & Submit -->
            <div class="w-full!">
                <h3 class="text-xl! font-semibold! border-b-2! border-blue-500! pb-2! mb-6!">Property Description</h3>
                <textarea id="property_description" name="property_description" rows="5"
                    placeholder="Describe your property details here..."
                    class="mt-1! block! w-full! p-4! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!"></textarea>
            </div>

            <div class="flex! justify-end! pt-6!">
                <button type="submit"
                    class="w-full! md:w-64! bg-green-600! hover:bg-green-700! text-white! font-bold! py-4! px-10! rounded-lg! transition! duration-300! shadow-md!">
                    Post Property
                </button>
            </div>
        </form>
    </div>
</div>