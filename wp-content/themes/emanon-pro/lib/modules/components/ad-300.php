<?php
/**
* Ad 300px 250px
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<?php
if( is_emanon_ad_single() && is_single() || is_emanon_ad_page() && is_page() || is_emanon_ad_listpage() && is_home() || is_emanon_ad_listpage() && is_front_page() || is_emanon_ad_listpage() && is_archive() ) {
	if( is_active_sidebar( 'ad-300' ) ) {
		dynamic_sidebar( 'ad-300' );
	} else if ( is_active_sidebar( 'ad-sidebar' ) ) {
		dynamic_sidebar( 'ad-sidebar' );
	} else {
		echo '<p class="no-code">' . __( 'Ad code has not been entered in the widget.', 'emanon' ) . '</p>' . "\n";
	}
}
?>