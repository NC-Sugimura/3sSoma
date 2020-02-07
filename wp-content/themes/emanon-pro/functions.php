<?php
/**
* Emanon Pro function
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

/*------------------------------------------------------------------------------------
/* テーマオプションの読み込み
/*----------------------------------------------------------------------------------*/
require_once ( get_template_directory() . '/lib/theme-admin-options.php' );
require_once ( get_template_directory() . '/lib/theme-cssmin.php' );
require_once ( get_template_directory() . '/lib/theme-customizer.php' );
require_once ( get_template_directory() . '/lib/theme-inline-styles.php' );
require_once ( get_template_directory() . '/lib/theme-setup.php' );
require_once ( get_template_directory() . '/lib/theme-tags.php' );
require_once ( get_template_directory() . '/lib/theme-widget.php' );
require_once ( get_template_directory() . '/lib/theme-add-page.php' );
require_once ( get_template_directory() . '/lib/tinymce/inserthtml/add_insert_html_button.php' );

/*------------------------------------------------------------------------------------
/* WordPress標準の機能
/*----------------------------------------------------------------------------------*/
if ( !isset( $content_width ) ) {
	$content_width = 1118;
}

if ( !function_exists( 'emanon_setup' ) ):
function emanon_setup() {
	load_theme_textdomain( 'emanon', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	register_nav_menu( 'global-nav', __( 'Header menu', 'emanon' ) );
	register_nav_menu( 'scroll-nav', __( 'Header fixed menu', 'emanon' ) );
	register_nav_menu( 'mb-horizontal-nav', __( 'Mobile horizontal menu', 'emanon' ) );
	register_nav_menu( 'footer-nav', __( 'Footer menu', 'emanon' ) );
	register_nav_menu( 'lp-nav', __( 'LP menu', 'emanon' ) );
	register_nav_menu( 'lp-mb-horizontal-nav', __( 'LP mobile horizontal menu', 'emanon' ) );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'large-thumbnail', 1118, 538, true );
	add_image_size( 'middle-thumbnail', 1016, 300, true );
	add_image_size( 'slider-thumbnail', 733, 353, true );
	add_image_size( 'small-thumbnail', 544, 262, true );
	add_image_size( 'square-thumbnail', 180, 180, true );
	emanon_custom_header_setup();
	add_theme_support( 'custom-background', array( 'default-color' => '#f8f8f8' ) );
	add_editor_style( 'lib/css/style-editor.css' );
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'emanon_setup' );
endif;

// Gutenberg用のeditor-style
function emanon_gutenbergtheme_editor_styles() {
	wp_enqueue_style( 'emanon-editor-customizer-styles', get_template_directory_uri() .'/lib/css/editor-style-gutenberg.css' );
	
	require_once ( get_template_directory() . '/lib/css/color-patterns.php' );
	wp_add_inline_style( 'emanon-editor-customizer-styles', emanon_custom_colors_css() );

}
add_action( 'enqueue_block_editor_assets', 'emanon_gutenbergtheme_editor_styles' );


// カスタムヘッダー画像
if ( !function_exists( 'emanon_custom_header_setup' ) ):
function emanon_custom_header_setup() {
	$args = array(
	'width' => 1920,
	'height' => 500,
	'flex-height' => true,
	'header-text' => false,
	);
	add_theme_support( 'custom-header', $args );
}
endif;

// wp headにscriptとstylesを追加
if ( !function_exists( 'emanon_scripts_styles' ) ):
function emanon_scripts_styles() {
	$user_agent = $_SERVER['HTTP_USER_AGENT']; //IE UserAgent判定
	$stop_animation = get_theme_mod( 'stop_animation', false ); //アニメーション動作判定
	$stop_mobile_animation = get_theme_mod( 'stop_mobile_animation', true ); //モバイル時アニメーション動作判定
	emanon_enqueue_style(); // theme-tags.php styleの登録
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' ); // 同梱のJQueryを読み込ませない
		emanon_enqueue_script(); // Google CDNのJQueryの登録
	}
	wp_enqueue_script( 'emanon-master', get_template_directory_uri() . '/lib/js/master.js', array('jquery'),'', true );
	wp_enqueue_script( 'emanon-custom', get_template_directory_uri() . '/lib/js/custom.min.js', array('jquery'),'', true );
	wp_enqueue_script( 'jquery-cookie', get_template_directory_uri() . '/lib/js/cookie-min.js', array('jquery'),'', true );
	if( !strstr( $user_agent, 'Trident' ) && !strstr( $user_agent, 'MSIE' ) && !( $stop_animation ) ) {
	wp_enqueue_script( 'emanon-wow', get_template_directory_uri() . '/lib/js/wow.min.js', array(), '', true );
	}
	if( $stop_mobile_animation && !$stop_animation ) {
	wp_enqueue_script( 'emanon-wow-init', get_template_directory_uri() . '/lib/js/wow-init-stop-mobile.js', array(), '', true );
	} elseif ( !$stop_mobile_animation && !$stop_animation ) {
	wp_enqueue_script( 'emanon-wow-init', get_template_directory_uri() . '/lib/js/wow-init.js', array(), '', true );
	}

	if ( is_home() && strstr( $user_agent, 'MSIE' ) || is_front_page() && strstr( $user_agent, 'MSIE' ) || is_page_template( 'templates/lp.php' ) && strstr( $user_agent, 'MSIE' ) ) {
	wp_enqueue_script( 'emanon-e-smooth-scroll', get_template_directory_uri() . '/lib/js/ie-smooth-scroll.js', array(), '', true );
	}
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'emanon_scripts_styles' );
endif;

add_filter( 'script_loader_tag', 'add_emanon_module_to_script', 10, 3 );
function add_emanon_module_to_script( $tag, $handle, $src ) {
	if ( 'instantpage' === $handle ) {
		$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>' . "\n";
	}
	return $tag;
}

// カスタム機能にCSSを追加
function emanon_customizer_css() {
	wp_enqueue_style( 'emanon_customizer_css' , get_template_directory_uri() . '/lib/css/customizer-style.css' );
}
add_action( 'customize_controls_print_styles' , 'emanon_customizer_css' );

// headに出力されるタグを消去
remove_action( 'wp_head', 'wp_generator' ); //WordPressのバージョン情報
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); //絵文字対応のスクリプト
remove_action( 'wp_print_styles', 'print_emoji_styles'); //絵文字対応のスタイル

// 絵文字の DNS プリフェッチだけを削除
add_filter( 'emoji_svg_url', '__return_false' );

// テキストウィジェットでショートコード使用
add_filter('widget_text', 'do_shortcode');

// recent commentsのstyleを消去
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
}
add_action( 'widgets_init', 'remove_recent_comments_style' );

// カテゴリーやタグの概要<p>タグを消去
remove_filter( 'term_description','wpautop' );

// メディア画像のみタグ自動挿入の停止
function remove_p_on_images($content){
	return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter( 'the_content', 'remove_p_on_images' );

// カテゴリーの投稿数表示スタイル
function emanon_list_categories( $output ) {
	$output = preg_replace( '/<\/a>\s*\((\d+)\)/',' <span class="small">($1)</span></a>', $output );
	return $output;
}
add_filter( 'wp_list_categories', 'emanon_list_categories', 10, 2 );

// アーカイブの投稿数表示スタイル
function	emanon_list_archives( $output, $args ) {
	$output = preg_replace( '/<\/a>\s*(&nbsp;)\((\d+)\)/',' <span class="small">($2)</span></a>', $output );
	return $output;
}
add_filter( 'get_archives_link', 'emanon_list_archives', 10, 2 );

// 投稿ページ以外ではhentryクラスを削除
function remove_hentry( $classes ) {
	if ( !is_single() ) {
	 $classes = array_diff( $classes, array( 'hentry' ) );
	}
	return $classes;
}
add_filter( 'post_class','remove_hentry' );

// セルフピンバックの禁止
function no_self_ping( &$links ) {
	$home = home_url();
	foreach ( $links as $l => $link )
	if ( 0 === strpos( $link, $home ) )
	unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );

// the_archive_title 余計な文字を削除
function emanon_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'emanon_archive_title' );

// is_mobile追加
function is_mobile() {
	$useragents = array(
	'iPhone', // iPhone
	'iPod', // iPod touch
	'Android.*Mobile', // 1.5+ Android *** Only mobile
	'Windows.*Phone', // *** Windows Phone
	'dream', // Pre 1.5 Android
	'CUPCAKE', // 1.5+ Android
	'blackberry9500', // Storm
	'blackberry9530', // Storm
	'blackberry9520', // Storm v2
	'blackberry9550', // Storm v2
	'blackberry9800', // Torch
	'webOS', // Palm Pre Experimental
	'incognito', // Other iPhone browser
	'webmate' // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// コメント欄の表示カスタマイズ
function emanon_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	$user_nicename = get_the_author_meta( 'user_nicename'); ?>
<li>
	<div <?php comment_class(); ?>>
		<div id="comment-<?php comment_ID(); ?>" class="comment-box">
			<div class="avatar">
			<?php echo get_avatar( $comment, 56, '' ,$user_nicename); ?>
			</div>
			<div class="comment-meta">
				<?php echo get_comment_author_link(); ?>
				<i class="fa fa-clock-o"></i><?php printf( ('%1$s at %2$s'), get_comment_date( ), get_comment_time() ) ?>
			</div>
			<div class="comment-text">
				<?php comment_text(); ?>
			<div class="comment-reply">
				<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'reply_text' => __( 'Reply','emanon' ), ) ) ); ?>
				<?php edit_comment_link( __( 'Edit','emanon') ); ?>
			</div>
			</div>
		</div>
	</div>
</li>
<?php
}

/*------------------------------------------------------------------------------------
/* プラグイン
/*----------------------------------------------------------------------------------*/
// YARPPのwidget.cssを削除
function dequeue_yarpp_header_styles() {
	wp_dequeue_style( 'yarppWidgetCss' );
}
add_action( 'wp_print_styles', 'dequeue_yarpp_header_styles' );

// YARPPのrelated.cssを削除
function dequeue_yarpp_footer_styles() {
	wp_dequeue_style( 'yarppRelatedCss' );
}
add_action( 'get_footer', 'dequeue_yarpp_footer_styles' );

/*------------------------------------------------------------------------------------
/* アップデートチェック
/*----------------------------------------------------------------------------------*/
require 'lib/theme-update-checker.php';
	$emano_pro_update_checker = new ThemeUpdateChecker (
	'emanon-pro',
	'https://wp-emanon.jp/theme-update/emanon-pro/update-emanon-pro.json'
);