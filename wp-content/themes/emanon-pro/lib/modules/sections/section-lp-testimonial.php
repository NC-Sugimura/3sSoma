<?php
/**
* LP testimonial section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$testimonial_section_title = get_theme_mod( 'testimonial_section_title', '' );
	$testimonial_section_sub_title = get_theme_mod( 'testimonial_section_sub_title', '' );
	$customers_name_1 = get_theme_mod( 'customers_name_1', '' );
	$customers_testimonials_title_1 = get_theme_mod( 'customers_testimonials_title_1', '' );
	$customers_testimonials_1 = get_theme_mod( 'customers_testimonials_1', '' );
	$customers_image_1 = get_theme_mod( 'customers_image_1', '' );
	$customers_name_2 = get_theme_mod( 'customers_name_2', '' );
	$customers_testimonials_title_2 = get_theme_mod( 'customers_testimonials_title_2', '' );
	$customers_testimonials_2 = get_theme_mod( 'customers_testimonials_2', '' );
	$customers_image_2 = get_theme_mod( 'customers_image_2', '' );
	$customers_name_3 = get_theme_mod( 'customers_name_3', '' );
	$customers_testimonials_title_3 = get_theme_mod( 'customers_testimonials_title_3', '' );
	$customers_testimonials_3 = get_theme_mod( 'customers_testimonials_3', '' );
	$customers_image_3 = get_theme_mod( 'customers_image_3', '' );
	$customers_name_4 = get_theme_mod( 'customers_name_4', '' );
	$customers_testimonials_title_4 = get_theme_mod( 'customers_testimonials_title_4', '' );
	$customers_testimonials_4 = get_theme_mod( 'customers_testimonials_4', '' );
	$customers_image_4 = get_theme_mod( 'customers_image_4', '' );
	$customers_name_5 = get_theme_mod( 'customers_name_5', '' );
	$customers_testimonials_title_5 = get_theme_mod( 'customers_testimonials_title_5', '' );
	$customers_testimonials_5 = get_theme_mod( 'customers_testimonials_5', '' );
	$customers_image_5 = get_theme_mod( 'customers_image_5', '' );
	$customers_name_6 = get_theme_mod( 'customers_name_6', '' );
	$customers_testimonials_title_6 = get_theme_mod( 'customers_testimonials_title_6', '' );
	$customers_testimonials_6 = get_theme_mod( 'customers_testimonials_6', '' );
	$customers_image_6 = get_theme_mod( 'customers_image_6', '' );
?>
<!--testimonial section-->
<section id="testimonial-section" class="lp-testimonial">
	<div class="lp-container">
		<div class="testimonial-header wow fadeInDown" data-wow-delay="0.2s">
			<?php if ( $testimonial_section_title ): ?>
			<h2><?php echo esc_html( $testimonial_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $testimonial_section_sub_title ): ?>
			<p><?php echo nl2br( $testimonial_section_sub_title ); ?></p>
			<?php endif; ?>
		</div>
		<!--customers testimonial-->
		<div id="slider-for" class="customers-testimonial wow fadeIn" data-wow-delay="0.2s">
			<?php if ( $customers_image_1 || $customers_name_1 ): ?>
			<div class="customers-testimonial-slide">
				<?php if ( $customers_testimonials_title_1 ): ?>
				<h3><?php echo esc_html( $customers_testimonials_title_1 ); ?></h3>
				<?php endif; ?>
				<?php if ( $customers_testimonials_1 ): ?>
				<p><?php echo nl2br( esc_html( $customers_testimonials_1 ) ); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if ( $customers_image_2 || $customers_name_2 ): ?>
			<div class="customers-testimonial-slide">
				<?php if ( $customers_testimonials_title_2 ): ?>
				<h3><?php echo esc_html( $customers_testimonials_title_2 ); ?></h3>
				<?php endif; ?>
				<?php if ( $customers_testimonials_2 ): ?>
				<p><?php echo nl2br( esc_html( $customers_testimonials_2 ) ); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if ( $customers_image_3 || $customers_name_3 ): ?>
			<div class="customers-testimonial-slide">
				<?php if ( $customers_testimonials_title_3 ): ?>
				<h3><?php echo esc_html( $customers_testimonials_title_3 ); ?></h3>
				<?php endif; ?>
				<?php if ( $customers_testimonials_2 ): ?>
				<p><?php echo nl2br( esc_html( $customers_testimonials_3 ) ); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if ( $customers_image_4 || $customers_name_4 ): ?>
			<div class="customers-testimonial-slide">
				<?php if ( $customers_testimonials_title_4 ): ?>
				<h3><?php echo esc_html( $customers_testimonials_title_4 ); ?></h3>
				<?php endif; ?>
				<?php if ( $customers_testimonials_4 ): ?>
				<p><?php echo nl2br( esc_html( $customers_testimonials_4 ) ); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if ( $customers_image_5 || $customers_name_5 ): ?>
			<div class="customers-testimonial-slide">
				<?php if ( $customers_testimonials_title_5 ): ?>
				<h3><?php echo esc_html( $customers_testimonials_title_5 ); ?></h3>
				<?php endif; ?>
				<?php if ( $customers_testimonials_5 ): ?>
				<p><?php echo nl2br( esc_html( $customers_testimonials_5 ) ); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if ( $customers_image_6 || $customers_name_6 ): ?>
			<div class="customers-testimonial-slide">
				<?php if ( $customers_testimonials_title_6 ): ?>
				<h3><?php echo esc_html( $customers_testimonials_title_6 ); ?></h3>
				<?php endif; ?>
				<?php if ( $customers_testimonials_6 ): ?>
				<p><?php echo nl2br( esc_html( $customers_testimonials_6 ) ); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
		<!--end customers testimonial-->
		<!--customers-face-->
		<div class="customers-face wow fadeIn" data-wow-delay="0.2s">
			<ul id="slider-nav">
				<?php if ( $customers_image_1 || $customers_name_1 ): ?>
				<li>
					<?php if ( $customers_image_1 ): ?>
					<div class="customers-image"><img src="<?php echo esc_url( $customers_image_1 ); ?>" alt="<?php echo esc_html( $customers_name_1 ); ?>"></div>
					<?php endif; ?>
					<?php if ( $customers_name_1 ): ?>
					<div class="customers-name"><?php echo esc_html( $customers_name_1 ); ?></div>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				<?php if ( $customers_image_2 || $customers_name_2 ): ?>
				<li>
					<?php if ( $customers_image_2 ): ?>
					<div class="customers-image"><img src="<?php echo esc_url( $customers_image_2 ); ?>" alt="<?php echo esc_html( $customers_name_2 ); ?>"></div>
					<?php endif; ?>
					<?php if ( $customers_name_2 ): ?>
					<div class="customers-name"><?php echo esc_html( $customers_name_2 ); ?></div>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				<?php if ( $customers_image_3 || $customers_name_3 ): ?>
				<li>
					<?php if ( $customers_image_3 ): ?>
					<div class="customers-image"><img src="<?php echo esc_url( $customers_image_3 ); ?>" alt="<?php echo esc_html( $customers_name_3 ); ?>"></div>
					<?php endif; ?>
					<?php if ( $customers_name_3 ): ?>
					<div class="customers-name"><?php echo esc_html( $customers_name_3 ); ?></div>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				<?php if ( $customers_image_4 || $customers_name_4 ): ?>
				<li>
					<?php if ( $customers_image_4 ): ?>
					<div class="customers-image"><img src="<?php echo esc_url( $customers_image_4 ); ?>" alt="<?php echo esc_html( $customers_name_4 ); ?>"></div>
					<?php endif; ?>
					<?php if ( $customers_name_4 ): ?>
					<div class="customers-name"><?php echo esc_html( $customers_name_4 ); ?></div>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				<?php if ( $customers_image_5 || $customers_name_5 ): ?>
				<li>
					<?php if ( $customers_image_5 ): ?>
					<div class="customers-image"><img src="<?php echo esc_url( $customers_image_5 ); ?>" alt="<?php echo esc_html( $customers_name_5 ); ?>"></div>
					<?php endif; ?>
					<?php if ( $customers_name_5 ): ?>
					<div class="customers-name"><?php echo esc_html( $customers_name_5 ); ?></div>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				<?php if ( $customers_image_6 || $customers_name_6 ): ?>
				<li>
					<?php if ( $customers_image_6 ): ?>
					<div class="customers-image"><img src="<?php echo esc_url( $customers_image_6 ); ?>" alt="<?php echo esc_html( $customers_name_6 ); ?>"></div>
					<?php endif; ?>
					<?php if ( $customers_name_6 ): ?>
					<div class="customers-name"><?php echo esc_html( $customers_name_6 ); ?></div>
					<?php endif; ?>
				</li>
				<?php endif; ?>
			</ul>
		</div>
		<!--end customers-face-->
	</div>
</section>
<!--end testimonial section-->