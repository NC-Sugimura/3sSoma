<?php
/**
* LP advantage section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$advantage_section_title = get_theme_mod( 'advantage_section_title', '' );
	$advantage_section_sub_title = get_theme_mod( 'advantage_section_sub_title', '' );
?>
<!--advantage section-->
<section id="advantage-section" class="lp-advantage">
	<div class="lp-container">
		<div class="advantage-header wow fadeInDown" data-wow-delay="0.2s">
			<?php if ( $advantage_section_title ): ?>
			<h2><?php echo esc_html( $advantage_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $advantage_section_sub_title ): ?>
			<p><?php echo nl2br( esc_html( $advantage_section_sub_title ) ); ?></p>
			<?php endif; ?>
		</div>
		<?php for($li=1; $li<7; $li++) { ?>
		<?php $advantage_section_icon = get_theme_mod( 'advantage_section_icon_'.$li ); ?>
		<?php $advantage_section_image = get_theme_mod( 'advantage_section_image_'.$li ); ?>
		<?php $advantage_section_url = get_theme_mod( 'advantage_section_url_'.$li ); ?>
		<?php $advantage_section_title = get_theme_mod( 'advantage_section_title_'.$li ); ?>
		<?php $advantage_section_description = get_theme_mod( 'advantage_section_description_'.$li ); ?>
		<?php $delay = (pow($li, 2)); ?>
		<?php if( $advantage_section_title ): ?>
			<?php if ( $advantage_section_url ) { ?>
			<a href="<?php echo esc_url( $advantage_section_url ); ?>"><?php } ?>
			<div class="advantage-list list-<?php echo $li; ?> box-list	 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.<?php echo $delay; ?>s">
				<?php if( $advantage_section_icon && empty( $advantage_section_image ) ): ?>
				<div class="advantage-icon fa-icon">
					<i class="<?php echo esc_html( $advantage_section_icon ); ?> fa-2x"></i>
				</div>
				<?php endif; ?>
				<?php if( $advantage_section_image && empty( $advantage_section_icon ) ): ?>
				<div class="advantage-icon">
					<?php if ( $advantage_section_url ){ ?><a href="<?php echo esc_url( $advantage_section_url ); ?>"><?php } ?>
					<img src="<?php echo esc_url( $advantage_section_image ); ?>" alt="<?php echo esc_html( $advantage_section_title ); ?>">
					<?php if ( $advantage_section_url ){ ?></a><?php } ?>
				</div>
				<?php endif; ?>
				<div class="advantage-detail">
					<h3><?php echo esc_html( $advantage_section_title ); ?></h3>
					<p><?php echo nl2br( esc_html( $advantage_section_description ) ); ?></p>
				</div>
			</div>
			 <?php if ( $advantage_section_url ) { ?></a><?php } ?>
		<?php endif; ?>
		<?php } ?>
	</div>
	<div class="loading-wrapper-section"></div>
</section>
<!--end advantage section-->