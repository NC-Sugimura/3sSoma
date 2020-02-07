<?php
/**
* Front cta section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$display_front_cta_section = get_theme_mod( 'display_front_cta_section', 'no_display' );
	$cta_section_title_tell = get_theme_mod( 'cta_section_title_tell', '' );
	$cta_section_tell_description = get_theme_mod( 'cta_section_tell_description', '' );
	$cta_section_tell_number = get_theme_mod( 'cta_section_tell_number', '' );
	$cta_section_business_hours = get_theme_mod( 'cta_section_business_hours', '' );
	$cta_section_title_mail = get_theme_mod( 'cta_section_title_mail', '' );
	$cta_section_description_mail = get_theme_mod( 'cta_section_description_mail', '' );
	$cta_section_btn_url = get_theme_mod( 'cta_section_btn_url', '#contactfrom-section' );
	$cta_section_btn_text = get_theme_mod( 'cta_section_btn_text', '' );
	$cta_section_tell_icon = get_theme_mod( 'cta_section_tell_icon', 'fa fa-phone' );
	$cta_section_mail_icon = get_theme_mod( 'cta_section_mail_icon', 'fa fa-envelope-o' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--front cta section-->
<div id="front-cta-section" class="eb-front-cta-section">
<?php if ( $display_front_cta_section == 'tell_mail'): ?>
	<div class="container inner wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
		<div class="front-cta-col6 front-cta-first cta-tel">
			<div class="front-cta-header">
				<p class="h2"><?php if( $cta_section_tell_icon ) { ?><i class="<?php echo esc_html( $cta_section_tell_icon ); ?>"></i><?php } ?><?php echo esc_html( $cta_section_title_tell ); ?></p>
			</div>
			<div class="front-cta-content">
				<dl class="box-list">
				<?php if ( $cta_section_tell_description ): ?>
				<dt><?php echo nl2br( $cta_section_tell_description ); ?></dt>
				<?php endif; ?>
				<?php if ( $cta_section_tell_number && wp_is_mobile() ): ?>
				<dd class="front-cta-tell"><a href="tel:<?php echo esc_html( $cta_section_tell_number ); ?>"><?php echo esc_html( $cta_section_tell_number ); ?></a></dd>
				<?php endif; ?>
				<?php if ( $cta_section_tell_number && !wp_is_mobile() ): ?>
				<dd class="front-cta-tell"><?php echo esc_html( $cta_section_tell_number ); ?></dd>
				<?php endif; ?>
				<?php if ( $cta_section_business_hours ): ?>
				<dd class="small"><?php echo esc_html( $cta_section_business_hours ); ?></dd>
				<?php endif; ?>
				</dl>
			</div>
		</div>
		<div class="front-cta-col6">
			<div class="front-cta-header">
				<p class="h2"><?php if( $cta_section_mail_icon ) { ?><i class="<?php echo esc_html( $cta_section_mail_icon ); ?>"></i><?php } ?><?php echo esc_html( $cta_section_title_mail ); ?></p>
			</div>
			<div class="front-cta-content front-cta-mail box-list">
				<dl class="box-list">
				<?php if ( $cta_section_description_mail ): ?>
				<dt><?php echo nl2br( $cta_section_description_mail ); ?></dt>
				<?php endif; ?>
				<?php if ( $cta_section_btn_url ): ?>
				<dd><span class="btn front-cta-mail-btn"><a href="<?php echo esc_url( $cta_section_btn_url ); ?>"><?php echo esc_html( $cta_section_btn_text ); ?></a></span></dd>
				<?php endif; ?>
				</dl>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( $display_front_cta_section == 'tell'): ?>
	<div class="front-cta-single wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
			<div class="front-cta-header-single box-list">
				<p class="h2"><?php if( $cta_section_tell_icon ) { ?><i class="<?php echo esc_html( $cta_section_tell_icon ); ?>"></i><?php } ?><?php echo esc_html( $cta_section_title_tell); ?></p>
			</div>
			<div class="front-cta-content box-list">
				<dl>
				<?php if ( $cta_section_tell_description ): ?>
				<dt><?php echo nl2br( $cta_section_tell_description ); ?></dt>
				<?php endif; ?>
				<?php if ( $cta_section_tell_number && wp_is_mobile() ): ?>
				<dd class="front-cta-tell"><a href="tel:<?php echo esc_html( $cta_section_tell_number ); ?>"><?php echo esc_html( $cta_section_tell_number ); ?></a></dd>
				<?php endif; ?>
				<?php if ( $cta_section_tell_number && !wp_is_mobile() ): ?>
				<dd class="front-cta-tell"><?php echo esc_html( $cta_section_tell_number ); ?></dd>
				<?php endif; ?>
				<?php if ( $cta_section_business_hours ): ?>
				<dd class="small"><?php echo esc_html( $cta_section_business_hours ); ?></dd>
				<?php endif; ?>
				</dl>
			</div>

	</div>
<?php endif; ?>
<?php if ( $display_front_cta_section == 'mail'): ?>
	<div class="front-cta-single wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
			<div class="front-cta-header-single box-list">
				<p class="h2"><?php if( $cta_section_mail_icon ) { ?><i class="<?php echo esc_html( $cta_section_mail_icon ); ?>"></i><?php echo esc_html( $cta_section_title_mail ); ?><?php } ?></p>
			</div>
			<div class="front-cta-content front-cta-mail box-list">
				<dl>
				<?php if ( $cta_section_description_mail ): ?>
				<dt><?php echo nl2br( $cta_section_description_mail ); ?></dt>
				<?php endif; ?>
				<?php if ( $cta_section_btn_url ): ?>
				<dd><span class="btn front-cta-mail-btn"><a href="<?php echo esc_url( $cta_section_btn_url ); ?>"><?php echo esc_html( $cta_section_btn_text ); ?></a></span></dd>
				<?php endif; ?>
				</dl>
			</div>
	</div>
<?php endif; ?>
</div>
<!--end cta section-->
<?php endif; ?>