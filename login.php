<?php
/* Template Name: login */
get_header();
?>

<div class="min-h-screen! flex! items-center! justify-center! bg-gray-50! px-4!">
    <div class="max-w-md! w-full! bg-white! rounded-2xl! shadow-xl! overflow-hidden!">
        <div class="bg-green-700! p-6! text-center!">
            <h2 class="text-3xl! font-bold! text-white!">Welcome Back</h2>
            <p class="text-green-100! mt-2!">Login to manage your properties</p>
        </div>

        <form id="login-form" class="p-8! space-y-5!">
            <div>
                <label class="block! text-sm! font-semibold! text-gray-700!">Email Address</label>
                <input type="email" name="user_email" placeholder="agent@mail.com" required
                    class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
            </div>
            <div>
                <div class="flex! justify-between!">
                    <label class="block! text-sm! font-semibold! text-gray-700!">Password</label>
                    <a href="<?php echo home_url('/forget-password'); ?>"
                        class="text-sm! text-green-600! hover:underline!">Forgot?</a>
                </div>
                <input type="password" name="password" placeholder="••••••••" required
                    class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
            </div>

            <button type="submit" id="login-btn"
                class="w-full! bg-green-600! hover:bg-green-700! text-white! font-bold! py-3! rounded-lg! shadow-lg! transform! transition! active:scale-95!">
                Login Now
            </button>

            <div id="login-msg" class="text-center mt-3 font-semibold"></div>

            <p class="text-center! text-sm! text-gray-600!">
                Don't have an account? <a href="<?php echo home_url('/registration'); ?>"
                    class="text-green-600! font-bold! hover:underline!">Register</a>
            </p>
        </form>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    $('#login-form').on('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: '<?php echo get_stylesheet_directory_uri(); ?>/auth-system/login-user.php',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#login-btn').text('Verifying...').prop('disabled', true);
                $('#login-msg').html('');
            },
            success: function(response) {
                try {
                    let res = typeof response === 'object' ? response : JSON.parse(
                    response);

                    if (res.status === 'success') {
                        $('#login-msg').html('<span style="color:green;">✅ ' + res.message +
                            '</span>');
                        setTimeout(() => {
                            // Login success hole dashboard-e niye jabe
                            window.location.href =
                                '<?php echo home_url("/dashboard"); ?>';
                        }, 1500);
                    } else {
                        $('#login-msg').html('<span style="color:red;">❌ ' + res.message +
                            '</span>');
                        $('#login-btn').text('Login Now').prop('disabled', false);
                    }
                } catch (e) {
                    console.error("Parse Error:", response);
                    $('#login-msg').html(
                        '<span style="color:red;">❌ Server error or invalid response.</span>'
                        );
                    $('#login-btn').text('Login Now').prop('disabled', false);
                }
            },
            error: function(xhr) {
                $('#login-msg').html(
                    '<span style="color:red;">❌ Request failed. Check your connection.</span>'
                    );
                $('#login-btn').text('Login Now').prop('disabled', false);
            }
        });
    });
});
</script>

<?php get_footer(); ?>