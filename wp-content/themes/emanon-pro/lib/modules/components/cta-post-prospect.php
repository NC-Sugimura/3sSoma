<?php
/**
* Calls to action for pospect(d)
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
 $cta_prospect_image = get_theme_mod( 'cta_prospect_image', '' );
 $cta_prospect_title = get_theme_mod( 'cta_prospect_title', '' );
 $cta_prospect_text = get_theme_mod( 'cta_prospect_text', '' );
 $cta_prospect_btn_url = get_theme_mod( 'cta_prospect_btn_url', '' );
 $cta_prospect_btn_text = get_theme_mod( 'cta_prospect_btn_text', '' );
 $cta_prospect_contactform7 = get_theme_mod( 'cta_prospect_contactform7', '' );
?>
<!--cta prospect-->
<aside class="cta-post cta-d-background wow fadeIn" data-wow-delay="0.2s">

	<?php if ( $cta_prospect_title ): ?>
	<div class="cta-post-header cta-d-title">
		<h3><?php echo esc_html( $cta_prospect_title ); ?></h3>
	</div>
	<?php endif; ?>

	<div class="cta-post-content clearfix">
		<?php if ( $cta_prospect_image ): ?>
		<div class="cta-d-image">
			<img src="<?php echo esc_url( $cta_prospect_image ); ?>" alt="<?php echo esc_html( $cta_prospect_title ); ?>">
		</div>
		<?php endif; ?>
		<?php if ( $cta_prospect_text ): ?>
		<div class="cta-d-text">
			<p><?php echo nl2br( esc_html( $cta_prospect_text ) ); ?></p>
		</div>
		<?php endif; ?>
	</div>

	<?php if ( $cta_prospect_btn_url ): ?>
	<div class="cta-post-footer">
		<span class="btn btn-lg cta-d-btn"><a href="<?php echo esc_url( $cta_prospect_btn_url ); ?>"><?php echo esc_html( $cta_prospect_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>

	<?php if ( $cta_prospect_contactform7 ): ?>
		<div class="cta-post-footer cta-d-text">
		<?php echo do_shortcode( $cta_prospect_contactform7 ); ?>
	</div>
	<?php endif; ?>

</aside>
<!--end cta page-->
