<?php
// ১. স্ট্যাটিক ডাটা অ্যারে (এটি অবশ্যই লুপের আগে থাকতে হবে)
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
    ]
];
?>

<div class="w-full mx-auto space-y-4 p-4">
    <h3 class="text-xl font-bold text-gray-800 mb-6">Recent Messages</h3>

    <?php if (!empty($messages)): ?>
    <?php foreach ($messages as $msg): ?>
    <div
        class="flex flex-col md:flex-row items-center justify-between bg-white p-5 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300 gap-4">
        <div class="flex items-center gap-4 w-full">
            <div class="relative shrink-0">
                <img src="<?php echo $msg['image']; ?>" alt="User"
                    class="w-14 h-14 rounded-full object-cover border-2 border-blue-500">
                <?php if ($msg['is_online']): ?>
                <span class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></span>
                <?php endif; ?>
            </div>

            <div class="flex flex-col overflow-hidden text-left">
                <div class="flex items-center gap-2">
                    <h4 class="font-bold text-gray-800 truncate"><?php echo $msg['name']; ?></h4>
                    <span
                        class="text-[10px] bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full font-medium"><?php echo $msg['agency']; ?></span>
                </div>
                <p class="text-sm text-gray-500 truncate max-w-[250px] md:max-w-[450px]">
                    "<?php echo $msg['message']; ?>"
                </p>
                <span class="text-[11px] text-gray-400 mt-1"><?php echo $msg['time']; ?></span>
            </div>
        </div>

        <div class="flex items-center gap-3 shrink-0">
            <button
                onclick="openMessageModal('<?php echo addslashes($msg['name']); ?>', '<?php echo addslashes($msg['message']); ?>', '<?php echo $msg['image']; ?>')"
                class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                    <circle cx="12" cy="12" r="3" />
                </svg>
                View
            </button>
            <button title="Delete"
                class="p-2 bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 rounded-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 6h18m-2 0v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                </svg>
            </button>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <p class="text-center text-gray-500">No messages found.</p>
    <?php endif; ?>
</div>

<div id="msgModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden">
        <div class="flex items-center justify-between p-4 border-b">
            <div class="flex items-center gap-3">
                <img id="modalImg" src="" class="w-10 h-10 rounded-full border">
                <h3 id="modalName" class="font-bold text-gray-800"></h3>
            </div>
            <button onclick="closeMessageModal()" class="text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="p-6 bg-gray-50">
            <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold mb-2">Original Message:</p>
            <div class="bg-white p-4 rounded-xl border border-gray-200 text-gray-700 italic">
                "<span id="modalMsg"></span>"
            </div>
        </div>

        <form onsubmit="sendReply(event)" class="p-6 border-t">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Your Reply:</label>
            <textarea id="replyText" required rows="4" placeholder="Type your reply here..."
                class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition"></textarea>
            <div class="flex justify-end gap-3 mt-4">
                <button type="button" onclick="closeMessageModal()" class="px-5 py-2 text-gray-600">Cancel</button>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-bold">Send Reply</button>
            </div>
        </form>
    </div>
</div>