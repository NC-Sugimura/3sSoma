<?php
/**
* Calls to action for compare(c)
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
 $cta_compare_image = get_theme_mod( 'cta_compare_image', '' );
 $cta_compare_title = get_theme_mod( 'cta_compare_title', '' );
 $cta_compare_text = get_theme_mod( 'cta_compare_text', '' );
 $cta_compare_btn_url = get_theme_mod( 'cta_compare_btn_url', '' );
 $cta_compare_btn_text = get_theme_mod( 'cta_compare_btn_text', '' );
 $cta_compare_contactform7 = get_theme_mod( 'cta_compare_contactform7', '' );
?>
<!--cta compare-->
<aside class="cta-post cta-c-background wow fadeIn" data-wow-delay="0.2s">

	<?php if ( $cta_compare_title ): ?>
	<div class="cta-post-header cta-c-title">
		<h3><?php echo esc_html( $cta_compare_title ); ?></h3>
	</div>
	<?php endif; ?>

	<div class="cta-post-content clearfix">
		<?php if ( $cta_compare_image ): ?>
		<div class="cta-c-image">
			<img src="<?php echo esc_url( $cta_compare_image ); ?>" alt="<?php echo esc_html( $cta_compare_title ); ?>">
		</div>
		<?php endif; ?>
		<?php if ( $cta_compare_text ): ?>
		<div class="cta-c-text">
			<p><?php echo nl2br( esc_html( $cta_compare_text ) ); ?></p>
		</div>
		<?php endif; ?>
	</div>

	<?php if ( $cta_compare_btn_url ): ?>
	<div class="cta-post-footer">
		<span class="btn btn-lg cta-c-btn"><a href="<?php echo esc_url( $cta_compare_btn_url ); ?>"><?php echo esc_html( $cta_compare_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>

	<?php if ( $cta_compare_contactform7 ): ?>
	<div class="cta-post-footer cta-c-text">
		<?php echo do_shortcode( $cta_compare_contactform7 ); ?>
	</div>
	<?php endif; ?>

</aside>
<!--end cta compare-->
