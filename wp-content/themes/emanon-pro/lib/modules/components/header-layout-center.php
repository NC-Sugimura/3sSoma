<?php
/**
* Header layout center
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$header_tagline_position_type = get_theme_mod( 'header_tagline_position_type', 'upper-left' );
	$hamburger_menu_text = get_theme_mod( 'hamburger_menu_text', 'Menu' );
	$firstview_type = get_theme_mod( 'firstview_layout', 'slider' );
?>
<header id="header-wrapper" itemscope itemtype="http://schema.org/WPHeader">
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
			<div class="col12 header-col-center header-brand">
			<?php emanon_header_logo(); ?>
			</div>
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