<?php

/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */


function astra_child_style()
{

	// Parent
	wp_enqueue_style(
		'astra-parent',
		get_template_directory_uri() . '/style.css'
	);

	// Child
	wp_enqueue_style(
		'astra-child',
		get_stylesheet_directory_uri() . '/style.css',
		['astra-parent']
	);

	// Tailwind output
	$tailwind_path = get_stylesheet_directory() . '/src/output.css';

	wp_enqueue_style(
		'astra-child-tailwind',
		get_stylesheet_directory_uri() . '/src/output.css',
		[],
		file_exists($tailwind_path) ? filemtime($tailwind_path) : null
	);
	// enque  jquray
	wp_enqueue_script('jquery');


	// Font Awesome
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
		[],
		'6.5.0'
	);
}

add_action('wp_enqueue_scripts', 'astra_child_style');


// Dashboard AJAX Handler


function load_dashboard_page_callback()
{
	$page = sanitize_text_field($_POST['page']);

	switch ($page) {
		case 'create-new':
			get_template_part('/deshbord/add-proparty');
			break;
		case 'Listed-proparty':
			get_template_part('/deshbord/listed-proparty');
			break;
		case 'analytics':
			get_template_part('/deshbord/analytics');
			break;
		case 'messages':
			get_template_part('/deshbord/messages');
			break;
		case 'details':
			get_template_part('/deshbord/proparty-details');
			break;
		case 'settings':
			get_template_part('/deshbord/setting');
			break;
		default:
			echo '<div class="content-card"><h1>404</h1><p>Page not found</p></div>';
	}

	wp_die(); // WordPress AJAX শেষ করার জন্য
}
add_action('wp_ajax_load_dashboard_page', 'load_dashboard_page_callback');
add_action('wp_ajax_nopriv_load_dashboard_page', 'load_dashboard_page_callback');


/**
 * Your code goes below.
 */
