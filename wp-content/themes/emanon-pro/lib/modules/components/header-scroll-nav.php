<?php
/**
* Header scroll nav
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$header_layout_type = get_theme_mod( 'header_layout_type', 'header-default' );
?>
<!--scroll nav-->
<div id="scroll-nav" class="display-none <?php if ( $header_layout_type == 'header-center' ) { ?>scroll-nav-center<?php } ?>">
	<div class="container">
		<div class="col4 first">
			<?php emanon_simple_header_logo(); ?>
		</div>
		<div class="col8">
			<nav class="scroll-nav-inner br-pc">
			<?php wp_nav_menu( array ( 'theme_location' => 'scroll-nav','container' => false, 'fallback_cb' => '', 'depth' => '1', 'menu_class' => 'global-nav global-nav-scroll') ); ?>
			</nav>
		</div>
	</div>
</div>
<!--end scroll nav-->