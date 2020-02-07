<?php
/**
* Theme inline style
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
function emnanon_custom_css() {
	/*---general panel--*/
	$main_color = get_theme_mod( 'main_color', '#161410' );
	$link_color = get_theme_mod( 'link_color', '#9b8d77' );
	$link_hover = get_theme_mod( 'link_hover', '#b5b5b5' );
	$footer_background_color = get_theme_mod( 'footer_background_color', '#232323' );
	$footer_text_color = get_theme_mod( 'footer_text_color', '#b5b5b5' );
	$footer_link_hover = get_theme_mod( 'footer_link_hover', '#fff' );
	$btn_background_color = get_theme_mod( 'btn_background_color', '#9b8d77' );
	$btn_text_color = get_theme_mod( 'btn_text_color', '#fff' );
	/*---header panel--*/
	$header_area_height = get_theme_mod( 'header_area_height', 96 );
	$mobile_header_area_height = get_theme_mod( 'mobile_header_area_height', 96 );
	$header_background_image = get_theme_mod( 'header_background_image', '' );
	$mobile_header_background_image = get_theme_mod( 'mobile_header_background_image', '' );
	$header_tagline_background_color = get_theme_mod( 'header_tagline_background_color', '#f8f8f8' );
	$header_tagline_text_color = get_theme_mod( 'header_tagline_text_color', '#000c15' );
	$header_tagline_font_size = get_theme_mod( 'header_tagline_font_size', 12 );
	$header_sitename_font_size_pc = get_theme_mod( 'header_sitename_font_size_pc', 24 );
	$header_sitename_font_size_mobile = get_theme_mod( 'header_sitename_font_size_mobile', 16 );
	$header_background_color = get_theme_mod( 'header_background_color', '#fff' );
	$header_site_title_color = get_theme_mod( 'header_site_title_color', '#000c15' );
	$header_logo_height = get_theme_mod( 'header_logo_height', 50 );
	$header_logo_height_mobile = get_theme_mod( 'header_logo_height_mobile', 50 );
	$display_header_cta = get_theme_mod( 'display_header_cta', '' );
	$display_header_cta_type = get_theme_mod( 'display_header_cta_type', 'tel' );
	$header_tel_font_size = get_theme_mod( 'header_tel_font_size', 24 );
	$header_tel_icon_height = get_theme_mod( 'header_tel_icon_height', 18 );
	$header_cta_icon_color = get_theme_mod( 'header_cta_icon_color', '#b5b5b5' );
	$header_cta_tell_color = get_theme_mod( 'header_cta_tell_color', '#000c15' );
	$header_cta_text_color = get_theme_mod( 'header_cta_text_color', '#000c15' );
	$header_cta_btn_background_color = get_theme_mod( 'header_cta_btn_background_color', '#37db9b' );
	$header_cta_btn_text_color = get_theme_mod( 'header_cta_btn_text_color', '#fff' );
	$global_nav_color = get_theme_mod( 'global_nav_color', '#000c15' );
	$hamburger_menu_text_color = get_theme_mod( 'hamburger_menu_text_color', '#000c15' );
	$hamburger_menu_color = get_theme_mod( 'hamburger_menu_color', '#9b8d77' );
	$modal_global_nav_background_color = get_theme_mod( 'modal_global_nav_background_color', '#fff' );
	$modal_global_nav_title_color = get_theme_mod( 'modal_global_nav_title_color', '#000c15' );
	$modal_global_nav_font_color = get_theme_mod( 'modal_global_nav_font_color', '#000c15' );
	$tracking_header_sitename_font_size = get_theme_mod( 'tracking_header_sitename_font_size', 16 );
	$tracking_header_logo_height = get_theme_mod( 'tracking_header_logo_height', 40 );
	$tracking_header_background_color = get_theme_mod( 'tracking_header_background_color', '#fff' );
	$tracking_header_font_color = get_theme_mod( 'tracking_header_font_color', '#000c15' );
	$global_nav_design_type = get_theme_mod( 'global_nav_design_type', 'default' );
	$display_mb_scroll_arrow = get_theme_mod( 'display_mb_scroll_arrow', '' );
	$display_search_keywords_lists_pc = get_theme_mod( 'display_search_keywords_lists_pc', '' );
	$display_search_keywords_lists_mb = get_theme_mod( 'display_search_keywords_lists_mb', '' );
	$search_keywords_label_color = get_theme_mod( 'search_keywords_label_color', '#161410' );
	$search_keywords_background_color = get_theme_mod( 'search_keywords_background_color', '#f8f8f8' );
	$search_keywords_text_color = get_theme_mod( 'search_keywords_text_color', '#9b8d77' );
	$search_keywords_text_hover_color = get_theme_mod( 'search_keywords_text_hover_color', '#b5b5b5' );
	$display_mb_scroll_arrow_sk = get_theme_mod( 'display_mb_scroll_arrow_sk', '' );
	$header_info_front_page = get_theme_mod( 'display_header_info_front_page', '' );
	$header_info_post = get_theme_mod( 'display_header_info_post', '' );
	$header_info_page = get_theme_mod( 'display_header_info_page', '' );
	$header_info_archive = get_theme_mod( 'display_header_info_archive', '' );
	$header_info_title = get_theme_mod( 'header_info_title', '' );
	$header_info_url = get_theme_mod( 'header_info_url', '' );
	$header_info_text_color = get_theme_mod( 'header_info_text_color', '#000c15' );
	$header_info_background_color = get_theme_mod( 'header_info_background_color', '#e2e5e8' );
	$header_info_text_hover_color = get_theme_mod( 'header_info_text_hover_color', '#fff' );
	$header_info_background_hover_color = get_theme_mod( 'header_info_background_hover_color', '#bcc3ca' );
	/*---content panel--*/
	$post_thumbnail_layout = get_theme_mod( 'post_thumbnail_layout', 'wide' );
	$page_thumbnail_layout = get_theme_mod( 'page_thumbnail_layout', 'wide' );
	$fb_like_image_opacity = get_theme_mod( 'fb_like_image_opacity', 0.25 );
	$h2_style = get_theme_mod( 'h2_style', 'border-left-background' );
	$h3_style = get_theme_mod( 'h3_style', 'border-bottom' );
	$h4_style = get_theme_mod( 'h4_style', 'none' );
	$display_fb_like_btn = get_theme_mod( 'display_fb_like_btn', '' );
	$fb_like_background_color = get_theme_mod( 'fb_like_background_color', '#000' );
	$display_content_twitter_follow = get_theme_mod( 'display_content_twitter_follow', '' );
	$display_content_sns_follow = get_theme_mod( 'display_content_sns_follow', '' );
	$display_author_profile = get_theme_mod( 'display_author_profile', '' );
	$sidebar_h_style = get_theme_mod( 'sidebar_h_style', 'border-bottom-two' );
	$display_related_post = get_theme_mod( 'display_related_post', true );
	/*---footer panel--*/
	$display_footer_sns_follow = get_theme_mod( 'display_footer_sns_follow', '' );
	$footer_top_background_color = get_theme_mod( 'footer_top_background_color', '#323638' );
	/*---front page panel firstview--*/
	$firstview_type = get_theme_mod( 'firstview_layout', 'slider' );
	$featured_image = get_theme_mod( 'featured_image', get_theme_file_uri() . '/lib/images/emanon-header-img.jpg' );
	$featured_section_background_color = get_theme_mod( 'featured_section_background_color', '#e8edf8' );
	$featured_background_image_opacity = get_theme_mod( 'featured_background_image_opacity', 1 );
	$featured_image_blur = get_theme_mod( 'featured_image_blur', 0 );
	$featured_display_overlay = get_theme_mod( 'featured_display_overlay', 'pattern_none' );

	$slider_image_responsive = get_theme_mod( 'slider_image_responsive', '' );
	$slider_image_height = get_theme_mod( 'slider_image_height', 500 );
	$slider_message_layout_type = get_theme_mod( 'slider_message_layout_type', 'slider_message_center' );
	$slider_image_text_shadow = get_theme_mod( 'slider_image_text_shadow', true );
	$slider_image_title_color = get_theme_mod( 'slider_image_title_color', '#fff' );
	$slider_image_sub_title_color = get_theme_mod( 'slider_image_sub_title_color', '#fff' );
	$slider_btn_background_color = get_theme_mod( 'slider_btn_background_color', '#9b8d77' );
	$slider_btn_text_color = get_theme_mod( 'slider_btn_text_color', '#fff' );
	$slider_background_color_start = get_theme_mod( 'slider_background_color_start', '#000' );
	$slider_background_color_end = get_theme_mod( 'slider_background_color_end', '#000' );
	$slider_background_color_degree = get_theme_mod( 'slider_background_color_degree', 135 );
	$slider_display_overlay = get_theme_mod( 'slider_display_overlay', 'pattern_none' );
	$slider_image_opacity = get_theme_mod( 'slider_image_opacity', 0 );

	$slider_image_responsive = get_theme_mod( 'slider_image_responsive', '' );
	$slider_content_height = get_theme_mod( 'slider_content_height', 500 );
	$slider_content_text_shadow = get_theme_mod( 'slider_content_text_shadow', true );
	$slider_content_text_color = get_theme_mod( 'slider_content_text_color', '#fff' );
	$slider_content_background_color_start = get_theme_mod( 'slider_content_background_color_start', '#000' );
	$slider_content_background_color_end = get_theme_mod( 'slider_content_background_color_end', '#000' );
	$slider_content_background_color_degree = get_theme_mod( 'slider_content_background_color_degree', 135 );
	$slider_content_display_overlay = get_theme_mod( 'slider_content_display_overlay', 'pattern_none' );
	$slider_content_image_opacity = get_theme_mod( 'slider_content_image_opacity', 0 );

	$video_section_height = get_theme_mod( 'video_section_height', 500 );
	$video_header_tagline_text_color = get_theme_mod( 'video_header_tagline_text_color', '#000c15' );
	$video_header_site_title_color = get_theme_mod( 'video_header_site_title_color', '#000c15' );
	$video_text_shadow = get_theme_mod( 'video_text_shadow', true );
	$video_title_color = get_theme_mod( 'video_title_color', '#fff' );
	$video_sub_title_color = get_theme_mod( 'video_sub_title_color', '#fff' );
	$video_btn_background_color = get_theme_mod( 'video_btn_background_color', '#9b8d77' );
	$video_btn_text_color = get_theme_mod( 'video_btn_text_color', '#fff' );
	$video_down_icon_color = get_theme_mod( 'video_down_icon_color', '#fff' );
	$video_background_color_start = get_theme_mod( 'video_background_color_start', '#000' );
	$video_background_color_end = get_theme_mod( 'video_background_color_end', '#000' );
	$video_background_color_degree = get_theme_mod( 'video_background_color_degree', 135 );
	$video_background_color_opacity = get_theme_mod( 'video_background_color_opacity', 0 );
	$video_display_overlay = get_theme_mod( 'video_display_overlay', 'pattern_none' );
	$substitution_image = get_theme_mod( 'substitution_image', get_theme_file_uri() . '/lib/images/emanon-header-img.jpg' );

	$eyecatch_layout_reverse = get_theme_mod( 'eyecatch_layout_reverse', '' );
	$eyecatch_container_padding = get_theme_mod( 'eyecatch_container_padding', 64 );
	$eyecatch_image = get_theme_mod( 'eyecatch_image', '' );
	$display_sp_eyecatch_image = get_theme_mod( 'display_sp_eyecatch_image', true );
	$eyecatch_image_text_shadow = get_theme_mod( 'eyecatch_image_text_shadow', true );
	$eyecatch_image_title_color = get_theme_mod( 'eyecatch_image_title_color', '#fff' );
	$eyecatch_image_sub_title_color = get_theme_mod( 'eyecatch_image_sub_title_color', '#fff' );
	$eyecatch_btn_background_color = get_theme_mod( 'eyecatch_btn_background_color', '#9b8d77' );
	$eyecatch_btn_text_color = get_theme_mod( 'eyecatch_btn_text_color', '#fff' );
	$eyecatch_btn_url = get_theme_mod( 'eyecatch_btn_url', '' );
	$eyecatch_background_color_start = get_theme_mod( 'eyecatch_background_color_start', '#000' );
	$eyecatch_background_color_end = get_theme_mod( 'eyecatch_background_color_end', '#000' );
	$eyecatch_background_color_degree = get_theme_mod( 'eyecatch_background_color_degree', 135 );
	$eyecatch_display_overlay = get_theme_mod( 'eyecatch_display_overlay', '#b5b5b5' );
	$eyecatch_background_opacity = get_theme_mod( 'eyecatch_background_opacity', 0 );

	/*---front page panel entry section--*/
	$entry_section_title_style = get_theme_mod( 'entry_section_title_style', 'border-bottom-two' );
	$display_tab_list = get_theme_mod( 'display_tab_list', '' );
	$tab_btn_background_color = get_theme_mod( 'tab_btn_background_color', '#9b8d77' );
	$tab_btn_text_color = get_theme_mod( 'tab_btn_text_color', '#fff' );
	$tab_color = get_theme_mod( 'tab_color', '#f1f1f1' );
	$tab_active_color = get_theme_mod( 'tab_active_color', '#e2e5e8' );
	$tab_text_color = get_theme_mod( 'tab_text_color', '#000c15;' );
	/*---template panel--*/
	$display_read_more = get_theme_mod( 'display_read_more', true );
	$read_more_type = get_theme_mod( 'read_more_type', 'read_more' );
	/*---cta panel--*/
	$display_cta_single = get_theme_mod( 'display_cta_single', '' );
	$display_cta_page = get_theme_mod( 'display_cta_page', '' );
	$display_cta_footer_section_frontpage = get_theme_mod( 'display_cta_footer_section_frontpage', '' );
	$display_cta_footer_section_page_single = get_theme_mod( 'display_cta_footer_section_page_single', '' );
	$display_cta_footer_section_archive = get_theme_mod( 'display_cta_footer_section_archive', '' );
	$display_cta_popup_frontpage = get_theme_mod( 'display_cta_popup_frontpage', '' );
	$display_cta_popup_single = get_theme_mod( 'display_cta_popup_single', '' );
	$display_cta_popup_page = get_theme_mod( 'display_cta_popup_page', '' );
	$display_cta_popup_archive = get_theme_mod( 'display_cta_popup_archive', '' );

	$cta_common_layout_type = get_theme_mod( 'cta_common_layout_type', 'cta_post_left' );
	$cta_potential_layout_type = get_theme_mod( 'cta_potential_layout_type', 'cta_post_left' );
	$cta_eventually_layout_type = get_theme_mod( 'cta_eventually_layout_type', 'cta_psost_left' );
	$cta_compare_layout_type = get_theme_mod( 'cta_compare_layout_type', 'cta_post_left' );
	$cta_prospect_layout_type = get_theme_mod( 'cta_prospect_layout_type', 'cta_post_left' );

	$cta_common_background_color = get_theme_mod( 'cta_common_background_color', '#fff' );
	$cta_common_title_color = get_theme_mod( 'cta_common_title_color', '#000c15' );
	$cta_common_text_color = get_theme_mod( 'cta_common_text_color', '#303030' );
	$cta_common_btn_background_color = get_theme_mod( 'cta_common_btn_background_color', '#9b8d77' );
	$cta_common_btn_text_color = get_theme_mod( 'cta_common_btn_text_color', '#fff' );

	$cta_a_background_color = get_theme_mod( 'cta_a_background_color', '#fff' );
	$cta_a_title_color = get_theme_mod( 'cta_a_title_color', '#000c15' );
	$cta_a_text_color = get_theme_mod( 'cta_a_text_color', '#303030' );
	$cta_a_btn_background_color = get_theme_mod( 'cta_a_btn_background_color', '#9b8d77' );
	$cta_a_btn_text_color = get_theme_mod( 'cta_a_btn_text_color', '#fff' );

	$cta_b_background_color = get_theme_mod( 'cta_b_background_color', '#fff' );
	$cta_b_title_color = get_theme_mod( 'cta_b_title_color', '#000c15' );
	$cta_b_text_color = get_theme_mod( 'cta_b_text_color', '#303030' );
	$cta_b_btn_background_color = get_theme_mod( 'cta_b_btn_background_color', '#9b8d77' );
	$cta_b_btn_text_color = get_theme_mod( 'cta_b_btn_text_color', '#fff' );

	$cta_c_background_color = get_theme_mod( 'cta_c_background_color', '#fff' );
	$cta_c_title_color = get_theme_mod( 'cta_c_title_color', '#000c15' );
	$cta_c_text_color = get_theme_mod( 'cta_c_text_color', '#303030' );
	$cta_c_btn_background_color = get_theme_mod( 'cta_c_btn_background_color', '#9b8d77' );
	$cta_c_btn_text_color = get_theme_mod( 'cta_c_btn_text_color', '#fff' );

	$cta_d_background_color = get_theme_mod( 'cta_d_background_color', '#fff' );
	$cta_d_title_color = get_theme_mod( 'cta_d_title_color', '#000c15' );
	$cta_d_text_color = get_theme_mod( 'cta_d_text_color', '#303030' );
	$cta_d_btn_background_color = get_theme_mod( 'cta_d_btn_background_color', '#9b8d77' );
	$cta_d_btn_text_color = get_theme_mod( 'cta_d_btn_text_color', '#fff' );

	$cta_footer_logo_height = get_theme_mod( 'footer_logo_height', 46 );
	$cta_footer_tel_font_size = get_theme_mod( 'cta_footer_tel_font_size', 24 );
	$cta_footer_background_color = get_theme_mod( 'cta_footer_background_color', '#fff' );
	$cta_footer_icon_color = get_theme_mod( 'cta_footer_icon_color', '#b5b5b5' );
	$cta_footer_text_color = get_theme_mod( 'cta_footer_text_color', '#303030' );
	$cta_footer_btn_background_color = get_theme_mod( 'cta_footer_btn_background_color', '#9b8d77' );
	$cta_footer_btn_text_color = get_theme_mod( 'cta_footer_btn_text_color', '#fff' );

	$cta_popup_position = get_theme_mod( 'cta_popup_position', 'right' );
	$cta_popup_layout_type = get_theme_mod( 'cta_popup_layout_type', 'cta_popup_left' );
	$cta_popup_background_color = get_theme_mod( 'cta_popup_background_color', '#fff' );
	$cta_popup_title_header_color = get_theme_mod( 'cta_popup_title_header_color', '#b5b5b5' );
	$cta_popup_title_color = get_theme_mod( 'cta_popup_title_color', '#000c15' );
	$cta_popup_text_color = get_theme_mod( 'cta_popup_text_color', '#303030' );
	$cta_popup_btn_background_color = get_theme_mod( 'cta_popup_btn_background_color', '#37db9b' );
	$cta_popup_btn_text_color = get_theme_mod( 'cta_popup_btn_text_color', '#fff' );
	$cta_popup_icon_mobile_background_color = get_theme_mod( 'cta_popup_icon_mobile_background_color', '#37db9b' );
	$cta_popup_icon_mobile_text_color = get_theme_mod( 'cta_popup_icon_mobile_text_color', '#fff' );

	$fm_frontpage = get_theme_mod( 'display_facebook_messenger_frontpage', '' );
	$fm_single = get_theme_mod( 'display_facebook_messenger_single', '' );
	$fm_page = get_theme_mod( 'display_facebook_messenger_page', '' );
	$fm_archive = get_theme_mod( 'display_facebook_messenger_archive', '' );
	$fm_lp = get_theme_mod( 'display_facebook_messenger_lp', '' );
	$fm_position = get_theme_mod( 'facebook_messenger_position', 'right' );
	/*---mobile footer buttons--*/
	$mobile_footer_btn_style = get_theme_mod( 'mobile_footer_btn_style', 'no_display' );
	$footer_mobile_btn_icon_color = get_theme_mod( 'footer_mobile_btn_icon_color', '#323638' );
	$footer_mobile_btn_text_color = get_theme_mod( 'footer_mobile_btn_text_color', '#323638' );
	$footer_mobile_btn_background_color = get_theme_mod( 'footer_mobile_btn_background_color', '#f8f8f' );
	/*---landing page panel--*/
	$display_lp_header_cta = get_theme_mod( 'display_lp_header_cta', '' );
	$lp_header_tel_font_size = get_theme_mod( 'lp_header_tel_font_size', '24' );
	$lp_header_tel_icon_height = get_theme_mod( 'lp_header_tel_icon_height', '18' );
	$lp_header_cta_type = get_theme_mod( 'lp_header_cta_type', 'default' );
	$lp_header_cta_icon_color = get_theme_mod( 'lp_header_cta_icon_color', '#b5b5b5' );
	$lp_header_cta_btn_background_color = get_theme_mod( 'lp_header_cta_btn_background_color', '#37db9b' );
	$lp_header_cta_btn_text_color = get_theme_mod( 'lp_header_cta_btn_text_color', '#fff' );

	$display_header_section = get_theme_mod( 'display_header_section', '' );
	$header_image_height = get_theme_mod( 'header_image_height', 500 );
	$header_image_text_shadow = get_theme_mod( 'header_image_text_shadow', true );
	$header_image_title_color = get_theme_mod( 'header_image_title_color', '#fff' );
	$header_image_sub_title_color = get_theme_mod( 'header_image_sub_title_color', '#fff' );
	$header_message_layout_type = get_theme_mod( 'header_message_layout_type', 'header_message_center' );
	$header_btn_background_color = get_theme_mod( 'header_btn_background_color', '#9b8d77' );
	$header_btn_text_color = get_theme_mod( 'header_btn_text_color', '#fff' );
	$header_image_background_color_start = get_theme_mod( 'header_image_background_color_start', '#000' );
	$header_image_background_color_end = get_theme_mod( 'header_image_background_color_end', '#000' );
	$header_image_background_color_degree = get_theme_mod( 'header_image_background_color_degree', 135 );
	$header_image_opacity = get_theme_mod( 'header_image_opacity', 0.5 );
	$header_display_overlay = get_theme_mod( 'header_display_overlay', 'pattern_none' );

	$display_lp_mb_scroll_arrow = get_theme_mod( 'display_lp_mb_scroll_arrow', '' );

	$display_empathy_section = get_theme_mod( 'display_empathy_section', '' );
	$empathy_section_background_color = get_theme_mod( 'empathy_section_background_color', '#fff' );
	$empathy_section_title_color = get_theme_mod( 'empathy_section_title_color', '#000c15' );
	$empathy_section_sub_title_color = get_theme_mod( 'empathy_section_sub_title_color', '#000c15' );
	$empathy_textbox_background_color = get_theme_mod( 'empathy_textbox_background_color', '#fff' );
	$empathy_section_text_color = get_theme_mod( 'empathy_section_text_color', '#303030' );
	$empathy_section_icon_color = get_theme_mod( 'empathy_section_icon_color', '#b5b5b5' );
	$scroll_down_background_color = get_theme_mod( 'scroll_down_background_color', '#9b8d77' );
	$scroll_down_icon_color = get_theme_mod( 'scroll_down_icon_color', '#fff' );

	$display_advantage_section = get_theme_mod( 'display_advantage_section', '' );
	$advantage_section_background_color = get_theme_mod( 'advantage_section_background_color', '#fff' );
	$advantage_section_title_color = get_theme_mod( 'advantage_section_title_color', '#000c15' );
	$advantage_section_sub_title_color = get_theme_mod( 'advantage_section_sub_title_color', '#000c15' );
	$advantage_section_text_color = get_theme_mod( 'advantage_section_text_color', '#303030' );
	$advantage_section_icon_color = get_theme_mod( 'advantage_section_icon_color', '#9b8d77' );

	$display_content_section = get_theme_mod( 'display_content_section', true );
	$content_section_background_color = get_theme_mod( 'content_section_background_color', '#f8f8f8' );

	$display_product_features_section = get_theme_mod( 'display_product_features_section', '' );
	$product_features_section_background_color = get_theme_mod( 'product_features_section_background_color', '#f8f8f8' );
	$product_features_title_color = get_theme_mod( 'product_features_title_color', '#000c15' );
	$product_features_sub_title_color = get_theme_mod( 'product_features_sub_title_color', '#303030' );
	$product_features_headline_color = get_theme_mod( 'product_features_headline_color', '#303030' );
	$product_features_text_color = get_theme_mod( 'product_features_text_color', '#303030' );

	$display_comparison_table_section = get_theme_mod( 'display_comparison_table_section', '' );
	$comparison_section_background_color = get_theme_mod( 'comparison_section_background_color', '#fff' );
	$comparison_section_title_color = get_theme_mod( 'comparison_section_title_color', '#000c15' );
	$comparison_section_sub_title_color = get_theme_mod( 'comparison_section_sub_title_color', '#303030' );
	$comparison_textbox_background_color = get_theme_mod( 'comparison_textbox_background_color', '#fff' );
	$comparison_section_myitem_background_color = get_theme_mod( 'comparison_section_myitem_background_color', '#9b8d77' );
	$comparison_section_myitem_text_color = get_theme_mod( 'comparison_section_myitem_text_color', '#fff' );
	$comparison_section_item_background_color = get_theme_mod( 'comparison_section_item_background_color', '#f4f6fa' );
	$comparison_section_item_text_color = get_theme_mod( 'comparison_section_item_text_color', '#000c15' );

	$display_cta_btn_lp_1 = get_theme_mod( 'display_cta_btn_lp_1', '' );
	$display_cta_btn_lp_2 = get_theme_mod( 'display_cta_btn_lp_2', '' );
	$display_cta_btn_lp_3 = get_theme_mod( 'display_cta_btn_lp_3', '' );
	$cta_btn_lp_background_color = get_theme_mod( 'cta_btn_lp_background_color', '#fff' );
	$cta_btn_lp_title_color = get_theme_mod( 'cta_btn_lp_title_color', '#000c15' );
	$cta_btn_lp_text_color = get_theme_mod( 'cta_btn_lp_text_color', '#303030' );
	$cta_btn_lp_btn_background_color = get_theme_mod( 'cta_btn_lp_btn_background_color', '#37db9b' );
	$cta_btn_lp_btn_text_color = get_theme_mod( 'cta_btn_lp_btn_text_color', '#fff' );

	$display_testimonial_section = get_theme_mod( 'display_testimonial_section', '' );
	$testimonial_section_background_color = get_theme_mod( 'testimonial_section_background_color', '#fff' );
	$testimonial_section_title_color = get_theme_mod( 'testimonial_section_title_color', '#000c15' );
	$testimonial_section_sub_title_color = get_theme_mod( 'testimonial_section_sub_title_color', '#303030' );
	$testimonial_section_text_color = get_theme_mod( 'testimonial_section_text_color', '#303030' );
	$testimonial_balloon_background_color = get_theme_mod( 'testimonial_balloon_background_color', '#fcfcfc' );
	$testimonial_balloon_text_color = get_theme_mod( 'testimonial_balloon_text_color', '#303030' );
	$display_offer_section = get_theme_mod( 'display_offer_section', '' );

	$offer_section_background_color = get_theme_mod( 'offer_section_background_color', '#f8f8f8' );
	$offer_section_title_color = get_theme_mod( 'offer_section_title_color', '#000c15' );
	$offer_section_sub_title_color = get_theme_mod( 'offer_section_sub_title_color', '#000c15' );
	$offer_section_text_color = get_theme_mod( 'offer_section_text_color', '#303030' );
	$offer_section_icon_color = get_theme_mod( 'offer_section_icon_color', '#9b8d77' );
	$offer_section_item_background_color = get_theme_mod( 'offer_section_item_background_color', '#b5b5b5' );
	$offer_section_item_color = get_theme_mod( 'offer_section_item_color', '#fff' );
	$offer_section_item_price_background_color = get_theme_mod( 'offer_section_item_price_background_color', '#fff' );
	$offer_section_item_price_color = get_theme_mod( 'offer_section_item_price_color', '#000c15' );

	$display_benefits_section = get_theme_mod( 'display_benefits_section', '' );
	$benefits_section_background_color = get_theme_mod( 'benefits_section_background_color', '#fff' );
	$benefits_section_title_color = get_theme_mod( 'benefits_section_title_color', '#000c15' );
	$benefits_section_sub_title_color = get_theme_mod( 'benefits_section_sub_title_color', '#303030' );
	$benefits_textbox_background_color = get_theme_mod( 'benefits_textbox_background_color', '#f8f8f8' );
	$benefits_section_text_color = get_theme_mod( 'benefits_section_text_color', '#303030' );
	$benefits_section_icon_color = get_theme_mod( 'benefits_section_icon_color', '#b5b5b5' );

	$display_closing_section = get_theme_mod( 'display_closing_section', '' );
	$closing_section_image = get_theme_mod( 'closing_section_image', '' );
	$closing_section_background_color_start = get_theme_mod( 'closing_section_background_color_start', '#000' );
	$closing_section_background_color_end = get_theme_mod( 'closing_section_background_color_end', '#000' );
	$closing_section_background_color_degree = get_theme_mod( 'closing_section_background_color_degree', 135 );
	$closing_section_display_overlay = get_theme_mod( 'closing_section_display_overlay', 'pattern_none' );
	$closing_section_background_opacity = get_theme_mod( 'closing_section_background_opacity', 0 );
	$closing_section_title_color = get_theme_mod( 'closing_section_title_color', '#fff' );

	$display_cta_lp = get_theme_mod( 'display_cta_lp', '' );
	$cta_lp_section_background_color = get_theme_mod( 'cta_lp_section_background_color', '#f8f8f8' );
	$cta_lp_section_background_image = get_theme_mod( 'cta_lp_section_background_image', get_template_directory_uri() . '/lib/images/graphy.png' );
	$cta_lp_contactform_background_color = get_theme_mod( 'cta_lp_contactform_background_color', '#fff' );
	$cta_lp_icon_color = get_theme_mod( 'cta_lp_icon_color', '#b5b5b5' );
	$cta_lp_title_color = get_theme_mod( 'cta_lp_title_color', '#000c15' );
	$cta_lp_sub_title_color = get_theme_mod( 'cta_lp_sub_title_color', '#303030' );
	$cta_lp_text_color = get_theme_mod( 'cta_lp_text_color', '#303030' );
	$cta_lp_btn_background_color = get_theme_mod( 'cta_lp_btn_background_color', '#9b8d77' );
	$cta_lp_btn_text_color = get_theme_mod( 'cta_lp_btn_text_color', '#fff' );

	$display_lp_faq_section = get_theme_mod( 'display_faq_section', '' );
	$lp_faq_title_color = get_theme_mod( 'faq_title_color', '#000c15' );
	$lp_faq_sub_title_color = get_theme_mod( 'faq_sub_title_color', '#303030' );
	$lp_faq_section_background_color = get_theme_mod( 'faq_section_background_color', '#fff' );
	$lp_faq_section_text_color = get_theme_mod( 'faq_section_text_color', '#303030' );
	$lp_faq_section_q_icon_color = get_theme_mod( 'faq_section_q_icon_color', '#9b8d77' );
	$lp_faq_section_a_icon_color = get_theme_mod( 'faq_section_a_icon_color', '#b5b5b5' );

	$display_postscript_section = get_theme_mod( 'display_postscript_section', '' );
	$postscript_section_layout_type = get_theme_mod( 'postscript_section_layout_type', 'postscript_right' );
	$postscript_section_title_color = get_theme_mod( 'postscript_section_title_color', '#000c15' );
	$postscript_section_background_color = get_theme_mod( 'postscript_section_background_color', '#f8f8f8' );
	$postscript_section_text_color = get_theme_mod( 'postscript_section_text_color', '#303030' );
	$postscript_section_btn_background_color = get_theme_mod( 'postscript_section_btn_background_color', '#9b8d77' );
	$postscript_section_btn_text_color = get_theme_mod( 'postscript_section_btn_text_color', '#fff' );

	$display_mobile_cta_section = get_theme_mod( 'display_mobile_cta_section', '' );
	$mobile_cta_section_background_color_1 = get_theme_mod( 'mobile_cta_section_background_color_1', '#9b8d77' );
	$mobile_cta_section_text_color_1 = get_theme_mod( 'mobile_cta_section_text_color_1', '#fff' );
	$mobile_cta_section_background_color_2 = get_theme_mod( 'mobile_cta_section_background_color_2', '#a29581' );
	$mobile_cta_section_text_color_2 = get_theme_mod( 'mobile_cta_section_text_color_2', '#fff' );
	$mobile_cta_section_background_color_3 = get_theme_mod( 'mobile_cta_section_background_color_3', '#9b8d77' );
	$mobile_cta_section_text_color_3 = get_theme_mod( 'mobile_cta_section_text_color_3', '#fff' );
	/*--page custom css--*/
	$emanon_custom_css_setting = post_custom( 'emanon_custom_css_setting' );
	/*--general panel color scheme--*/
	if ( $color_scheme = get_theme_mod( 'color_scheme', '' ) ) {
	$colors = explode( ",", $color_scheme );
	$main_color = $colors[0];
	$link_color = $colors[1];
	$link_hover = $colors[2];
	}
?>
<style>
/*---main color--*/
#gnav,.global-nav li ul li,.mb-horizontal-nav{background-color:<?php echo $main_color; ?>;}
.fa,.required,.widget-line a{color:<?php echo $main_color; ?>;}
#wp-calendar a{color:<?php echo $main_color; ?>;font-weight: bold;}
.cat-name, .sticky .cat-name{background-color:<?php echo $main_color; ?>;}
.pagination a:hover,.pagination .current{background-color:<?php echo $main_color;?>;border:solid 1px <?php echo $main_color; ?>;}
.wpp-list li a:before{background-color:<?php echo $main_color;?>;}
/*--link color--*/
#gnav .global-nav .current-menu-item > a,#gnav .global-nav .current-menu-item > a .fa,#modal-global-nav-container .current-menu-item a,#modal-global-nav-container .sub-menu .current-menu-item a,.side-widget .current-menu-item a,.mb-horizontal-nav-inner .current-menu-item a,.mb-horizontal-nav-inner .current-menu-item a .fa,.entry-title a:active,.pagination a,.post-nav .fa{color:<?php echo $link_color; ?>;}
.global-nav-default > li:first-child:before, .global-nav-default > li:after{background-color:<?php echo $link_color; ?>;}
.article-body a{color:<?php echo $link_color; ?>;}
.follow-line a{color:<?php echo $main_color; ?>;}
.author-profile-text .author-name a{color:<?php echo $link_color; ?>;}
.recommend-date a {display:block;text-decoration:none;color:#000c15;}
.next-page span{background-color:<?php echo $link_hover; ?>;color:#fff;}
.next-page a span {background-color:#fff;color:<?php echo $link_color; ?>;}
.comment-page-link .page-numbers{background-color:#fff;color:<?php echo $link_color; ?>;}
.comment-page-link .current{background-color:<?php echo $link_hover; ?>;color:#fff;}
.side-widget li a:after{color:<?php echo $link_color; ?>;}
blockquote a, .box-default a, .box-info a{color:<?php echo $link_color; ?>;}
.follow-user-url a:hover .fa{color:<?php echo $link_color; ?>;}
.popular-post-rank{border-color:<?php echo $link_color; ?> transparent transparent transparent;}
/*--link hover--*/
a:hover,.global-nav a:hover,.side-widget a:hover,.side-widget li a:hover:before,#wp-calendar a:hover,.entry-title a:hover,.footer-follow-btn a:hover .fa{color:<?php echo $link_hover; ?>;}
.scroll-nav-inner li:after{background-color:<?php echo $link_hover; ?>;}
.featured-title h2:hover{color:<?php echo $link_hover; ?>;}
.author-profile-text .author-name a:hover{color:<?php echo $link_hover; ?>;}
follow-user-url a:hover .fa{color:<?php echo $link_hover;?>;}
.next-page a span:hover{background-color:<?php echo $link_hover; ?>;color:#fff;}
.comment-page-link .page-numbers:hover{background-color:<?php echo $link_hover; ?>;color:#fff;}
.tagcloud a:hover{border:solid 1px <?php echo $link_hover;?>;color:<?php echo $link_hover; ?>;}
blockquote a:hover, .box-default a:hover, .box-info a:hover{color:<?php echo $link_hover;?>;}
#modal-global-nav-container .global-nav-default li a:hover{color:<?php echo $link_hover;?>;}
.side-widget li a:hover:after{color:<?php echo $link_hover;?>;}
.widget-contact a:hover .fa{color:<?php echo $link_hover;?>;}
#sidebar-cta {border:solid 4px <?php echo $link_hover; ?>;}
.popular-post li a:hover .popular-post-rank{border-color:<?php echo $link_hover; ?> transparent transparent transparent;}
/*--btn color--*/
.btn-more{background-color:<?php echo $btn_background_color; ?>;border:solid 1px <?php echo $btn_background_color; ?>;}
.btn a{background-color:<?php echo $btn_background_color; ?>;color:<?php echo $btn_text_color; ?>;}
.btn a:hover{color:<?php echo $btn_text_color; ?>;}
.btn-border{display:block;padding:8px 16px;border:solid 1px <?php echo $btn_background_color; ?>;}
.btn-border .fa{color:<?php echo $btn_background_color; ?>;}
input[type=submit]{background-color:<?php echo $btn_background_color; ?>;color:<?php echo $btn_text_color; ?>;}
/* gutenberg File */
.wp-block-file .wp-block-file__button{display:inline-block;padding:8px 32px!important;border-radius:4px!important;line-height:1.5!important;border-bottom:solid 3px rgba(0,0,0,0.2)!important;background-color:#9b8d77!important;color:#fff!important;font-size:16px!important}
/* gutenberg button */
.wp-block-button a{text-decoration:none;}
.wp-block-button:not(.is-style-outline) a{color:#fff;}
.wp-block-button:not(.is-style-outline) .wp-block-button__link{background-color:<?php echo $link_color; ?>;}
.wp-block-button.is-style-outline: .wp-block-button__link:not(.has-text-color){color:<?php echo $link_color; ?>;}
.wp-block-button.is-style-outline:hover .wp-block-button__link:not(.has-text-color){color:<?php echo $link_color; ?>;}
/* gutenberg Media & Text */
.wp-block-media-text p{	line-height:1;margin-bottom:16px;}
/* gutenberg pullquote */
.wp-block-pullquote blockquote{margin:0!important;border:none!important;quotes:none!important;background-color:inherit!important;}
.wp-block-pullquote{border-top:3px solid #e2e5e8;border-bottom:3px solid #e2e5e8;color:#303030;}
/*--header-*/
.header-area-height{height:<?php echo $mobile_header_area_height; ?>px;}
.header-brand {line-height:<?php echo $mobile_header_area_height; ?>px;}
.header,.header-area-height-line #gnav{background-color:<?php echo $header_background_color; ?>;}
<?php if ( $header_tagline_background_color == '#f8f8f8' ): ?>
.top-bar{background-color:<?php echo $header_tagline_background_color; ?>;}
<?php else: ?>
.top-bar{background-color:<?php echo $header_tagline_background_color; ?>;border-bottom:solid 1px <?php echo $header_tagline_background_color; ?>;}
<?php endif; ?>
.site-description {color:<?php echo $header_tagline_text_color; ?>}
.header-table .site-description{line-height:1.5;font-size:<?php echo $header_tagline_font_size; ?>px;}
.header-site-name a{color:<?php echo $header_site_title_color; ?>}
.header-site-name a:hover{color:<?php echo $link_hover; ?>;}
<?php if ( is_mobile() ): ?>
.header-site-name a{font-size:<?php echo $header_sitename_font_size_mobile; ?>px;}
<?php endif; ?>
.header-logo img, .modal-header-logo img{max-height:<?php echo $header_logo_height_mobile; ?>px;}
.global-nav-line li a{color:<?php echo $global_nav_color; ?>;}
#mb-scroll-nav .header-site-name a{color:<?php echo $header_site_title_color; ?>;font-size:<?php echo $header_sitename_font_size_mobile; ?>px;}
#mb-scroll-nav .header-site-name a:hover{color:<?php echo $link_hover; ?>;}
@media screen and ( min-width: 768px ){
.header-site-name a{font-size:<?php echo $header_sitename_font_size_pc; ?>px;}
.header-area-height,.header-widget{height:<?php echo $header_area_height; ?>px;}
.header-brand {line-height:<?php echo $header_area_height; ?>px;}
}
@media screen and ( min-width: 992px ){
.header-logo img{max-height:<?php echo $header_logo_height; ?>px;}
}
<?php if ( $header_background_image || $mobile_header_background_image ): ?>
.top-bar{background-color:inherit;border-bottom:none;}
.header,.header-area-height-line #gnav{background-color:inherit;}
<?php endif; ?>
<?php if ( $header_background_image && $mobile_header_background_image ): ?>
#header-wrapper{background-image:url(<?php echo $mobile_header_background_image; ?>);background-position: center;background-size:cover;}
@media screen and ( min-width: 768px ){
#header-wrapper{background-image:url(<?php echo $header_background_image; ?>);}
}
<?php endif; ?>
<?php if ( $header_background_image && !$mobile_header_background_image ): ?>
#header-wrapper{background-image:url(<?php echo $header_background_image; ?>);background-position: center;background-size:cover;}
<?php endif; ?>
<?php if ( $display_header_cta ): ?>
/*--header cta-*/
.header-cta-tell .fa{height:<?php echo $header_tel_icon_height; ?>px;font-size:<?php echo $header_tel_font_size; ?>px;color:<?php echo $header_cta_icon_color; ?>;}
.header-cta-tell .tell-number{font-size:<?php echo $header_tel_font_size; ?>px;color:<?php echo $header_cta_tell_color; ?>;}
.header-cta-tell .tell-text{color:<?php echo $header_cta_text_color; ?>;}
<?php if ( $display_header_cta_type == 'tel' || 'mail' ): ?>
.header-phone{position:absolute;top:50%;right:40px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.header-phone .fa{font-size:42px;font-size:4.2rem;color:<?php echo $header_cta_icon_color; ?>;}
.header-mail{position:absolute;top:50%;right:40px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.header-mail .fa{font-size:42px;font-size:4.2rem;color:<?php echo $header_cta_icon_color; ?>;}
<?php endif; ?>
<?php if ( $display_header_cta_type == 'tel_mail' ): ?>
.header-phone{position:absolute;top:50%;right:40px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.header-phone .fa{font-size:42px;font-size:4.2rem;color:<?php echo $header_cta_icon_color; ?>;}
.header-mail{position:absolute;top:50%;right:88px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.header-mail .fa{font-size:42px;font-size:4.2rem;color:<?php echo $header_cta_icon_color; ?>;}
<?php endif; ?>
@media screen and ( min-width: 768px ){
.header-phone {display: none;}
.header-mail{right:46px;}
}
@media screen and ( min-width: 992px ){
.header-cta ul {display: block; text-align: right;line-height:<?php echo $header_area_height; ?>px;}
.header-cta li {display: inline-table;vertical-align: middle;}
.header-cta-btn a{background-color:<?php echo $header_cta_btn_background_color;?>;color:<?php echo $header_cta_btn_text_color; ?>;}
.header-mail{display: none;}
}
<?php endif; ?>
<?php if ( is_front_page() && $header_info_front_page || is_home() && $header_info_front_page || is_single() && $header_info_post || is_page() && $header_info_page || is_archive() && $header_info_archive || is_search() && $header_info_archive || is_404() && $header_info_archive ): ?>
/*--header cta-*/
.header-info a{background:<?php echo $header_info_background_color; ?>;color:<?php echo $header_info_text_color; ?>;}
.header-info a .fa{color:<?php echo $header_info_text_color; ?>;}
.header-info a:hover{background:<?php echo $header_info_background_hover_color; ?>;color:<?php echo $header_info_text_hover_color; ?>;}
.header-info a:hover .fa{color:<?php echo $header_info_text_hover_color; ?>;}
<?php endif; ?>
<?php if ( $global_nav_design_type == 'tracking' || $lp_header_cta_type == 'tracking' ): ?>
/*--nav fixed--*/
.nav-fixed{display:block;position:fixed;top:0;width:100%;background-color:<?php echo $header_background_color; ?>;box-shadow:0px 0px 2px 1px rgba(0, 0, 0, 0.1);z-index:999;}
#scroll-nav .header-site-name a{color:<?php echo $header_site_title_color; ?>;font-size:<?php echo $tracking_header_sitename_font_size; ?>px;}
#scroll-nav .header-site-name a:hover{color:<?php echo $link_hover; ?>;}
#scroll-nav .header-logo img{max-height:<?php echo $tracking_header_logo_height; ?>px;}
.global-nav-scroll > li > a{color:<?php echo $tracking_header_font_color; ?>}
@media screen and ( min-width: 768px ){
.nav-fixed{display:block;position:fixed;top:0;width:100%;background-color:<?php echo $tracking_header_background_color; ?>;}
#scroll-nav .header-site-name a{color:<?php echo $tracking_header_font_color; ?>;}
}
<?php endif; ?>
<?php if ( $global_nav_design_type == 'tracking' ): ?>
/*--widget fixed--*/
.widget-fixed{margin-top:64px;}
<?php endif; ?>
/*--modal menu--*/
.modal-menu{position:absolute;top:50%;right:0;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.modal-menu .modal-gloval-icon{float:left;margin-bottom:6px;}
.modal-menu .slicknav_no-text{margin:0;}
.modal-menu .modal-gloval-icon-bar{display:block;width:32px;height:3px;border-radius:4px;-webkit-transition:all 0.2s;transition:all 0.2s;}
.modal-menu .modal-gloval-icon-bar + .modal-gloval-icon-bar{margin-top:6px;}
.modal-menu .modal-menutxt{display:block;text-align:center;font-size:12px;font-size:1.2rem;color:<?php echo $hamburger_menu_text_color; ?>;}
.modal-menu .modal-gloval-icon-bar{background-color:<?php echo $hamburger_menu_color; ?>;}
#modal-global-nav-container{background-color:<?php echo $modal_global_nav_background_color; ?>;}
#modal-global-nav-container .modal-header-site-name a{color:<?php echo $modal_global_nav_title_color; ?>;}
#modal-global-nav-container .global-nav li ul li{background-color:<?php echo $modal_global_nav_background_color; ?>;}
#modal-global-nav-container .global-nav-default li a{color:<?php echo $modal_global_nav_font_color; ?>;}
<?php if ( $display_mb_scroll_arrow && wp_is_mobile() ): ?>
/*--mb scroll arrow -*/
.mb-scroll-arrow > ul:after{position:absolute;right:6px;top:0;font-family:fontawesome;content:"\f105";font-size:30px;font-size:3rem;text-shadow:0 0 6px rgba(0,0,0,0.6);color:#fff;opacity:0.9;z-index:1;-webkit-animation:mb-scrollnav-transform 1.8s infinite ease-in-out;animation:mb-scrollnav-transform 1.8s infinite ease-in-out}
<?php endif; ?>
<?php if ( $display_search_keywords_lists_pc || $display_search_keywords_lists_mb ): ?>
.search-keywords-lists{background-color:<?php echo $search_keywords_background_color; ?>;}
.search-keywords-label, .search-keywords-label .fa{color:<?php echo $search_keywords_label_color; ?>;}
.search-keywords-lists li a{color:<?php echo $search_keywords_text_color; ?>;}
.search-keywords-lists li a:hover{color:<?php echo $search_keywords_text_hover_color; ?>;}
<?php endif; ?>
<?php if ( $display_mb_scroll_arrow_sk && wp_is_mobile() ): ?>
/*--search keywords lists -*/
.mb-scroll-arrow-sk > ul:after{position:absolute;right:6px;top:0;font-family:fontawesome;content:"\f105";font-size:30px;font-size:3rem;text-shadow:0 0 6px rgba(0,0,0,0.6);color:#fff;opacity:0.9;z-index:1;-webkit-animation:mb-scrollnav-transform 1.8s infinite ease-in-out;animation:mb-scrollnav-transform 1.8s infinite ease-in-out}
<?php endif; ?>
<?php if ( $firstview_type == 'slider' ): ?>
/* --slider section--*/
.slider img{display:block;width:100%;}
.slider .bx-viewport{-webkit-transform:translatez(0);-moz-transform:translatez(0);-ms-transform:translatez(0);-o-transform:translatez(0);transform:translatez(0);}
.slider .bx-pager,.slider .bx-controls-auto{position:absolute;bottom:-36px;width:100%;z-index:300;}
.slider .bx-pager{text-align:center;font-size:.85em;font-family:Arial;font-weight:bold;color:#333;}
.slider .bx-pager .bx-pager-item,
.slider .bx-controls-auto .bx-controls-auto-item{display:inline-block;}
.slider .bx-pager.bx-default-pager a{background:#777;text-indent:-9999px;display:block;width:10px;height:10px;margin:0 5px;outline:0;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}
.slider .bx-pager.bx-default-pager a:hover,
.slider .bx-pager.bx-default-pager a.active{background:#000;}
.slider .bx-prev{left:16px;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) no-repeat 0 -32px;}
.slider .bx-next{right:16px;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) no-repeat -43px -32px;}
.slider .bx-prev:hover{background-position:0 0;}
.slider .bx-next:hover{background-position:-43px 0;}
.slider .bx-controls-direction a{position:absolute;top:50%;margin-top:-16px;outline:0;width:32px;height:32px;text-indent:-9999px;z-index:888;}
.slider .bx-controls-direction a.disabled{display:none;}
.slider .bx-controls-auto{text-align:center;}
.slider .bx-controls-auto .bx-start{display:block;text-indent:-9999px;width:10px;height:11px;outline:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) -86px -11px no-repeat;margin:0 3px;}
.slider .bx-controls-auto .bx-start:hover,
.slider .bx-controls-auto .bx-start.active{background-position:-86px 0;}
.slider .bx-controls-auto .bx-stop{display:block;text-indent:-9999px;width:9px;height:11px;outline:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) -86px -44px no-repeat;margin:0 3px;}
.slider .bx-controls-auto .bx-stop:hover,
.slider .bx-controls-auto .bx-stop.active{background-position:-86px -33px;}
.slider .bx-controls.bx-has-controls-auto.bx-has-pager .bx-pager{text-align:left;width:80%;}
.slider .bx-controls.bx-has-controls-auto.bx-has-pager .bx-controls-auto{right:0;width:35px;}
.slider .bx-caption{position:absolute;bottom:0;left:0;background:#505050;background:rgba(80, 80, 80, 0.75);width:100%;}
.slider .bx-caption span{color:#fff;font-family:Arial;display:block;font-size:.85em;padding:10px;}
.slider:before{position:absolute;top:0;left:0;right:0;bottom:0;background:linear-gradient(<?php echo $slider_background_color_degree; ?>deg, <?php echo $slider_background_color_start; ?>, <?php echo $slider_background_color_end; ?>)fixed;opacity: <?php echo $slider_image_opacity; ?>;content: "";z-index:100;}
.slider #bxslider li{height:<?php echo intval( $slider_image_height ); ?>px;background-position: center;background-size: cover;background-repeat:no-repeat;}
.slider-btn{margin:32px 0 0 0;}
<?php if ( $slider_image_responsive ): ?>
.slider #bxslider li{height:inherit;}
.slider-btn{margin:16px 0 0 0;}
<?php endif; ?>
.slider-title{color:<?php echo $slider_image_title_color;?>;<?php if( !$slider_image_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.slider-sub-title{color:<?php echo $slider_image_sub_title_color;?>;<?php if( !$slider_image_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.slider-btn .btn{border:solid 1px <?php echo $slider_btn_background_color; ?>;background-color:<?php echo $slider_btn_background_color; ?>;}
.slider-btn-bg a{border-bottom:none;border-radius:0;background-color:<?php echo $slider_btn_background_color; ?>;color:<?php echo $slider_btn_text_color; ?>;}
.slider-btn-bg a:hover{background-color:<?php echo $slider_btn_background_color; ?>;border-radius:inherit;-webkit-transform:inherit;transform:inherit;color:<?php echo $slider_btn_text_color; ?>;}
.slider-btn-bg:before{content:'';position:absolute;border:solid 3px <?php echo $slider_btn_background_color; ?>;top:0;right:0;bottom:0;left:0;-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out;z-index:-1;}
.slider-btn-bg:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px;}
<?php if ( $slider_display_overlay == 'pattern_dots' ): ?>
.slider-overlay {position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $slider_display_overlay == 'pattern_diamond' ): ?>
.slider-overlay {position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
@media screen and ( max-width: 767px ){
.slider-message{right:0;left:0;}
}
@media screen and ( min-width: 768px ){
.slider-btn{margin:40px 0 24px 0}
.bx-wrapper .bx-pager,.bx-wrapper .bx-controls-auto{bottom:8px;}
<?php if ( $slider_message_layout_type == 'slider_message_left' ): ?>
.slider-message{left:0;width:70%;}
<?php elseif( $slider_message_layout_type == 'slider_message_center' ): ?>
.slider-message{right:0;left:0;}
<?php elseif( $slider_message_layout_type == 'slider_message_right' ): ?>
.slider-message{right:0;width:70%;}
<?php endif; ?>
}
<?php endif; ?>
<?php if ( $firstview_type == 'slider-content' ): ?>
/*--slider content section--*/
.bx-wrapper{position:relative;padding:0;}
.bx-wrapper img{display:block;max-width:100%;}
.bx-wrapper .bx-viewport{-webkit-transform:translatez(0);-moz-transform:translatez(0);-ms-transform:translatez(0);-o-transform:translatez(0);transform:translatez(0);}
.bx-wrapper .bx-pager,.bx-wrapper .bx-controls-auto{position:absolute;bottom:-36px;width:100%;z-index:300;}
@media screen and ( min-width: 768px ){
.bx-wrapper .bx-pager,.bx-wrapper .bx-controls-auto{bottom:8px;}
}
.bx-wrapper .bx-pager{text-align:center;font-size:.85em;font-family:Arial;font-weight:bold;color:#333;}
.bx-wrapper .bx-pager .bx-pager-item,
.bx-wrapper .bx-controls-auto .bx-controls-auto-item{display:inline-block;}
.bx-wrapper .bx-pager.bx-default-pager a{background:#777;text-indent:-9999px;display:block;width:10px;height:10px;margin:0 5px;outline:0;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}
.bx-wrapper .bx-pager.bx-default-pager a:hover,
.bx-wrapper .bx-pager.bx-default-pager a.active{background:#000;}
.bx-wrapper .bx-prev{left:16px;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) no-repeat 0 -32px;}
.bx-wrapper .bx-next{right:16px;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) no-repeat -43px -32px;}
.bx-wrapper .bx-prev:hover{background-position:0 0;}
.bx-wrapper .bx-next:hover{background-position:-43px 0;}
.bx-wrapper .bx-controls-direction a{position:absolute;top:50%;margin-top:-16px;outline:0;width:32px;height:32px;text-indent:-9999px;z-index:999;}
.bx-wrapper .bx-controls-direction a.disabled{display:none;}
.bx-wrapper .bx-controls-auto{text-align:center;}
.bx-wrapper .bx-controls-auto .bx-start{display:block;text-indent:-9999px;width:10px;height:11px;outline:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) -86px -11px no-repeat;margin:0 3px;}
.bx-wrapper .bx-controls-auto .bx-start:hover,
.bx-wrapper .bx-controls-auto .bx-start.active{background-position:-86px 0;}
.bx-wrapper .bx-controls-auto .bx-stop{display:block;text-indent:-9999px;width:9px;height:11px;outline:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/slider/controls.png) -86px -44px no-repeat;margin:0 3px;}
.bx-wrapper .bx-controls-auto .bx-stop:hover,
.bx-wrapper .bx-controls-auto .bx-stop.active{background-position:-86px -33px;}
.bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-pager{text-align:left;width:80%;}
.bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-controls-auto{right:0;width:35px;}
.bx-wrapper .bx-caption{position:absolute;bottom:0;left:0;background:#505050;background:rgba(80, 80, 80, 0.75);width:100%;}
.bx-wrapper .bx-caption span{color:#fff;font-family:Arial;display:block;font-size:0.85em;padding:10px;}
#bxslider li{height:<?php echo intval( $slider_content_height ); ?>px;background-position: center;background-size: cover;background-repeat: no-repeat;}
#bxslider li:before{position:absolute;top:0;left:0;right:0;bottom:0;background:linear-gradient(<?php echo $slider_content_background_color_degree; ?>deg, <?php echo $slider_content_background_color_start; ?>, <?php echo $slider_content_background_color_end; ?>)fixed;opacity: <?php echo $slider_content_image_opacity; ?>;content: "";z-index: 100;}
.slider-post-category a{background-color:<?php echo $main_color; ?>;}
.slider-content-btn-bg a{border-bottom:none;border-radius:0;background-color:transparent;color:<?php echo $slider_content_text_color; ?>;}
.slider-content-btn-bg a:hover{border-radius:inherit;-webkit-transform:inherit;transform:inherit;color:<?php echo $slider_content_text_color; ?>;}
.slider-content-btn-bg:before{content:'';position:absolute;border:solid 2px <?php echo $slider_content_text_color; ?>;top:0;right:0;bottom:0;left:0;-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out;z-index:-1;}
.slider-content-btn-bg:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px;}
.slider-post-title a,.slider-post-meta .fa,.slider-post-meta,.slider-post-meta a{color:<?php echo $slider_content_text_color; ?>;<?php if( !$slider_content_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.slider-post-title a:hover,.slider-post-meta a:hover{color:<?php echo $link_hover; ?>;}
.slider-content-btn .btn a:hover{background-color:transparent;}
<?php if ( $slider_content_display_overlay == 'pattern_dots' ): ?>
.slider-overlay {position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $slider_content_display_overlay == 'pattern_diamond' ): ?>
.slider-overlay {position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
<?php endif; ?>
<?php if ( $firstview_type == 'featured' ): ?>
/*--featured section--*/
.featured{position:relative;overflow:hidden;background-color:<?php echo $featured_section_background_color; ?>;}
.featured:before{position:absolute;content:"";top:0;right:0;bottom:0;left:0;background-image:url(<?php echo $featured_image; ?>);background-position:center;background-size:cover;background-repeat:no-repeat;opacity:<?php echo $featured_background_image_opacity; ?>;-webkit-filter:blur(<?php echo $featured_image_blur; ?>px);filter: blur(<?php echo $featured_image_blur; ?>px);-webkit-transform: translate(0);transform: translate(0);}
<?php if ( $featured_display_overlay == 'pattern_dots' ): ?>
.featured-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $featured_display_overlay == 'pattern_diamond' ): ?>
.featured-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
<?php endif; ?>
<?php if ( $firstview_type == 'video' && !is_paged() ): ?>
/*--video section--*/
.home .header{background-color:inherit;box-shadow:none;}
.home .top-bar{background-color:inherit;border-bottom:none;}
.home .header-site-name a{color:<?php echo $video_header_site_title_color; ?>;}
.home .header-site-name a:hover{color:<?php echo $link_hover; ?>;}
.home .site-description{color:<?php echo $video_header_tagline_text_color; ?>}
.home #header-wrapper{top:0}
.home #header-wrapper,.home .default-nav{position:absolute;left:0;width:100%;z-index:300}
.home .default-nav{bottom:0}
.home .header-area-height-line #gnav{background-color:inherit}
.home .mb-horizontal-nav{display:none}
.video-title{color:<?php echo $video_title_color;?>;<?php if( !$video_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.video-sub-title{color:<?php echo $video_sub_title_color;?>;<?php if( !$video_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.video-btn-bg a{border-bottom:none;border-radius:0;background-color:<?php echo $video_btn_background_color; ?>;color:<?php echo $video_btn_text_color; ?>;}
.video-btn-bg a:hover{background-color:<?php echo $video_btn_background_color; ?>;border-radius:inherit;-webkit-transform:inherit;transform:inherit;color:<?php echo $video_btn_text_color; ?>;}
.video-btn-bg:before{content:'';position:absolute;border:solid 3px <?php echo $video_btn_background_color; ?>;top:0;right:0;bottom:0;left:0;-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out;z-index:-1;}
.video-btn-bg:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px}
.video-down-icon .fa{color:<?php echo $video_down_icon_color;?>;}
.video-section:before{position:absolute;top:0;left:0;right:0;bottom:0;background:linear-gradient(<?php echo $video_background_color_degree; ?>deg, <?php echo $video_background_color_start; ?>, <?php echo $video_background_color_end; ?>)fixed;opacity: <?php echo $video_background_color_opacity; ?>;content: "";width:100%;height: 100%;;z-index:100;}
<?php if ( $video_display_overlay == 'pattern_dots' ): ?>
.slider-overlay {position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $video_display_overlay == 'pattern_diamond' ): ?>
.slider-overlay {position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
<?php if( wp_is_mobile() ) :?>
.video-section{background-image:url(<?php echo esc_url( $substitution_image ); ?>);background-position:center center;background-repeat:no-repeat;background-size:cover;}
<?php endif; ?>
<?php endif; ?>
<?php if ( $firstview_type == 'eyecatch' ): ?>
/*--eyecatch section--*/
.header-eyecatch{position:relative;padding:<?php echo intval( $eyecatch_container_padding ); ?>px 8px;}
.header-eyecatch:before{position:absolute;top:0;left:0;right:0;bottom:0;background:linear-gradient(<?php echo $eyecatch_background_color_degree; ?>deg, <?php echo $eyecatch_background_color_start; ?>, <?php echo $eyecatch_background_color_end; ?>)fixed;opacity:<?php echo $eyecatch_background_opacity; ?>;content: "";z-index:100;}
.header-eyecatch-message h2{color:<?php echo $eyecatch_image_title_color;?>;<?php if( !$eyecatch_image_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.header-eyecatch-message p{color:<?php echo $eyecatch_image_sub_title_color;?>;<?php if( !$eyecatch_image_text_shadow ) { ?>text-shadow:none;<?php } ?>}
<?php if ( $eyecatch_btn_url ): ?>
.header-eyecatch-btn-bg a{border-bottom:none;border-radius:0;background-color:<?php echo $eyecatch_btn_background_color; ?>;color:<?php echo $eyecatch_btn_text_color; ?>;}
.header-eyecatch-btn-bg a:hover{background-color:<?php echo $eyecatch_btn_background_color; ?>;border-radius:inherit;-webkit-transform:inherit;transform:inherit;color:<?php echo $eyecatch_btn_text_color; ?>;}
.header-eyecatch-btn-bg:before{content:'';position:absolute;border:solid 3px <?php echo $eyecatch_btn_background_color; ?>;top:0;right:0;bottom:0;left:0;-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out;z-index:-1;}
.header-eyecatch-btn-bg:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px;}
<?php endif; ?>
<?php if ( $eyecatch_image ): ?>
@media screen and ( max-width: 767px ){
.header-eyecatch-message{margin:16px 0 0 0;}
}
<?php endif; ?>
<?php if ( $eyecatch_layout_reverse ): ?>
@media screen and ( max-width: 767px ){
.header-eyecatch-message{margin:0 0 16px 0;}
}
<?php endif; ?>
<?php if ( $eyecatch_display_overlay == 'pattern_dots' ): ?>
.header-eyecatch-overlay{position:absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $eyecatch_display_overlay == 'pattern_diamond' ): ?>
.header-eyecatch-overlay{position:absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
<?php endif; ?>
/*--slick slider for front page & LP--*/
.slick-slider{-moz-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:rgba(0,0,0,0)}
.slick-list,.slick-slider{display:block;position:relative}
.slick-list{overflow:hidden;margin:0;padding:0}
.slick-list:focus{outline:0}
.slick-list.dragging{cursor:pointer;cursor:hand}
.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.slick-track{display:block;position:relative;top:0;left:0;margin:40px 0}
.slick-track:after,.slick-track:before{display:table;content:''}
.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}
.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir='rtl']
.slick-slide{float:right}
.slick-slide.slick-loading img{display:none}
.slick-slide.dragging img{pointer-events:none}
.slick-initialized .slick-slide{display:block}
.slick-loading .slick-slide{visibility:hidden}
.slick-vertical .slick-slide{display:block;height:auto;border:solid 1px transparent}
.slick-arrow.slick-hidden{display:none}
.slick-next:before,.slick-prev:before{content:""}
.slick-next{display:block;position:absolute;top:50%;right:-11px;padding:0;width:16px;height:16px;border-color:<?php echo $link_color;?>;border-style:solid;border-width:3px 3px 0 0;background-color:transparent;cursor:pointer;text-indent:-9999px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}
.slick-prev{display:block;position:absolute;top:50%;left:-11px;padding:0;width:16px;height:16px;border-color:<?php echo $link_color;?>;border-style:solid;border-width:3px 3px 0 0;background-color:transparent;cursor:pointer;text-indent:-9999px;-webkit-transform:rotate(-135deg);-moz-transform:rotate(-135deg);-ms-transform:rotate(-135deg);-o-transform:rotate(-135deg);transform:rotate(-135deg)}
@media screen and ( min-width: 768px ){
.slick-next{right:-32px;width:32px;height:32px;}
.slick-prev{left:-32px;width:32px;height:32px;}
}
<?php if ( $display_tab_list ): ?>
/*--entry tab btn--*/
.tab-area {color: <?php echo $tab_text_color; ?>;}
.tab-area > div {background: <?php echo $tab_color; ?>;}
.tab-area > div:hover{background:<?php echo $tab_active_color; ?>;}
.tab-area > div.nav-tab-active, .tab-area > div.nav-tab-active:hover{background: <?php echo $tab_active_color; ?>;}
.tab-area > div.nav-tab-active:after{border-top:8px solid <?php echo $tab_active_color; ?>;}
.tab-area > div.nav-tab-active:hover:after{border-top:8px solid <?php echo $tab_active_color; ?>;}
.tab-btn-bg a {background-color:<?php echo $tab_btn_background_color; ?>;color:<?php echo $tab_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'none' ): ?>
/*--entry section title style--*/
/*---無し--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0;}
.entry-header{margin-bottom:0;}
.entry-header h2{padding:8px 0;}
.archive-title{margin-bottom:0;}
.archive-title h1{padding:8px 0;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'background' ): ?>
/*---背景--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;color:#fff;}
.entry-header h2{padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;color:#fff;}
.archive-title h1{padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;color:#fff;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'balloon' ): ?>
/*---吹き出し--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{position:relative;margin-bottom:32px;padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;border-radius:4px;color:#fff;}
.front-top-widget-box h2:after, .front-bottom-widget-box h2:after{position:absolute;top:100%;left: 30px;content:'';width:0;height:0;border:solid 10px transparent;border-top:15px solid <?php echo $main_color; ?>;}
.entry-header h2{position:relative;margin-bottom:32px;padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;border-radius:4px;color:#fff;}
.entry-header h2:after{position:absolute;top:100%;left: 30px;content:'';width:0;height:0;border:solid 10px transparent;border-top:15px solid <?php echo $main_color; ?>;}
.archive-title h1{position:relative;margin-bottom:32px;padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;border-radius:4px;color:#fff;}
.archive-title h1:after{position:absolute;top:100%;left: 30px;content:'';width:0;height:0;border:solid 10px transparent;border-top:15px solid <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'border-left-background' ): ?>
/*---左ボーダー＋背景--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background-color:#f0f0f0;}
.entry-header h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background-color:#f0f0f0;}
.archive-title h1{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background-color:#f0f0f0;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'border-left' ): ?>
/*---左ボーダー--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;}
.entry-header h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;}
.archive-title h1{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'border-left-bottom' ): ?>
/*---左ボーダー+下ボーダ--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;border-bottom:solid 2px #e2e5e8;}
.entry-header h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;border-bottom:solid 2px #e2e5e8;}
.archive-title h1{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;border-bottom:solid 2px #e2e5e8;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'border-bottom' ): ?>
/*--下ボーダー--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0;border-bottom:solid 2px <?php echo $main_color; ?>;}
.entry-header h2{padding:8px 0;border-bottom:solid 2px <?php echo $main_color; ?>;}
.archive-title h1{padding:8px 0;border-bottom:solid 2px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'border-bottom-two' ): ?>
/*---下ボーダー（2カラー）--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{margin-bottom: -1px;}
.front-top-widget-box h2 > span, .front-bottom-widget-box h2 > span{display:inline-block;padding:0 4px 4px 0;border-bottom:solid 1px <?php echo $main_color; ?>;}
.entry-header {border-bottom:solid 1px #e2e5e8;}
.entry-header h2{margin-bottom: -1px;}
.entry-header h2 > span{display:inline-block;padding:0 4px 4px 0;border-bottom:solid 1px <?php echo $main_color; ?>;}
.archive-title {border-bottom:solid 1px #e2e5e8;}
.archive-title h1{margin-bottom: -1px;}
.archive-title h1 > span{display:inline-block;padding:0 4px 4px 0;border-bottom:solid 1px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'border-left-background-stripe' ): ?>
/*---左ボーダー＋背景 ストライプ--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
.entry-header h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
.archive-title h1{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
<?php if ( $entry_section_title_style == 'border-top-bottom-stripe' ): ?>
/*--上下ボーダー ストライプ--*/
.front-top-widget-box h2, .front-bottom-widget-box h2{padding:8px 0 8px 16px;border-top:solid 2px <?php echo $main_color; ?>;border-bottom:solid 2px <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
.entry-header h2{padding:8px 0 8px 16px;border-top:solid 2px <?php echo $main_color; ?>;border-bottom:solid 2px <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
.archive-title h1{padding:8px 0 8px 16px;border-top:2px solid <?php echo $main_color; ?>;border-bottom:2px solid <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
<?php if( $post_thumbnail_layout == 'normal' ): ?>
/*--投稿ページ アイキャッチ画像--*/
.article-thumbnail img{padding:0 16px;}
@media screen and (min-width: 992px){
.article-thumbnail img{padding:0 24px;}
}
<?php endif; ?>
<?php if( $post_thumbnail_layout == 'no_display' ): ?>
/*--投稿ページ ヘッダー--*/
@media screen and (min-width: 992px){
.article-header{padding:16px 72px;}
}
<?php endif; ?>
<?php if( $page_thumbnail_layout == 'normal' ): ?>
/*--固定ページ アイキャッチ画像--*/
.content-page .article-thumbnail img{padding:0 16px;}
@media screen and (min-width: 992px){
.content-page .article-thumbnail img{padding:0 24px;}
}
<?php endif; ?>
<?php if( $page_thumbnail_layout == 'no_display' ): ?>
/*--固定ページ ヘッダー--*/
@media screen and (min-width: 992px){
.content-page .article-header{padding:16px 72px;}
}
<?php endif; ?>
/*--h2 style--*/
<?php if ( $h2_style == 'none' ): ?>
/*---無し--*/
.article-body h2{padding:8px 0;}
<?php endif; ?>
<?php if ( $h2_style == 'background' ): ?>
/*---背景--*/
.article-body h2{padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;color:#fff;}
<?php endif; ?>
<?php if ( $h2_style == 'balloon' ): ?>
/*---吹き出し--*/
.article-body h2{position:relative;padding:8px 16px;background-color:<?php echo $main_color; ?>;border-radius:4px;color:#fff;}
.article-body h2:after{position:absolute;top:100%;left: 30px;content:'';width:0;height:0;border:solid 10px transparent;border-top:solid 15px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h2_style == 'border-left-background' ): ?>
/*---左ボーダー＋背景--*/
.article-body h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background-color:#f0f0f0;}
<?php endif; ?>
<?php if ( $h2_style == 'border-left' ): ?>
/*---左ボーダー--*/
.article-body h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h2_style == 'border-left-bottom' ): ?>
/*---左ボーダー+下ボーダ--*/
.article-body h2{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;border-bottom:solid 2px #e2e5e8;}
<?php endif; ?>
<?php if ( $h2_style == 'border-bottom' ): ?>
/*--下ボーダー--*/
.article-body h2{padding:8px 0;border-bottom:solid 2px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h2_style == 'border-bottom-two' ): ?>
/*---下ボーダー（2カラー）--*/
.article-body h2{position:relative;padding:8px 0;border-bottom:solid 2px #ccc;}
.article-body h2:after{position:absolute;bottom:-2px;left: 0;z-index: 2;content: '';width:20%;height:2px;background-color:<?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h2_style == 'border-left-background-stripe' ): ?>
/*---左ボーダー＋背景 ストライプ--*/
.article-body h2{padding:8px 0 8px 12px;border-left:4px solid <?php echo $main_color; ?>;background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
<?php if ( $h2_style == 'border-top-bottom-stripe' ): ?>
/*--上下ボーダー ストライプ--*/
.article-body h2{padding:8px 0 8px 16px;border-top:solid 2px <?php echo $main_color; ?>;border-bottom:solid 2px <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
/*--h3 style--*/
<?php if ( $h3_style == 'none' ): ?>
/*---無し--*/
.article-body h3,.page-bottom-widget h3{padding:6px 0;}
<?php endif; ?>
<?php if ( $h3_style == 'background' ): ?>
/*---背景--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{padding:6px 0 6px 16px;background-color:<?php echo $main_color; ?>;color: #fff;}
<?php endif; ?>
<?php if ( $h3_style == 'balloon' ): ?>
/*---吹き出し--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{position:relative;padding:6px 16px;background-color:<?php echo $main_color; ?>;border-radius:4px;color:#fff;}
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading):after,.page-bottom-widget h3:after{position:absolute;top:100%;left:30px;content:'';width:0;height:0;border:solid 10px transparent;border-top:solid 15px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h3_style == 'border-left-background' ): ?>
/*---左ボーダー＋背景--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{padding:6px 0 6px 12px;border-left:solid 4px <?php echo $main_color; ?>;background-color:#f0f0f0;}
<?php endif; ?>
<?php if ( $h3_style == 'border-left' ): ?>
/*---左ボーダー--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{padding:6px 0 6px 12px;border-left:solid 4px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h3_style == 'border-left-bottom' ): ?>
/*---左ボーダー+下ボーダ--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{padding:6px 0 6px 12px;border-left:solid 4px <?php echo $main_color; ?>;border-bottom:solid 2px #e2e5e8;}
<?php endif; ?>
<?php if ( $h3_style == 'border-bottom' ): ?>
/*--下ボーダー--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{padding:6px 0;border-bottom:solid 2px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h3_style == 'border-bottom-two' ): ?>
/*---下ボーダー（2カラー）--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{position:relative;padding:6px 0;border-bottom:solid 2px #ccc;}
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading):after,.page-bottom-widget h3:after{position:absolute;bottom:-2px;left: 0;z-index: 2;content: '';width:20%;height:2px;background-color:<?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h3_style == 'border-left-background-stripe' ): ?>
/*---左ボーダー＋背景 ストライプ--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
<?php if ( $h3_style == 'border-top-bottom-stripe' ): ?>
/*--上下ボーダー ストライプ--*/
.article-body h3:not(.block-pr-box-heading):not(.block-cta-heading):not(.block-pricing-table-heading):not(.block-member-name):not(.showcase-box-heading),.page-bottom-widget h3{padding:8px 0 8px 16px;border-top:solid 2px <?php echo $main_color; ?>;border-bottom:solid 2px <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
/*--h4 style--*/
<?php if ( $h4_style == 'none' ): ?>
/*---無し--*/
.article-body h4{padding:4px 0;}
<?php endif; ?>
<?php if ( $h4_style == 'background' ): ?>
/*---背景--*/
.article-body h4{padding:4px 0 4px 16px;background-color:<?php echo $main_color; ?>;color: #fff;}
<?php endif; ?>
<?php if ( $h4_style == 'balloon' ): ?>
/*---吹き出し--*/
.article-body h4{position:relative;padding:4px 16px;background-color:<?php echo $main_color; ?>;border-radius:4px;color:#fff;}
.article-body h4:after{position: absolute;top: 100%;left: 30px;content: '';width: 0;height: 0;border:solid 10px transparent;border-top:solid 15px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h4_style == 'border-left-background' ): ?>
/*---左ボーダー＋背景--*/
.article-body h4{padding:4px 0 4px 12px;border-left:solid 4px <?php echo $main_color; ?>;background-color:#f0f0f0;}
<?php endif; ?>
<?php if ( $h4_style == 'border-left' ): ?>
/*---左ボーダー--*/
.article-body h4{padding:4px 0 4px 12px;border-left:solid 4px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h4_style == 'border-left-bottom' ): ?>
/*---左ボーダー+下ボーダ--*/
.article-body h4{padding:4px 0 4px 12px;border-left:solid 4px <?php echo $main_color; ?>;border-bottom:solid 2px #e2e5e8;}
<?php endif; ?>
<?php if ( $h4_style == 'border-bottom' ): ?>
/*--下ボーダー--*/
.article-body h4{padding:4px 0;border-bottom:solid 2px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h4_style == 'border-bottom-two' ): ?>
/*---下ボーダー（2カラー）--*/
.article-body h4{position:relative;padding:4px 0;border-bottom:solid 2px #ccc;}
.article-body h4:after{position:absolute;bottom:-2px;left: 0;z-index: 2;content: '';width:20%;height:2px;background-color:<?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $h4_style == 'border-left-background-stripe' ): ?>
/*---左ボーダー＋背景 ストライプ--*/
.article-body h4{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
<?php if ( $h4_style == 'border-top-bottom-stripe' ): ?>
/*--上下ボーダー ストライプ--*/
.article-body h4{padding:8px 0 8px 16px;border-top:solid 2px <?php echo $main_color; ?>;border-bottom:solid 2px <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
/*--sidebar style--*/
<?php if ( $sidebar_h_style == 'none' ): ?>
/*---無し--*/
.side-widget-title{margin-bottom:0;}
.side-widget-title h3{padding:8px 0;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'background' ): ?>
/*---背景--*/
.side-widget-title h3{padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;color:#fff;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'balloon' ): ?>
/*---吹き出し--*/
.side-widget-title h3{position:relative;padding:8px 0 8px 16px;background-color:<?php echo $main_color; ?>;border-radius:4px;color:#fff;}
.side-widget-title h3:after{position:absolute;top:100%;left: 30px;content:'';width:0;height:0;border:solid 10px transparent;border-top:solid 15px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'border-left-background' ): ?>
/*---左ボーダー＋背景--*/
.side-widget-title h3{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background-color:#f0f0f0;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'border-left' ): ?>
/*---左ボーダー--*/
.side-widget-title h3{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'border-left-bottom' ): ?>
/*---左ボーダー+下ボーダ--*/
.side-widget-title h3{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;border-bottom:2px solid #e2e5e8;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'border-bottom' ): ?>
/*--下ボーダー--*/
.side-widget-title h3{padding:8px 0;border-bottom:solid 2px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'border-bottom-two' ): ?>
/*---下ボーダー（2カラー）--*/
.side-widget-title {border-bottom:1px solid #e2e5e8;}
.side-widget-title h3 {margin-bottom: -1px;}
.side-widget-title span{display:inline-block;padding:0 4px 4px 0;border-bottom:solid 1px <?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'border-left-background-stripe' ): ?>
/*---左ボーダー＋背景 ストライプ--*/
.side-widget-title h3{padding:8px 0 8px 12px;border-left:solid 4px <?php echo $main_color; ?>;background:-webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
<?php if ( $sidebar_h_style == 'border-top-bottom-stripe' ): ?>
/*--上下ボーダー ストライプ--*/
.side-widget-title h3{padding:8px 0 8px 16px;border-top:solid 2px <?php echo $main_color; ?>;border-bottom:solid 2px <?php echo $main_color; ?>;background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);}
<?php endif; ?>
<?php if ( $display_read_more ): ?>
/*--read more--*/
.archive-header{padding:8px 16px 64px 16px;}
.read-more{position:absolute;right: 0;bottom:24px;left:0;text-align:center;}
.read-more .fa{margin:0 0 0 4px;}
.featured-date .read-more,.home .big-column .read-more,.archive .ar-big-column .read-more{position:absolute;right:0;bottom:32px;left:0;}
.home .big-column .btn-mid,.archive .ar-big-column .btn-mid{width: 80%;}
@media screen and ( min-width: 768px ){
.archive-header{padding:8px 16px 72px 16px;}
.home .one-column .read-more,.archive .ar-one-column .read-more,.search .ar-one-column .read-more{position:absolute;right:16px;bottom:20px;left:auto;}
.blog .one-column .read-more,.archive .ar-one-column .read-more,.search .ar-one-column .read-more{position:absolute;right:16px;bottom:20px;left:auto;}
.home .big-column .btn-mid,.archive .ar-big-column .btn-mid,.search .ar-big-column .btn-mid{width:20%;}
.blog .big-column .btn-mid,.archive .ar-big-column .btn-mid,.search .ar-big-column .btn-mid{width:20%;}
.home .one-column .read-more .btn-border,.archive .ar-one-column .read-more .btn-border,.search .ar-one-column .read-more .btn-border{display:inline;}
.blog .one-column .read-more .btn-border,.archive .ar-one-column .read-more .btn-border,.search .ar-one-column .read-more .btn-border{display:inline;}
}
<?php endif; ?>
<?php if ( $read_more_type == 'read_more_post_title' ): ?>
.read-more:after{padding-left:4px;content:"\f105";font-family:FontAwesome;color:<?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $display_cta_single || $display_cta_page ): ?>
/*--post cta--*/
.cta-post{border-top:5px solid <?php echo $main_color; ?>;border-bottom:solid 5px <?php echo $main_color; ?>;}
/*--post cta common--*/
.cta-common-background{background-color:<?php echo $cta_common_background_color; ?>;}
.cta-common-title h3{color:<?php echo $cta_common_title_color; ?>;}
.cta-common-text, .cta-common-text h3, .cta-common-text h4, .cta-common-text h5, .cta-common-text h6{color:<?php echo $cta_common_text_color; ?>;}
.cta-common-btn a{background-color:<?php echo $cta_common_btn_background_color;?>;color:<?php echo $cta_common_btn_text_color; ?>;}
.cta-common-btn input[type=submit]{background-color:<?php echo $cta_common_btn_background_color;?>;color:<?php echo $cta_common_btn_text_color; ?>;border-top:solid 2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);}
/*--post cta a--*/
.cta-a-background{background-color:<?php echo $cta_a_background_color; ?>;}
.cta-a-title h3{color:<?php echo $cta_a_title_color; ?>;}
.cta-a-text, .cta-a-text h3, .cta-a-text h4, .cta-a-text h5, .cta-a-text h6{color:<?php echo $cta_a_text_color; ?>;}
.cta-a-btn a{background-color:<?php echo $cta_a_btn_background_color;?>;color:<?php echo $cta_a_btn_text_color; ?>;}
.cta-a-btn input[type=submit]{background-color:<?php echo $cta_a_btn_background_color;?>;color:<?php echo $cta_a_btn_text_color; ?>;border-top:solid 2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);}
/*--post cta b--*/
.cta-b-background{background-color:<?php echo $cta_b_background_color; ?>;}
.cta-b-title h3{color:<?php echo $cta_b_title_color; ?>;}
.cta-b-text, .cta-b-text h3, .cta-b-text h4, .cta-b-text h5, .cta-b-text h6{color:<?php echo $cta_b_text_color; ?>;}
.cta-b-btn a{background-color:<?php echo $cta_b_btn_background_color;?>;color:<?php echo $cta_b_btn_text_color; ?>;}
.cta-b-btn input[type=submit]{background-color:<?php echo $cta_b_btn_background_color;?>;color:<?php echo $cta_b_btn_text_color; ?>;border-top:solid 2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);}
/*--post cta c-*/
.cta-c-background{background-color:<?php echo $cta_c_background_color; ?>;}
.cta-c-title h3{color:<?php echo $cta_c_title_color; ?>;}
.cta-c-text, .cta-c-text h3, .cta-c-text h4, .cta-c-text h5, .cta-c-text h6{color:<?php echo $cta_c_text_color; ?>;}
.cta-c-btn a{background-color:<?php echo $cta_c_btn_background_color;?>;color:<?php echo $cta_c_btn_text_color; ?>;}
.cta-c-btn input[type=submit]{background-color:<?php echo $cta_c_btn_background_color;?>;color:<?php echo $cta_c_btn_text_color; ?>;border-top:solid 2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);}
/*--post cta d--*/
.cta-d-background{background-color:<?php echo $cta_d_background_color; ?>;}
.cta-d-title h3{color:<?php echo $cta_d_title_color; ?>;}
.cta-d-text, .cta-d-text h3, .cta-d-text h4, .cta-d-text h5, .cta-d-text h6{color:<?php echo $cta_d_text_color; ?>;}
.cta-d-btn a{background-color:<?php echo $cta_d_btn_background_color;?>;color:<?php echo $cta_d_btn_text_color; ?>;}
.cta-d-btn input[type=submit]{background-color:<?php echo $cta_d_btn_background_color;?>;color:<?php echo $cta_d_btn_text_color; ?>;border-top:solid 2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);}
@media screen and ( min-width: 768px ){
<?php if ( $cta_common_layout_type == 'cta_post_left' ): ?>
.cta-common-image{float:left;padding-right:4%;width:50%}
<?php elseif( $cta_common_layout_type == 'cta_post_center' ): ?>
.cta-common-image{width:100%;}
<?php elseif( $cta_common_layout_type == 'cta_post_right' ): ?>
.cta-common-image{float:right;padding-left:4%;width:50%}
<?php endif; ?>
<?php if ( $cta_potential_layout_type == 'cta_post_left' ): ?>
.cta-a-image{float:left;padding-right:4%;width:50%}
<?php elseif( $cta_potential_layout_type == 'cta_post_center' ): ?>
.cta-a-image{width:100%;}
<?php elseif( $cta_potential_layout_type == 'cta_post_right' ): ?>
.cta-a-image{float:right;padding-left:4%;width:50%}
<?php endif; ?>
<?php if ( $cta_eventually_layout_type == 'cta_post_left' ): ?>
.cta-b-image{float:left;padding-right:4%;width:50%}
<?php elseif( $cta_eventually_layout_type == 'cta_post_center' ): ?>
.cta-b-image{width:100%;}
<?php elseif( $cta_eventually_layout_type == 'cta_post_right' ): ?>
.cta-b-image{float:right;padding-left:4%;width:50%}
<?php endif; ?>
<?php if ( $cta_compare_layout_type == 'cta_post_left' ): ?>
.cta-c-image{float:left;padding-right:4%;width:50%}
<?php elseif( $cta_compare_layout_type == 'cta_post_center' ): ?>
.cta-c-image{width:100%;}
<?php elseif( $cta_compare_layout_type == 'cta_post_right' ): ?>
.cta-c-image{float:right;padding-left:4%;width:50%}
<?php endif; ?>
<?php if ( $cta_prospect_layout_type == 'cta_post_left' ): ?>
.cta-d-image{float:left;padding-right:4%;width:50%}
<?php elseif( $cta_prospect_layout_type == 'cta_post_center' ): ?>
.cta-d-image{width:100%;}
<?php elseif( $cta_prospect_layout_type == 'cta_post_right' ): ?>
.cta-d-image{float:right;padding-left:4%;width:50%}
<?php endif; ?>
}
<?php endif; ?>
<?php if ( $mobile_footer_btn_style == 'display' || $mobile_footer_btn_style == 'display_no_share_button' ): ?>
/*--footer mobile buttons--*/
.mobile-footer-btn{background-color:<?php echo $footer_mobile_btn_background_color; ?>;}
.mobile-footer-btn .fa{color:<?php echo $footer_mobile_btn_icon_color; ?>;}
.mobile-footer-btn a{color:<?php echo $footer_mobile_btn_text_color; ?>;}
.mobile-footer-btn .line a{background-color:<?php echo $footer_mobile_btn_background_color; ?>;color:<?php echo $footer_mobile_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_fb_like_btn || $display_content_twitter_follow || $display_content_sns_follow || $display_author_profile ): ?>
/*--article footer--*/
.article-footer{padding:32px 16px 24px 16px;}
@media screen and (min-width: 992px){.article-footer{padding:64px 32px 56px 32px;}}
@media screen and (min-width: 1200px){.article-footer{padding:64px 72px 56px 72px;}}
<?php endif; ?>
<?php if ( $display_content_twitter_follow && !$display_content_sns_follow && !$display_author_profile): ?>
.twitter-follow{margin-bottom:0;}
<?php endif; ?>
<?php if ( $display_fb_like_btn ): ?>
/*--facebook follow--*/
.fb-follow-image:before{position:absolute;top:0;left:0;right:0;bottom:0;background-color:<?php echo $fb_like_background_color; ?>;opacity:<?php echo $fb_like_image_opacity; ?>;content:"";z-index:100;}
<?php endif; ?>
/*--remodal's necessary styles--*/
html.remodal-is-locked{overflow:hidden;-ms-touch-action:none;touch-action:none}
.remodal{overflow:scroll;-webkit-overflow-scrolling:touch;}
.remodal,[data-remodal-id]{display:none}
.remodal-overlay{position:fixed;z-index:9998;top:-5000px;right:-5000px;bottom:-5000px;left:-5000px;display:none}
.remodal-wrapper{position:fixed;z-index:9999;top:0;right:0;bottom:0;left:0;display:none;overflow:auto;text-align:center;-webkit-overflow-scrolling:touch}
.remodal-wrapper:after{display:inline-block;height:100%;margin-left:-0.05em;content:""}
.remodal-overlay,.remodal-wrapper{-webkit-backface-visibility:hidden;backface-visibility:hidden}
.remodal{position:relative;outline:0;}
.remodal-is-initialized{display:inline-block}
/*--remodal's default mobile first theme--*/
.remodal-bg.remodal-is-opened,.remodal-bg.remodal-is-opening{-webkit-filter:blur(3px);filter:blur(3px)}.remodal-overlay{background:rgba(43,46,56,.9)}
.remodal-overlay.remodal-is-closing,.remodal-overlay.remodal-is-opening{-webkit-animation-duration:0.3s;animation-duration:0.3s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}
.remodal-overlay.remodal-is-opening{-webkit-animation-name:c;animation-name:c}
.remodal-overlay.remodal-is-closing{-webkit-animation-name:d;animation-name:d}
.remodal-wrapper{padding:16px}
.remodal{box-sizing:border-box;width:100%;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);color:#2b2e38;background:#fff;}
.remodal.remodal-is-closing,.remodal.remodal-is-opening{-webkit-animation-duration:0.3s;animation-duration:0.3s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}
.remodal.remodal-is-opening{-webkit-animation-name:a;animation-name:a}
.remodal.remodal-is-closing{-webkit-animation-name:b;animation-name:b}
.remodal,.remodal-wrapper:after{vertical-align:middle}
.remodal-close{position:absolute;top:-32px;right:0;display:block;overflow:visible;width:32px;height:32px;margin:0;padding:0;cursor:pointer;-webkit-transition:color 0.2s;transition:color 0.2s;text-decoration:none;color:#fff;border:0;outline:0;background:<?php echo $cta_popup_title_header_color; ?>;}
.modal-global-nav-close{position:absolute;top:0;right:0;display:block;overflow:visible;width:32px;height:32px;margin:0;padding:0;cursor:pointer;-webkit-transition:color 0.2s;transition:color 0.2s;text-decoration:none;color:#fff;border:0;outline:0;background:<?php echo $hamburger_menu_color; ?>;}
.remodal-close:focus,.remodal-close:hover{color:#2b2e38}
.remodal-close:before{font-family:Arial,Helvetica CY,Nimbus Sans L,sans-serif!important;font-size:32px;line-height:32px;position:absolute;top:0;left:0;display:block;width:32px;content:"\00d7";text-align:center;}
.remodal-cancel,.remodal-confirm{font:inherit;display:inline-block;overflow:visible;min-width:110px;margin:0;padding:9pt 0;cursor:pointer;-webkit-transition:background 0.2s;transition:background 0.2s;text-align:center;vertical-align:middle;text-decoration:none;border:0;outline:0}
.remodal-confirm{color:#fff;background:#81c784}
.remodal-confirm:focus,.remodal-confirm:hover{background:#66bb6a}
.remodal-cancel{color:#fff;background:#e57373}
.remodal-cancel:focus,.remodal-cancel:hover{background:#ef5350}
.remodal-cancel::-moz-focus-inner,.remodal-close::-moz-focus-inner,.remodal-confirm::-moz-focus-inner{padding:0;border:0}
@-webkit-keyframes a{0%{-webkit-transform:scale(1.05);transform:scale(1.05);opacity:0}to{-webkit-transform:none;transform:none;opacity:1}}
@keyframes a{0%{-webkit-transform:scale(1.05);transform:scale(1.05);opacity:0}to{-webkit-transform:none;transform:none;opacity:1}}
@-webkit-keyframes b{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}to{-webkit-transform:scale(0.95);transform:scale(0.95);opacity:0}}
@keyframes b{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}to{-webkit-transform:scale(0.95);transform:scale(0.95);opacity:0}}
@-webkit-keyframes c{0%{opacity:0}to{opacity:1}}
@keyframes c{0%{opacity:0}to{opacity:1}}
@-webkit-keyframes d{0%{opacity:1}to{opacity:0}}
@keyframes d{0%{opacity:1}to{opacity:0}}
@media only screen and (min-width:641px){.remodal{max-width:700px}}.lt-ie9 .remodal-overlay{background:#2b2e38}.lt-ie9 .remodal{width:700px}
<?php if ( is_front_page() && $display_cta_popup_frontpage || is_home() && $display_cta_popup_frontpage || is_single() && $display_cta_popup_single || is_page() && $display_cta_popup_page || is_archive() && $display_cta_popup_archive ): ?>
/*--cta popup--*/
.cta-popup-inner{background-color:<?php echo $cta_popup_background_color; ?>;}
.cta-popup-header,.cta-popup-header-remodal{border-top:solid 4px <?php echo $cta_popup_title_header_color; ?>;}
#cta-popup-btn{background-color:<?php echo $cta_popup_title_header_color; ?>;}
.cta-popup-header span, .cta-popup-header-remodal span{color:<?php echo $cta_popup_title_color; ?>;}
.cta-popup-text{color:<?php echo $cta_popup_text_color; ?>;}
.cta-popup-btn a {background-color:<?php echo $cta_popup_btn_background_color; ?>;border-top:solid 2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);color:<?php echo $cta_popup_btn_text_color; ?>;}
.cta-popup-footer input[type=submit]{background-color:<?php echo $cta_popup_btn_background_color;?>;color:<?php echo $cta_popup_btn_text_color; ?>;border-top:solid 2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);}
.popup-btn-mobile a{background-color:<?php echo $cta_popup_icon_mobile_background_color; ?>;}
.popup-btn-mobile a .fa{color:<?php echo $cta_popup_icon_mobile_text_color; ?>;}
<?php if ( $cta_popup_position == 'right' ): ?>
.cta-popup{right:0;}
#cta-popup-btn{right:0;}
.popup-btn-mobile{right:8px;}
<?php elseif( $cta_popup_position == 'left' ): ?>
.cta-popup{left:0;}
#cta-popup-btn{left:0;}
.popup-btn-mobile{left:8px;}
<?php endif; ?>
<?php if ( $cta_popup_layout_type == 'cta_popup_left' ): ?>
.cta-popup-image{float:left;margin-right:10px;}
<?php elseif( $cta_popup_layout_type == 'cta_popup_center' ): ?>
.cta-popup-image{float:none; width:100%;}
<?php elseif( $cta_popup_layout_type == 'cta_popup_right' ): ?>
.cta-popup-image{float:right;margin-left:10px;}
<?php endif; ?>
<?php endif; ?>
<?php if( is_front_page() && $fm_frontpage && $fm_position == 'right' || is_home() && $fm_frontpage && $fm_position == 'right' || is_single() && $fm_single && $fm_position == 'right' || is_page() && !is_page_template( 'templates/lp.php' ) && $fm_page && $fm_position == 'right' || is_archive() && $fm_archive && $fm_position == 'right' ): ?>
.fb_dialog{bottom:42pt!important;right:6pt!important;}
.fb-customerchat iframe{bottom:100pt!important;}
@media screen and ( min-width: 768px ){
.fb_dialog{bottom:28pt!important;right:8pt!important;}
.fb-customerchat iframe{bottom:80pt!important;right:8pt!important;}
}
<?php elseif( is_front_page() && $fm_frontpage && $fm_position == 'left' || is_home() && $fm_frontpage && $fm_position == 'left' || is_single() && $fm_single && $fm_position == 'left' || is_page() && !is_page_template( 'templates/lp.php' ) && $fm_page && $fm_position == 'left' || is_archive() && $fm_archive && $fm_position == 'left' ): ?>
.fb_dialog{bottom:42pt!important;left:6pt!important;right:0!important;}
.fb-customerchat iframe{bottom:100pt!important;}
@media screen and ( min-width: 768px ){
.fb_dialog{bottom:28pt!important;left:8pt!important;right:0!important;}
.fb-customerchat iframe{bottom:80pt!important;left:8pt!important;right:0!important;}
}
<?php endif; ?>
<?php if( is_page_template( 'templates/lp.php' ) && $fm_lp && $fm_position == 'right' ): ?>
.fb_dialog{bottom:50pt!important;right:6pt!important;}
.fb-customerchat iframe{bottom:100pt!important;}
@media screen and ( min-width: 768px ){
.fb_dialog{bottom:28pt!important;right:8pt!important;}
.fb-customerchat iframe{bottom:80pt!important;right:8pt!important;}
}
<?php elseif( is_page_template( 'templates/lp.php' ) && $fm_lp && $fm_position == 'left' ): ?>
.fb_dialog{bottom:50pt!important;left:6pt!important;right:0!important;}
.fb-customerchat iframe{bottom:100pt!important;}
@media screen and ( min-width: 768px ){
.fb_dialog{bottom:28pt!important;left:8pt!important;right:0!important;}
.fb-customerchat iframe{bottom:80pt!important;left:8pt!important;right:0!important;}
}
<?php endif; ?>
/*--footer cta --*/
<?php if ( $display_cta_footer_section_frontpage || $display_cta_footer_section_page_single || $display_cta_footer_section_archive ): ?>
.cta-footer-section{background-color:<?php echo $cta_footer_background_color; ?>;color:<?php echo $cta_footer_text_color; ?>;}
.footer-site-name img{max-height:<?php echo $cta_footer_logo_height; ?>px;}
.cta-footer-section .fa{color:<?php echo $cta_footer_icon_color; ?>;font-size:<?php echo $cta_footer_tel_font_size; ?>px;}
.cta-footer-tell{font-size:<?php echo $cta_footer_tel_font_size; ?>px;}
.cta-footer-section a{color:<?php echo $cta_footer_text_color; ?>;}
.cta-footer-btn a{background-color:<?php echo $cta_footer_btn_background_color; ?>;color:<?php echo $cta_footer_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_footer_sns_follow ): ?>
/*--footer sns--*/
.footer-top{background-color:<?php echo $footer_top_background_color; ?>;}
@media screen and ( min-width: 768px ){.footer-top-inner li a{border-bottom: none;}}
<?php endif; ?>
/*--footer--*/
.footer{background-color:<?php echo $footer_background_color; ?>;color:<?php echo $footer_text_color; ?>;}
.footer a,.footer .fa{color:<?php echo $footer_text_color; ?>;}
.footer a:hover{color:<?php echo $footer_link_hover; ?>;}
.footer a:hover .fa{color:<?php echo $footer_link_hover; ?>;}
.footer-nav li{border-right:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box h2,.footer-widget-box h3,.footer-widget-box h4,.footer-widget-box h5,.footer-widget-box h6{color:<?php echo $footer_text_color; ?>;}
.footer-widget-box h3{border-bottom:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box a:hover .fa{color:<?php echo $footer_link_hover; ?>;}
.footer-widget-box #wp-calendar caption{border:solid 1px <?php echo $footer_text_color; ?>;border-bottom: none;}
.footer-widget-box #wp-calendar th{border:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box #wp-calendar td{border:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box #wp-calendar a:hover{color:<?php echo $footer_link_hover; ?>;}
.footer-widget-box .tagcloud a{border:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box .tagcloud a:hover{border:solid 1px <?php echo $footer_link_hover; ?>;}
.footer-widget-box .wpp-list .wpp-excerpt, .footer-widget-box .wpp-list .post-stats, .footer-widget-box .wpp-list .post-stats a{color:<?php echo $footer_text_color; ?>;}
.footer-widget-box .wpp-list a:hover{color:<?php echo $footer_link_hover; ?>;}
.footer-widget-box select{border:solid 1px <?php echo $footer_text_color; ?>;color:<?php echo $footer_text_color; ?>;}
.footer-widget-box .widget-contact a:hover .fa{color:<?php echo $footer_link_hover; ?>;}
@media screen and ( min-width: 768px ){.footer a:hover .fa{color:<?php echo $footer_text_color; ?>;}}
<?php if ( $display_header_section ): ?>
.page-template-lp .header-site-name a{color:<?php echo $header_site_title_color; ?>;}
.page-template-lp .header-site-name a:hover{color:<?php echo $link_hover; ?>;}
#lp-header-cta-scroll .header-site-name a{color: #000c15;}
.page-template-lp .header-site-name a:hover{color:<?php echo $link_hover; ?>;}
<?php endif; ?>
<?php if ( $display_lp_header_cta ): ?>
/*--lp header cta--*/
.lp-header-cta-tell .fa{height:<?php echo $lp_header_tel_icon_height; ?>px;color:<?php echo $lp_header_cta_icon_color; ?>;}
.lp-header-phone-left{position:absolute;top:50%;right:40px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.lp-header-phone-right{position:absolute;top:50%;right:8px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.lp-header-phone-left .fa, .lp-header-phone-right .fa{color:<?php echo $lp_header_cta_icon_color; ?>;font-size:42px;font-size:4.2rem;}
.lp-header-cta-btn a{background-color:<?php echo $lp_header_cta_btn_background_color;?>;color:<?php echo $lp_header_cta_btn_text_color; ?>;}
@media screen and (min-width: 768px){
.lp-header-phone-left, .lp-header-phone-right {display: none;}
}
@media screen and (min-width: 992px){
.lp-header-cta-tell .fa, .lp-header-cta-tell .tell-number{font-size:<?php echo $lp_header_tel_font_size; ?>px;}
}
<?php endif; ?>
/*--lp header image cover--*/
.lp-header{height:<?php echo intval( $header_image_height );?>px;}
.lp-header:before,.lp-header-image:before{position:absolute;top:0;left:0;right:0;bottom:0;background:linear-gradient(<?php echo $header_image_background_color_degree; ?>deg, <?php echo $header_image_background_color_start; ?>, <?php echo $header_image_background_color_end; ?>)fixed;opacity:<?php echo $header_image_opacity; ?>;content: "";z-index: 100;}
.header-title, .header-target-message{color: <?php echo $header_image_title_color;?>;<?php if( !$header_image_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.header-sub-title{color:<?php echo $header_image_sub_title_color;?>;<?php if( !$header_image_text_shadow ) { ?>text-shadow:none;<?php } ?>}
.header-btn-bg a{border-bottom:none;border-radius:0;background-color:<?php echo $header_btn_background_color; ?>;color:<?php echo $header_btn_text_color; ?>;}
.header-btn-bg a:hover{background-color:<?php echo $header_btn_background_color; ?>;border-radius:inherit;-webkit-transform:inherit;transform:inherit;color:<?php echo $header_btn_text_color; ?>;}
.header-btn-bg:before{content:'';position:absolute;border:solid 3px <?php echo $header_btn_background_color; ?>;top:0;right:0;bottom:0;left:0;-webkit-transition:.2s ease-in-out;transition:.2s ease-in-out;z-index:-1;}
.header-btn-bg:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px}
<?php if ( $header_display_overlay == 'pattern_dots' ): ?>
.header-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $header_display_overlay == 'pattern_diamond' ): ?>
.header-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
@media screen and ( max-width: 767px ){
.header-message{right:0;left:0;}
}
@media screen and ( min-width: 768px ){
<?php if ( $header_message_layout_type == 'header_message_left' ): ?>
.header-message{left:0;width:70%;}
<?php elseif( $header_message_layout_type == 'header_message_center' ): ?>
.header-message{right:0;left:0;}
<?php elseif( $header_message_layout_type == 'header_message_right' ): ?>
.header-message{right:0;width:70%;}
<?php endif; ?>
}
<?php if ( $display_lp_mb_scroll_arrow ): ?>
/*--lp mb scroll arrow -*/
.lp-mb-horizontal-arrow>ul:after{position:absolute;right:6px;top:0;font-family:fontawesome;content:"\f105";font-size:30px;font-size:3rem;text-shadow:0 0 6px rgba(0,0,0,.6);color:#fff;opacity:.9;z-index:1;-webkit-animation:mb-scrollnav-transform 1.8s infinite ease-in-out;animation:mb-scrollnav-transform 1.8s infinite ease-in-out}
<?php endif; ?>
<?php if ( $display_empathy_section ): ?>
/*-lp empathy section--*/
.lp-empathy{background-color:<?php echo $empathy_section_background_color; ?>;}
.empathy-header h2{color:<?php echo $empathy_section_title_color; ?>;}
.empathy-header p{color:<?php echo $empathy_section_sub_title_color; ?>;}
.empathy-content,.empathy-box-r,.empathy-box-l{background-color:<?php echo $empathy_textbox_background_color; ?>;}
.empathy-content li,.empathy-box-r li,.empathy-box-l li{color:<?php echo $empathy_section_text_color; ?>;}
.empathy-content li .fa,.empathy-box-r li .fa,.empathy-box-l li .fa{color:<?php echo $empathy_section_icon_color; ?>;}
.scroll-down span{background-color:<?php echo $scroll_down_background_color; ?>;}
.scroll-down span .fa{color:<?php echo $scroll_down_icon_color; ?>;}
<?php endif; ?>
<?php if ( $display_advantage_section ): ?>
/*--lp close up section--*/
.lp-advantage{background-color:<?php echo $advantage_section_background_color; ?>;}
.advantage-header h2{color:<?php echo $advantage_section_title_color; ?>;}
.advantage-header p, .advantage-list p{color:<?php echo $advantage_section_text_color; ?>;}
.advantage-list h3{color:<?php echo $advantage_section_sub_title_color; ?>}
.advantage-icon .fa{border:solid 2px <?php echo $advantage_section_icon_color; ?>;color:<?php echo $advantage_section_icon_color; ?>;}
<?php endif; ?>
/*--lp content section--*/
<?php if ( $display_content_section ): ?>
#lp-content-section {background-color:<?php echo $content_section_background_color; ?>;}
<?php endif; ?>
<?php if ( $display_cta_btn_lp_1 || $display_cta_btn_lp_2 || $display_cta_btn_lp_3 ): ?>
.lp-cta-btn{background-color:<?php echo $cta_btn_lp_background_color; ?>;}
.lp-cta-btn h2, .lp-cta-btn .fa{color:<?php echo $cta_btn_lp_title_color; ?>;}
.lp-cta-btn p{color:<?php echo $cta_btn_lp_text_color; ?>;}
.lp-cta-btn dl{color:<?php echo $cta_btn_lp_text_color; ?>;}
.lp-cta-tell a{color:<?php echo $cta_btn_lp_text_color; ?>;}
.lp-cta-btn-bg a{background-color:<?php echo $cta_btn_lp_btn_background_color;?>;color:<?php echo $cta_btn_lp_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_product_features_section ): ?>
/*--lp product features section--*/
.lp-product-features{background-color:<?php echo $product_features_section_background_color; ?>;}
.product-features-header h2{color:<?php echo $product_features_title_color; ?>;}
.product-features-header p{color:<?php echo $product_features_sub_title_color; ?>;}
.product-features-box h3{color:<?php echo $product_features_headline_color; ?>;}
.product-features-box p{color:<?php echo $product_features_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_comparison_table_section ): ?>
/*--lp comparison section--*/
.lp-comparison{background-color:<?php echo $comparison_section_background_color; ?>;}
.comparison-header h2{color:<?php echo $comparison_section_title_color; ?>;}
.comparison-header p{color:<?php echo $comparison_section_sub_title_color; ?>;}
.comparison-recommend, .comparison-features{background-color:<?php echo $comparison_textbox_background_color; ?>;}
.lp-comparison table td:first-child {border:solid 1px <?php echo $comparison_section_myitem_background_color; ?>;}
.lp-comparison table td:first-child .comparison-item{background-color:<?php echo $comparison_section_myitem_background_color; ?>; color:<?php echo $comparison_section_myitem_text_color; ?>;}
.comparison-item{background-color:<?php echo $comparison_section_item_background_color; ?>; color:<?php echo $comparison_section_item_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_testimonial_section ): ?>
/*--lp testimonial section--*/
.lp-testimonial{color:<?php echo $testimonial_section_text_color; ?>;background-color:<?php echo $testimonial_section_background_color; ?>;}
.testimonial-header h2{color:<?php echo $testimonial_section_title_color; ?>;}
.testimonial-header p{color:<?php echo $testimonial_section_sub_title_color; ?>;}
.customers-testimonial{color:<?php echo $testimonial_balloon_text_color; ?>;background-color:<?php echo $testimonial_balloon_background_color; ?>;}
.customers-testimonial:after{border-color:<?php echo $testimonial_balloon_background_color; ?> transparent transparent transparent;}
.customers-testimonial-slide h3{color:<?php echo $testimonial_balloon_text_color; ?>;}
.slick-dots button {border:solid 2px <?php echo $testimonial_section_text_color; ?>;}
.slick-dots .slick-active button{border:solid 2px <?php echo $link_color; ?>;}
<?php endif; ?>
<?php if ( $display_offer_section ): ?>
/*--lp offer section--*/
.lp-offer{color:<?php echo $offer_section_text_color; ?>;background-color:<?php echo $offer_section_background_color; ?>;}
.offer-footer dl{background-color:<?php echo $offer_section_item_price_background_color; ?>;}
.offer-footer dl:before {border-color:<?php echo $offer_section_item_price_background_color; ?> transparent transparent transparent;}
.offer-header h2{color:<?php echo $offer_section_title_color; ?>;}
.offer-date h3{color:<?php echo $offer_section_sub_title_color; ?>;}
.offer-list:hover .offer-date h3{color:<?php echo $offer_section_icon_color; ?>;}
.offer-icon .fa{color:<?php echo $offer_section_icon_color; ?>;}
.offer-item{color:<?php echo $offer_section_item_color; ?>;background-color:<?php echo $offer_section_item_background_color; ?>;}
.offer-item-price,.offer-item-features{color:<?php echo $offer_section_item_price_color; ?>;}
<?php endif; ?>
<?php if ( $display_benefits_section ): ?>
/*--lp benefits section--*/
.lp-benefits{background-color:<?php echo $benefits_section_background_color; ?>;}
.benefits-header h2{color:<?php echo $benefits_section_title_color; ?>;}
.benefits-header p{color:<?php echo $benefits_section_sub_title_color; ?>;}
.benefits-content {background-color:<?php echo $benefits_textbox_background_color; ?>;}
.benefits-content li{color:<?php echo $benefits_section_text_color; ?>;}
.benefits-content li .fa{color:<?php echo $benefits_section_icon_color; ?>;}
<?php endif; ?>
<?php if ( $display_lp_faq_section ): ?>
/*--lp faq section--*/
.lp-faq{color:<?php echo $lp_faq_section_text_color; ?>;background-color:<?php echo $lp_faq_section_background_color; ?>;}
.faq-header h2{color:<?php echo $lp_faq_title_color; ?>;}
.faq-header p{color:<?php echo $lp_faq_sub_title_color; ?>;}
.faq-content .question:before{background-color:<?php echo $lp_faq_section_q_icon_color; ?>;}
.faq-content .answer:before{background-color:<?php echo $lp_faq_section_a_icon_color; ?>;}
<?php endif; ?>
<?php if ( $display_closing_section ): ?>
/*--lp closing section--*/
.lp-closing{background:url(<?php echo esc_url( $closing_section_image ); ?>) no-repeat;background-position:50% 50%;background-repeat:no-repeat;background-size:cover;}
@media screen and ( min-width: 992px ){
.lp-closing{background-attachment:fixed}
}
.lp-closing:before{position:absolute;top:0;left:0;right:0;bottom:0;background:linear-gradient(<?php echo $closing_section_background_color_degree; ?>deg, <?php echo $closing_section_background_color_start; ?>, <?php echo $closing_section_background_color_end; ?>)fixed;opacity:<?php echo $closing_section_background_opacity; ?>;content: "";}
.closing-message h2{color:<?php echo $closing_section_title_color; ?>}
<?php if ( $closing_section_display_overlay == 'pattern_dots' ): ?>
.closing-section-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background: url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $closing_section_display_overlay == 'pattern_diamond' ): ?>
.closing-section-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background: url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
<?php endif; ?>
<?php if ( $display_cta_lp ): ?>
/*--lp cta--*/
<?php if ( $cta_lp_section_background_image ): ?>
.lp-cta{background: <?php echo $cta_lp_section_background_color; ?> url(<?php echo esc_url( $cta_lp_section_background_image ); ?>);}
<?php else: ?>
.lp-cta{background-color:<?php echo $cta_lp_section_background_color; ?>;}
<?php endif; ?>
.lp-cta-contactfrom{background-color:<?php echo $cta_lp_contactform_background_color; ?>;}
.lp-cta-icon .fa{background-color:<?php echo $cta_lp_icon_color; ?>;}
.lp-cta-header h2{color:<?php echo $cta_lp_title_color; ?>;}
.lp-cta-text p{color:<?php echo $cta_lp_sub_title_color; ?>;}
.lp-cta-footer{color:<?php echo $cta_lp_text_color; ?>;}
.lp-cta-footer .btn a{background-color:<?php echo $cta_lp_btn_background_color;?>;color:<?php echo $cta_lp_btn_text_color; ?>;}
.lp-cta-footer .btn a:hover{background-color: rgba(0, 0, 0, 0.2);}
.lp-cta-footer input[type=submit]{background-color:<?php echo $cta_lp_btn_background_color;?>;color:<?php echo $cta_lp_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_postscript_section ): ?>
/*--lp postscript section--*/
.lp-postscript{background-color:<?php echo $postscript_section_background_color?>;}
.postscript-header h2{color:<?php echo $postscript_section_title_color; ?>;}
.postscript-text p{color:<?php echo $postscript_section_text_color; ?>;}
.postscript-footer .btn a{background-color:<?php echo $postscript_section_btn_background_color; ?>;color:<?php echo $postscript_section_btn_text_color; ?>;}
@media screen and ( min-width: 768px ){
<?php if ( $postscript_section_layout_type == 'postscript_left' ): ?>
.postscript-image{float:left;padding-right:4%;width:50%}
<?php elseif( $postscript_section_layout_type == 'postscript_center' ): ?>
.postscript-image{width:100%;}
<?php elseif( $postscript_section_layout_type == 'postscript_right' ): ?>
.postscript-image{float:right;padding-left:4%;width:50%}
<?php endif; ?>
}
<?php endif; ?>
<?php if ( $display_mobile_cta_section ): ?>
/*--lp postscript section--*/
.mobile_cta_icon_1{background-color:<?php echo $mobile_cta_section_background_color_1; ?>;color:<?php echo $mobile_cta_section_text_color_1 ; ?>;}
.mobile_cta_icon_2{background-color:<?php echo $mobile_cta_section_background_color_2; ?>;color:<?php echo $mobile_cta_section_text_color_2 ; ?>;}
.mobile_cta_icon_3{background-color:<?php echo $mobile_cta_section_background_color_3; ?>;color:<?php echo $mobile_cta_section_text_color_3 ; ?>;}
.mobile_cta_icon_1 a{color:<?php echo $mobile_cta_section_text_color_1 ; ?>;}
.mobile_cta_icon_2 a{color:<?php echo $mobile_cta_section_text_color_2 ; ?>;}
.mobile_cta_icon_3 a{color:<?php echo $mobile_cta_section_text_color_3 ; ?>;}
.mobile_cta_icon_1 .fa{color:<?php echo $mobile_cta_section_text_color_1 ; ?>;}
.mobile_cta_icon_2 .fa{color:<?php echo $mobile_cta_section_text_color_2 ; ?>;}
.mobile_cta_icon_3 .fa{color:<?php echo $mobile_cta_section_text_color_3 ; ?>;}
<?php endif; ?>
/*--page custom css--*/
<?php echo $emanon_custom_css_setting; ?>
</style>
<?php
}
add_action( 'wp_head', 'emnanon_custom_css' );