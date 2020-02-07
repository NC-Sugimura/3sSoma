<?php
/**
* Theme widet
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/


/*------------------------------------------------------------------------------------
/* Widget登録
/*----------------------------------------------------------------------------------*/
// Widget my profile
require_once ( get_template_directory() . '/lib/widget/my-profile.php' );

// Widget website profile
require_once ( get_template_directory() . '/lib/widget/website-profile.php' );

// Widget popular posts
require_once ( get_template_directory() . '/lib/widget/popular-posts.php' );

// Widget new posts
require_once ( get_template_directory() . '/lib/widget/new-posts.php' );

// Widget sidebar cta
require_once ( get_template_directory() . '/lib/widget/sidebar-cta.php' );

// Widget banner
require_once ( get_template_directory() . '/lib/widget/banner.php' );

/*------------------------------------------------------------------------------------
/* Widget
/*----------------------------------------------------------------------------------*/
if ( !function_exists( 'emanon_widgets_init' ) ):
function emanon_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar','emanon' ),
		'id' => 'sidebar-widget',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar［Fixed］','emanon' ),
		'id' => 'sidebar-widget-fixed',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar［SP］','emanon' ),
		'id' => 'sidebar-widget-sp',
		'description' => __( 'It is a sidebar for smartphone. Displayed in priority over widgets of sidebar and sidebar [fixed].', 'emanon' ),
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Common','emanon' ),
		'id' => 'ad-300',
		'description' => __( 'Display common ads. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Sidebar','emanon' ),
		'id' => 'ad-sidebar',
		'description' => __( 'Display ads in the sidebar. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad h2 Left','emanon' ),
		'id' => 'ad-h2-left',
		'description' => __( 'Display ad on top left of h2. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad h2 Right','emanon' ),
		'id' => 'ad-h2-right',
		'description' => __( 'Display ad on top right of h2. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Page Bottom Left','emanon' ),
		'id' => 'ad-bottom-left',
		'description' => __( 'Display ad in the bottom left of page body. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Page Bottom Right','emanon' ),
		'id' => 'ad-bottom-right',
		'description' => __( 'Display ad in the bottom right of page body. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad infeed page［PC］','emanon' ),
		'id' => 'ad-infeed-pc',
		'description' => __( 'Display ad infeed in page for pc', 'emanon' ),
		'before_widget' => '<div class="ad-infeed-pc">',
		'after_widget' => '</div>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad infeed page［Card type・SP］','emanon' ),
		'id' => 'ad-infeed-sp',
		'description' => __( 'Display ad infeed in page for sp or card type', 'emanon' ),
		'before_widget' => '<div class="ad-infeed-sp">',
		'after_widget' => '</div>',
		) );

	register_sidebar( array(
		'name' => __( 'Page Top Area［PC］','emanon' ),
		'id' => 'page-top-pc',
		'description' => __( 'It is a widget dedicated to the page top area.', 'emanon' ),
		'before_widget' => '<aside><div class="page-widget">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Page Top Area［SP］','emanon' ),
		'id' => 'page-top-sp',
		'description' => __( 'It is a widget dedicated to the page top area(SP).', 'emanon' ),
		'before_widget' => '<aside><div class="page-widget">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Page Bottom Area［PC］','emanon' ),
		'id' => 'page-bottom-pc',
		'description' => __( 'It is a widget dedicated to the page bottom area.', 'emanon' ),
		'before_widget' => '<aside><div class="page-widget">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Page Bottom Area［SP］','emanon' ),
		'id' => 'page-bottom-sp',
		'description' => __( 'It is a widget dedicated to the page bottom area(SP).', 'emanon' ),
		'before_widget' => '<aside><div class="page-widget">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Header Right Area','emanon' ),
		'id' => 'header-r-widget',
		'description' => __( 'It is a widget dedicated to the right margin of the header. Set up header layout setting as "left layout".', 'emanon' ),
		'before_widget' => '<div class="header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	) );

	register_sidebar( array(
		'name' => __( 'Hamburger Menu Area','emanon' ),
		'id' => 'mobile-menu-widget',
		'description' => __( 'It is a widget for hamburger menu. It is displayed in the modal window.', 'emanon' ),
		'before_widget' => '<div class="mobile-menu-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="mobile-menu-label">',
		'after_title' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Hamburger Menu Area for LP','emanon' ),
		'id' => 'lp-mobile-menu-widget',
		'description' => __( 'It is a widget for LP hamburger menu. It is displayed in the modal window.', 'emanon' ),
		'before_widget' => '<div class="mobile-menu-widget clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="mobile-menu-label">',
		'after_title' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Top Area［PC］','emanon' ),
		'id' => 'front-top-widge-pc',
		'description' => __( 'Front page first view lower part(PC/Tablet):Max size 790px.', 'emanon' ),
		'before_widget' => '<div class="front-top-widget-box clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Bottom Area［PC］','emanon' ),
		'id' => 'front-bottom-widget-pc',
		'description' => __( 'Front page footer top(PC/Tablet):Max size 790px.', 'emanon' ),
		'before_widget' => '<div class="front-bottom-widget-box clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Top Area［SP］','emanon' ),
		'id' => 'front-top-widget-sp',
		'description' => __( 'Front page first view lower part(SP).', 'emanon' ),
		'before_widget' => '<div class="front-top-widget-box clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Bottom Area［SP］','emanon' ),
		'id' => 'front-bottom-widget-sp',
		'description' => __( 'Front page footer top(SP).', 'emanon' ),
		'before_widget' => '<div class="front-bottom-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Left Area','emanon' ),
		'id' => 'footer-w-left',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Center Area［1］','emanon' ),
		'id' => 'footer-w-center',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Center Area［2］','emanon' ),
		'id' => 'footer-w-center-2',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Right Area','emanon' ),
		'id' => 'footer-w-right',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area［SP］','emanon' ),
		'id' => 'footer-w-sp',
		'description' => __( 'It is a sidebar for smartphone. Displayed in priority over widgets of Footer left area, Footer center area and Footer right area.', 'emanon' ),
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'emanon_widgets_init' );
endif;

/*------------------------------------------------------------------------------------
/* ユーザープロフィール項目の追加
/*----------------------------------------------------------------------------------*/
function emanon_user_meta( $item ) {
	$item[ 'user_twitter' ] = __( 'Twitter profile url:', 'emanon' );
	$item[ 'user_facebook' ] = __( 'Facebook profile url:', 'emanon' );
	$item[ 'user_instagram' ] = __( 'Instagram profile url:', 'emanon' );
	$item[ 'user_line' ] = __( 'LINE@ profile url', 'emanon' );
	$item[ 'user_youtube' ] = __( 'YouTube profile url', 'emanon' );
	$item[ 'user_position' ] = __( 'Position', 'emanon' );
	return $item;
	}
add_filter( 'user_contactmethods', 'emanon_user_meta', 10, 1 );


// 名姓の項目を姓名の順に変更
function emanon_user_name() {
	?><script>
	jQuery(function($){
	$('#last_name').closest('tr').after($('#first_name').closest('tr'));
	});
	</script><?php
}
add_action( 'admin_footer-user-new.php', 'emanon_user_name' );
add_action( 'admin_footer-user-edit.php', 'emanon_user_name' );
add_action( 'admin_footer-profile.php', 'emanon_user_name' );

add_action( 'admin_footer', 'render_japan_style_name_order' );
function render_japan_style_name_order() {
// ユーザー一覧以外ではjavascriptを出力しない
	global $pagenow;
	if( "users.php" !== $pagenow ) return;

	$html =<<<EOF
	<script type="text/javascript">
			jQuery(document).ready(function(){
					jQuery("td.column-name").each(function(){
							name = String(jQuery(this).text()).replace(/(^\s+)|(\s+$)/g,'');
							if( name ) {
									arr = name.split(" ");
									if( arr.length === 2 ) {
											jQuery(this).text(arr[1]+" "+arr[0]);
									}
							}
					});
			});
	</script>
EOF;
	echo $html;
}