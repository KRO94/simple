<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple blog</title>
</head>
<?php wp_head(); ?>
<body>
	<?php get_header(); ?>
<!-- 	<header>
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
	</header> -->
	<div id="content">
		<div class="wrapper">
			<span class="h-text">Hello, Welcome to my Blog!</span>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<span class="date"><?php the_time('j M'); ?></span>
						<div class="content-post">
								<div class="category">cat : <span><?php the_category(','); ?></span></div>
								<div class="likes">136 Likes</div>
								<div class="comments">
									<a href="<?php the_permalink() ?>#comments">
										<img src="<?php echo get_template_directory_uri(); ?>/pic/com.png" alt=""><?php comments_number('пока нет комментариев', '1 комменатрий', '% комментариев'); ?>
									</a>
									</div>
								<div class="text-p"><p><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
									<span><?php the_excerpt(); ?></span>
									<button><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a></button>
							</div>
						</div>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		</div>
	</div>
		<div class="btn">
			<button class = "more"><a href="#">Load More</a></button>
		</div>
		<?php get_footer(); ?>
	<!-- <footer>Copyrights (c) <span>Fikristudio</span> 2014</footer> -->
	<?php wp_footer(); ?>
</body>
</html>