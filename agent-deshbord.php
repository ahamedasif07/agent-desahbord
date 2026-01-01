<?php
/*
Template Name: agent-deshbord
*/
get_header();
?>

<div>
    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <div>
            <?php get_template_part('deshbord-parts/d-sidebar'); ?>
        </div>

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- NAVBAR -->
            <?php get_template_part('deshbord-parts/d-navbar') ?>

            <!-- MAIN BODY -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-8">

                <!-- DASHBOARD CARDS -->
                <?php get_template_part('deshbord-parts/d-stats-cards') ?>

                <!-- ACTION BAR -->
                <?php get_template_part('deshbord-parts/d-action-bar') ?>

                <!-- TABLE AREA (PLACEHOLDER) -->
                <div
                    class="mt-8 bg-white rounded-xl shadow-sm border border-gray-100 h-64 flex items-center justify-center text-gray-400 border-dashed border-2">
                    Your Main Content (Tables/Lists) goes here...
                </div>

            </main>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>