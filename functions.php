<?php
function simple_blog_scripts() {
	wp_enqueue_style( 'simple_blog-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'simple_blog-css1', get_template_directory_uri() . '/main.css' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'simple_blog-main', get_template_directory_uri() . '/js/main.js' );
	wp_localize_script( 'simple_blog-main', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}

add_action( 'wp_enqueue_scripts', 'simple_blog_scripts' );

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu_left' => 'left menu',
		'header_menu_right' => 'right menu'
	) );
});

function simple_get_comments() {
	$per_page = 2;

	if(isset($_POST['single']) && $_POST['single'] == true) $per_page = 1;

	$comments = get_comments(array(
		'post_id' => $_POST['id'],
		'status' => 'approve'
	));
	wp_list_comments( array('per_page' => $per_page, 'page' => $_POST['count']), $comments );
	// print_r( $comments );
	wp_die();
}
add_action('wp_ajax_comments', 'simple_get_comments');
add_action('wp_ajax_nopriv_comments', 'simple_get_comments');

function simple_post_comment() {
	$comment = $_POST['comment'];
	$post_id = $_POST['comment_post_ID'];

	if (is_user_logged_in()) {
		$args = array(
			'comment_post_ID' => $post_id,
			'user_id' => get_current_user_id(),
			'comment_content' => $comment
		);
	} else {
		$name = $_POST['author'];
		$email = $_POST['email'];
		$args = array(
			'comment_post_ID' => $post_id,
			'comment_author' => $name,
			'comment_author_email' => $email,
			'comment_content' => $comment);
	}

	echo wp_insert_comment($args);

	wp_die();
}
add_action('wp_ajax_post_comment', 'simple_post_comment');
add_action('wp_ajax_nopriv_post_comment', 'simple_post_comment');
?>