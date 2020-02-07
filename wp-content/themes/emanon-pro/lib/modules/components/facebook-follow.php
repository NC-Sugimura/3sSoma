<?php
/**
* Facebook follow btn for single
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$fb_like_btn_title = get_theme_mod( 'fb_like_btn_title', __( 'If you like this article, Please click on the button', 'emanon' ) );
	$fb_like_image = get_theme_mod( 'fb_like_image', '' );
?>
<!--fb follow-->
<div class="fb-follow">
	<div class="fb-follow-image">
		<?php if ( $fb_like_image ): ?>
		<img src="<?php echo esc_url( $fb_like_image ); ?>" alt="<?php echo esc_html( $fb_like_btn_title ); ?>">
		<?php elseif ( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail( 'middle-thumbnail' ); ?>
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/middle-no-img.png" width="1016" height="300" alt="no image" />
		<?php endif; ?>
	</div>
	<div class="fb-follow-text">
		<p><?php echo esc_html( $fb_like_btn_title ); ?></p>
		<div class="fb-like fb-button" data-href="<?php echo esc_url( get_emanon_facebook_profile_url() ); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
	</div>
</div>
<!--end fb follow-->