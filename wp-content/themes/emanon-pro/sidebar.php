<?php
/**
* Template sidebar widget area
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<?php if( !is_404() && !wp_is_mobile() ) :?>
<?php emanon_sidebar_ad300(); ?>
<?php endif; ?>

<?php if( is_mobile() ) :?>

<?php if ( is_active_sidebar( 'sidebar-widget-sp' ) ): ?>
<?php dynamic_sidebar( 'sidebar-widget-sp' ); ?>
<?php else:?>

<?php dynamic_sidebar( 'sidebar-widget' ); ?>

<?php if ( is_active_sidebar( 'sidebar-widget-fixed' ) ): ?>
<div class="side-widget-fixed">
<?php dynamic_sidebar( 'sidebar-widget-fixed' ); ?>
</div>
<?php endif; ?>

<?php endif; ?>

<?php else:?>

<?php dynamic_sidebar( 'sidebar-widget' ); ?>

<?php if ( is_active_sidebar( 'sidebar-widget-fixed' ) ): ?>
<div class="side-widget-fixed">
<?php dynamic_sidebar( 'sidebar-widget-fixed' ); ?>
</div>
<?php endif; ?>

<?php endif; ?>
