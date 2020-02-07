<?php
/**
* LP mobile cta section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
?>
<!--mobile cta-->
<aside class="lp-mobile-cta wow slideInUp" data-wow-delay="4.0s">
	<ul>
		<?php for($li=1; $li<4; $li++) { ?>
		<?php $mobile_cta_title = get_theme_mod( 'mobile_cta_title_'.$li ); ?>
		<?php $mobile_cta_url = get_theme_mod( 'mobile_cta_url_'.$li ); ?>
		<?php $mobile_cta_icon = get_theme_mod( 'mobile_cta_icon_'.$li ); ?>
		<?php if ( $mobile_cta_title || $mobile_cta_icon ): ?>
		<li class="mobile_cta_icon_<?php echo $li; ?>">
			<?php if ( $mobile_cta_url ) { ?>
			<a href="<?php echo esc_url( $mobile_cta_url ); ?>"><?php } ?>
			<i class="<?php echo esc_html( $mobile_cta_icon ); ?>"></i>
			<span class="br-sp"><?php echo esc_html( $mobile_cta_title ); ?></span>
			<?php if ( $mobile_cta_url ) { ?></a><?php } ?>
		</li>
		<?php endif; ?>
		<?php } ?>
	</ul>
</aside>
<!--end mobile cta-->