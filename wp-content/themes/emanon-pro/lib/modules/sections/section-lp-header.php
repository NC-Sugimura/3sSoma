<?php
/**
* LP header image section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$parallax_header_image = get_theme_mod( 'parallax_header_image', true );
	$header_image_target_message = get_theme_mod( 'header_image_target_message', 'Looking for SEO WordPress theme' );
	$header_image_title = get_theme_mod( 'header_image_title', 'Welcome to Emanon Pro' );
	$header_image_sub_title = get_theme_mod( 'header_image_sub_title', 'Ready to Start Your Own Business?' );
	$header_btn_text = get_theme_mod( 'header_btn_text', 'Sign up' );
	$mobile_header_image = get_theme_mod( 'mobile_header_image', '' );
?>
<!--header section-->
<header>
	<?php emanon_lp_header_cta(); ?>
		<?php if( $parallax_header_image ) :?>
			<?php if( wp_is_mobile() && $mobile_header_image ) :?>
			<div class="lp-header parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( $mobile_header_image ) ;?>">
			<?php else : ?>
			<div class="lp-header parallax-window" data-parallax="scroll" data-image-src="<?php echo header_image();?>">
			<?php endif; ?>
		<?php else : ?>
			<?php if( wp_is_mobile() && $mobile_header_image ) :?>
			<div class="lp-header parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( $mobile_header_image ) ;?>">
			<?php else : ?>
			<div class="lp-header-image" style="background-image:url(<?php echo header_image(); ?>)">
			<?php endif; ?>
		<?php endif; ?>
		<div class="header-message">
			<?php if ( $header_image_target_message ) : ?>
			<p class="header-target-message wow fadeInDownBig" data-wow-duration="1.0s" ><?php echo esc_html( $header_image_target_message ); ?></p>
			<?php endif; ?>
			<h1 class="header-title wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.8s"><?php echo esc_html( $header_image_title ); ?></h1>
			<?php if ( $header_image_sub_title ) : ?>
			<p class="header-sub-title wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="1.2s"><?php echo nl2br( esc_html( $header_image_sub_title ) ); ?></p>
			<?php endif; ?>
			<?php if ( $header_btn_text ): ?>
			<div class="header-btn wow fadeInUp" data-wow-delay="0.6s">
				<span class="btn btn-sm header-btn-bg"><a href="#cta-section"><?php echo esc_html( $header_btn_text ); ?></a></span>
			</div>
			<?php endif; ?>
		</div>
		<div class="header-overlay"></div>
		<div class="loading-wrapper"></div>
	</div>
	<?php emanon_lp_header_cta_scroll(); ?>
</header>
<!--end header section-->
