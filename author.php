	<?php get_header(); ?>

	<div id="content">
		<div class="wrapper">
			<h1><?php echo get_the_author(); ?></h1>
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

	<?php get_footer(); ?>
	<?php wp_footer(); ?>