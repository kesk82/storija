<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Storija
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<!-- Comments -->
<div class="comments" id="comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<div class="comment_number">
      Comments <span>(<?php echo get_comments_number(); ?>)</span>
		</div>
																			

		<?php the_comments_navigation(); ?>

		<div class="comment-list">
			<?php
			wp_list_comments( array(
				'callback' => 'skke_list_comments_cb',
				'style' => 'div'
			));
			?>
		</div><!-- .comment-list -->


		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'storija' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$args = array(
    'fields' => apply_filters(
        'comment_form_default_fields', array(

				'author' => '<div class="row"><div class="col-lg-4">' .
                    '<div class="form-group">' .
                    '<label class="upper" for="author">Name</label>' .
                    '<input id="author" name="author" class="form-control required"  placeholder="Enter name"  aria-required="true" type="text" value="' .
										esc_attr( $commenter['comment_author'] ) . '">' .
                    '</div></div>',
								
				'email' => '<div class="col-lg-4">' .
										'<div class="form-group">' .
										'<label class="upper" for="email">Email</label>' .
										'<input id="email" name="email" class="form-control required email" placeholder="Enter email" aria-required="true" value="' . esc_attr(  $commenter['comment_author_email'] ) .
										'" type="email">' .
										'</div></div>',
        
				
				'url' => '<div class="col-lg-4">' .
									'<div class="form-group">' .
									'<label class="upper" for="url">Website</label>' .
									'<input id="url" name="url" class="form-control website"  placeholder="Enter Website" aria-required="false" value="' . esc_attr( $commenter['comment_author_url'] ) . '" type="text">' .
									'</div></div></div>'
        )
		),
		
		'comment_field' => '<div class="row"><div class="col-lg-12"><div class="form-group">' .
						'<label class="upper" for="comment">Your comment</label>' .
						'<textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>' .
						'</div></div></div>',
				
		'comment_notes_after' => '',
		
		'title_reply' => '<div class="respond-comment">Leave a <span>Comment</span></div>',
		
		'submit_button' => '<button class="btn" type="submit">Submit Comment</button>',
		'submit_field' => '<div class="row"><div class="col-lg-12"><div class="form-group text-center">%1$s %2$s</div></div></div>',
		'comment_notes_before' => ''
	);

	echo '<div class="respond-form">';
	comment_form($args);
	echo '</div>';
	?>

</div><!-- #comments -->
