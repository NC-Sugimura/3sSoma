<?php
/**
* Eye catch section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3.2
*/
	$eyecatch_layout_reverse = get_theme_mod( 'eyecatch_layout_reverse', '' );
	$eyecatch_image = get_theme_mod( 'eyecatch_image', '' );
	$eyecatch_title = get_theme_mod( 'eyecatch_title', 'Welcome to Emanon' );
	$eyecatch_sub_title = get_theme_mod( 'eyecatch_sub_title', 'Ready to Start Your Own Business?' );
	$eyecatch_btn_url = get_theme_mod( 'eyecatch_btn_url', '' );
	$eyecatch_btn_text = get_theme_mod( 'eyecatch_btn_text', '' );
	$eyecatch_background_image = get_theme_mod( 'eyecatch_background_image', get_theme_file_uri('/lib/images/emanon-header-img.jpg') );
	$display_sp_eyecatch_image = get_theme_mod( 'display_sp_eyecatch_image', true );
	$mobile_eyecatch_background_image = get_theme_mod( 'mobile_eyecatch_background_image', '' );

?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--eye catch-->
<?php if( wp_is_mobile() && $mobile_eyecatch_background_image ) :?>
<div class="header-eyecatch" data-parallax="scroll" data-image-src="<?php echo esc_url( $mobile_eyecatch_background_image ) ;?>">
<?php else : ?>
<div class="header-eyecatch" data-parallax="scroll" data-image-src="<?php echo esc_url( $eyecatch_background_image ) ;?>">
<?php endif; ?>

	<div class="header-eyecatch-container">

		<?php if( $eyecatch_layout_reverse ) :?>
			<!--eye catch message-->
			<?php if ( $eyecatch_title || $eyecatch_sub_title ): ?>
			<div class="header-eyecatch-message">
				<h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.8s"><?php echo nl2br( esc_html( $eyecatch_title ) ); ?></h2>
				<p class="wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="1.2s"><?php echo nl2br( esc_html( $eyecatch_sub_title ) ); ?></p>
			</div>
			<?php endif; ?>
			<!--end eye catch message-->
			<!--eye catch image-->
			<?php if ( $eyecatch_image || $eyecatch_btn_url ): ?>
			<div class="header-eyecatch-image">
				<?php if ( !is_mobile() && $eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
				<?php if ( is_mobile() && $eyecatch_image && $display_sp_eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
				<?php if ( $eyecatch_btn_url ): ?>
				<div class="header-eyecatch-btn wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s">
					<span class="btn <?php if ( $eyecatch_title || $eyecatch_sub_title ) : ?>btn-mid<?php else : ?>btn-sm<?php endif; ?> header-eyecatch-btn-bg"><a href="<?php echo esc_url( $eyecatch_btn_url ); ?>"><?php echo esc_html( $eyecatch_btn_text ); ?></a></span>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end eyecatch image-->

		<?php else : ?>

			<!--eye catch image-->
			<?php if ( $eyecatch_image ): ?>
			<div class="header-eyecatch-image">
				<?php if ( !is_mobile() && $eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
				<?php if ( is_mobile() && $eyecatch_image && $display_sp_eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end eyecatch image-->
			<!--eye catch message-->
			<?php if ( $eyecatch_title || $eyecatch_sub_title ): ?>
			<div class="header-eyecatch-message">
				<h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.8s"><?php echo nl2br( esc_html( $eyecatch_title ) ); ?></h2>
				<p class="wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="1.2s"><?php echo nl2br( esc_html( $eyecatch_sub_title ) ); ?></p>
				<?php if ( $eyecatch_btn_url ): ?>
				<div class="header-eyecatch-btn wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s">
					<span class="btn <?php if ( $eyecatch_image ) : ?>btn-mid<?php else : ?>btn-sm<?php endif; ?> header-eyecatch-btn-bg"><a href="<?php echo esc_url( $eyecatch_btn_url ); ?>"><?php echo esc_html( $eyecatch_btn_text ); ?></a></span>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end eye catch message-->

		<?php endif; ?>

	</div>
	<div class="loading-wrapper"></div>
	<div class="header-eyecatch-overlay"></div>
</div>
<!--end eye catch-->
<?php endif; ?>