<?php
/**
* Ad front top
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.4.3
*/
?>
<?php if ( is_mobile() ) : ?>
	<?php if ( is_active_sidebar( 'front-top-widget-sp' ) && is_front_page() && ! is_paged() ) : ?>
	<!--author ad front top-->
	<?php dynamic_sidebar( 'front-top-widget-sp' ); ?>
	<!--end author ad front top-->
	<?php endif; ?>
	<?php else:?>
	<?php if ( is_active_sidebar( 'front-top-widge-pc' ) && is_front_page() && ! is_paged() ) : ?>
	<!--author ad front top-->
	<?php dynamic_sidebar( 'front-top-widge-pc' ); ?>
	<!--end author ad front top-->
	<?php endif; ?>
<?php endif; ?>