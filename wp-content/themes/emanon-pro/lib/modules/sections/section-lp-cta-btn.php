<?php
/**
* LP calls to action button section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/
 $display_cta_lp_type = get_theme_mod( 'display_cta_lp_type', 'mail' );
 $cta_tel_lp_icon = get_theme_mod( 'cta_tel_lp_icon','' );
 $cta_tel_lp_title = get_theme_mod( 'cta_tel_lp_title', '' );
 $cta_tel_lp_description = get_theme_mod( 'cta_tel_lp_description', '' );
 $cta_tel_lp_number = get_theme_mod( 'cta_tel_lp_number', '' );
 $cta_tel_lp_business_hours = get_theme_mod( 'cta_tel_lp_business_hours', '' );
 $cta_btn_lp_icon = get_theme_mod( 'cta_btn_lp_icon', '' );
 $cta_btn_lp_title = get_theme_mod( 'cta_btn_lp_title', '' );
 $cta_btn_lp_description = get_theme_mod( 'cta_btn_lp_description', '' );
 $cta_btn_lp_btn_text = get_theme_mod( 'cta_btn_lp_btn_text', '' );
?>
<!--cta btn section-->
<section id="cta-btn-section" class="lp-cta-btn">

	<?php if ( $display_cta_lp_type == 'mail') : ?>
	<div class="lp-container">
		<div class="col6 first box-list">
			<?php if ( $cta_btn_lp_title ): ?>
			<h2><?php if( $cta_btn_lp_icon ) { ?><i class="<?php echo esc_html( $cta_btn_lp_icon ); ?>"></i><?php } ?><?php echo esc_html( $cta_btn_lp_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $cta_btn_lp_description ): ?>
			<p><?php echo nl2br( esc_html( $cta_btn_lp_description ) ); ?></p>
			<?php endif; ?>
		</div>
		<div class="col6 lp-cta-btn-box box-list wow fadeIn" data-wow-delay="0.2s">
			<?php if ( $cta_btn_lp_btn_text ): ?>
			<span class="btn lp-cta-btn-bg"><a href="#cta-section"><?php echo esc_html( $cta_btn_lp_btn_text ); ?></a></span>
			<?php endif; ?>
		<div>
	</div>
	<?php endif; ?>
	<?php if ( $display_cta_lp_type == 'tel') : ?>
	<div class="lp-container">
		<div class="col6 first box-list">
			<?php if ( $cta_tel_lp_title ): ?>
			<h2><?php if( $cta_tel_lp_icon ) { ?><i class="<?php echo esc_html( $cta_tel_lp_icon ); ?>"></i><?php } ?><?php echo esc_html( $cta_tel_lp_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $cta_tel_lp_description ): ?>
			<p><?php echo nl2br( esc_html( $cta_tel_lp_description ) ); ?></p>
			<?php endif; ?>
		</div>
		<div class="col6 lp-cta-btn-box box-list wow fadeIn" data-wow-delay="0.2s">
			<dl class="text-center">
				<?php if ( $cta_tel_lp_number && wp_is_mobile() ): ?>
				<dt class="lp-cta-tell"><a href="tel:<?php echo esc_html( $cta_tel_lp_number ); ?>"><?php echo esc_html( $cta_tel_lp_number ); ?></a></dt>
				<?php endif; ?>
				<?php if ( $cta_tel_lp_number && !wp_is_mobile() ): ?>
				<dt class="lp-cta-tell"><?php echo esc_html( $cta_tel_lp_number ); ?></dt>
				<?php endif; ?>
				<?php if ( $cta_tel_lp_business_hours ): ?>
				<dd class="lp-cta-hours"><?php echo esc_html( $cta_tel_lp_business_hours ); ?></dd>
				<?php endif; ?>
			</dl>
		<div>
	</div>
	<?php endif; ?>
	<?php if ( $display_cta_lp_type == 'tel_mail') : ?>
	<div class="lp-container lp-cta-tell-mail">
		<div class="col6 first wow fadeIn" data-wow-delay="0.2s">
			<?php if ( $cta_tel_lp_title ): ?>
			<h2><?php if( $cta_tel_lp_icon ) { ?><i class="<?php echo esc_html( $cta_tel_lp_icon ); ?>"></i><?php } ?><?php echo esc_html( $cta_tel_lp_title ); ?></h2>
			<?php endif; ?>
			<dl class="box-list ">
				<?php if ( $cta_tel_lp_description ): ?>
				<dt><?php echo nl2br( esc_html( $cta_tel_lp_description ) ); ?></dt>
				<?php endif; ?>
				<?php if ( $cta_tel_lp_number && wp_is_mobile() ): ?>
				<dd class="lp-cta-tell"><a href="tel:<?php echo esc_html( $cta_tel_lp_number ); ?>"><?php echo esc_html( $cta_tel_lp_number ); ?></a></dd>
				<?php endif; ?>
				<?php if ( $cta_tel_lp_number && !wp_is_mobile() ): ?>
				<dd class="lp-cta-tell"><?php echo esc_html( $cta_tel_lp_number ); ?></dd>
				<?php endif; ?>
				<?php if ( $cta_tel_lp_business_hours ): ?>
				<dd class="lp-cta-hours"><?php echo esc_html( $cta_tel_lp_business_hours ); ?></dd>
				<?php endif; ?>
			</dl>
		</div>
		<div class="col6 wow fadeIn" data-wow-delay="0.2s">
			<?php if ( $cta_btn_lp_title ): ?>
			<h2><?php if( $cta_btn_lp_icon ) { ?><i class="<?php echo esc_html( $cta_btn_lp_icon ); ?>"></i><?php } ?><?php echo esc_html( $cta_btn_lp_title ); ?></h2>
			<?php endif; ?>
			<dl class="box-list">
			<?php if ( $cta_btn_lp_description ): ?>
			<dt><?php echo nl2br( esc_html( $cta_btn_lp_description ) ); ?></dt>
			<?php endif; ?>
			<?php if ( $cta_btn_lp_btn_text ): ?>
			<dd><span class="btn btn-lg lp-cta-btn-bg"><a href="#cta-section"><?php echo esc_html( $cta_btn_lp_btn_text ); ?></a></span></dd>
			<?php endif; ?>
			</dl>
		</div>
	</div>
	<?php endif; ?>

</section>
<!--end cta btn section-->
