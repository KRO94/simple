<?php
function simple_blog_scripts() {
	wp_enqueue_style( 'simple_blog-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'simple_blog-css1', get_template_directory_uri() . '/main.css' );
}

add_action( 'wp_enqueue_scripts', 'simple_blog_scripts' );

add_theme_support( 'menus' );


?>