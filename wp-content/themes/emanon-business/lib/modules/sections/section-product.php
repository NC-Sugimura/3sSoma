<?php
/**
* Product section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$product_section_title = get_theme_mod( 'product_section_title', '' );
	$product_section_description = get_theme_mod( 'product_section_description','' );
	$product_background_image = get_theme_mod( 'product_background_image', '' );
	$product_btn_text = get_theme_mod( 'product_btn_text', '' );
	$product_btn_url = get_theme_mod( 'product_btn_url', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<div id="product-section" class="eb-product-section" data-parallax="scroll" data-image-src="<?php echo esc_url( $product_background_image ); ?>">
	<div class="product-message">
		<div class="container inner">
			<div class="product-content">
				<h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.6s"><?php echo esc_html( $product_section_title ); ?></h2>
				<p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.8s"><?php echo nl2br( esc_html( $product_section_description ) ); ?></p>
				<?php if ( $product_btn_url ): ?>
				<div class="product-section-cta wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s">
				<span class="btn product-section-btn"><a href="<?php echo esc_url( $product_btn_url ); ?>"><?php echo esc_html( $product_btn_text); ?></a></span>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="product-section-overlay"></div>
</div>
<?php endif; ?>
