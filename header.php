<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>

    <!-- Tailwind CSS for Styling -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Essential WordPress Head Hook -->
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50'); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site-wrapper">
        <!-- The content starts here in your template files -->
        <header id="dashboardHeader"
            class="h-16 mt-30px bg-green-500 shadow-sm flex items-center justify-between px-8 transition-all duration-300">
            <h2 class="text-lg font-medium text-gray-700">Welcome, Admin</h2>
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                    A
                </div>
            </div>
        </header>

        <script>
            // Wait for page load
            document.addEventListener("DOMContentLoaded", function() {
                const header = document.getElementById("dashboardHeader");
                const headerHeight = header.offsetHeight;

                // Insert a placeholder div to prevent layout jump
                const placeholder = document.createElement("div");
                placeholder.style.height = headerHeight + "px";
                placeholder.style.display = "none";
                header.parentNode.insertBefore(placeholder, header);

                window.addEventListener("scroll", function() {
                    if (window.scrollY > 50) { // scroll distance before fixed
                        if (!header.classList.contains("fixed")) {
                            header.classList.add("fixed", "top-6", "left-0", "right-0", "z-50");
                            header.classList.add("fixed", "top-6", "left-0", "right-0", "z-50");
                            placeholder.style.display = "block"; // keeps layout
                            header.classList.add("shadow-lg"); // optional: bigger shadow on fixed
                        }
                    } else {
                        header.classList.remove("fixed", "top-0", "left-0", "right-0", "z-50", "shadow-lg");
                        placeholder.style.display = "none";
                    }
                });
            });
        </script>