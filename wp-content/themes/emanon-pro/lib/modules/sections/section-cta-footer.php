<?php
/**
* Calls to action footer section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
 $cta_footer_tell = get_theme_mod( 'cta_footer_tell', '' );
 $cta_footer_text = get_theme_mod( 'cta_footer_text', '' );
 $cta_footer_btn_url = get_theme_mod( 'cta_footer_btn_url', '' );
 $cta_footer_btn_text = get_theme_mod( 'cta_footer_btn_text', '' );
 $cta_footer_btn_url = get_theme_mod( 'cta_footer_btn_url', '' );
?>
<!--footer cta-->
<div class="cta-footer-section" data-wow-delay="0.4s">
	<div class="container">
		<div class="cta-footer-container">
			<div class="col4 first footer-site-name">
				<?php emanon_footer_logo(); ?>
			</div>
			<div class="col8 footer-contact">
				<ul>
					<?php if ( $cta_footer_tell || $cta_footer_text ): ?>
					<li class="cta-footer-tell"><?php if ( $cta_footer_tell ) { ?><i class="fa fa-phone"></i><a href="tel:<?php echo esc_html( $cta_footer_tell ); ?>"><?php echo esc_html( $cta_footer_tell ); ?></a><br><?php } ?><span><?php echo ( $cta_footer_text ); ?></span></li>
					<?php endif; ?>
					<?php if ( $cta_footer_btn_text ): ?>
					<li><span class="btn cta-footer-btn"><a href="<?php echo esc_url( $cta_footer_btn_url ); ?>"><?php echo esc_html( $cta_footer_btn_text ); ?></a></span></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--end footer cta-->
