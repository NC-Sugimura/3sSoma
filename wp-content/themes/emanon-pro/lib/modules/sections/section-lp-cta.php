<?php
/**
* LP calls to action section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
 $cta_lp_icon = get_theme_mod( 'cta_lp_icon', 'fa fa-envelope-o' );
 $cta_lp_title = get_theme_mod( 'cta_lp_title', '' );
 $cta_lp_sub_title = get_theme_mod( 'cta_lp_sub_title', '' );
 $cta_lp_btn_url = get_theme_mod( 'cta_lp_btn_url', '' );
 $cta_lp_btn_text = get_theme_mod( 'cta_lp_btn_text', '' );
 $cta_lp_contactform7 = get_theme_mod( 'cta_lp_contactform7', '' );
?>
<!--cta section-->
<section id="cta-section" class="lp-cta wow fadeIn" data-wow-delay="0.2s">
	<div class="lp-container">
		<div class="lp-cta-contactfrom">
			<div class="lp-cta-header">
				<?php if( $cta_lp_icon ): ?>
				<div class="lp-cta-icon">
					<i class="<?php echo esc_html( $cta_lp_icon ); ?> fa-2x"></i>
				</div>
				<?php endif; ?>
				<?php if ( $cta_lp_title ): ?>
				<h2><?php echo esc_html( $cta_lp_title ); ?></h2>
				<?php endif; ?>
			</div>
			<div class="lp-cta-content clearfix">
				<?php if ( $cta_lp_sub_title ): ?>
				<div class="lp-cta-text">
					<p><?php echo nl2br( esc_html( $cta_lp_sub_title ) ); ?></p>
				</div>
				<?php endif; ?>
			</div>
			<?php if ( $cta_lp_btn_url ): ?>
			<div class="lp-cta-footer wow fadeInUp" data-wow-delay="0.4s">
				<span class="btn btn-mid"><a href="<?php echo esc_url( $cta_lp_btn_url ); ?>" ><?php echo esc_html( $cta_lp_btn_text ); ?></a></span>
			</div>
			<?php endif; ?>
			<?php if ( $cta_lp_contactform7 ): ?>
			<div class="lp-cta-footer">
			<?php echo do_shortcode( $cta_lp_contactform7 ); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!--end cta section-->
