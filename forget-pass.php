<?php
/* Template Name: forget-password */
get_header();
?>

<div class="min-h-screen! flex! items-center! justify-center! bg-gray-50! px-4!">
    <div class="max-w-md! w-full! bg-white! rounded-2xl! shadow-xl! overflow-hidden! text-center!">
        <div class="p-8!">
            <div
                class="w-20! h-20! bg-green-100! text-green-600! rounded-full! flex! items-center! justify-center! mx-auto! mb-6!">
                <svg class="w-10! h-10!" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m0 0v2m0-2h2m-2 0H10m4-11a4 4 0 11-8 0 4 4 0 018 0zM7 10v4a5 5 0 0010 0v-4m-10 0V7a3 3 0 016 0v3">
                    </path>
                </svg>
            </div>
            <h2 class="text-2xl! font-bold! text-gray-800!">Forgot Password?</h2>
            <p class="text-gray-600! mt-2! mb-8!">No worries! Enter your email and we'll send you a reset link.</p>

            <form class="space-y-5! text-left!">
                <div>
                    <label class="block! text-sm! font-semibold! text-gray-700!">Registered Email</label>
                    <input type="email" name="user_login" id="user_login" placeholder="yourname@mail.com"
                        class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
                </div>
                <button
                    class="w-full! bg-green-600! hover:bg-green-700! text-white! font-bold! py-3! rounded-lg! shadow-lg! transition!">
                    Send Reset Link
                </button>
            </form>

            <div class="mt-6!">
                <a href="login-2/"
                    class="text-sm! text-gray-500! hover:text-green-600! flex! items-center! justify-center! gap-2! transition!">
                    <svg class="w-4! h-4!" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back to Login
                </a>
            </div>
        </div>
    </div>
</div>