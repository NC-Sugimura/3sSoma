<?php
/**
* Calls to action for eventually(b)
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
 $cta_eventually_image = get_theme_mod( 'cta_eventually_image', '' );
 $cta_eventually_title = get_theme_mod( 'cta_eventually_title', '' );
 $cta_eventually_text = get_theme_mod( 'cta_eventually_text', '' );
 $cta_eventually_btn_url = get_theme_mod( 'cta_eventually_btn_url', '' );
 $cta_eventually_btn_text = get_theme_mod( 'cta_eventually_btn_text', '' );
 $cta_eventually_contactform7 = get_theme_mod( 'cta_eventually_contactform7', '' );
?>
<!--cta eventually-->
<aside class="cta-post cta-b-background wow fadeIn" data-wow-delay="0.2s">

	<?php if ( $cta_eventually_title ): ?>
	<div class="cta-post-header cta-b-title">
		<h3><?php echo esc_html( $cta_eventually_title ); ?></h3>
	</div>
	<?php endif; ?>

	<div class="cta-post-content clearfix">
		<?php if ( $cta_eventually_image ): ?>
		<div class="cta-b-image">
			<img src="<?php echo esc_url( $cta_eventually_image ); ?>" alt="<?php echo esc_html( $cta_eventually_title ); ?>">
		</div>
		<?php endif; ?>
		<?php if ( $cta_eventually_text ): ?>
		<div class="cta-b-text">
			 <p><?php echo nl2br( esc_html( $cta_eventually_text ) ); ?></p>
		</div>
		<?php endif; ?>
	</div>

	<?php if ( $cta_eventually_btn_url ): ?>
	<div class="cta-post-footer">
		<span class="btn btn-lg cta-b-btn"><a href="<?php echo esc_url( $cta_eventually_btn_url ); ?>"><?php echo esc_html( $cta_eventually_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>

	<?php if ( $cta_eventually_contactform7 ): ?>
		<div class="cta-post-footer cta-b-text">
		<?php echo do_shortcode( $cta_eventually_contactform7 ); ?>
	</div>
	<?php endif; ?>

</aside>
<!--end cta eventually-->
