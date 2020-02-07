<?php
/**
* LP benefits section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
 $benefits_title = get_theme_mod( 'benefits_title', '' );
 $benefits_text = get_theme_mod( 'benefits_text', '' );
 $benefits_section_icon = get_theme_mod( 'benefits_section_icon', 'fa fa-check-square-o' );
?>
<!--benefits section-->
<section id="benefits-section" class="lp-benefits">
	<div class="lp-container">
		<div class="benefits-header wow fadeInDown" data-wow-delay="0.2s">
			<?php if ( $benefits_title ): ?>
			<h2><?php echo esc_html( $benefits_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $benefits_text ): ?>
			<p><?php echo nl2br( $benefits_text ); ?></p>
			<?php endif; ?>
		</div>
		<div class="benefits-content wow fadeIn" data-wow-delay="0.4s">
			<ul>
			<?php for($li=1; $li<7; $li++) { ?>
			<?php $benefits = get_theme_mod( 'benefits_'.$li ); ?>
			<?php if( $benefits ): ?>
			<li><i class="<?php echo esc_html( $benefits_section_icon ); ?>"></i><?php echo esc_html( $benefits ); ?></li>
			<?php endif; ?>
			<?php } ?>
			</ul>
		</div>
	</div>
</section >
<!--end benefits section-->
