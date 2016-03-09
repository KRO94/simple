<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple blog</title>
</head>
<?php wp_head(); ?>
<body>
	<header>
		<div class="h-bg"></div>
		<div class="main">
			<div class="wrapper">
				<ul class="left-menu">
					<li><a href="#About">About</a></li>
					<li><a href="#Home">Home</a></li>
				</ul>
				<a href="http://simple.blog/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/pic/logo1.png" alt=""></a>
				<ul class="right-menu">
					<li><a href="#Category">Category</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div id="content">
		<div class="wrapper">
			<span class="h-text">Hello, Welcome to my Blog!</span>
							<?php
							$args = array( 'numberposts' => '4' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
						?>
				<div class="post">
				<span class="date">31 Jul</span>
					<div class="content-post">
							<div class="category">cat : <span>Diary , Personal</span></div>
							<div class="likes">136 Likes</div>
							<div class="comments">21 Comments</div>
							<div class="text-p"><p><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo $recent["post_title"]; ?></a></p>
								<span><?php echo $recent["post_content"]; ?></span>
								<button><a href="#">Read More</a></button>
						</div>
					</div>
				</div>
			<?php 
				}
			?>
		</div>
	</div>
		<div class="btn">
			<button class = "more"><a href="#">Load More</a></button>
		</div>
	<footer>Copyrights (c) <span>Fikristudio</span> 2014</footer>
	<?php wp_footer(); ?>
</body>
</html>