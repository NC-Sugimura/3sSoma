<?php
/**
* LP frequently asked questions section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$faq_section_title = get_theme_mod( 'faq_section_title', '' );
	$faq_section_sub_title = get_theme_mod( 'faq_section_sub_title', '' );
?>
<!--faq section-->
<section id="faq-section" class="lp-faq">
	<div class="lp-container">
		<div class="faq-header wow fadeInDown" data-wow-delay="0.2s">
			<div class="lp-container">
				<div class="col12">
					<?php if ( $faq_section_title ): ?>
					<h2><?php echo esc_html( $faq_section_title ); ?></h2>
					<?php endif; ?>
					<?php if ( $faq_section_sub_title ): ?>
					<p><?php echo nl2br( esc_html( $faq_section_sub_title ) ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="faq-content wow fadeIn" data-wow-delay="0.4s">
			<ul>
			<?php for($li=1; $li<7; $li++) { ?>
			<?php $question = get_theme_mod( 'question_'.$li ); ?>
			<?php $answer = get_theme_mod( 'answer_'.$li ); ?>
			<?php if( $question ): ?>
			<li class="question"><?php echo esc_html( $question ); ?></li>
			<li class="answer"><?php echo nl2br( wp_kses_post( $answer ) ); ?></li>
			<?php endif; ?>
			<?php } ?>
			</ul>
		</div>
	</div>
</section>
<!--end faq section-->