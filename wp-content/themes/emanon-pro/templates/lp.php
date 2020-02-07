<?php
/**
* Template Name: ランディングページ（セールス）
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

$footer = get_theme_mod( 'display_lp_footer_section', true );
get_header(); ?>

<article>

<?php emanon_lp_header(); ?>

<?php emanon_lp_gloval_nav(); ?>

<?php emanon_lp_header_mb_scroll_nav(); ?>

<?php emanon_lp_empathy_section(); ?>

<?php emanon_lp_advantage_section(); ?>

<?php emanon_lp_cta_btn_section_1(); ?>

<?php emanon_lp_content_section(); ?>

<?php emanon_lp_product_features_section(); ?>

<?php emanon_lp_comparison_table_section(); ?>

<?php emanon_lp_testimonial_section(); ?>

<?php emanon_lp_cta_btn_section_2(); ?>

<?php emanon_lp_offer_section(); ?>

<?php emanon_lp_benefits_section(); ?>

<?php emanon_lp_closing_section(); ?>

<?php emanon_lp_cta_section(); ?>

<?php emanon_lp_faq_section(); ?>

<?php emanon_lp_postscript_section(); ?>

<?php emanon_lp_cta_btn_section_3(); ?>

<?php emanon_lp_mobile_cta_section(); ?>

</article>

<?php
if ( $footer ) {
	get_footer();
} else {
	get_footer('lp');
}
?>
