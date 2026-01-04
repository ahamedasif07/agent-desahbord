<?php
/* Template Name: agent-dashboard */

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css?ver=<?php echo time(); ?>">

<div class="dashboard-wrapper">
    <div>


        <?php get_template_part('deshbord/sidebar'); ?>
    </div>
</div>