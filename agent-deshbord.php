<?php
/* Template Name: agent-dashboard */

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css?ver=<?php echo time(); ?>">

<div class="dashboard-wrapper">
    <div>


        <?php get_template_part('deshbord/sidebar'); ?>
    </div>
</div>


<script>
    // ফাইল সিলেক্ট করলে নাম দেখানোর জন্য (Event Delegation)
    $(document).on('change', 'input[type="file"]', function() {
        let input = $(this);
        let fileName = input[0].files.length > 0 ? input[0].files[0].name : "";
        let targetId = "";

        // কোন ইনপুট পরিবর্তন হয়েছে তা চেক করা
        if (input.attr('name') === 'heading_image') {
            targetId = "main-img-name";
        } else if (input.attr('name') === 'property_video') {
            targetId = "video-file-name";
        }

        // যদি টার্গেট আইডি থাকে তবে নাম বসানো
        if (targetId !== "") {
            if (fileName !== "") {
                $('#' + targetId).text("✓ Selected: " + fileName);
            } else {
                $('#' + targetId).text("");
            }
        }
    });



    // AJAX Form Submit
    $(document).ready(function() {
        $('#property-form').on('submit', function(e) {
            e.preventDefault();

            let btn = $('#submitBtn');
            btn.prop('disabled', true).text('Processing...');

            let formData = new FormData(this);
            formData.append('submit', '1');

            $.ajax({
                url: '<?php echo get_stylesheet_directory_uri(); ?>/deshbord/property-submit.php', // ✅ এটা সঠিক path দিন
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // ১. শুধুমাত্র সফল হলেই মডাল দেখাবে
                        $('#successModal').css('display', 'flex');
                        // ২. ফর্ম খালি করে দিবে
                        $('#property-form')[0].reset();
                        // ৩. ফাইলের নামগুলো মুছে দিবে
                        $('#main-img-name, #video-file-name').text('');
                    } else {
                        // ডাটাবেজে সেভ না হলে এরর দেখাবে
                        alert('Error: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    console.log('Response Text:', xhr.responseText);
                    alert('Something went wrong. Check console for details.');
                },
                complete: function() {
                    btn.prop('disabled', false).text('Post Property');
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {

        // ১. রিয়েল-টাইম ডাটা রিফ্রেশ করার ফাংশন
        function refreshPropertyList() {
            // বর্তমানে কোন পেজটি খোলা আছে তা চেক করা
            const activeMenu = $('aside li.active').data('page');

            // শুধুমাত্র Listed-proparty পেজে থাকলেই রিফ্রেশ হবে
            if (activeMenu === 'Listed-proparty') {
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'POST',
                    data: {
                        action: 'load_dashboard_page',
                        page: 'Listed-proparty'
                    },
                    success: function(response) {
                        $('#content-area').html(response);
                    }
                });
            }
        }

        // ২. প্রতি ১০ সেকেন্ড পরপর চেক করবে
        setInterval(refreshPropertyList, 5000);

        // ৩. প্রপার্টি সাবমিট হ্যান্ডলার (Event Delegation)
        $(document).on('submit', '#property-form', function(e) {
            e.preventDefault();

            let btn = $('#submitBtn');
            let originalText = btn.text();
            btn.prop('disabled', true).text('Processing...');

            let formData = new FormData(this);
            formData.append('submit', '1');

            $.ajax({
                url: '<?php echo get_stylesheet_directory_uri(); ?>/deshbord/property-submit.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        $('#successModal').css('display', 'flex'); // সাকসেস মডাল দেখাবে
                        $('#property-form')[0].reset();
                        $('#main-img-name, #video-file-name').text('');

                        // নতুন ডাটা সাবমিট হলে লিস্ট রিফ্রেশ করবে
                        refreshPropertyList();
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function() {
                    alert('Submission failed!');
                },
                complete: function() {
                    btn.prop('disabled', false).text(originalText);
                }
            });
        });

    });

    // ৪. ডাটা ডিলিট করার ফাংশন (এটি $(document).ready এর বাইরে রাখতে পারেন)
    function deleteProperty(id) {
        if (confirm("Are you sure you want to delete this property?")) {
            $.ajax({
                url: '<?php echo get_stylesheet_directory_uri(); ?>/deshbord/delete-proparty.php', // আপনার ডিলিট ফাইলের সঠিক পাথ
                type: 'POST',
                data: {
                    property_id: id
                },
                success: function(response) {
                    // সার্ভার যদি 'success' রিটার্ন করে
                    if (response.trim() === "success") {
                        // পেজ রিলোড না করে কার্ডটি হাইড করে ডিলিট করা
                        $('#property-card-' + id).fadeOut(500, function() {
                            $(this).remove();
                        });
                    } else {
                        alert("Error: Could not delete the property. " + response);
                    }
                },
                error: function() {
                    alert('Something went wrong with the AJAX request.');
                }
            });
        }
    }
</script>


<!-- dynamic page routing -->
<script>
    // আপনার কার্ডের ক্লিক ইভেন্ট
    $('.property-card').on('click', function() {
        var propertyId = $(this).data('id'); // কার্ড থেকে ID নিন

        $.ajax({
            url: ajax_object.ajax_url, // আপনার AJAX URL
            type: 'POST',
            data: {
                action: 'load_dashboard_page',
                page: 'details', // আমরা details কেস-এ যাবো
                property_id: propertyId // এই ID-টি পাঠাচ্ছি
            },
            success: function(response) {
                $('#dashboard-content-area').html(response);
            }
        });
    });
</script>
<script>

</script>

<!-- edit modal -->
<script>
    var $j = jQuery.noConflict();

    function openEditModal(id) {
        // ১. প্রথমে মোডাল দেখান
        $j('#editModal').removeClass('hidden').addClass('flex');

        // ২. ডাটা নিয়ে আসুন
        $j.ajax({
            // নিশ্চিত করুন এই পাথটি সঠিক
            url: '<?php echo get_stylesheet_directory_uri(); ?>/deshbord/get-property-details.php',
            type: 'GET',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(data) {
                if (data) {
                    // ইনপুট ফিল্ডের ID অনুযায়ী ডাটা বসানো
                    $j('#edit_property_id').val(data.id);
                    $j('#edit_name').val(data.property_name);
                    $j('#edit_price').val(data.total_price);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText); // এরর চেক করার জন্য
            }
        });
    }
</script>

<script>
    function changeImage(imageUrl, element) {
        // ১. মেইন ইমেজের সোর্স পরিবর্তন (আইডি থেকে '#' বাদ দেওয়া হয়েছে)
        console.log(imageUrl);
        const mainImg = document.getElementById('main-display-image');
        mainImg.src = imageUrl;

        // ২. সব থাম্বনেইল থেকে গ্রিন বর্ডার রিমুভ করা
        const allThumbs = document.querySelectorAll('.gallery-item');
        allThumbs.forEach(thumb => {
            thumb.classList.remove('border-green-500');
            thumb.classList.add('border-transparent');
        });

        // ৩. ক্লিক করা ইমেজে (যা 'element' হিসেবে পাস হয়েছে) গ্রিন বর্ডার অ্যাড করা
        element.classList.add('border-green-500');
        element.classList.remove('border-transparent');
    }
</script>