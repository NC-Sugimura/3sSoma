<?php
/**
* Google tag manager
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/
	$tag_manager_id = get_theme_mod( 'tag_manager_id', '' );
?>
<?php if (!is_user_logged_in()) :?>
<!--google tag nanager-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo esc_js( $tag_manager_id ) ;?>');</script>
<!--end google tag manager-->
<?php endif; ?>