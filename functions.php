<?php
function simple_blog_scripts() {
	wp_enqueue_style( 'simple_blog-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'simple_blog-css1', get_template_directory_uri() . '/main.css' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'simple_blog-main', get_template_directory_uri() . '/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'simple_blog_scripts' );

add_theme_support( 'menus' );

function simple_get_comments() {
	$comments = get_comments(array(
		'post_id' => $_POST['id'],
		'status' => 'approve',
		'orderby' => 'comment_ID',
		'order' => 'DESC'
	));
	wp_list_comments( array('page' => $_POST['count']), $comments );
	// print_r( $comments );
	wp_die();
}
add_action('wp_ajax_comments', 'simple_get_comments');
add_action('wp_ajax_nopriv_comments', 'simple_get_comments');
?>