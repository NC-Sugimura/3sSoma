<?php
/**
* Mobile footer buttons
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.4.5
*/

	$mobile_footer_btn_style = get_theme_mod( 'mobile_footer_btn_style', 'no_display' );

	$display_home_btn_mobile = get_theme_mod( 'display_home_btn_mobile', '' );
	$home_btn_icon_mobile = get_theme_mod( 'home_btn_icon_mobile', 'fa fa-home' );
	$home_btn_text_mobile = get_theme_mod( 'home_btn_text_mobile', __( 'Home', 'emanon' ) );

	$display_tel_btn_mobile = get_theme_mod( 'display_tel_btn_mobile', '' );
	$tel_btn_icon_mobile = get_theme_mod( 'tel_btn_icon_mobile', 'fa fa-phone' );
	$tel_btn_text_mobile = get_theme_mod( 'tel_btn_text_mobile', __( 'Tel', 'emanon' ) );
	$tel_number_text_mobile = get_theme_mod( 'tel_number_text_mobile', '' );

	$display_footer_btn_mobile_1 = get_theme_mod( 'display_footer_btn_mobile_1', '' );
	$footer_btn_icon_mobile_1 = get_theme_mod( 'footer_btn_icon_mobile_1', '' );
	$footer_btn_text_mobile_1 = get_theme_mod( 'footer_btn_text_mobile_1', '' );
	$footer_btn_url_mobile_1 = get_theme_mod( 'footer_btn_url_mobile_1', '' );

	$display_footer_btn_mobile_2 = get_theme_mod( 'display_footer_btn_mobile_2', '' );
	$footer_btn_icon_mobile_2 = get_theme_mod( 'footer_btn_icon_mobile_2', '' );
	$footer_btn_text_mobile_2 = get_theme_mod( 'footer_btn_text_mobile_2', '' );
	$footer_btn_url_mobile_2 = get_theme_mod( 'footer_btn_url_mobile_2', '' );
	
	$display_footer_btn_mobile_3 = get_theme_mod( 'display_footer_btn_mobile_3', '' );
	$footer_btn_icon_mobile_3 = get_theme_mod( 'footer_btn_icon_mobile_3', '' );
	$footer_btn_text_mobile_3 = get_theme_mod( 'footer_btn_text_mobile_3', '' );
	$footer_btn_url_mobile_3 = get_theme_mod( 'footer_btn_url_mobile_3', '' );

	$display_follow_btn_mobile = get_theme_mod( 'display_follow_btn_mobile', '' );
	$follow_btn_icon_mobile = get_theme_mod( 'follow_btn_icon_mobile', 'fa fa-plus' );
	$follow_btn_text_mobile = get_theme_mod( 'follow_btn_text_mobile', __( 'Follow', 'emanon' ) );

	$display_share_btn_mobile = get_theme_mod( 'display_share_btn_mobile', '' );
	$share_btn_icon_mobile = get_theme_mod( 'share_btn_icon_mobile', 'fa fa-share-alt' );
	$share_btn_text_mobile = get_theme_mod( 'share_btn_text_mobile', __( 'Share', 'emanon' ) );

	$display_twitter_btn_mobile = get_theme_mod( 'display_twitter_btn_mobile', '' );
	$display_facebook_btn_mobile = get_theme_mod( 'display_facebook_btn_mobile', '' );
	$display_hatena_btn_mobile = get_theme_mod( 'display_hatena_btn_mobile', '' );
	$display_pocket_btn_mobile = get_theme_mod( 'display_pocket_btn_mobile', '' );
	$display_line_btn_mobile = get_theme_mod( 'display_line_btn_mobile', '' );

	$display_search_btn_mobile = get_theme_mod( 'display_search_btn_mobile', '' );
	$search_btn_icon_mobile = get_theme_mod( 'search_btn_icon_mobile', 'fa fa-search' );
	$search_btn_text_mobile = get_theme_mod( 'search_btn_text_mobile', __( 'Search', 'emanon' ) );

	$display_page_top_btn_mobile = get_theme_mod( 'display_page_top_btn_mobile', '' );
	$page_top_btn_icon_mobile = get_theme_mod( 'page_top_btn_icon_mobile', 'fa fa-chevron-up' );
	$page_top_btn_text_mobile = get_theme_mod( 'page_top_btn_text_mobile', __( 'Top', 'emanon' ) );

	$url_encoded = urlencode( get_permalink() );
	$title_encoded = urlencode( get_the_title() .' | ' . get_bloginfo( 'name' ) );
?>

<?php if ( $mobile_footer_btn_style == 'display' ): ?>
<aside class="mobile-footer-btn">
	<ul>
		<?php if ( $display_home_btn_mobile ): ?>
		<li>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="<?php echo esc_html( $home_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $home_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_tel_btn_mobile ): ?>
		<li>
		<a href="tel:<?php echo esc_html( $tel_number_text_mobile ); ?>"><i class="<?php echo esc_html( $tel_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $tel_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_footer_btn_mobile_1 ): ?>
		<li>
		<a href="<?php echo esc_url( $footer_btn_url_mobile_1 ); ?>"><i class="<?php echo esc_html( $footer_btn_icon_mobile_1 ); ?>"></i><br><?php echo esc_html( $footer_btn_text_mobile_1 ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_footer_btn_mobile_2 ): ?>
		<li>
		<a href="<?php echo esc_url( $footer_btn_url_mobile_2 ); ?>"><i class="<?php echo esc_html( $footer_btn_icon_mobile_2 ); ?>"></i><br><?php echo esc_html( $footer_btn_text_mobile_2 ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_footer_btn_mobile_3 ): ?>
		<li>
		<a href="<?php echo esc_url( $footer_btn_url_mobile_3 ); ?>"><i class="<?php echo esc_html( $footer_btn_icon_mobile_3 ); ?>"></i><br><?php echo esc_html( $footer_btn_text_mobile_3 ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_follow_btn_mobile ): ?>
		<li>
		<a href="#modal-follow-btn" data-remodal-target="modal-follow-btn"><i class="<?php echo esc_html( $follow_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $follow_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_share_btn_mobile ): ?>
		<!--modal window-->
		<li>
		<a href="#modal-share-btn" data-remodal-target="modal-share-btn"><i class="<?php echo esc_html( $share_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $share_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<!--end modal window-->
		<?php if ( $display_search_btn_mobile ): ?>
		<li>
		<a href="#modal-search-btn" data-remodal-target="modal-search-btn"><i class="<?php echo esc_html( $search_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $search_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_page_top_btn_mobile ): ?>
		<li>
		<a href="#top"><i class="<?php echo esc_html( $page_top_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $page_top_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
	</ul>
</aside>
<?php elseif ( $mobile_footer_btn_style == 'display_no_share_button' ): ?>
<aside class="mobile-footer-btn">
	<ul>
		<?php if ( $display_home_btn_mobile ): ?>
		<li>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="<?php echo esc_html( $home_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $home_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_tel_btn_mobile ): ?>
		<li>
		<a href="tel:<?php echo esc_html( $tel_number_text_mobile ); ?>"><i class="<?php echo esc_html( $tel_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $tel_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_footer_btn_mobile_1 ): ?>
		<li>
		<a href="<?php echo esc_url( $footer_btn_url_mobile_1 ); ?>"><i class="<?php echo esc_html( $footer_btn_icon_mobile_1 ); ?>"></i><br><?php echo esc_html( $footer_btn_text_mobile_1 ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_footer_btn_mobile_2 ): ?>
		<li>
		<a href="<?php echo esc_url( $footer_btn_url_mobile_2 ); ?>"><i class="<?php echo esc_html( $footer_btn_icon_mobile_2 ); ?>"></i><br><?php echo esc_html( $footer_btn_text_mobile_2 ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_footer_btn_mobile_3 ): ?>
		<li>
		<a href="<?php echo esc_url( $footer_btn_url_mobile_3 ); ?>"><i class="<?php echo esc_html( $footer_btn_icon_mobile_3 ); ?>"></i><br><?php echo esc_html( $footer_btn_text_mobile_3 ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_follow_btn_mobile ): ?>
		<li>
		<a href="#modal-follow-btn" data-remodal-target="modal-follow-btn"><i class="<?php echo esc_html( $follow_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $follow_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_twitter_btn_mobile ): ?>
		<li>
		<a target="_blank" href="http://twitter.com/intent/tweet?url=<?php echo $url_encoded; ?>&amp;&text=<?php echo $title_encoded; ?>&tw_p=tweetbutton" target="_blank"><i class="fa fa-twitter"></i><br><span class="sns-name">Twitter</span></a>
		</li>
		<?php endif; ?>
		<?php if (	$display_facebook_btn_mobile ): ?>
		<li>
		<a target="_blank" href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encoded; ?>&amp;t=<?php echo $title_encoded; ?>"><i class="fa fa-facebook"></i><br>facebook</a>
		</li>
		<?php endif; ?>
		<?php if ( $display_hatena_btn_mobile ): ?>
		<li>
		<a target="_blank" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>"><i class="fa hatebu-icon"></i><br>はてブ</a>
		</li>
		<?php endif; ?>
		<?php if ( $display_pocket_btn_mobile ): ?>
		<li>
		<a target="_blank" href="http://getpocket.com/edit?url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>"><i class="fa fa-get-pocket"></i><br>pocket</a>
		</li>
		<?php endif; ?>
		<?php if ( $display_line_btn_mobile ): ?>
		<li class="line">
		<a target="_blank" href="https://timeline.line.me/social-plugin/share?url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>"><i class="fa fa-comment-o" aria-hidden="true"></i><br>LINE</a>
		</li>
		<?php endif; ?>
		<?php if ( $display_search_btn_mobile ): ?>
		<li>
		<a href="#modal-search-btn" data-remodal-target="modal-search-btn"><i class="<?php echo esc_html( $search_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $search_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
		<?php if ( $display_page_top_btn_mobile ): ?>
		<li>
		<a href="#top"><i class="<?php echo esc_html( $page_top_btn_icon_mobile ); ?>"></i><br><?php echo esc_html( $page_top_btn_text_mobile ); ?></a>
		</li>
		<?php endif; ?>
	</ul>
</aside>
<?php endif; ?>
