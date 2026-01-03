<?php
// ১০টি মেসেজের অ্যারে
$messages = [
    [
        "id" => 1,
        "name" => "Jasim Uddin",
        "agency" => "Elite Office",
        "message" => "I am interested in your property in Uttara. Can we discuss the price?",
        "time" => "2 mins ago",
        "image" => "https://i.pravatar.cc/150?u=1",
        "is_online" => true
    ],
    [
        "id" => 2,
        "name" => "Anika Rahman",
        "agency" => "Dream Living",
        "message" => "Is the flat in Bashundhara still available for visit tomorrow?",
        "time" => "15 mins ago",
        "image" => "https://i.pravatar.cc/150?u=2",
        "is_online" => false
    ],
    [
        "id" => 3,
        "name" => "Rahat Khan",
        "agency" => "Trust Properties",
        "message" => "I want to know about the payment plan for the commercial space.",
        "time" => "1 hour ago",
        "image" => "https://i.pravatar.cc/150?u=3",
        "is_online" => true
    ],
    [
        "id" => 4,
        "name" => "Sultana Ahmed",
        "agency" => "Skyline Agency",
        "message" => "Please send me the floor plan of the 3-bedroom apartment.",
        "time" => "3 hours ago",
        "image" => "https://i.pravatar.cc/150?u=4",
        "is_online" => true
    ],
    [
        "id" => 5,
        "name" => "Tanvir Islam",
        "agency" => "Modern Space",
        "message" => "Do you have any ready-to-move flats in Dhanmondi?",
        "time" => "5 hours ago",
        "image" => "https://i.pravatar.cc/150?u=5",
        "is_online" => false
    ],
    [
        "id" => 6,
        "name" => "Farhana Haque",
        "agency" => "Urban Shelter",
        "message" => "I saw your listing on the website. I need more photos of the kitchen.",
        "time" => "Yesterday",
        "image" => "https://i.pravatar.cc/150?u=6",
        "is_online" => true
    ],
    [
        "id" => 7,
        "name" => "Kamrul Hasan",
        "agency" => "Prime Realty",
        "message" => "What is the monthly service charge for this building?",
        "time" => "Yesterday",
        "image" => "https://i.pravatar.cc/150?u=7",
        "is_online" => false
    ],
    [
        "id" => 8,
        "name" => "Nabila Rahman",
        "agency" => "Home Finder",
        "message" => "Can you suggest some land options near Purbachal?",
        "time" => "2 days ago",
        "image" => "https://i.pravatar.cc/150?u=8",
        "is_online" => true
    ],
    [
        "id" => 9,
        "name" => "Zakir Hossain",
        "agency" => "Ground Zero",
        "message" => "I am a regular investor. Let me know about upcoming projects.",
        "time" => "2 days ago",
        "image" => "https://i.pravatar.cc/150?u=9",
        "is_online" => false
    ],
    [
        "id" => 10,
        "name" => "Mehedi Hasan",
        "agency" => "Signature Homes",
        "message" => "Is the price negotiable for the duplex house in Banani?",
        "time" => "3 days ago",
        "image" => "https://i.pravatar.cc/150?u=10",
        "is_online" => true
    ]
];
?>

<div class="w-full! mx-auto! space-y-4! p-4!">
    <h3 class="text-xl! font-bold! text-gray-800! mb-6!">Recent Messages</h3>

    <?php foreach ($messages as $msg): ?>
        <!-- একক মেসেজ আইটেম শুরু -->
        <div
            class="flex! flex-col! md:flex-row! items-center! justify-between! bg-white! p-5! rounded-xl! shadow-sm! border! border-gray-100! hover:shadow-md! transition! duration-300! gap-4!">

            <div class="flex! items-center! gap-4! w-full!">
                <!-- ইউজারের ইমেজ/প্রোফাইল -->
                <div class="relative! shrink-0!">
                    <img src="<?php echo $msg['image']; ?>" alt="User"
                        class="w-14! h-14! rounded-full! object-cover! border-2! border-blue-500!">

                    <!-- অনলাইন স্ট্যাটাস ডট (কন্ডিশনাল) -->
                    <?php if ($msg['is_online']): ?>
                        <span
                            class="absolute! bottom-0! right-0! w-4! h-4! bg-green-500! border-2! border-white! rounded-full!"></span>
                    <?php endif; ?>
                </div>

                <!-- ইউজার এবং মেসেজ ডিটেইলস -->
                <div class="flex! flex-col! overflow-hidden!">
                    <div class="flex! items-center! gap-2!">
                        <h4 class="font-bold! text-gray-800! truncate!"><?php echo $msg['name']; ?></h4>
                        <span
                            class="text-[10px]! bg-blue-100! text-blue-600! px-2! py-0.5! rounded-full! font-medium!"><?php echo $msg['agency']; ?></span>
                    </div>
                    <!-- মেসেজ প্রিভিউ -->
                    <p class="text-sm! text-gray-500! truncate! max-w-[250px]! md:max-w-[450px]!">
                        "<?php echo $msg['message']; ?>"
                    </p>
                    <span class="text-[11px]! text-gray-400! mt-1!"><?php echo $msg['time']; ?></span>
                </div>
            </div>

            <!-- অ্যাকশন বাটনসমূহ -->
            <div class="flex! items-center! gap-3! shrink-0!">
                <!-- View Button -->
                <button
                    class="flex! items-center! gap-1! bg-blue-600! hover:bg-blue-700! text-white! text-xs! font-bold! py-2! px-4! rounded-lg! transition!">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    View
                </button>

                <!-- Mark as Read Button -->
                <button title="Mark as Read"
                    class="p-2! bg-gray-100! hover:bg-green-100! text-gray-600! hover:text-green-600! rounded-lg! transition!">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 6L9 17l-5-5" />
                    </svg>
                </button>

                <!-- Delete Icon Button -->
                <button title="Delete Message"
                    class="p-2! bg-gray-100! hover:bg-red-100! text-gray-600! hover:text-red-600! rounded-lg! transition!">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 6h18m-2 0v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                    </svg>
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>