<?php
/**
* LP postscript section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
	$postscript_section_title = get_theme_mod( 'postscript_section_title', __( 'Postscrip', 'emanon' ) );
	$postscript_section_text = get_theme_mod( 'postscript_section_text', '' );
	$postscript_section_image = get_theme_mod( 'postscript_section_image', '' );
	$postscript_section_btn_text = get_theme_mod( 'postscript_section_btn_text', '' );
?>
<!--postscript section-->
<section id="postscript-section" class="lp-postscript">
	<div class="lp-container">
		<?php if ( $postscript_section_title ): ?>
		<div class="postscript-header wow fadeInDown" data-wow-delay="0.2s">
			<h2><?php echo esc_html( $postscript_section_title ); ?></h2>
		</div>
		<?php endif; ?>
		<div class="postscript-content clearfix wow fadeIn" data-wow-delay="0.4s">
			<?php if ( $postscript_section_image ): ?>
			<div class="postscript-image">
				<img src="<?php echo esc_url( $postscript_section_image ); ?>" alt="<?php echo esc_html( $postscript_section_title ); ?>">
			</div>
			<?php endif; ?>
			<?php if ( $postscript_section_text ): ?>
			<div class="postscript-text">
				<p><?php echo nl2br( esc_html( $postscript_section_text ) ); ?></p>
			</div>
			<?php endif; ?>
		</div>
		<?php if ( $postscript_section_btn_text ): ?>
		<div class="postscript-footer wow fadeInUp" data-wow-delay="0.4s">
			<span class="btn btn-mid"><a href="#cta-section"><?php echo esc_html( $postscript_section_btn_text ); ?></a></span>
		</div>
		<?php endif; ?>
	</div>
</section>
<!--end postscript section-->