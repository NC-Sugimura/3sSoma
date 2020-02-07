<?php
/**
* Accordion frequently asked questions section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Pro 1.2
*/
	$faq_section_title = get_theme_mod( 'accordion_faq_section_title', '' );
	$faq_section_description = get_theme_mod( 'accordion_faq_section_description', '' );
	$faq_btn_url = get_theme_mod( 'faq_btn_url', '' );
	$faq_btn_text = get_theme_mod( 'faq_btn_text', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--accordion faq section-->
<div id="accordion-faq-section" class="eb-accordion-faq-section">
	<div class="accordion-faq-container inner">
		<div class="accordion-faq-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
			<div class="col12">
				<?php if ( $faq_section_title ): ?>
				<h2><?php echo esc_html( $faq_section_title ); ?></h2>
				<?php endif; ?>
				<?php if ( $faq_section_description ): ?>
				<p><?php echo nl2br( esc_html( $faq_section_description ) ); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="accordion-faq-content wow fadeIn" data-wow-delay="0.8s">
			<dl id="panel">
			<?php for($li=1; $li<11; $li++) { ?>
			<?php $question = get_theme_mod( 'accordion_question_'.$li ); ?>
			<?php $answer = get_theme_mod( 'accordion_answer_'.$li ); ?>
			<?php if( $question ): ?>
			<dt class="question"><?php echo esc_html( $question ); ?></dt>
			<dd class="answer"><?php echo nl2br( wp_kses_post( $answer ) ); ?></dd>
			<?php endif; ?>
			<?php } ?>
			</dl>
		</div>
	</div>
	<?php if ( $faq_btn_url ): ?>
	<div class="wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s">
	<span class="btn faq-section-btn"><a href="<?php echo esc_url( $faq_btn_url ); ?>"><?php echo esc_html( $faq_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>
</div>
<!--end accordion faq section-->
<?php endif; ?>