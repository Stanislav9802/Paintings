<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );



	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.js', array(), 'nill', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>