<?php
/**
* Emanon Business function
*/

// spanタグの消去を防ぐコード
function my_tiny_mce_before_init( $init_array ) {
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';

    return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );

// テーマオプションの読み込み
require_once ( get_stylesheet_directory() . '/lib/theme-inline-styles.php' );
require_once ( get_stylesheet_directory() . '/lib/theme-customizer.php' );
require_once ( get_stylesheet_directory() . '/lib/theme-tags.php' );
require_once ( get_stylesheet_directory() . '/lib/theme-widget.php' );


// wp headにscriptとstylesの追加
function emanon_business_scripts() {
	wp_enqueue_script( 'emanon-swiper', get_stylesheet_directory_uri() . '/lib/js/swiper.min.js', array(), '', true );
	wp_enqueue_script( 'emanon-child-custom', get_stylesheet_directory_uri() . '/lib/js/custom.min.js', array('jquery'),'', true );
	wp_enqueue_style( 'emanon-swiper-css' , get_stylesheet_directory_uri() . '/lib/css/swiper.min.css');
}
add_action( 'wp_enqueue_scripts', 'emanon_business_scripts' );

// 圧縮版style.cssの読み込み切り替え
function emanon_enqueue_style() {
	$css_minified = get_theme_mod( 'css_minified', '' );
	$stop_animation = get_theme_mod( 'stop_animation', '' );
	if ( $css_minified ) {
		wp_enqueue_style( 'emanon-style-min', get_template_directory_uri() . '/style-min.css' );
			} else {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
		if ( !$stop_animation ) {
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/css/animate.min.css' );
		}
	}
}

// style.cssの統合
function emanon_css_compression() {
	$stop_animation = get_theme_mod( 'stop_animation', '' );
	$parent_css = TEMPLA . '/style.css';
	$child_css = STYLE . '/style.css';
	$animate_css = TEMPLA . '/lib/css/animate.min.css';

	$css = '';

if ( WP_Filesystem() ) {//WP_Filesystemの初期化
	global $wp_filesystem;//$wp_filesystemオブジェクトの呼び出し
	if( is_file( $parent_css ) ) $css .= $wp_filesystem->get_contents( $parent_css );
	if( is_file( $child_css ) ) $css .= $wp_filesystem->get_contents( $child_css );
	if( is_file( $animate_css ) && !$stop_animation ) $css .= $wp_filesystem->get_contents( $animate_css );
}

// CSS 圧縮
if( class_exists('CSSmin') ) {
		$minify = new CSSmin();
		if( method_exists( $minify, "run" ) ) {
				$css = trim( $minify->run( $css ) );
		}

	$style_min = TEMPLA . '/style-min.css';

	// 圧縮後のCSSファイル保存
	if ( WP_Filesystem() ) {//WP_Filesystemの初期化
		global $wp_filesystem;//$wp_filesystemオブジェクトの呼び出し
		//$wp_filesystemオブジェクトのメソッドとしてファイルに書き込む
		$wp_filesystem->put_contents( $style_min, $css );
	}

	return;

	}
}
add_action( 'customize_save_after', 'emanon_css_compression', 10, 1 );

//post classからcategory-sectionを削除
function remove_category_section( $classes ) {
	$classes = array_diff( $classes, array( 'category-section' ) );
	return $classes;
}
add_filter( 'post_class','remove_category_section' );

// 子テーマ用のmoファイル
function emanon_child_setup() {
	load_child_theme_textdomain( 'emanon', get_stylesheet_directory() . '/languages');
}
add_action( 'after_setup_theme', 'emanon_child_setup');

//子テーマ用のビジュアルエディタースタイル
add_editor_style( 'lib/css/editor-style.css' );

/*------------------------------------------------------------------------------------
/* アップデートチェックの初期化
/*----------------------------------------------------------------------------------*/
require 'lib/theme-update-checker.php';
	$example_update_checker = new ThemeUpdateChecker(
	'emanon-business',
	'https://wp-emanon.jp/theme-update/emanon-business/update-emanon-business.json'
);