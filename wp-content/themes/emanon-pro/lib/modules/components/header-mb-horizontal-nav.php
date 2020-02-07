<?php
/**
* Header mb horizontal nav
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
?>
<!--mb horizontal nav-->
<div class="mb-horizontal-nav">
	<div class="container">
		<div class="col12">
			<nav class="mb-scroll-arrow">
			<?php wp_nav_menu( array ( 'theme_location' => 'mb-horizontal-nav','container' => false, 'fallback_cb' => '', 'depth' => '1', 'menu_class' => 'mb-horizontal-nav-inner') ); ?>
			</nav>
		</div>
	</div>
</div>
<!--end mb horizontal nav-->