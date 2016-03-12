<?php get_header(); ?>

	<div id="content">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="post_content">
					<?php the_content(); ?>
				</div>

			<?php endwhile; endif; ?>
		</div>
	</div>
	
<?php get_footer(); ?>