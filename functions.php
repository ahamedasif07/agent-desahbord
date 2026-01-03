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


	// Font Awesome
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
		[],
		'6.5.0'
	);
}

add_action('wp_enqueue_scripts', 'astra_child_style');




/**
 * Your code goes below.
 */
