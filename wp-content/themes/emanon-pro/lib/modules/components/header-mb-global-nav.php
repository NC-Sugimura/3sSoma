<?php
/**
* Global nav for mobile
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2.4
*/
?>
<!--global nav-->
<div class="remodal" data-remodal-id="modal-global-nav" data-remodal-options="hashTracking:false">
	<button data-remodal-action="close" class="remodal-close modal-global-nav-close"></button>
	<div id="modal-global-nav-container">
		<?php emanon_mb_header_logo(); ?>
		<nav>
		<?php wp_nav_menu( array ( 'theme_location' => 'global-nav','container' => false, 'fallback_cb' => '', 'menu_class' => 'global-nav global-nav-default' ) ); ?>
		</nav>
		<?php dynamic_sidebar( 'mobile-menu-widget' ); ?>
	</div>
</div>
<!--end global nav-->