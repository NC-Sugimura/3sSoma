<?php
/**
* Calls to action for common
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
 $cta_common_image = get_theme_mod( 'cta_common_image', '' );
 $cta_common_title = get_theme_mod( 'cta_common_title', '' );
 $cta_common_text = get_theme_mod( 'cta_common_text', '' );
 $cta_common_btn_url = get_theme_mod( 'cta_common_btn_url', '' );
 $cta_common_btn_text = get_theme_mod( 'cta_common_btn_text', '' );
 $cta_common_contactform7 = get_theme_mod( 'cta_common_contactform7', '' );
?>
<!--cta common-->
<aside class="cta-post cta-common-background wow fadeIn" data-wow-delay="0.2s">

	<?php if ( $cta_common_title ): ?>
	<div class="cta-post-header cta-common-title">
		<h3><?php echo esc_html( $cta_common_title ); ?></h3>
	</div>
	<?php endif; ?>

	<div class="cta-post-content clearfix">
		<?php if ( $cta_common_image ): ?>
		<div class="cta-common-image">
			<img src="<?php echo esc_url( $cta_common_image ); ?>" alt="<?php echo esc_html( $cta_common_title ); ?>">
		</div>
		<?php endif; ?>
		<?php if ( $cta_common_text ): ?>
		<div class="cta-common-text">
			<p><?php echo nl2br( esc_html( $cta_common_text ) ); ?></p>
		</div>
		<?php endif; ?>
	</div>

	<?php if ( $cta_common_btn_url ): ?>
	<div class="cta-post-footer">
		<span class="btn btn-lg cta-common-btn"><a href="<?php echo esc_url( $cta_common_btn_url ); ?>"><?php echo esc_html( $cta_common_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>

	<?php if ( $cta_common_contactform7 ): ?>
	<div class="cta-post-footer cta-common-text">
		<?php echo do_shortcode( $cta_common_contactform7 ); ?>
	</div>
	<?php endif; ?>

</aside>
<!--end cta common-->
