<?php
/**
* Template Name: フロントページ（記事一覧）
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.2.5
*/

get_header(); ?>

<?php emanon_firstview(); ?>

<?php emanon_business_newsticker_section(); ?>

<?php emanon_business_solution_section(); ?>

<?php emanon_business_sales_section (); ?>

<?php emanon_business_benefit_section(); ?>

<?php emanon_business_case_section(); ?>

<?php emanon_business_product_section(); ?>

<?php emanon_business_price_table_section(); ?>

<?php emanon_business_front_cta_section(); ?>

<?php emanon_business_category_section(); ?>

<?php // フロントページレイアウトの表示判定
  $display_entry_section = get_theme_mod( 'display_entry_section', 'true' );
  $front_layout_type = get_theme_mod( 'front_sidebar_layout', 'right_sidebar' );
  if ( $front_layout_type == 'right_sidebar' && $display_entry_section ) {
    get_template_part( 'blog-templates/front-page/front-right-sidebar');
  }
  if ( $front_layout_type == 'left_sidebar' && $display_entry_section ) {
    get_template_part( 'blog-templates/front-page/front-left-sidebar' );
  }
  if ( $front_layout_type == 'no_sidebar' && $display_entry_section ) {
    get_template_part( 'blog-templates/front-page/front-no-sidebar' );
  }
?>

<?php emanon_business_info_section(); ?>

<?php emanon_business_accordion_faq_section(); ?>

<?php emanon_contactform_section(); ?>

<?php if( is_front_page() && !is_paged() ) :?>
<?php dynamic_sidebar( 'front-page-widget' ); ?>
<?php endif; ?>

<?php get_footer(); ?>