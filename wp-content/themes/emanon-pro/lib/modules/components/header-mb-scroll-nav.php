<?php
/**
* Header mobile scroll nav
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3.4
*/
	$header_layout_type = get_theme_mod( 'header_layout_type', 'header-default' );
	$hamburger_menu_text = get_theme_mod( 'hamburger_menu_text', 'Menu' );
	$display_header_cta = get_theme_mod( 'display_header_cta', '' );
	$display_header_cta_type = get_theme_mod( 'display_header_cta_type', 'tel' );
	$header_tel = get_theme_mod( 'header_tel', '' );
	$header_cta_btn_url = get_theme_mod( 'header_cta_btn_url', '' );
	$header_tel_icon_sp = get_theme_mod( 'header_tel_icon_sp', 'fa fa-phone-square' );
	$header_mail_icon_sp = get_theme_mod( 'header_mail_icon_sp', 'fa fa-envelope-o' );
?>
<!--mobile scroll nav-->
<div id="mb-scroll-nav" class="display-none <?php if ( $header_layout_type == 'header-center' ) { ?>scroll-nav-center<?php } ?>">
	<div class="container">
		<?php emanon_simple_header_logo(); ?>
		<?php if ( $display_header_cta && $header_layout_type == 'header-default' ) : ?>
			<?php if ( $display_header_cta_type == 'tel') : ?>
			<div class="header-phone">
				<span class="tell-number"><a href="tel:<?php echo esc_html( $header_tel ); ?>"><?php if( $header_tel_icon_sp ) { ?><i class="<?php echo esc_html( $header_tel_icon_sp ); ?>"></i><?php } ?></a></span>
			</div>
			<?php endif; ?>
			<?php if ( $display_header_cta_type == 'mail') : ?>
			<div class="header-mail">
				<a href="<?php echo esc_url( $header_cta_btn_url ); ?>"><?php if( $header_mail_icon_sp ) { ?><i class="<?php echo esc_html( $header_mail_icon_sp ); ?>"></i><?php } ?></a>
			</div>
			<?php endif; ?>
			<?php if ( $display_header_cta_type == 'tel_mail') : ?>
			<div class="header-phone">
				<span class="tell-number"><a href="tel:<?php echo esc_html( $header_tel ); ?>"><?php if( $header_tel_icon_sp ) { ?><i class="<?php echo esc_html( $header_tel_icon_sp ); ?>"></i><?php } ?></a></span>
			</div>
			<div class="header-mail">
				<a href="<?php echo esc_url( $header_cta_btn_url ); ?>"><?php if( $header_mail_icon_sp ) { ?><i class="<?php echo esc_html( $header_mail_icon_sp ); ?>"></i><?php } ?></a>
			</div>
			<?php endif; ?>
		<?php endif; ?>
		<!--mobile menu-->
		<div class="modal-menu js-modal-menu">
			<a href="#modal-global-nav" data-remodal-target="modal-global-nav">
				<?php if ( $hamburger_menu_text ) : ?>
				<span class="modal-menutxt"><?php echo esc_html( $hamburger_menu_text ); ?></span>
				 <?php endif; ?>
				<span class="modal-gloval-icon">
					<span class="modal-gloval-icon-bar"></span>
					<span class="modal-gloval-icon-bar"></span>
					<span class="modal-gloval-icon-bar"></span>
				</span>
			</a>
		</div>
		<!--end mobile menu-->
	</div>
</div>
<!--end mobile scroll nav-->