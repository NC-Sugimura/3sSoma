<?php
/**
* Color Patterns
*
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.9.5
*/

function emanon_custom_colors_css() {

	$main_color = get_theme_mod( 'main_color', '#161410' );
	$link_color = get_theme_mod( 'link_color', '#9b8d77' );
	$link_hover = get_theme_mod( 'link_hover', '#b5b5b5' );
	$btn_background_color = get_theme_mod( 'btn_background_color', '#9b8d77' );
	$btn_text_color = get_theme_mod( 'btn_text_color', '#fff' );
	$h2_style = get_theme_mod( 'h2_style', 'border-left-background' );
	$h3_style = get_theme_mod( 'h3_style', 'border-bottom' );
	$h4_style = get_theme_mod( 'h4_style', 'none' );

	/*--h2 style--*/
	if ( $h2_style == "none" ) {
	/*---無し--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0;}';
	} elseif ( $h2_style == "background" ) {
	/*---背景--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0 8px 16px;background-color:' . $main_color . ';color:#fff;}';
	} elseif  ( $h2_style == "balloon" ) {
	/*---吹き出し--*/
	$h2_css = '
	.wp-block-heading h2{position:relative; padding:8px 16px; background-color:' . $main_color . '; border-radius:4px; color:#fff;}
	.wp-block-heading h2:after{position:absolute; top:100%; left:30px; content:""; width:0px; height:0px; border:solid 10px transparent; border-top:solid 15px ' .  $main_color . ';}';
	} elseif ( $h2_style == "border-left-background" ) {
	/*---左ボーダー＋背景--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';background-color:#f0f0f0;}';
	} elseif  ( $h2_style == "border-left" ) {
	/*---左ボーダー--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';}';
	} elseif ( $h2_style == "border-left-bottom" ) {
	/*---左ボーダー+下ボーダ--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';border-bottom:solid 2px #e2e5e8;}';
	} elseif  ( $h2_style == "border-bottom" ) {
	/*--下ボーダー--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0; border-bottom:solid 2px ' . $main_color . '}';
	} elseif ( $h2_style == "border-bottom-two" ) {
	/*---下ボーダー（2カラー）--*/
	$h2_css = '
	.wp-block-heading h2{position:relative; padding:8px 0; border-bottom:solid 2px #ccc;}
	.wp-block-heading h2:after{position:absolute; bottom:-2px; left: 0; z-index:2; content:""; width:20%; height:2px; background-color: ' . $main_color . ';}';
	} elseif  ( $h2_style == "border-left-background-stripe" ) {
	/*---左ボーダー＋背景 ストライプ--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0 8px 12px;border-left:4px solid ' . $main_color . ';background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}';
	} elseif ( $h2_style == "border-top-bottom-stripe" ) {
	/*--上下ボーダー ストライプ--*/
	$h2_css = '
	.wp-block-heading h2{padding:8px 0 8px 16px; border-top:solid 2px ' .  $main_color . ';border-bottom:solid 2px ' .  $main_color . ';background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}';
	}

	/*--h3 style--*/
	if ( $h3_style == "none" ) {
	/*---無し--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0;}';
	} elseif ( $h3_style == "background" ) {
	/*---背景--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0 8px 16px;background-color:' . $main_color . ';color:#fff;}';
	} elseif  ( $h3_style == "balloon" ) {
	/*---吹き出し--*/
	$h3_css = '
	.wp-block-heading h3{position:relative; padding:8px 16px; background-color:' . $main_color . '; border-radius:4px; color:#fff;}
	.wp-block-heading h3:after{position:absolute; top:100%; left:30px; content:""; width:0px; height:0px; border:solid 10px transparent; border-top:solid 15px ' .  $main_color . ';}';
	} elseif ( $h3_style == "border-left-background" ) {
	/*---左ボーダー＋背景--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';background-color:#f0f0f0;}';
	} elseif  ( $h3_style == "border-left" ) {
	/*---左ボーダー--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';}';
	} elseif ( $h3_style == "border-left-bottom" ) {
	/*---左ボーダー+下ボーダ--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';border-bottom:solid 2px #e2e5e8;}';
	} elseif  ( $h3_style == "border-bottom" ) {
	/*--下ボーダー--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0; border-bottom:solid 2px ' . $main_color . '}';
	} elseif ( $h3_style == "border-bottom-two" ) {
	/*---下ボーダー（2カラー）--*/
	$h3_css = '
	.wp-block-heading h3{position:relative; padding:8px 0; border-bottom:solid 2px #ccc;}
	.wp-block-heading h3:after{position:absolute; bottom:-2px; left: 0; z-index:2; content:""; width:20%; height:2px; background-color: ' . $main_color . ';}';
	} elseif  ( $h3_style == "border-left-background-stripe" ) {
	/*---左ボーダー＋背景 ストライプ--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0 8px 12px;border-left:4px solid ' . $main_color . ';background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}';
	} elseif ( $h3_style == "border-top-bottom-stripe" ) {
	/*--上下ボーダー ストライプ--*/
	$h3_css = '
	.wp-block-heading h3{padding:8px 0 8px 16px; border-top:solid 2px ' .  $main_color . ';border-bottom:solid 2px ' .  $main_color . ';background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}';
	}

	/*--h4 style--*/
	if ( $h4_style == "none" ) {
	/*---無し--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0;}';
	} elseif ( $h4_style == "background" ) {
	/*---背景--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0 8px 16px;background-color:' . $main_color . ';color:#fff;}';
	} elseif  ( $h4_style == "balloon" ) {
	/*---吹き出し--*/
	$h4_css = '
	.wp-block-heading h4{position:relative; padding:8px 16px; background-color:' . $main_color . '; border-radius:4px; color:#fff;}
	.wp-block-heading h4:after{position:absolute; top:100%; left:30px; content:""; width:0px; height:0px; border:solid 10px transparent; border-top:solid 15px ' .  $main_color . ';}';
	} elseif ( $h4_style == "border-left-background" ) {
	/*---左ボーダー＋背景--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';background-color:#f0f0f0;}';
	} elseif  ( $h4_style == "border-left" ) {
	/*---左ボーダー--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';}';
	} elseif ( $h4_style == "border-left-bottom" ) {
	/*---左ボーダー+下ボーダ--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';border-bottom:solid 2px #e2e5e8;}';
	} elseif  ( $h4_style == "border-bottom" ) {
	/*--下ボーダー--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0; border-bottom:solid 2px ' . $main_color . '}';
	} elseif ( $h4_style == "border-bottom-two" ) {
	/*---下ボーダー（2カラー）--*/
	$h4_css = '
	.wp-block-heading h4{position:relative; padding:8px 0; border-bottom:solid 2px #ccc;}
	.wp-block-heading h4:after{position:absolute; bottom:-2px; left: 0; z-index:2; content:""; width:20%; height:2px; background-color: ' . $main_color . ';}';
	} elseif  ( $h4_style == "border-left-background-stripe" ) {
	/*---左ボーダー＋背景 ストライプ--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0 8px 12px;border-left:4px solid ' . $main_color . ';background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}';
	} elseif ( $h4_style == "border-top-bottom-stripe" ) {
	/*--上下ボーダー ストライプ--*/
	$h4_css = '
	.wp-block-heading h4{padding:8px 0 8px 16px; border-top:solid 2px ' .  $main_color . ';border-bottom:solid 2px ' .  $main_color . ';background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}';
	}

	$editor_css = '
	/* Link colors */
	a,
	.editor-rich-text__tinymce a {
		color: ' . $link_color . ';
		cursor: pointer;
	}

	/* Hover colors */
	a:hover,
	.editor-rich-text__tinymce a:hover {
		color: ' . $link_hover . ';
	}

	/* BTN colors */
	.wp-block-button:not(.is-style-outline) .wp-block-button__link {
		background-color: ' . $link_color . ';
		color:#fff;
	}

	.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color) {
		color: ' . $link_color . ';
	';

	$theme_css = $h2_css.$h3_css.$h4_css.$editor_css;

	return apply_filters( 'emanon_custom_colors_css', $theme_css );
}
