<?php
/**
* Google tag manager (noscript)
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/
	$tag_manager_id = get_theme_mod( 'tag_manager_id', '' );
?>
<?php if (!is_user_logged_in()) :?>
<!--google tag manager (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_js( $tag_manager_id ) ;?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--end google tag manager (noscript)-->
<?php endif; ?>
