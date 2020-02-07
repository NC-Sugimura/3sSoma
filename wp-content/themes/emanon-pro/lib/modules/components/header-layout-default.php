<?php
/**
* Header layout default
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$header_tagline_position_type = get_theme_mod( 'header_tagline_position_type', 'upper-left' );
	$display_header_cta = get_theme_mod( 'display_header_cta', '' );
	$display_header_cta_type = get_theme_mod( 'display_header_cta_type', 'tel' );
	$header_tel = get_theme_mod( 'header_tel', '' );
	$header_cta_btn_url = get_theme_mod( 'header_cta_btn_url', '' );
	$header_tel_icon_sp = get_theme_mod( 'header_tel_icon_sp', 'fa fa-phone-square' );
	$header_mail_icon_sp = get_theme_mod( 'header_mail_icon_sp', 'fa fa-envelope-o' );
	$hamburger_menu_text = get_theme_mod( 'hamburger_menu_text', 'Menu' );
	$firstview_type = get_theme_mod( 'firstview_layout', 'slider' );
?>
<header id="header-wrapper" class="clearfix" itemscope itemtype="http://schema.org/WPHeader">
	<?php if ( $header_tagline_position_type == 'upper-left' ) : ?>
	<!--top bar-->
	<div class="top-bar">
		<div class="container">
			<div class="col12">
			<?php emanon_header_description(); ?>
			</div>
		</div>
	</div>
	<!--end top bar-->
	<?php endif; ?>
	<!--header-->
	<div class="header">
		<div class="container header-area-height">
			<?php if ( is_active_sidebar( 'header-r-widget' ) ): ?>
			<div class="col4 first header-brand">
			<?php emanon_header_logo(); ?>
			</div>
			<div class="col8">
			<?php dynamic_sidebar( 'header-r-widget' ); ?>
			</div>
			<?php elseif ( is_emanon_header_cta( ) ): ?>
			<div class="col4 first header-brand">
			<?php emanon_header_logo(); ?>
			</div>
			<div class="col8 header-cta">
			<?php emanon_header_cta(); ?>
			</div>
			<?php else: ?>
			<div class="col12 header-brand">
			<?php emanon_header_logo(); ?>
			</div>
			<?php endif; ?>
			<?php if ( $display_header_cta ) : ?>
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
			<!--modal menu-->
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
			<!--end modal menu-->
		</div>
		<?php emanon_header_mb_global_nav(); ?>
	</div>
	<!--end header-->
</header>
<!--global nav-->
<div id="gnav" class="default-nav">
	<div class="container">
		<div class="col12">
			<nav id="menu">
			<?php wp_nav_menu( array ( 'theme_location' => 'global-nav','container' => false, 'fallback_cb' => '', 'menu_class' => 'global-nav global-nav-default') ); ?>
			</nav>
		</div>
	</div>
</div>
<!--end global nav-->
<?php if ( $firstview_type !== 'video' ) : ?>
<?php emanon_header_info(); ?>
<?php emanon_search_keywords_lists(); ?>
<?php endif; ?>
<?php emanon_header_mb_horizontal_nav(); ?>
<?php emanon_header_scroll_nav(); ?>
<?php emanon_header_mb_scroll_nav(); ?>