<!-- log in form -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="bg-green-700 p-6 text-center">
            <h2 class="text-3xl font-bold text-white">Welcome Back</h2>
            <p class="text-green-100 mt-2">Login to manage your properties</p>
        </div>

        <form class="p-8 space-y-5">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Email Address</label>
                <input type="email" placeholder="agent@mail.com"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
            </div>
            <div>
                <div class="flex justify-between">
                    <label class="block text-sm font-semibold text-gray-700">Password</label>
                    <a href="#" class="text-sm text-green-600 hover:underline">Forgot?</a>
                </div>
                <input type="password" placeholder="••••••••"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
            </div>
            <button
                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg shadow-lg transform transition active:scale-95">
                Login Now
            </button>
            <p class="text-center text-sm text-gray-600">
                Don't have an account? <a href="#" class="text-green-600 font-bold hover:underline">Register</a>
            </p>
        </form>
    </div>
</div>

<!-- registation form -->

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 py-10">
    <div class="max-w-lg w-full bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="bg-green-700 p-6 text-center">
            <h2 class="text-3xl font-bold text-white">Create Account</h2>
            <p class="text-green-100 mt-2">Join our Elite Agent Network</p>
        </div>

        <form class="p-8 grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700">Full Name</label>
                <input type="text" placeholder="John Doe"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" placeholder="john@example.com"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Phone</label>
                <input type="tel" placeholder="+880"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" placeholder="••••••••"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Confirm Password</label>
                <input type="password" placeholder="••••••••"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
            </div>
            <div class="md:col-span-2">
                <button
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg shadow-lg transition transform active:scale-95">
                    Create Account
                </button>
            </div>
            <p class="md:col-span-2 text-center text-sm text-gray-600">
                Already have an account? <a href="#" class="text-green-600 font-bold hover:underline">Login here</a>
            </p>
        </form>
    </div>
</div>

<!-- forgate pass from -->

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden text-center">
        <div class="p-8">
            <div
                class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m0 0v2m0-2h2m-2 0H10m4-11a4 4 0 11-8 0 4 4 0 018 0zM7 10v4a5 5 0 0010 0v-4m-10 0V7a3 3 0 016 0v3">
                    </path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Forgot Password?</h2>
            <p class="text-gray-600 mt-2 mb-8">No worries! Enter your email and we'll send you a reset link.</p>

            <form class="space-y-5 text-left">
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Registered Email</label>
                    <input type="email" placeholder="yourname@mail.com"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
                </div>
                <button
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg shadow-lg transition">
                    Send Reset Link
                </button>
            </form>

            <div class="mt-6">
                <a href="#"
                    class="text-sm text-gray-500 hover:text-green-600 flex items-center justify-center gap-2 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back to Login
                </a>
            </div>
        </div>
    </div>
</div>




<!-- otp -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden text-center">
        <div class="p-8">
            <div
                class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>

            <h2 class="text-2xl font-bold text-gray-800">Verify OTP</h2>
            <p class="text-gray-600 mt-2 mb-8">We've sent a 4-digit code to your email. Please enter it below.</p>

            <form class="space-y-6">
                <div class="flex justify-center gap-4">
                    <input type="text" maxlength="1"
                        class="w-14 h-14 text-center text-2xl font-bold border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
                    <input type="text" maxlength="1"
                        class="w-14 h-14 text-center text-2xl font-bold border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
                    <input type="text" maxlength="1"
                        class="w-14 h-14 text-center text-2xl font-bold border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
                    <input type="text" maxlength="1"
                        class="w-14 h-14 text-center text-2xl font-bold border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
                </div>

                <button
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg shadow-lg transition">
                    Verify & Proceed
                </button>
            </form>

            <div class="mt-6">
                <p class="text-sm text-gray-500">
                    Didn't receive the code?
                    <a href="#" class="text-green-600 font-semibold hover:underline ml-1">Resend OTP</a>
                </p>
            </div>

            <div class="mt-4">
                <a href="#"
                    class="text-sm text-gray-500 hover:text-green-600 flex items-center justify-center gap-2 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back to Login
                </a>
            </div>
        </div>
    </div>
</div>

<!-- new pass -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden text-center">
        <div class="p-8">
            <div
                class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                    </path>
                </svg>
            </div>

            <h2 class="text-2xl font-bold text-gray-800">Set New Password</h2>
            <p class="text-gray-600 mt-2 mb-8">Create a strong password to keep your account secure.</p>

            <form class="space-y-5 text-left">
                <div>
                    <label class="block text-sm font-semibold text-gray-700">New Password</label>
                    <input type="password" placeholder="••••••••"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700">Confirm New Password</label>
                    <input type="password" placeholder="••••••••"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none transition">
                </div>

                <button
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg shadow-lg transition">
                    Update Password
                </button>
            </form>

            <div class="mt-6 text-left p-4 bg-gray-50 rounded-lg border border-gray-100">
                <p class="text-xs text-gray-500 font-medium mb-1 uppercase tracking-wider">Password Tips:</p>
                <ul class="text-xs text-gray-400 space-y-1">
                    <li>• Minimum 8 characters long</li>
                    <li>• At least one special character</li>
                    <li>• At least one number</li>
                </ul>
            </div>
        </div>
    </div>
</div>