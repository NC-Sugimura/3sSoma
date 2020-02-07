<?php
/**
* Google analytics
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$tracking_id = get_theme_mod( 'tracking_id', '' );
?>
<?php if (!is_user_logged_in()) :?>
<!-- global site tag (gtag.js) - google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_js( $tracking_id ) ;?>"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '<?php echo esc_js( $tracking_id ) ;?>');
</script>
<!--end google analytics-->
<?php endif; ?>