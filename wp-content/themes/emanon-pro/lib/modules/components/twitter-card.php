<?php
/**
* Twitter Card
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<!--twitter card-->
<meta name="twitter:card" content="<?php echo esc_attr( get_emanon_twitter_card_type() ); ?>">
<meta name="twitter:site" content="<?php echo esc_html( get_emanon_twitter_id() ); ?>">
<meta name="twitter:title" content="<?php emanon_opg_title(); ?>">
<meta name="twitter:description" content="<?php emanon_description(); ?>" />
<?php emanon_twitter_opg_image( ); ?>
<!--end twitter card-->
