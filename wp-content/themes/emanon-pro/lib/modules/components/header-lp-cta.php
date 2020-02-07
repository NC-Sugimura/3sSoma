<?php
/**
* header Lp CTA
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2.9
*/
	$lp_header_description = get_theme_mod( 'lp_header_description', '' );
	$lp_header_tel = get_theme_mod( 'lp_header_tel', '' );
	$lp_header_tel_text = get_theme_mod( 'lp_header_tel_text', '' );
	$lp_header_cta_btn_text = get_theme_mod( 'lp_header_cta_btn_text', '' );
	$display_hanger_nav = get_theme_mod( 'display_hanger_nav', '' );
	$hamburger_menu_text = get_theme_mod( 'hamburger_menu_text', 'Menu' );
?>
<div class="relative">
	<?php if ( $lp_header_description ): ?>
	<!--top bar-->
	<div class="top-bar">
		<div class="container">
			<div class="col12">
				<p class="site-description" itemprop="description"><?php echo esc_html( $lp_header_description ); ?></p>
			</div>
		</div>
	</div>
	<!--end top bar-->
	<?php endif; ?>
	<!--header-->
	<div class="header">
		<div class="container header-area-height-line">
			<div class="col4 first header-brand">
				<?php emanon_simple_header_logo(); ?>
			</div>
			<div class="col8 lp-header-cta">
				<ul>
				<?php if ( $lp_header_tel ): ?>
				<li class="lp-header-cta-tell">
					<div>
						<i class="fa fa-phone"></i>
						<span class="tell-number"><?php echo esc_html( $lp_header_tel ); ?></span>
					</div>
					<div>
						<span class="tell-text"><?php echo esc_html( $lp_header_tel_text ); ?></span>
					</div>
				</li>
				<?php endif; ?>
				<?php if ( $lp_header_cta_btn_text ): ?>
				<li><span class="btn lp-header-cta-btn"><a href="#cta-section"><?php echo esc_html( $lp_header_cta_btn_text ); ?></a></span></li>
				<?php endif; ?>
				</ul>
			</div>
			<!--mobile menu-->
			<?php if ( $display_hanger_nav ) : ?>
			<?php if ( $lp_header_tel ) : ?>
			<div class="lp-header-phone-left">
				<span class="tell-number"><a href="tel:<?php echo esc_html( $lp_header_tel ); ?>"><i class="fa fa-phone-square"></i></a></span>
			</div>
			<?php endif; ?>
			<div class="modal-menu modal-menu-lp">
				<a href="#modal-global-nav-lp" data-remodal-target="modal-global-nav-lp">
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
			<?php emanon_lp_header_mb_global_nav(); ?>
			<?php else : ?>
				<?php if ( $lp_header_tel ) : ?>
				<div class="lp-header-phone-right">
					<span class="tell-number"><a href="tel:<?php echo esc_html( $lp_header_tel ); ?>"><i class="fa fa-phone-square"></i></a></span>
				</div>
				<?php endif; ?>
			<?php endif; ?>
			<!--end mobile menu-->
		</div>
	</div>
	<!--end header-->
	<div class="loading-wrapper-section"></div>
</div>