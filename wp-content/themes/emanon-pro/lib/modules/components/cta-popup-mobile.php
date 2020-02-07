<?php
/**
* Calls to action popup for mobile
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
 $cta_popup_title = get_theme_mod( 'cta_popup_title', '' );
 $cta_popup_image = get_theme_mod( 'cta_popup_image', '' );
 $cta_popup_text = get_theme_mod( 'cta_popup_text', '' );
 $cta_popup_btn_url = get_theme_mod( 'cta_popup_btn_url', '' );
 $cta_popup_btn_text = get_theme_mod( 'cta_popup_btn_text', '' );
 $cta_popup_contactform7 = get_theme_mod( 'cta_popup_contactform7', '' );
?>
<!--cta popup-->
<div class="remodal cta-popup-inner" data-remodal-id="modal-cta-popup" data-remodal-options="hashTracking:false">
	<button data-remodal-action="close" class="remodal-close"></button>
	<?php if ( $cta_popup_title ): ?>
	<div class="cta-popup-header-remodal">
		<span><?php echo esc_html( $cta_popup_title ); ?></span>
	</div>
	<?php endif; ?>
	<div class="cta-popup-body clearfix">
		<?php if ( $cta_popup_image ): ?>
		<div class="cta-popup-image">
			<img src="<?php echo esc_url( $cta_popup_image ); ?>" alt="<?php echo esc_html( $cta_popup_title ); ?>">
		</div>
		<?php endif; ?>
		<?php if ( $cta_popup_text ): ?>
		<div class="cta-popup-text">
			<p><?php echo nl2br( $cta_popup_text ); ?></p>
		</div>
		<?php endif; ?>
	</div>
	<?php if ( $cta_popup_btn_url ): ?>
	<div class="cta-popup-footer">
		<span class="btn btn-lg cta-popup-btn"><a href="<?php echo esc_url( $cta_popup_btn_url ); ?>"><?php echo esc_html( $cta_popup_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>
	<?php if ( $cta_popup_contactform7 ): ?>
	<div class="cta-popup-footer">
		<?php echo do_shortcode( $cta_popup_contactform7 ); ?>
	</div>
	<?php endif; ?>
</div>
<!--end cta popup-->