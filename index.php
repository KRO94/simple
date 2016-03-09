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

	<div id="content">
		<div class="wrapper">
			<span class="h-text">Hello, Welcome to my Blog!</span>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<div class="date"><?php the_time('j M'); ?></div>
				<ul class="info_post clearfix">
					<li class="category">cat : <span><?php the_category(','); ?></span></li>
					<li class="likes"><img src="<?php echo get_template_directory_uri(); ?>/pic/likes.png" alt="likes">136 <span>Likes</span></li>
					<li class="comments">
						<a href="<?php the_permalink() ?>#comments">
							<img src="<?php echo get_template_directory_uri(); ?>/pic/com.png" alt=""><span><?php comments_number('No comments yet', '1 comment', '% comments'); ?></span>
						</a>
					</li>
				</ul>

				<div class="post_content">
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a>
				</div>

			</div>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>




<!-- 			<div class="pagination">
				<ul>
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div> -->
	
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>
