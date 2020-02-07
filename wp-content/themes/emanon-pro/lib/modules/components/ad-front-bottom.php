<?php
/**
* Ad front bottom
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.4.3
*/
?>
<?php if ( is_mobile() ) : ?>
	<?php if ( is_active_sidebar( 'front-bottom-widget-sp' ) && is_front_page() && ! is_paged() ) : ?>
	<!--author ad front bottom-->
	<?php dynamic_sidebar( 'front-bottom-widget-sp' ); ?>
	<!--end author ad front bottom-->
	<?php endif; ?>
	<?php else:?>
	<?php if ( is_active_sidebar( 'front-bottom-widget-pc' ) && is_front_page() && ! is_paged() ) : ?>
	<!--author ad front bottom-->
	<?php dynamic_sidebar( 'front-bottom-widget-pc' ); ?>
	<!--end author ad front bottom-->
	<?php endif; ?>
<?php endif; ?>