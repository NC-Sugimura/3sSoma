<?php
/**
* Template comments
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

if ( post_password_required() ) {
	return;
}
?>
<?php if ( have_comments() ) : ?>
<div id="comment-area">
	<h2 id="comments"><i class="fa fa-comments-o"></i><?php _e( 'Comments', 'emanon' ); ?></h2>
	<ul>
	<?php wp_list_comments( 'callback=emanon_comment' ); ?>
	</ul>
	<div class="comment-page-link">
	<?php paginate_comments_links(); ?>
	</div>
</div>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<?php comment_form(); ?>
<?php endif; ?>
