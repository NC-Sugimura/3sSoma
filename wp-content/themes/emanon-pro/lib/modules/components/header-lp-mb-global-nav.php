<?php
/**
* LP global nav for mobile
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2.9
*/
?>
<!--global nav-->
<div class="remodal" data-remodal-id="modal-global-nav-lp" data-remodal-options="hashTracking:false">
	<button data-remodal-action="close" class="remodal-close modal-global-nav-close"></button>
	<div id="modal-global-nav-container">
		<?php emanon_mb_header_logo(); ?>
		<nav>
		<?php wp_nav_menu( array ( 'theme_location' => 'lp-nav','container' => false, 'fallback_cb' => '', 'menu_class' => 'global-nav global-nav-default', 'before' => '<span class="exit-remodal">', 'after' => '</span>') ); ?>
		</nav>
		<?php dynamic_sidebar( 'lp-mobile-menu-widget' ); ?>
	</div>
</div>
<!--end global nav-->