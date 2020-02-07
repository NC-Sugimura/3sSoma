<?php
/**
* LP product features section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.4.3
*/
	$product_features_section_title = get_theme_mod( 'product_features_section_title', '' );
	$product_features_section_sub_title = get_theme_mod( 'product_features_section_sub_title', '' );
?>
<!--product features section-->
<section id="product-features-section" class="lp-product-features">
	<div class="lp-container">
		<div class="product-features-header wow fadeInDown" data-wow-delay="0.2s">
		<?php if ( $product_features_section_title ): ?>
		<h2><?php echo esc_html( $product_features_section_title ); ?></h2>
		<?php endif; ?>
		<?php if ( $product_features_section_sub_title ): ?>
		<p><?php echo nl2br( esc_html( $product_features_section_sub_title ) ); ?></p>
		<?php endif; ?>
		</div>

	<?php for($li=1; $li<7; $li++) { ?>
		<?php $product_features_image = get_theme_mod( 'product_features_image_'.$li , '' ); ?>
		<?php $product_features_title = get_theme_mod( 'product_features_title_'.$li , '' ); ?>
		<?php $product_features_description = get_theme_mod( 'product_features_description_'.$li , '' ); ?>
		<?php if ($li % 2 == 1): ?>
			<div class="lp-container product-features-box wow fadeIn" data-wow-delay="0.4s">
	
			<div class="col6 push6 first">
			<?php if ( $product_features_title ): ?>
			<h3><?php echo esc_html( $product_features_title ); ?></h3>
			<?php endif; ?>
			<?php if ( $product_features_description ): ?>
			<p><?php echo nl2br( $product_features_description ); ?></p>
			<?php endif; ?>
			</div>
	
			<div class="col6 pull6">
			<?php if( $product_features_image ): ?>
			<img src="<?php echo esc_url( $product_features_image ); ?>" alt="<?php echo esc_html( $product_features_title ); ?>">
			<?php endif; ?>
			</div>

			</div>
		<?php else : ?>
			<div class="lp-container product-features-box wow fadeIn" data-wow-delay="0.4s">

			<div class="col6 first">
			<?php if ( $product_features_title ): ?>
			<h3><?php echo esc_html( $product_features_title ); ?></h3>
			<?php endif; ?>
			<?php if ( $product_features_description ): ?>
			<p><?php echo nl2br( $product_features_description ); ?></p>
			<?php endif; ?>
			</div>

			<div class="col6">
			<?php if( $product_features_image ): ?>
			<img src="<?php echo esc_url( $product_features_image ); ?>" alt="<?php echo esc_html( $product_features_title ); ?>">
			<?php endif; ?>
			</div>

			</div>
		<?php endif; ?>
	<?php } ?>
	</div>
</section>
<!--end product features	section-->
