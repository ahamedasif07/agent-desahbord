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
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Location</label>
                        <input type="text" id="location" name="location" placeholder="e.g. Uttara, Dhaka"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Map View Link</label>
                        <input type="url" id="map_link" name="map_link" placeholder="Google Map Link"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                    </div>
                    <div class="w-full!">
                        <label class="block! text-sm! font-medium! text-gray-700!">Construction Status</label>
                        <select id="construction_status" name="construction_status"
                            class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-blue-500! focus:border-blue-500!">
                            <option value="Under Construction">Under Construction</option>
                            <option value="Ready">Ready</option>
                            <option value="Upcoming">Upcoming</option>
                        </select>
                    </div>
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