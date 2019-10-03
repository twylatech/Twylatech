<?php if ( post_password_required() ) { ?>
	<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'pitch' ); ?></p>
	<?php
	return;
}

$qode_title_tag = pitch_qode_options()->getOptionValue('blog_single_title_tags' ) ? pitch_qode_options()->getOptionValue('blog_single_title_tags' ) : 'h5';

if ( comments_open() || get_comments_number() ) { ?>
	<div class="comment_holder clearfix" id="comments">
		<div class="comment_number">
			<div class="comment_number_inner">
				<<?php echo esc_attr( $qode_title_tag ); ?>><?php comments_number( esc_html__( 'No Comments', 'pitch' ), '1 ' . esc_html__( 'Comment', 'pitch' ), '% ' . esc_html__( 'Comments', 'pitch' ) ); ?></<?php echo esc_attr( $qode_title_tag ); ?>>
		</div>
	</div>
	<div class="comments">
		<?php if ( have_comments() ) : ?>
			<ul class="comment-list">
				<?php wp_list_comments( array( 'callback' => 'pitch_qode_comment' ) ); ?>
			</ul>
		<?php else : // this is displayed if there are no comments so far
			if ( ! comments_open() ) : ?>
				<p><?php esc_html_e( 'Sorry, the comment form is closed at this time.', 'pitch' ); ?></p>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	</div>
	<?php
	$qode_commenter = wp_get_current_commenter();
	$qode_req       = get_option( 'require_name_email' );
	$qode_aria_req  = ( $qode_req ? " aria-required='true'" : '' );
	$qode_consent   = empty( $qode_commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	
	$args = array(
		'id_form'              => 'commentform',
		'id_submit'            => 'submit_comment',
		'title_reply'          => '<' . esc_attr( $qode_title_tag ) . '>' . esc_html__( 'Post a Comment', 'pitch' ) . '</' . esc_attr( $qode_title_tag ) . '>',
		'title_reply_to'       => esc_html__( 'Post a Reply to %s', 'pitch' ),
		'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'pitch' ),
		'label_submit'         => esc_html__( 'Submit', 'pitch' ),
		'comment_field'        => '<textarea id="comment" placeholder="' . esc_attr__( 'Write your comment here...', 'pitch' ) . '" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		'fields'               => apply_filters( 'comment_form_default_fields', array(
			'author'  => '<div class="three_columns clearfix"><div class="column1"><div class="column_inner"><input id="author" placeholder="' . esc_attr__( 'Your full name', 'pitch' ) . '" name="author" type="text" value="' . esc_attr( $qode_commenter['comment_author'] ) . '"' . $qode_aria_req . ' /></div></div>',
			'email'   => '<div class="column2"><div class="column_inner"><input id="email" placeholder="' . esc_attr__( 'E-mail address', 'pitch' ) . '" name="email" type="text" value="' . esc_attr( $qode_commenter['comment_author_email'] ) . '"' . $qode_aria_req . ' /></div></div>',
			'url'     => '<div class="column3"><div class="column_inner"><input id="url" placeholder="' . esc_attr__( 'Website', 'pitch' ) . '" name="url" type="text" value="' . esc_attr( $qode_commenter['comment_author_url'] ) . '" /></div></div></div>',
			'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" ' . $qode_consent . ' />' .
			             '<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'pitch' ) . '</label></p>',
		) )
	);
	
	$qode_pagination_class = '';
	if ( pitch_qode_options()->getOptionValue( 'pagination_type' ) == 'standard' && pitch_qode_options()->getOptionValue( 'pagination_standard_position' ) !== '' ) {
		$qode_pagination_class = "standard_" . esc_attr( pitch_qode_options()->getOptionValue( 'pagination_standard_position' ) );
	} elseif ( pitch_qode_options()->getOptionValue( 'pagination_type' ) == 'arrows_on_sides' ) {
		$qode_pagination_class = "arrows_on_sides";
	}
	?>
	<?php if ( get_comment_pages_count() > 1 ) { ?>
		<div class="comment_pager <?php echo esc_attr( $qode_pagination_class ); ?>">
			<p><?php paginate_comments_links(); ?></p>
		</div>
	<?php } ?>
	<div class="comment_form">
		<?php comment_form( $args ); ?>
	</div>
<?php } ?>