<?php
/**
* Top slider section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$slider_speed = get_theme_mod( 'slider_speed', 4000 );
	$slider_animation = get_theme_mod( 'slider_animation', 'fade' );
	$slider_controls = get_theme_mod( 'slider_controls', '' );
	$slider_pager = get_theme_mod( 'slider_pager', '' );
	$slider_auto = get_theme_mod( 'slider_auto', '' );
	$slider_text_stop = get_theme_mod( 'slider_text_stop', '' );
	if ( !$slider_text_stop ) { $slider_text_toggle = true; } else { $slider_text_toggle = false; }
	$slider_text_animation = get_theme_mod( 'slider_text_animation', 'fade' );
	$slider_text_speed = get_theme_mod( 'slider_text_speed', 4000 );
	$slider_image_responsive = get_theme_mod( 'slider_image_responsive', '' );
	$slider_image_1 = get_theme_mod( 'slider_image_1', get_theme_file_uri() . '/lib/images/emanon-header-img.jpg' );
	$slider_image_2 = get_theme_mod( 'slider_image_2', '' );
	$slider_image_3 = get_theme_mod( 'slider_image_3', '' );
	$slider_image_4 = get_theme_mod( 'slider_image_4', '' );
	$slider_image_5 = get_theme_mod( 'slider_image_5', '' );
	$slider_image_sp_1 = get_theme_mod( 'slider_image_sp_1', '' );
	$slider_image_sp_2 = get_theme_mod( 'slider_image_sp_2', '' );
	$slider_image_sp_3 = get_theme_mod( 'slider_image_sp_3', '' );
	$slider_image_sp_4 = get_theme_mod( 'slider_image_sp_4', '' );
	$slider_image_sp_5 = get_theme_mod( 'slider_image_sp_5', '' );
	$slider_title_1 = get_theme_mod( 'slider_title_1', 'Welcome to Emanon' );
	$slider_sub_title_1 = get_theme_mod( 'slider_sub_title_1', 'Ready to Start Your Own Business?' );
	$slider_title_2 = get_theme_mod( 'slider_title_2', '' );
	$slider_sub_title_2 = get_theme_mod( 'slider_sub_title_2', '' );
	$slider_title_3 = get_theme_mod( 'slider_title_3', '' );
	$slider_sub_title_3 = get_theme_mod( 'slider_sub_title_3', '' );
	$slider_title_4 = get_theme_mod( 'slider_title_4', '' );
	$slider_sub_title_4 = get_theme_mod( 'slider_sub_title_4', '' );
	$slider_title_5 = get_theme_mod( 'slider_title_5', '' );
	$slider_sub_title_5 = get_theme_mod( 'slider_sub_title_5', '' );
	$slider_btn_url = get_theme_mod( 'slider_btn_url', '' );
	$slider_btn_text = get_theme_mod( 'slider_btn_text', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--slider-->
<div class="slider">
	<!--slider image-->
	<ul id="bxslider" data-auto="<?php echo esc_attr( $slider_auto ); ?>" data-animation="<?php echo esc_attr( $slider_animation ) ; ?>" data-speed="<?php echo esc_attr( $slider_speed ); ?>" data-pager="<?php echo esc_attr( $slider_pager ); ?>" data-controls="<?php echo esc_attr( $slider_controls) ; ?>">
	<?php if ( $slider_image_responsive ): ?>
		<?php if ( $slider_image_1 ): ?>
		<li><img src="<?php echo esc_url( $slider_image_1 ); ?>" alt="<?php echo esc_html( $slider_title_1 ); ?>" /></li>
		<?php endif; ?>
		<?php if ( $slider_image_2 ): ?>
		<li><img src="<?php echo esc_url( $slider_image_2 ); ?>" alt="<?php echo esc_html( $slider_title_2 ); ?>" /></li>
		<?php endif; ?>
		<?php if ( $slider_image_3 ): ?>
		<li><img src="<?php echo esc_url( $slider_image_3 ); ?>" alt="<?php echo esc_html( $slider_title_3 ); ?>" /></li>
		<?php endif; ?>
		<?php if ( $slider_image_4 ): ?>
		<li><img src="<?php echo esc_url( $slider_image_4 ); ?>" alt="<?php echo esc_html( $slider_title_4 ); ?>" /></li>
		<?php endif; ?>
		<?php if ( $slider_image_5 ): ?>
		<li><img src="<?php echo esc_url( $slider_image_5 ); ?>" alt="<?php echo esc_html( $slider_title_5 ); ?>" /></li>
		<?php endif; ?>
	<?php elseif ( is_mobile() &&  $slider_image_sp_1 ): ?>
		<?php if ( $slider_image_sp_1 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_sp_1 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_sp_2 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_sp_2 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_sp_3 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_sp_3 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_sp_4 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_sp_4 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_sp_5 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_sp_5 ); ?>);"></li>
		<?php endif; ?>
	<?php else: ?>
		<?php if ( $slider_image_1 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_1 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_2 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_2 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_3 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_3 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_4 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_4 ); ?>);"></li>
		<?php endif; ?>
		<?php if ( $slider_image_5 ): ?>
		<li style="background-image:url(<?php echo esc_url( $slider_image_5 ); ?>);"></li>
		<?php endif; ?>
	<?php endif; ?>
	</ul>
	<!--end slider image-->
	<?php if ( $slider_title_1 || $slider_sub_title_1 || $slider_btn_url ): ?>
	<!--slider message-->
	<div class="slider-message wow fadeIn" data-wow-duration="0.4s" data-wow-delay="1.0s">
		<ul id="bxslider-text" class="clearfix" data-auto="<?php echo esc_attr( $slider_text_toggle ); ?>" data-animation="<?php echo esc_attr( $slider_text_animation ) ; ?>" data-speed="<?php echo esc_attr( $slider_text_speed ); ?>" >
		<?php if ( $slider_title_1 || $slider_sub_title_1 ): ?>
			<?php if ( is_mobile() ): ?>
			<li>
				<h2 class="slider-title"><?php echo esc_html( $slider_title_1 ); ?></h2>
				<p class="slider-sub-title"><?php echo nl2br( esc_html( $slider_sub_title_1 ) ); ?></p>
			</li>
			<?php else: ?>
			<li>
				<h2 class="slider-title"><?php echo esc_html( $slider_title_1 ); ?></h2>
				<p class="slider-sub-title"><?php echo nl2br( esc_html( $slider_sub_title_1 ) ); ?></p>
			</li>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( $slider_title_2 || $slider_sub_title_2 ): ?>
			<li>
				<h2 class="slider-title"><?php echo esc_html( $slider_title_2 ); ?></h2>
				<p class="slider-sub-title"><?php echo nl2br( $slider_sub_title_2 ); ?></p>
			</li>
		<?php endif; ?>
		<?php if ( $slider_title_3 || $slider_sub_title_3 ): ?>
			<li>
				<h2 class="slider-title"><?php echo esc_html( $slider_title_3 ); ?></h2>
				<p class="slider-sub-title"><?php echo nl2br( $slider_sub_title_3 ); ?></p>
			</li>
		<?php endif; ?>
		<?php if ( $slider_title_4 || $slider_sub_title_4 ): ?>
			<li>
				<h2 class="slider-title"><?php echo esc_html( $slider_title_4 ); ?></h2>
				<p class="slider-sub-title"><?php echo nl2br( $slider_sub_title_4 ); ?></p>
			</li>
		<?php endif; ?>
		<?php if ( $slider_title_5 || $slider_sub_title_5 ): ?>
			<li>
				<h2 class="slider-title"><?php echo esc_html( $slider_title_5 ); ?></h2>
				<p class="slider-sub-title"><?php echo nl2br( $slider_sub_title_5 ); ?></p>
			</li>
		<?php endif; ?>
		</ul>
		<!--cta btn-->
		<?php if ( $slider_btn_url ): ?>
		<?php if ( is_mobile() ): ?>
		<div class="slider-btn">
			<span class="btn btn-sm slider-btn-bg"><a href="<?php echo esc_url( $slider_btn_url ); ?>"><?php echo esc_html( $slider_btn_text ); ?></a></span>
		</div>
		<?php else: ?>
		<div class="slider-btn wow fadeInUp" data-wow-duration="1.0s" data-wow-delay="1.6s">
			<span class="btn btn-sm slider-btn-bg"><a href="<?php echo esc_url( $slider_btn_url ); ?>"><?php echo esc_html( $slider_btn_text ); ?></a></span>
		</div>
		<?php endif; ?>
		<?php endif; ?>
		<!--end cta btn-->
	</div>
	<div class="loading-wrapper"></div>
	<div class="slider-overlay"></div>
	<!--end slider message-->
	<?php endif; ?>
</div>
<!--end slider-->
<?php endif; ?>