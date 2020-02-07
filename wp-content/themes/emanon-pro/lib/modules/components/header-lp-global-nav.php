<?php
/**
* Header Lp global nav
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2.9
*/
?>
<!--global nav-->
<div id="gnav" class="default-nav relative">
	<div class="container">
		<div class="col12 wow fadeInUp" data-wow-delay="1.0s">
			<nav id="menu">
			<?php wp_nav_menu( array ( 'theme_location' => 'lp-nav','container' => false, 'fallback_cb' => '', 'menu_class' => 'global-nav global-nav-default') ); ?>
			</nav>
		</div>
	</div>
	<div class="loading-wrapper-section"></div>
</div>
<!--end global nav-->