<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaffen
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
<div id="comments" class="section__comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

		<h4 class="element-anim-1 scroll-animate" data-animate="active">
			<?php comments_number( esc_html__( 'No comments found', 'kaffen' ), esc_html__( '1 Comment', 'kaffen' ), esc_html__( '% Comments', 'kaffen' ) ); ?>
		</h4>

		<ul class="comments">
			<?php
			wp_list_comments( array(
				'style'	  => 'ul',
				'avatar_size' => '80',
				'callback' => 'kaffen_comment'
			) );
			?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation( array(
			'screen_reader_text' => ' ',
			'prev_text' => esc_html__( 'Older comments', 'kaffen' ),
			'next_text' => esc_html__( 'Newer comments', 'kaffen' )
		) );

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kaffen' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>

	<div class="form-comment kf-comment-form element-anim-1 scroll-animate" data-animate="active">
		<?php
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			$comment_args = array(
				'title_reply' => esc_html__( 'Leave a comment', 'kaffen' ),
				'title_reply_to' => esc_html__( 'Leave a comment to %s', 'kaffen' ),
				'cancel_reply_link' => esc_html__( 'Cancel Reply', 'kaffen' ),
				'title_reply_before' => '<div class="m-titles"><h4 class="element-anim-1 scroll-animate" data-animate="active">',
				'title_reply_after' => '</h4></div>',
				'label_submit' => esc_html__( 'Submit', 'kaffen' ),
				'comment_field' => '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="kf-field"><textarea class="textarea" rows="3" placeholder="' . esc_attr__( 'Comment', 'kaffen' ).'" id="comment" name="comment" aria-required="true" ></textarea></div></div></div>',
				'must_log_in' => '<p class="must-log-in">' . esc_html__( 'You must be ', 'kaffen' ) . '<a href="' . esc_url( wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '">' . esc_html__( 'logged in', 'kaffen' ) . '</a>' . esc_html__( ' to post a comment.', 'kaffen' ) . '</p>',
				'logged_in_as' => '<p class="logged-in-as">' . esc_html__( 'Logged in as ', 'kaffen' ) . '<a href="' . esc_url( admin_url( 'profile.php' ) ) . '">' . esc_html( $user_identity ) . '</a>' . esc_html__( '. ', 'kaffen' ) . '<a href="' . esc_url( wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '" title="' . esc_attr__( 'Log out of this account', 'kaffen' ) . '">' . esc_html__( 'Log out?', 'kaffen' ) . '</a></p>',
				'comment_notes_before' => '',
				'comment_notes_after' => '',
				'fields' => apply_filters( 'comment_form_default_fields', array(
					'author' => '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="kf-field"><input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Name', 'kaffen' ) . '" class="input" value="" ' . $aria_req . ' /></div></div>',
					'email' => '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="kf-field"><input id="email" name="email" type="text" placeholder="' . esc_attr__( 'Email', 'kaffen' ) . '" class="input" value="" ' . $aria_req . ' /></div></div></div>',
				)),
				'class_submit' => 'btn',
				'submit_field' => ' <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">%1$s %2$s</div>',
				'submit_button' => '<button type="submit" name="%1$s" id="%2$s" class="%3$s kf-btn"><span>%4$s</span><i class="fas fa-chevron-right"></i></button>'
			);

			comment_form( $comment_args );
		?>
	</div>

</div><!-- #comments -->
