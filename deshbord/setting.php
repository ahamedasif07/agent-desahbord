<!-- User Profile Settings Section -->
<div class="w-full! mx-auto! bg-white! shadow-lg! rounded-lg! overflow-hidden! mt-10! mb-10!">

    <!-- Header -->
    <div class="bg-green-700! p-6!">
        <h2 class="text-2xl! font-bold! text-white! uppercase! text-center!">Profile Settings</h2>
    </div>

    <form id="user-settings-form" class="p-6! md:p-10! space-y-10!">

        <!-- ১. প্রোফাইল ছবি আপডেট সেকশন -->
        <div class="flex! flex-col! items-center! md:flex-row! md:space-x-8! border-b! pb-8!">
            <div class="relative!">
                <!-- প্রোফাইল ইমেজ প্রিভিউ -->
                <img src="https://i.pravatar.cc/150?u=admin" alt="User Profile"
                    class="w-32! h-32! rounded-full! border-4! border-green-100! object-cover! shadow-md!">

                <!-- ক্যামেরা আইকন বা এডিট বাটন -->
                <label for="profile_img"
                    class="absolute! bottom-1! right-1! bg-green-600! p-2! rounded-full! cursor-pointer! hover:bg-green-700! transition! shadow-lg!">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 24 24">
                        <path
                            d="M4 4h3l2-2h6l2 2h3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6z" />
                    </svg>
                    <input type="file" id="profile_img" name="profile_img" class="hidden!" accept="image/*!">
                </label>
            </div>
            <div class="mt-4! md:mt-0! text-center! md:text-left!">
                <h3 class="text-xl! font-bold! text-gray-800!">Update Profile Photo</h3>
                <p class="text-sm! text-gray-500!">Recommended size: 300x300 px (Max 2MB)</p>
            </div>
        </div>

        <!-- ২. ব্যক্তিগত তথ্য (Personal Information) -->
        <div class="w-full!">
            <h3 class="text-xl! font-semibold! border-b-2! border-green-500! pb-2! mb-6!">Personal Information</h3>
            <div class="grid! grid-cols-1! md:grid-cols-2! gap-6!">

                <!-- Full Name -->
                <div class="w-full!">
                    <label class="block! text-sm! font-medium! text-gray-700!">Full Name</label>
                    <input type="text" name="user_full_name" value="Admin User"
                        class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-green-500! focus:border-green-500!">
                </div>

                <!-- Phone Number -->
                <div class="w-full!">
                    <label class="block! text-sm! font-medium! text-gray-700!">Phone Number</label>
                    <input type="tel" name="user_phone" value="+880123456789"
                        class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-green-500! focus:border-green-500!">
                </div>

                <!-- Email Address -->
                <div class="w-full!">
                    <label class="block! text-sm! font-medium! text-gray-700!">Email Address</label>
                    <input type="email" name="user_email" value="admin@example.com"
                        class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! bg-gray-50! shadow-sm!">
                </div>

                <!-- Designation / Role -->
                <div class="w-full!">
                    <label class="block! text-sm! font-medium! text-gray-700!">Designation</label>
                    <input type="text" name="user_designation" placeholder="e.g. Senior Agent"
                        class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-green-500! focus:border-green-500!">
                </div>
            </div>
        </div>

        <!-- ৩. এজেন্সি তথ্য (Agency Information) -->
        <div class="w-full!">
            <h3 class="text-xl! font-semibold! border-b-2! border-green-500! pb-2! mb-6!">Agency Information</h3>
            <div class="grid! grid-cols-1! md:grid-cols-2! gap-6!">

                <!-- Agency Name -->
                <div class="w-full!">
                    <label class="block! text-sm! font-medium! text-gray-700!">Agency Name</label>
                    <input type="text" name="agency_name" value="Elite Realty Agency"
                        class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-green-500! focus:border-green-500!">
                </div>

                <!-- Agency Address -->
                <div class="w-full!">
                    <label class="block! text-sm! font-medium! text-gray-700!">Office Location</label>
                    <input type="text" name="agency_location" placeholder="e.g. Banani, Dhaka"
                        class="mt-1! block! w-full! p-3! border! border-gray-300! rounded-md! shadow-sm! focus:ring-green-500! focus:border-green-500!">
                </div>
            </div>
        </div>

        <!-- ৪. বায়ো/বিস্তারিত (About Me) -->
        <div class="w-full!">
            <h3 class="text-xl! font-semibold! border-b-2! border-green-500! pb-2! mb-6!">About Me</h3>
            <textarea name="user_bio" rows="4" placeholder="Briefly describe yourself or your agency..."
                class="mt-1! block! w-full! p-4! border! border-gray-300! rounded-md! shadow-sm! focus:ring-green-500! focus:border-green-500!"></textarea>
        </div>

        <!-- সেভ বাটন -->
        <div class="flex! justify-end! pt-6!">
            <button type="submit"
                class="w-full! md:w-64! bg-green-600! hover:bg-green-700! text-white! font-bold! py-4! px-10! rounded-lg! transition! duration-300! shadow-lg!">
                Update Profile
            </button>
        </div>

    </form>
</div>