<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="header_bg"></div>
	<?php if(!is_404()) :?>
	<div class="menu_h clearfix">
		<div class="wrapper">
			<?php wp_nav_menu( array('theme_location' => 'header_menu_left',
					'menu_class'      => 'menu left_menu'
			 )); ?>
			<a href="<?php echo esc_url(home_url()); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/pic/logo1.png" alt=""></a>
			<?php wp_nav_menu( array('theme_location' => 'header_menu_right',
					'menu_class'      => 'menu right_menu'
			 )); ?>
		</div>
	</div>
	<?php endif; ?>
