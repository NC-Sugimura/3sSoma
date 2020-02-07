<?php
/**
* SNS count buttons (SNS count cache)
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2
*/
	$url_encoded = urlencode( get_permalink() );
	$title_encoded = urlencode( get_the_title() .' | ' . get_bloginfo( 'name' ) );
	$twitter_follow = get_theme_mod( 'display_content_twitter_follow', '' );
?>
<!--share btn-->
<aside class="share-btn">
	<ul>
		<?php if ( is_emanon_display_twitter_btn() ): ?>
		<li class="twitter">
<a <?php if ( !$twitter_follow ) { ?>class="share"<?php } ?> target="_blank" href="http://twitter.com/intent/tweet?url=<?php echo $url_encoded; ?>&amp;&text=<?php echo $title_encoded; ?>&tw_p=tweetbutton" ><i class="fa fa-twitter"></i><span class="sns-name">Twitter</span><span class="count"><?php if( function_exists( 'scc_get_share_twitter' ) ) echo ( scc_get_share_twitter() == 0 ) ?'':scc_get_share_twitter(); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_facebook_btn() ): ?>
		<li class="facebook">
		<a class="share" target="_blank" href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encoded; ?>&amp;t=<?php echo $title_encoded; ?>"><i class="fa fa-facebook"></i><span class="sns-name">Facebook</span><span class="count"><?php if( function_exists( 'scc_get_share_facebook' ) ) echo ( scc_get_share_facebook() == 0 ) ?'':scc_get_share_facebook(); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_hatena_btn() ): ?>
		<li class="hatebu">
		<a class="share" target="_blank" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encoded; ?>&amp;title=<?php echo $title_encoded; ?>" ><i class="fa hatebu-icon"></i><span class="sns-name"><?php _e( 'hatebu', 'emanon' ); ?></span><span class="count"><?php if( function_exists( 'scc_get_share_hatebu' ) ) echo ( scc_get_share_hatebu() == 0 ) ?'':scc_get_share_hatebu(); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_pocket_btn() ): ?>
		<li class="pocket">
		<a class="share" target="_blank" href="http://getpocket.com/edit?url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>"><i class="fa fa-get-pocket"></i><span class="sns-name">Pocket</span><span class="count"><?php if( function_exists( 'scc_get_share_pocket' ) ) echo ( scc_get_share_pocket() == 0 ) ?'':scc_get_share_pocket(); ?></span></a></li>
		<?php endif; ?>
		<?php if ( is_emanon_display_line_btn() ): ?>
		<li class="line">
		<a class="share" target="_blank" href="https://timeline.line.me/social-plugin/share?url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>">LINE</a>
		</li>
		<?php endif; ?>
	</ul>
</aside>
<!--end share btn-->