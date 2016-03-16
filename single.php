<?php get_header(); ?>

	<div id="content">
		<div class="wrapper">
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

				<div class="post_content clearfix">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>

				<p class="tags_block"><?php the_tags('tags ',' , '); ?><p>
					<p><?php the_author_posts_link(); ?></p>
			</div>
			<?php comments_template(); ?>

			<button id="show_comments">Show More Comments</button>
			
			<?php endwhile; endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
