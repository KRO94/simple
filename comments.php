<div class="comments_block" data-post-id='{"id":<?php echo get_the_ID(); ?>}'>

		<h2 class="comments_title">
			<?php
				comments_number('No comments yet', '1 comment', '% comments');
			?>
			<div class="control-block"><?php previous_post_link('%link','Next Stories >'); ?></div>
		</h2>
	<?php	$arg = array(
			'fields' => array(
				'author' => '<div class="comment-form-author">' . '<div class="label-block"><label for="author">' . __( 'Use Your Real Name' ) . '</label></div>' .
				'<div class="input-block"><input id="author" name="author" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div></div>',
				'email'  => '<div class="comment-form-email"><div class="label-block"><label for="email">' . __( 'Email Will not published' ) . '</label></div>' .
				'<div class="input-block"><input id="email" name="email" type="text" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div></div>'
			),
			'comment_field' => '<div class="comment-form-comment clearfix"><div class="label-block"><label for="comment">' . _x( 'Write a good comment', 'noun' ) . '</label></div>
				<div class="textarea-block">
					<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comments"></textarea>
					</div>
				</div>',
			'comment_notes_before' => '',
			'title_reply' => __( 'Post A Comment' ),
			'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="post" />',
			'submit_field'         => '<div class="form-button">%1$s %2$s</div>'
		);
		
	?>

	<?php 
		add_filter('comment_form_fields', 'wp_reorder_comment_fields' );
		function wp_reorder_comment_fields( $fields ){
			$new_fields = array();
			$myorder = array('author','email','url','comment');

			foreach( $myorder as $key ){
				$new_fields[ $key ] = $fields[ $key ];
				unset( $fields[ $key ] );
			}

			if( $fields )
				foreach( $fields as $key => $val )
				$new_fields[ $key ] = $val;

		return $new_fields;
		}
	?>
	<?php comment_form( $arg); ?>


	<?php if ( have_comments() ) : ?>
		<ol class="comment_list">

		</ol>
	<?php else: ?>
		<ol class="comment_list">No comments yet</ol>
	<?php endif; // have_comments() ?>


</div>