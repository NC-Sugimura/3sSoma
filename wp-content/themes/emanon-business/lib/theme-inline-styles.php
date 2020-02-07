<?php
/**
* Theme inline style
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
function emnanon_child_custom_css() {
	$main_color = get_theme_mod( 'main_color', '#161410' );
	$link_color = get_theme_mod( 'link_color', '#9b8d77' );
	$link_hover = get_theme_mod( 'link_hover', '#b5b5b5' );

	$display_newsticker_section = get_theme_mod( 'display_newsticker_section', '' );
	$newsticker_background_color = get_theme_mod( 'newsticker_background_color', '#f8f8f8' );
	$newsticker_text_color = get_theme_mod( 'newsticker_text_color', '#161410' );

	$display_solution_section = get_theme_mod( 'display_solution_section', '' );
	$solution_section_background_color = get_theme_mod( 'solution_section_background_color', '#fff' );
	$solution_section_title_color = get_theme_mod( 'solution_section_title_color', '#000c15' );
	$solution_section_description_color = get_theme_mod( 'solution_section_description_color', '#303030' );
	$solution_title_color = get_theme_mod( 'solution_title_color', '#000c15' );
	$solution_description_color = get_theme_mod( 'solution_description_color', '#303030' );
	$solution_icon_color = get_theme_mod( 'solution_icon_color', '#9b8d77' );

	$display_sales_section = get_theme_mod( 'display_sales_section', '' );
	$sales_section_background_color = get_theme_mod( 'sales_section_background_color', '#f8f8f8' );
	$sales_section_title_color = get_theme_mod( 'sales_section_title_color', '#000c15' );
	$sales_section_description_color = get_theme_mod( 'sales_section_description_color', '#303030' );
	$sales_section_btn_background_color = get_theme_mod( 'sales_section_btn_background_color', '#9b8d77' );
	$sales_section_btn_text_color = get_theme_mod( 'sales_section_btn_text_color', '#fff' );
	$sales_icon_color = get_theme_mod( 'sales_icon_color', '#9b8d77' );
	$sales_title_color = get_theme_mod( 'sales_title_color', '#000c15' );
	$sales_description_color = get_theme_mod( 'sales_description_color', '#303030' );
	$sales_icon_1 = get_theme_mod( 'sales_icon_1', '' );
	$sales_icon_2 = get_theme_mod( 'sales_icon_2', '' );
	$sales_icon_3 = get_theme_mod( 'sales_icon_3', '' );

	$display_benefit_section = get_theme_mod( 'display_benefit_section', '' );
	$benefit_section_background_color = get_theme_mod( 'benefit_section_background_color', '#fff' );
	$benefit_section_title_color = get_theme_mod( 'benefit_section_title_color', '#000c15' );
	$benefit_section_description_color = get_theme_mod( 'benefit_section_description_color', '#303030' );
	$benefit_title_color = get_theme_mod( 'benefit_title_color', '#000c15' );
	$benefit_description_color = get_theme_mod( 'benefit_description_color', '#303030' );
	$benefit_icon_color = get_theme_mod( 'benefit_icon_color', '#9b8d77' );
	$benefit_box_background_color = get_theme_mod( 'benefit_box_background_color', '#f4f4f4' );
	$benefit_section_btn_background_color = get_theme_mod( 'benefit_section_btn_background_color', '#9b8d77' );
	$benefit_section_btn_text_color = get_theme_mod( 'benefit_section_btn_text_color', '#fff' );

	$display_case_section = get_theme_mod( 'display_case_section', '' );
	$case_title_color = get_theme_mod( 'case_title_color', '#000c15' );
	$case_description_color = get_theme_mod( 'case_description_color', '#303030' );
	$case_text_color = get_theme_mod( 'case_text_color', '#303030' );
	$case_section_btn_background_color = get_theme_mod( 'case_section_btn_background_color', '#9b8d77' );
	$case_section_btn_text_color = get_theme_mod( 'case_section_btn_text_color', '#fff' );
	$case_section_background_color = get_theme_mod( 'case_section_background_color', '#f8f8f8' );

	$display_product_section = get_theme_mod( 'display_product_section', '' );
	$product_background_image_height = get_theme_mod( 'product_background_image_height', 400 );
	$product_message_layout_type = get_theme_mod( 'product_message_layout_type', 'product_message_center' );
	$product_message_height = get_theme_mod( 'product_message_height', 200 );
	$product_background_color = get_theme_mod( 'product_background_color', '#000' );
	$product_section_title_color = get_theme_mod( 'product_section_title_color', '#fff' );
	$product_section_description_color = get_theme_mod( 'product_section_description_color', '#fff' );
	$product_section_btn_background_color = get_theme_mod( 'product_section_btn_background_color', '#9b8d77' );
	$product_section_btn_text_color = get_theme_mod( 'product_section_btn_text_color', '#fff' );
	$product_section_background_color_start = get_theme_mod( 'product_section_background_color_start', '#000' );
	$product_section_background_color_end = get_theme_mod( 'product_section_background_color_end', '#000' );
	$product_section_background_color_degree = get_theme_mod( 'product_section_background_color_degree', '-135' );
	$product_display_overlay = get_theme_mod( 'product_display_overlay', 'pattern_none' );
	$product_background_opacity = get_theme_mod( 'product_background_opacity', 0 );

	$display_price_table_section = get_theme_mod( 'display_price_table_section', '' );
	$price_section_background_color = get_theme_mod( 'price_section_background_color', '#f8f8f8' );
	$price_section_title_color = get_theme_mod( 'price_section_title_color', '#000c15' );
	$price_section_sub_title_color = get_theme_mod( 'price_section_sub_title_color', '#303030' );
	$price_section_item_background_color = get_theme_mod( 'price_section_item_background_color', '#9b8d77' );
	$price_section_item_text_color = get_theme_mod( 'price_section_item_text_color', '#fff' );
	$price_textbox_background_color = get_theme_mod( 'price_textbox_background_color', '#fff' );
	$price_textbox_text_color = get_theme_mod( 'price_textbox_text_color', '#303030' );
	$price_section_btn_background_color = get_theme_mod( 'price_section_btn_background_color', '#9b8d77' );
	$price_section_btn_text_color = get_theme_mod( 'price_section_btn_text_color', '#fff' );
	
	$display_front_cta_section = get_theme_mod( 'display_front_cta_section', 'no_display' );
	$cta_section_background_color = get_theme_mod( 'cta_section_background_color', '#161410' );
	$cta_section_title_color = get_theme_mod( 'cta_section_title_color', '#fff' );
	$cta_section_description_color = get_theme_mod( 'cta_section_description_color', '#fff' );
	$cta_section_btn_background_color = get_theme_mod( 'cta_section_btn_background_color', '#9b8d77' );
	$cta_section_btn_text_color = get_theme_mod( 'cta_section_btn_text_color', '#fff' );

	$display_category_section = get_theme_mod( 'display_category_section', '' );
	$category_section_background_color = get_theme_mod( 'category_section_background_color', '#fff' );
	$category_section_title_color = get_theme_mod( 'category_section_title_color', '#000c15' );
	$category_section_description_color = get_theme_mod( 'category_section_description_color', '#303030' );
	$category_box_background_color = get_theme_mod( 'category_box_background_color', '#f4f4f4' );
	$category_title_color = get_theme_mod( 'category_title_color', '#000c15' );
	$category_description_color = get_theme_mod( 'category_description_color', '#303030' );
	$category_section_btn_background_color = get_theme_mod( 'category_section_btn_background_color', '#9b8d77' );
	$category_section_btn_text_color = get_theme_mod( 'category_section_btn_text_color', '#fff' );

	$display_info_section = get_theme_mod( 'display_info_section', '' );
	$info_section_background_color = get_theme_mod( 'info_section_background_color', '#f8f8f8' ); 
	$info_title_color = get_theme_mod( 'info_title_color', '#000c15' ); 
	$info_sub_title_color = get_theme_mod( 'info_sub_title_color', '#303030 ' ); 
	$info_text_color = get_theme_mod( 'info_text_color', '#303030 ' ); 
	$info_section_btn_background_color = get_theme_mod( 'info_section_btn_background_color', '#9b8d77' );
	$info_section_btn_text_color = get_theme_mod( 'info_section_btn_text_color', '#fff' );
	$info_section_hover_color = get_theme_mod( 'info_section_hover_color', '#fff' );

	$display_accordion_faq_section = get_theme_mod( 'display_accordion_faq_section', '' );
	$accordion_faq_section_background_color = get_theme_mod( 'accordion_faq_section_background_color', '#fff' ); 
	$faq_title_color = get_theme_mod( 'faq_title_color', '#000c15' ); 
	$faq_sub_title_color = get_theme_mod( 'faq_sub_title_color', '#303030 ' ); 
	$accordion_faq_section_text_color = get_theme_mod( 'accordion_faq_section_text_color', '#303030' );
	$accordion_faq_section_q_icon_color = get_theme_mod( 'accordion_faq_section_q_icon_color', '#9b8d77' );
	$accordion_faq_section_a_icon_color = get_theme_mod( 'accordion_faq_section_a_icon_color', '#b5b5b5' );
	$faq_section_btn_background_color = get_theme_mod( 'faq_section_btn_background_color', '#9b8d77' );
	$faq_section_btn_text_color = get_theme_mod( 'faq_section_btn_text_color', '#fff' );

	$display_contactfrom_section = get_theme_mod( 'display_contactfrom_section', '' );
	$contactfrom_section_background_color = get_theme_mod( 'contactfrom_section_background_color', '#f4f4f4' );
	$contactfrom_section_title_color = get_theme_mod( 'contactfrom_section_title_color', '#000c15' );
	$contactfrom_section_description_color = get_theme_mod( 'contactfrom_section_description_color', '#303030' );
	$contactfrom_section_btn_background_color = get_theme_mod( 'contactfrom_section_btn_background_color', '#9b8d77' );
	$contactfrom_section_btn_text_color = get_theme_mod( 'contactfrom_section_btn_text_color', '#fff' );
	$contactForm7_background_color = get_theme_mod( 'contactForm7_background_color', '#fff' );
	$contactfrom_section_background_image = get_theme_mod( 'contactfrom_section_background_image', get_stylesheet_directory_uri() . '/lib/images/axiom-pattern.png' );

	if ( $color_scheme = get_theme_mod( 'color_scheme', '' ) ) {
	$colors = explode( ",", $color_scheme );
	$main_color = $colors[0];
	$link_color = $colors[1];
	$link_hover = $colors[2];
	}
?>
<style>
<?php if ( $display_newsticker_section ): ?>
/*--ticker section--*/
.eb-ticker-section{background-color:<?php echo $newsticker_background_color; ?>;color:<?php echo $newsticker_text_color; ?>;}
.eb-ticker-section a{color:<?php echo $newsticker_text_color; ?>;}
.eb-ticker-section a:hover{color:<?php echo $link_hover; ?>;}
.ticker-label a{background-color:<?php echo $main_color; ?>;color:#fff;}
.ticker-label a:hover{background-color:<?php echo $link_hover; ?>;color:#fff;}
<?php endif; ?>
<?php if ( $display_solution_section ): ?>
/*--solution section--*/
.eb-solution-section, .eb-solution-section .bottom-arrow{background-color:<?php echo $solution_section_background_color; ?>;}
.solution-header h2{color:<?php echo $solution_section_title_color; ?>;}
.solution-header p{color:<?php echo $solution_section_description_color; ?>;}
.solution-box-list h3{color:<?php echo $solution_title_color; ?>}
.solution-box-list p{color:<?php echo $solution_description_color; ?>}
.solution-box-icon i{color:<?php echo $solution_icon_color; ?>;border: 2px solid <?php echo $solution_icon_color; ?>;}
.solution-box-list:hover i{box-shadow: 0 0 0 0px <?php echo $solution_icon_color; ?>;background: <?php echo $solution_icon_color; ?>;border: 2px solid <?php echo $solution_icon_color; ?>;color: #fff;}
<?php endif; ?>
<?php if ( $display_sales_section ): ?>
/*--sales section--*/
.eb-sales-section{background-color:<?php echo $sales_section_background_color; ?>;}
.sales-header h2{color:<?php echo $sales_section_title_color; ?>;}
.sales-content p{color:<?php echo $sales_section_description_color; ?>;}
.sales-section-btn a{background-color:<?php echo $sales_section_btn_background_color; ?>;color:<?php echo $sales_section_btn_text_color; ?>;}
.sales-box-header h3{color:<?php echo $sales_title_color; ?>;}
.sales-box-header:hover h3{color:<?php echo $sales_icon_color; ?>;}
.sales-box-header i{color:<?php echo $sales_icon_color; ?>;}
.sales-box-header:hover i{-webkit-transform: scale(1.2);transform: scale(1.2);}
.sales-box-detail{color:<?php echo $sales_description_color; ?>;}
<?php if ( $sales_icon_1 || $sales_icon_2 || $sales_icon_3 ): ?>
.sales-box-header h3, .sales-box-detail{padding-left: 48px;}
@media screen and ( min-width: 767px ) {
.sales-box-header h3, .sales-box-detail{padding-left: 56px;}
}
<?php endif; ?>
<?php endif; ?>
<?php if ( $display_benefit_section ): ?>
/*--benefit section--*/
.eb-benefit-section{background-color:<?php echo $benefit_section_background_color; ?>;}
.benefit-header h2{color:<?php echo $benefit_section_title_color; ?>;}
.benefit-header p{color:<?php echo $benefit_section_description_color; ?>}
.benefit-box-list {background-color:<?php echo $benefit_box_background_color; ?>;}
.benefit-box-list:hover{background-color:<?php echo $benefit_icon_color; ?>;}
.benefit-box-detail h3{color:<?php echo $benefit_title_color; ?>;}
.benefit-box-list p{color:<?php echo $benefit_description_color; ?>;}
.benefit-box-icon i{color:<?php echo $benefit_icon_color; ?>;}
.benefit-section-btn a{background-color:<?php echo $benefit_section_btn_background_color; ?>;color:<?php echo $benefit_section_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_case_section ): ?>
/*--case section--*/
.eb-case-section{background-color:<?php echo $case_section_background_color; ?>;}
.case-header h2{color:<?php echo $case_title_color; ?>;}
.case-header p{color:<?php echo $case_description_color; ?>;}
.case-title a{color:<?php echo $case_text_color; ?>;}
.case-title a:hover{color:<?php echo $case_text_color; ?>;}
.swiper-button-prev,.swiper-button-next{border-color:<?php echo $link_color; ?>;}
.swiper-pagination-bullet,.swiper-pagination-bullet-active{background:<?php echo $link_color; ?>;}
.case-section-btn a{background-color:<?php echo $case_section_btn_background_color; ?>;color:<?php echo $case_section_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_product_section ): ?>
/*--product section--*/
.eb-product-section{position:relative;height:<?php echo intval( $product_background_image_height );?>px;}
/*--.product-message{height:<?php echo intval( $product_message_height ); ?>px;}-*/
<?php if ( $product_display_overlay == 'pattern_dots' ): ?>
.product-section-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background: url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $product_display_overlay == 'pattern_diamond' ): ?>
.product-section-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background: url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
.eb-product-section:before{position:absolute;top:0;left:0;right:0;bottom:0;background:linear-gradient(<?php echo $product_section_background_color_degree; ?>deg, <?php echo $product_section_background_color_start; ?>, <?php echo $product_section_background_color_end; ?>)fixed;opacity:<?php echo $product_background_opacity; ?>;content: "";z-index: 100;}
.product-content h2{color:<?php echo $product_section_title_color;?>;} 
.product-content p{color:<?php echo $product_section_description_color;?>;}
.product-section-btn a{border-bottom:none;border-radius:0;background-color:<?php echo $product_section_btn_background_color; ?>;color:<?php echo $product_section_btn_text_color; ?>;}
.product-section-btn a:hover{background-color:<?php echo $product_section_btn_background_color; ?>;border-radius:inherit;-webkit-transform:inherit;transform:inherit;color:<?php echo $product_section_btn_text_color; ?>;}
.product-section-btn:before{content:'';position:absolute;border:3px solid <?php echo $product_section_btn_background_color; ?>;top:0;right:0;bottom:0;left:0;-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out;z-index:-1;}
.product-section-btn:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px;}
@media screen and ( max-width: 767px ) {
.product-message{right:0;left:0;}
}
@media screen and ( min-width: 768px ) {
<?php if ( $product_message_layout_type == 'product_message_left' ): ?>
.product-message{left:0;}
<?php elseif( $product_message_layout_type == 'product_message_center' ): ?>
.product-message{right:0;left:0;}
<?php elseif( $product_message_layout_type == 'product_message_right' ): ?>
.product-message{right:0;}
<?php endif; ?>
}
<?php endif; ?>
<?php if ( $display_price_table_section ): ?>
/*--price table section--*/
.eb-price-section{background-color:<?php echo $price_section_background_color; ?>;}
.price-header h2{color:<?php echo $price_section_title_color; ?>;}
.price-header p{color:<?php echo $price_section_sub_title_color; ?>;}
.eb-price-section table td{background-color:<?php echo $price_textbox_background_color; ?>;}
.price-item{background-color:<?php echo $price_section_item_background_color; ?>;color:<?php echo $price_section_item_text_color; ?>;}
.price-selling,.price-description{color:<?php echo $price_textbox_text_color; ?>;}
.price-section-btn a{background-color:<?php echo $price_section_btn_background_color; ?>;color:<?php echo $price_section_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_front_cta_section == 'no_display' ): ?>
.eb-price-section .bottom-arrow{display: none}
<?php elseif( $display_front_cta_section	== 'tell' || $display_front_cta_section	 == 'mail' || $display_front_cta_section	== 'tell_mail' ): ?>
.eb-price-section .bottom-arrow{background-color:<?php echo $price_section_background_color; ?>;}
<?php endif; ?>
<?php if ( $display_front_cta_section	 == 'tell' || $display_front_cta_section	== 'mail' || $display_front_cta_section	 == 'tell_mail' ): ?>
/*--front cta section--*/
.eb-front-cta-section{background-color:<?php echo $cta_section_background_color; ?>;}
.front-cta-header .fa,.front-cta-header-single .fa{color:<?php echo $cta_section_title_color; ?>;}
.front-cta-header h2,.front-cta-header-single h2{color:<?php echo $cta_section_title_color; ?>;}
.front-cta-content dl,.front-cta-content-single dl{color:<?php echo $cta_section_description_color; ?>;}
.front-cta-tell a{color:<?php echo $cta_section_description_color; ?>;}
.front-cta-mail-btn a{border-bottom:none;border-radius:0;background-color:<?php echo $cta_section_btn_background_color; ?>;color:<?php echo $cta_section_btn_text_color; ?>;z-index:100;}
.front-cta-mail-btn a:hover{background-color:<?php echo $cta_section_btn_background_color; ?>;border-radius:inherit;-webkit-transform:inherit;transform:inherit;color:<?php echo $cta_section_btn_text_color; ?>;}
.front-cta-mail-btn:before{content:'';position:absolute;border:3px solid <?php echo $cta_section_btn_background_color; ?>;top:0;right:0;bottom:0;left:0;-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out;z-index:-1;}
.front-cta-mail-btn:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px;}
<?php endif; ?>
<?php if ( $display_category_section ): ?>
/*--category section--*/
.eb-category-section{background-color:<?php echo $category_section_background_color; ?>;}
.category-header h2{color:<?php echo $category_section_title_color; ?>;}
.category-header p{color:<?php echo $category_section_description_color; ?>;}
.category-box {background-color:<?php echo $category_box_background_color; ?>;}
.category-box-header h3{color:<?php echo $category_title_color; ?>;}
.category-box-header h3:after{background-color:<?php echo $category_section_btn_background_color; ?>;}
.category-box-header p{color:<?php echo $category_description_color; ?>;}
.category-btn a{background-color:<?php echo $category_section_btn_background_color; ?>;color:<?php echo $category_section_btn_text_color; ?>;}
<?php endif; ?>
<?php if ( $display_info_section ): ?>
/*--info section--*/
.eb-info-section{background-color:<?php echo $info_section_background_color; ?>;}
.info-header h2{color:<?php echo $info_title_color; ?>;}
.info-header p{color:<?php echo $info_sub_title_color; ?>;}
.info-meta, .info-container h3 a{color:<?php echo $info_text_color; ?>;}
.info-container li:hover{background-color:<?php echo $info_section_hover_color; ?>;}
.info-section-btn a{background-color:<?php echo $info_section_btn_background_color; ?>;color:<?php echo $info_section_btn_text_color; ?>;font-size:12px;
 font-size:1.2rem;}
<?php endif; ?>

<?php if ( $display_accordion_faq_section ): ?>
/*--accordion faq section--*/
.eb-accordion-faq-section{background-color:<?php echo $accordion_faq_section_background_color; ?>;color:<?php echo $accordion_faq_section_text_color; ?>;}
.accordion-faq-header h2{color:<?php echo $faq_title_color; ?>;}
.accordion-faq-header p{color:<?php echo $faq_sub_title_color; ?>;}
.accordion-faq-content .question:before{background-color:<?php echo $accordion_faq_section_q_icon_color; ?>;}
.accordion-faq-content .answer:before{background-color:<?php echo $accordion_faq_section_a_icon_color; ?>;}
.accordion-faq-content .question:hover{color:<?php echo $accordion_faq_section_q_icon_color; ?>;}
.accordion-faq-content .clicked{color:<?php echo $accordion_faq_section_q_icon_color; ?>;}
.accordion-faq-content dd a{color:<?php echo $link_color; ?>;}
.accordion-faq-content dd a:hover{color:<?php echo $link_hover; ?>;}
.faq-section-btn a{background-color:<?php echo $faq_section_btn_background_color; ?>;color:<?php echo $faq_section_btn_text_color; ?>;font-size:12px;
 font-size:1.2rem;}
<?php endif; ?>
<?php if ( $display_contactfrom_section ): ?>
/*--contactfrom section--*/
<?php if ( $contactfrom_section_background_image ): ?>
.eb-contactfrom-section{background: <?php echo $contactfrom_section_background_color; ?> url(<?php echo esc_url( $contactfrom_section_background_image ); ?>);}
<?php else: ?>
.eb-contactfrom-section{background-color:<?php echo $contactfrom_section_background_color; ?>;}
<?php endif; ?>
.contactfrom-header h2{color:<?php echo $contactfrom_section_title_color; ?>;}
.contactfrom-content p{color:<?php echo $contactfrom_section_description_color; ?>;}
.contactfrom-content-btn a{background-color:<?php echo $contactfrom_section_btn_background_color; ?>;color:<?php echo $contactfrom_section_btn_text_color; ?>;}
.contactfrom-content-btn a:hover{background-color:rgba(0,0,0,0.2); color:<?php echo $contactfrom_section_btn_text_color; ?>; -moz-box-shadow: 0px 1px 0px 0px rgba(0,0,0,0.2); box-shadow: 0px 1px 0px 0px rgba(0,0,0,0.2);}
.contactfrom-content input[type=submit]{background-color:<?php echo $contactfrom_section_btn_background_color; ?>;color:<?php echo $contactfrom_section_btn_text_color; ?>;}
.contactfrom-content input[type=submit]:hover{background-color:rgba(0,0,0,0.2); color:<?php echo $contactfrom_section_btn_text_color; ?>; -moz-box-shadow: 0px 1px 0px 0px rgba(0,0,0,0.2); box-shadow:0px 1px 0px 0px rgba(0,0,0,0.2);}
.contactfrom-content .wpcf7 {background-color:<?php echo $contactForm7_background_color; ?>;}
<?php endif; ?>
/*--btn--*/
.cta-popup-footer .btn{border-top:none;border-bottom: none;}
</style>
<?php
}
add_action( 'wp_head', 'emnanon_child_custom_css', 11 );
