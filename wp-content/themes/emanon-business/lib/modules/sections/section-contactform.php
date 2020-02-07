<?php
/**
* Contactform section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$contactfrom_sectionn_title = get_theme_mod( 'contactfrom_sectionn_title', '' );
	$contactfrom_section_description = get_theme_mod( 'contactfrom_section_description', '' );
	$contactfrom_section_btn_url = get_theme_mod( 'contactfrom_section_btn_url', '' );
	$contactfrom_section_btn_text = get_theme_mod( 'contactfrom_section_btn_text', '' );
	$contactfrom_section_contactform7 = get_theme_mod( 'contactfrom_section_contactform7', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--contactform section-->
<div id="contactfrom-section" class="eb-contactfrom-section">
	<div class="container inner">
		<div class="contactfrom-header">
			<?php if ( $contactfrom_sectionn_title ): ?>
			<h2><?php echo esc_html( $contactfrom_sectionn_title ); ?></h2>
			<?php endif; ?>
		</div>
		<div class="contactfrom-content clearfix">
		<?php if ( $contactfrom_section_description ): ?>
		<p><?php echo nl2br( esc_html( $contactfrom_section_description ) ); ?></p>
		<?php endif; ?>
		<?php if ( $contactfrom_section_btn_url ): ?>
		<span class="btn btn-sm contactfrom-content-btn"><a href="<?php echo esc_url( $contactfrom_section_btn_url ); ?>" ><?php echo esc_html( $contactfrom_section_btn_text ); ?></a></span>
		<?php endif; ?>
		<?php if ( $contactfrom_section_contactform7 ): ?>
		<?php echo do_shortcode( $contactfrom_section_contactform7 ); ?>
		<?php endif; ?>
	</div>
</div>
<!--end contactform section-->
</div>
<?php endif; ?>