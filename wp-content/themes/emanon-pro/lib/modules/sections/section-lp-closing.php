<?php
/**
* LP closing section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$closing_section_title = get_theme_mod( 'closing_section_title', __( 'Closing section title', 'emanon' ) );
	$closing_section_image = get_theme_mod( 'closing_section_image', '' );
	$closing_section_message = get_theme_mod( 'closing_section_message', '' );
	$closing_section_btn_text = get_theme_mod( 'closing_btn_text', '' );
?>
<!--end closing section-->
<section id="closing-section" class="lp-closing">
	<div class="lp-container">
			<div class="closing-message">
				<h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html( $closing_section_title ); ?></h2>
		</div>
	</div>
	<div class="closing-section-overlay"></div>
</section>
<!--end closing section-->
