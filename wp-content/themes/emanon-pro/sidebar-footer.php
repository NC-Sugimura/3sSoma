<?php
/**
* Template sidebar footer area
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>

<?php if( is_mobile() ) :?>

<?php if ( is_active_sidebar( 'footer-w-sp' ) ): ?>
	<!--sidebar footer-->
	<div class="sidebar-footer" >
		<div class="container">
			<?php dynamic_sidebar( 'footer-w-sp' ); ?>
		</div>
	</div>
<?php else:?>

<?php if ( is_active_sidebar( 'footer-w-left' ) || is_active_sidebar( 'footer-w-center' ) || is_active_sidebar( 'footer-w-center-2' ) || is_active_sidebar( 'footer-w-right' ) ): ?>
	<!--sidebar footer-->
	<?php if ( is_active_sidebar( 'footer-w-center-2' ) ): ?>
	<div class="sidebar-footer" >
		<div class="container">
				<div class="sidebar-footer-col3 sidebar-footer-first">
					<?php dynamic_sidebar( 'footer-w-left' ); ?>
				</div>
				<div class="sidebar-footer-col3">
					<?php dynamic_sidebar( 'footer-w-center' ); ?>
				</div>
				<div class="sidebar-footer-col3">
					<?php dynamic_sidebar( 'footer-w-center-2' ); ?>
				</div>
				<div class="sidebar-footer-col3">
					<?php dynamic_sidebar( 'footer-w-right' ); ?>
				</div>
		</div>
	</div>
	<?php else : ?>
	<div class="sidebar-footer" >
		<div class="container">
				<div class="sidebar-footer-col4 sidebar-footer-first">
					<?php dynamic_sidebar( 'footer-w-left' ); ?>
				</div>
				<div class="sidebar-footer-col4">
					<?php dynamic_sidebar( 'footer-w-center' ); ?>
				</div>
				<div class="sidebar-footer-col4">
					<?php dynamic_sidebar( 'footer-w-right' ); ?>
				</div>
		</div>
	</div>
	<?php endif; ?>
	<!--end sidebar footer-->
<?php endif; ?>

<?php endif; ?>

<?php else:?>

<?php if ( is_active_sidebar( 'footer-w-left' ) || is_active_sidebar( 'footer-w-center' ) || is_active_sidebar( 'footer-w-center-2' ) || is_active_sidebar( 'footer-w-right' ) ): ?>
	<!--sidebar footer-->
	<?php if ( is_active_sidebar( 'footer-w-center-2' ) ): ?>
	<div class="sidebar-footer" >
		<div class="container">
				<div class="sidebar-footer-col3 sidebar-footer-first">
					<?php dynamic_sidebar( 'footer-w-left' ); ?>
				</div>
				<div class="sidebar-footer-col3">
					<?php dynamic_sidebar( 'footer-w-center' ); ?>
				</div>
				<div class="sidebar-footer-col3">
					<?php dynamic_sidebar( 'footer-w-center-2' ); ?>
				</div>
				<div class="sidebar-footer-col3">
					<?php dynamic_sidebar( 'footer-w-right' ); ?>
				</div>
		</div>
	</div>
	<?php else : ?>
	<div class="sidebar-footer" >
		<div class="container">
				<div class="sidebar-footer-col4 sidebar-footer-first">
					<?php dynamic_sidebar( 'footer-w-left' ); ?>
				</div>
				<div class="sidebar-footer-col4">
					<?php dynamic_sidebar( 'footer-w-center' ); ?>
				</div>
				<div class="sidebar-footer-col4">
					<?php dynamic_sidebar( 'footer-w-right' ); ?>
				</div>
		</div>
	</div>
	<?php endif; ?>
	<!--end sidebar footer-->
<?php endif; ?>

<?php endif; ?>