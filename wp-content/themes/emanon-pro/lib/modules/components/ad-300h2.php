<?php
/**
* Ad h2 300px 250px
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<?php
if( is_emanon_ad_single() && is_single() || is_emanon_ad_page() && is_page() || is_emanon_ad_listpage() && is_home() || is_emanon_ad_listpage() && is_front_page() || is_emanon_ad_listpage() && is_archive() ) {
	echo '<div class="text-center">' . "\n";
	echo '<div class="clearfix">' . "\n";
		if( is_active_sidebar( 'ad-300' ) ) {
			echo '<div class="ad-label">' . get_emanon_ad_label(). '</div>' . "\n";
			if ( is_emanon_h2_left_ad300() && !is_emanon_h2_right_ad300() || !is_emanon_h2_left_ad300() && is_emanon_h2_right_ad300() ) {
				dynamic_sidebar( 'ad-300' ); // 中央配置
				 } else if ( is_emanon_h2_left_ad300() && is_emanon_h2_right_ad300() && !wp_is_mobile() ) {
				echo '<div class="article-ad-left">' . "\n";
				dynamic_sidebar( 'ad-300' ); // 左配置
				echo '</div>' . "\n";
				echo '<div class="article-ad-right">' . "\n";
				dynamic_sidebar( 'ad-300' ); // 右配置
				echo '</div>' . "\n";
				} else if ( is_emanon_h2_left_ad300() && is_emanon_h2_right_ad300() && wp_is_mobile() ) {
				dynamic_sidebar( 'ad-300' ); // モバイル時は中央配置
				}
		} else if ( is_active_sidebar( 'ad-h2-left' ) || is_active_sidebar( 'ad-h2-right' ) ) {
			echo '<div class="ad-label">' . get_emanon_ad_label(). '</div>' . "\n";
			if ( is_emanon_h2_left_ad300() && !is_emanon_h2_right_ad300() ) {
				dynamic_sidebar( 'ad-h2-left' ); // 左配置
				} else if ( !is_emanon_h2_left_ad300() && is_emanon_h2_right_ad300() ) {
				dynamic_sidebar( 'ad-h2-right' ); // 右配置
				} else if ( is_emanon_h2_left_ad300() && is_emanon_h2_right_ad300() && !wp_is_mobile() ) {
				echo '<div class="article-ad-left">' . "\n";
				dynamic_sidebar( 'ad-h2-left' ); // 左配置
				echo '</div>' . "\n";
				echo '<div class="article-ad-right">' . "\n";
				dynamic_sidebar( 'ad-h2-right' ); // 右配置
				echo '</div>' . "\n";
				} else if ( is_emanon_h2_left_ad300() && is_emanon_h2_right_ad300() && wp_is_mobile() ) {
				dynamic_sidebar( 'ad-h2-left' ); // モバイル時は左配置
				} else {
			echo '<p class="no-code">' . __( 'Ad code has not been entered in the widget.', 'emanon' ) . '</p>' . "\n";
		}
	}
	echo '</div>' . "\n";
	echo '</div>' . "\n";
}
?>
