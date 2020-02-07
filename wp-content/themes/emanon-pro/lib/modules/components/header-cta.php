<?php
/**
* header CTA
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3.4
*/
	$header_tel_icon_pc = get_theme_mod( 'header_tel_icon_pc', 'fa fa-phone' );
	$header_tel = get_theme_mod( 'header_tel', '' );
	$header_tel_text = get_theme_mod( 'header_tel_text', '' );
	$header_cta_btn_url = get_theme_mod( 'header_cta_btn_url', '' );
	$header_cta_btn_text = get_theme_mod( 'header_cta_btn_text', '' );
?>
<ul>
	<?php if ( $header_tel ): ?>
	<li class="header-cta-tell">
		<div>
			<?php if( $header_tel_icon_pc ) { ?><i class="<?php echo esc_html( $header_tel_icon_pc ); ?>"></i><?php } ?>
			<span class="tell-number"><?php echo esc_html( $header_tel ); ?></span>
		</div>
	<div>
		<span class="tell-text"><?php echo esc_html( $header_tel_text ); ?></span>
	</div>
	</li>
	<?php endif; ?>
	<?php if ( $header_cta_btn_text ): ?>
	<li><span class="btn header-cta-btn"><a href="<?php echo esc_url( $header_cta_btn_url ); ?>"><?php echo esc_html( $header_cta_btn_text ); ?></a></span></li>
	<?php endif; ?>
</ul>
