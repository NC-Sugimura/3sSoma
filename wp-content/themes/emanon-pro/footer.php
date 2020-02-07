<?php
/**
* Template footer
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<?php emanon_cta_footer_section(); ?>
<?php emanon_cta_popup(); ?>
<!--footer-->
<footer class="footer">
	<?php emanon_footer_sns_follow(); ?>
	<?php emanon_cta_popup_modal_window(); ?>
	<?php get_sidebar( 'footer' ); ?>
	<div class="container">
		<div class="col12">
			<?php emanon_top_page_btn(); ?>
			<?php if ( has_nav_menu( 'footer-nav' ) ) : ?>
			<ul id="menu-footer-nav" class="footer-nav">
			<?php wp_nav_menu( array ( 'theme_location' => 'footer-nav', 'container' => false, 'fallback_cb' => '', 'depth' => '1', 'items_wrap' => '%3$s' ) ); ?>
			<?php if ( function_exists( 'the_privacy_policy_link' ) ) { the_privacy_policy_link( '<li>', '</li>' ); } ?>
			</ul>
			<?php endif; ?>
			<div class="copyright">
<small><a href="https://www.3s-soma.co.jp">©&nbsp;株式会社サンエスソーマ</a></small>
</div>
		</div>
	</div>
</footer>
<!--end footer-->
<?php wp_footer(); ?>
</body>
</html>
<?php emanon_html_compress_end(); ?>