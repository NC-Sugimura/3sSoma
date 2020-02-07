<?php
/**
* Theme setup
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.4.5
*/

function emanon_menu_pages() {
	add_menu_page( __( 'Emanon Setup', 'emanon' ), __( 'Emanon Setup', 'emanon' ), 'manage_options', 'setting_manual_page', 'setting_manual_page',"",81 );
	add_submenu_page( 'setting_manual_page', __( 'Emanon manual', 'emanon' ), __( 'Emanon manual', 'emanon' ), 'manage_options', 'setting_manual_page', 'setting_manual_page' );
}

add_action('admin_menu', 'emanon_menu_pages');

/*------------------------------------------------------------------------------------
/* 設定マニュアル
/*----------------------------------------------------------------------------------*/
function setting_manual_page() {
?>
<div class="wrap">

	<h2><?php _e( 'Emanon Pro manual', 'emanon' ); ?></h2>
	<p><?php _e( 'Thank you for install Emanon Pro. Emanon Pro implements the original Customizing function.', 'emanon' ); ?><br>
	<?php _e( 'Please set according to your purpose of use while the contents of the following manual.', 'emanon' ); ?>

<div class="postbox metabox-holder">

	<h3 class="hndle"><?php _e( 'Theme customization features', 'emanon' ); ?></h3>
	<div class="inside">
		<ul>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/general/"><?php _e( 'General settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/header/"><?php _e( 'Header settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/content/"><?php _e( 'Content settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/footer/"><?php _e( 'Footer settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/front-page/"><?php _e( 'Front page settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/template/"><?php _e( 'Template settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/cta/"><?php _e( 'CTA settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/landing-page/"><?php _e( 'Landing page settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/advertisement/"><?php _e( 'AD settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/pagespeed/"><?php _e( 'Page Speed settings', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/theme-function/widget/"><?php _e( 'Widget settings', 'emanon' ); ?></a></li>
		</ul>
	</div>

</div>

<div class="postbox metabox-holder">

	<h3 class="hndle"><?php _e( 'Post sample', 'emanon' ); ?></h3>
		<div class="inside">
		<ul>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/post/"><?php _e( 'Post', 'emanon' ); ?></a></li>
			<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro/category/sample-page/"><?php _e( 'Sample page', 'emanon' ); ?></a></li>
		</ul>
		</div>
</div>

<div class="postbox metabox-holder">

	<h3 class="hndle"><?php _e( 'FAQ and contact us', 'emanon' ); ?></h3>
		<div class="inside">
		<ul>
			<li><a target="_blank" href="https://wp-emanon.jp/faq-all/"><?php _e( 'FAQ', 'emanon' ); ?></a></li>
		</ul>
		</div>

</div>

<?php
}
