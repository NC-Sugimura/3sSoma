<?php
/**
* Calls to action for potential(a)
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
 $cta_potential_image = get_theme_mod( 'cta_potential_image', '' );
 $cta_potential_title = get_theme_mod( 'cta_potential_title', '' );
 $cta_potential_text = get_theme_mod( 'cta_potential_text', '' );
 $cta_potential_btn_url = get_theme_mod( 'cta_potential_btn_url', '' );
 $cta_potential_btn_text = get_theme_mod( 'cta_potential_btn_text', '' );
 $cta_potential_contactform7 = get_theme_mod( 'cta_potential_contactform7', '' );
?>
<!--cta potential-->
<aside class="cta-post cta-a-background wow fadeIn" data-wow-delay="0.2s">

	<?php if ( $cta_potential_title ): ?>
	<div class="cta-post-header cta-a-title">
		<h3><?php echo esc_html( $cta_potential_title ); ?></h3>
	</div>
	<?php endif; ?>

	<div class="cta-post-content clearfix">
		<?php if ( $cta_potential_image ): ?>
		<div class="cta-a-image">
			<img src="<?php echo esc_url( $cta_potential_image ); ?>" alt="<?php echo esc_html( $cta_potential_title ); ?>">
		</div>
		<?php endif; ?>
		<?php if ( $cta_potential_text ): ?>
		<div class="cta-a-text">
			<p><?php echo nl2br( esc_html( $cta_potential_text ) ); ?></p>
		</div>
		<?php endif; ?>
	</div>

	<?php if ( $cta_potential_btn_url ): ?>
	<div class="cta-post-footer">
		<span class="btn btn-lg cta-a-btn"><a href="<?php echo esc_url( $cta_potential_btn_url ); ?>"><?php echo esc_html( $cta_potential_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>

	<?php if ( $cta_potential_contactform7 ): ?>
		<div class="cta-post-footer cta-a-text">
		<?php echo do_shortcode( $cta_potential_contactform7 ); ?>
	</div>
	<?php endif; ?>

</aside>
<!--end cta potential-->
