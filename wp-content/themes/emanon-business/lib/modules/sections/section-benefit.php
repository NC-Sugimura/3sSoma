<?php
/**
* Benefit section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$benefit_section_title = get_theme_mod( 'benefit_section_title', '' );
	$benefit_section_description = get_theme_mod( 'benefit_section_description', '' );
	$benefit_section_layout = get_theme_mod( 'benefit_section_layout', 4 );
	$benefit_btn_url = get_theme_mod( 'benefit_btn_url', '' );
	$benefit_btn_text = get_theme_mod( 'benefit_btn_text', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--benefit section-->
<div id="benefit-section" class="eb-benefit-section">
	<div class="container inner">
		<div class="benefit-header wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
			<?php if ( $benefit_section_title ): ?>
			<h2><?php echo esc_html( $benefit_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $benefit_section_description ): ?>
			<p><?php echo nl2br( $benefit_section_description ); ?></p>
			<?php endif; ?>
		</div>
		<?php for($li=1; $li<$benefit_section_layout; $li++) { ?>
		<?php $benefit_icon = get_theme_mod( 'benefit_icon_'.$li ); ?>
		<?php $benefit_image = get_theme_mod( 'benefit_image_'.$li ); ?>
		<?php $benefit_url = get_theme_mod( 'benefit_url_'.$li ); ?>
		<?php $benefit_title = get_theme_mod( 'benefit_title_'.$li ); ?>
		<?php $benefit_description = get_theme_mod( 'benefit_description_'.$li ); ?>
		<?php $delay = (pow($li, 2)); ?>
		<div class="benefit-box-list box-list wow fadeIn" data-wow-duration="1s" data-wow-delay="0.<?php echo $delay; ?>s">
			<?php if ( $benefit_url ) { ?><a href="<?php echo esc_url( $benefit_url ); ?>"><?php } ?>
			<?php if( $benefit_icon && !$benefit_image ): ?>
			<div class="benefit-box-icon">
				<i class="<?php echo esc_html( $benefit_icon ); ?>"></i>
			</div>
			<?php endif; ?>
			<?php if( $benefit_image && !$benefit_icon ): ?>
			<div class="benefit-box-icon">
				<img src="<?php echo esc_url( $benefit_image ); ?>" alt="<?php echo esc_html( $benefit_title ); ?>">
			</div>
			<?php endif; ?>
			<div class="benefit-box-detail">
				<p class="h3 bold"><?php echo esc_html( $benefit_title ); ?></p>
				<p><?php echo nl2br( $benefit_description ); ?></p>
			</div>
			<?php if ( $benefit_url ) { ?></a><?php } ?>
		</div>
		<?php } ?>
	</div>
	<?php if ( $benefit_btn_url ): ?>
	<div class="benefit-section-cta wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s">
	<span class="btn benefit-section-btn"><a href="<?php echo esc_url( $benefit_btn_url ); ?>"><?php echo esc_html( $benefit_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>
</div>
<!--end benefit section-->
<?php endif; ?>
