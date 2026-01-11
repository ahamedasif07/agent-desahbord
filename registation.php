<?php
/* Template Name: registration */
get_header();
?>

<div class="min-h-screen! flex! items-center! justify-center! bg-gray-50! px-4! py-10!">
    <div class="max-w-lg! w-full! bg-white! rounded-2xl! shadow-xl! overflow-hidden!">
        <div class="bg-green-700! p-6! text-center!">
            <h2 class="text-3xl! font-bold! text-white!">Create Account</h2>
            <p class="text-green-100! mt-2!">Join our Elite Agent Network</p>
        </div>

        <form id="registration-form" class="p-8! grid! grid-cols-1! md:grid-cols-2! gap-5!">
            <div class="md:col-span-2!">
                <label class="block! text-sm! font-semibold! text-gray-700!">Full Name</label>
                <input type="text" name="full_name" placeholder="John Doe" required
                    class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
            </div>

            <div>
                <label class="block! text-sm! font-semibold! text-gray-700!">Email</label>
                <input type="email" name="user_email" placeholder="john@example.com" required
                    class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
            </div>

            <div>
                <label class="block! text-sm! font-semibold! text-gray-700!">Phone</label>
                <input type="tel" name="user_phone" placeholder="+880"
                    class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
            </div>

            <div>
                <label class="block! text-sm! font-semibold! text-gray-700!">Password</label>
                <input type="password" id="pass" name="password" placeholder="••••••••" required
                    class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
            </div>

            <div>
                <label class="block! text-sm! font-semibold! text-gray-700!">Confirm Password</label>
                <input type="password" id="confirm_pass" placeholder="••••••••" required
                    class="w-full! mt-1! p-3! border! border-gray-300! rounded-lg! focus:ring-2! focus:ring-green-500! focus:outline-none! transition!">
            </div>

            <div class="md:col-span-2!">
                <button type="submit" id="reg-btn"
                    class="w-full! bg-green-600! hover:bg-green-700! text-white! font-bold! py-3! rounded-lg! shadow-lg! transition! transform! active:scale-95!">
                    Create Account
                </button>
                <div id="response-msg" class="mt-3 text-center font-bold"></div>
            </div>

            <p class="md:col-span-2! text-center! text-sm! text-gray-600!">
                Already have an account? <a href="<?php echo home_url('/login'); ?>"
                    class="text-green-600! font-bold! hover:underline!">Login here</a>
            </p>
        </form>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    $('#registration-form').on('submit', function(e) {
        e.preventDefault();

        let password = $('#pass').val();
        let confirm_pass = $('#confirm_pass').val();

        if (password !== confirm_pass) {
            $('#response-msg').html('<span style="color:red;">Password match korche na!</span>');
            return;
        }

        let formData = new FormData(this);

        $.ajax({
            url: '<?php echo get_stylesheet_directory_uri(); ?>/auth-system/register-user.php',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#reg-btn').text('Processing...').prop('disabled', true);
                $('#response-msg').html(''); // Purano message clear korbe
            },
            success: function(response) {
                try {
                    let res = typeof response === 'object' ? response : JSON.parse(
                        response);

                    if (res.status === 'success') {
                        // ১. Success message dekhabe
                        $('#response-msg').html(
                            '<span style="color:green; font-size:18px;">✅ ' + res
                            .message + '</span>');

                        // ২. Button text update
                        $('#reg-btn').text('Redirecting...');

                        // ৩. Form reset
                        $('#registration-form')[0].reset();

                        // ৪. ২ সেকেন্ড পর লগইন পেজে নিয়ে যাবে
                        setTimeout(() => {
                            window.location.href =
                                '<?php echo home_url("/login-2"); ?>';
                        }, 1000);
                    } else {
                        // Error hole button abr normal korbe
                        $('#response-msg').html('<span style="color:red;"> ' + res
                            .message + '</span>');
                        $('#reg-btn').text('Create Account').prop('disabled', false);
                    }
                } catch (e) {
                    console.error("Full Server Response:", response);
                    $('#response-msg').html(
                        '<span style="color:red;">Error: Server returned invalid data.</span>'
                    );
                    $('#reg-btn').text('Create Account').prop('disabled', false);
                }
            }, // Eikhane comma missing chilo
            error: function(xhr) {
                console.error("AJAX Error Status:", xhr.status);
                console.error("Error Response:", xhr.responseText);
                $('#response-msg').html(
                    '<span style="color:red;">Server error! Check if file exists.</span>'
                );
                $('#reg-btn').text('Create Account').prop('disabled', false);
            }
        });
    });
});
</script>

<?php get_footer(); ?>