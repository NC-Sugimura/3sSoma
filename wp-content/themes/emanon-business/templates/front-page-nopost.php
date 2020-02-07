<?php
/**
* Template Name: フロントページ（記事一覧なし）
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.2.6
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

<?php emanon_business_info_section(); ?>

<?php emanon_business_accordion_faq_section(); ?>

<?php emanon_contactform_section(); ?>

<?php if( is_front_page() && !is_paged() ) :?>
<?php dynamic_sidebar( 'front-page-widget' ); ?>
<?php endif; ?>

<?php get_footer(); ?>