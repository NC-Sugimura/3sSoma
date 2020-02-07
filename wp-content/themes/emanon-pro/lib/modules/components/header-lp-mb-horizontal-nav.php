<?php
/**
* Header lp mb horizontall nav
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/
?>
<!--mb horizontal nav-->
<div class="mb-horizontal-nav overflow-y">
	<div class="container">
		<div class="col12 wow slideInUp">
			<nav class="lp-mb-horizontal-arrow">
			<?php wp_nav_menu( array ( 'theme_location' => 'lp-mb-horizontal-nav','container' => false, 'fallback_cb' => '', 'menu_class' => 'mb-horizontal-nav-inner') ); ?>
			</nav>
		</div>
	</div>
</div>
<!--end mb horizontal nav-->