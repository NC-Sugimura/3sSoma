<?php
/**
* Template single-works posts
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
$post_thumbnail_layout = get_theme_mod( 'post_thumbnail_layout', 'wide' );
	$none_display_thumbnail = post_custom( 'emanon_none_display_thumbnail' );
	$display_mobile_footer_single = get_theme_mod( 'display_mobile_footer_single', '' );
	$display_fb_like_btn = get_theme_mod( 'display_fb_like_btn', '' );
	$display_content_twitter_follow = get_theme_mod( 'display_content_twitter_follow', '' );
	$display_content_sns_follow = get_theme_mod( 'display_content_sns_follow', '' );
	$display_author_profile = get_theme_mod( 'display_author_profile', '' );
	$display_sns_on_post = get_theme_mod( 'display_sns_on_post', true );

get_header(); ?>

<!--content-->
<div class="content">
    <div class="container">
        <?php emanon_single_breadcrumb(); ?>
        <!--main-->
        <main>
            <div class="col-main first">
                <!--article-->
                <article <?php post_class( 'article' ); ?>>
                    <?php while ( have_posts() ): the_post(); ?>
                    <header>
                        <div class="article-header">
                            <h1 class="entry-title"><?php the_title(); ?><?php emanon_subtitle(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h1>
                        </div>
                        <?php if( $none_display_thumbnail ): ?>
                        <?php elseif( has_post_thumbnail() && $post_thumbnail_layout != 'no_display' ): ?>
                        <div class="article-thumbnail">
                            <?php the_post_thumbnail( 'large-thumbnail' ); ?>
                            <?php emanon_post_thumbnail_caption(); ?>
                        </div>
                        <?php endif; ?>
                    </header>
                    <?php if( $display_sns_on_post ) :?>
                    <?php emanon_top_sns_share(); ?>
                    <?php endif; ?>
                    <?php if( is_mobile() ) :?>
                    <?php dynamic_sidebar( 'page-top-sp' ); ?>
                    <?php else:?>
                    <?php dynamic_sidebar( 'page-top-pc' ); ?>
                    <?php endif; ?>
                    <!--　ここから「施工事例」カスタム投稿テンプレート　-->
                    <section id="custom-works" class="article-body">
                        <div class="info-wrap">
                            <div class="title-area">
                                <p class="customer"><?php the_field('name'); ?></p>
                            </div>
                            <div class="table-area">
                                <table>
                                    <tr>
                                        <th>Work</th>
                                        <td><?php the_field('work'); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="gallery-area">
                            <h2>GALLERY</h2>
                            <div class="gallery-area">
                                <?php the_field('gallery'); ?>
                            </div>
                        </div>
                        <div class="btn">
                            <a class="inquiry" href="http://3s-soma.co.jp/works/">施工事例一覧に戻る</a>
                        </div>

                        <?php emanon_entry_meta(); ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages('before=<div class="next-page">&after=</div>&next_or_number=number&pagelink=<span class="page-numbers">%</span>'); ?>
                    </section>
                    <!--　ここまで　-->
                    <?php if( is_mobile() ) :?>
                    <?php dynamic_sidebar( 'page-bottom-sp' ); ?>
                    <?php else:?>
                    <?php dynamic_sidebar( 'page-bottom-pc' ); ?>
                    <?php endif; ?>

                    <?php if( $display_sns_on_post ) :?>
                    <?php emanon_bottom_sns_share(); ?>
                    <?php endif; ?>
                    <?php emanon_under_ad300(); ?>
                    <?php emanon_cta_single(); ?>

                    <?php if ( comments_open() || get_comments_number() || $display_fb_like_btn || $display_content_twitter_follow || $display_content_sns_follow || $display_author_profile ): ?>
                    <footer class="article-footer">
                        <?php emanon_content_fb_like_follow(); ?>
                        <?php emanon_content_twitter_follow(); ?>
                        <?php emanon_content_sns_follow(); ?>
                        <?php emanon_author_profile(); ?>
                        <?php comments_template(); ?>
                    </footer>
                    <?php endif; ?>
                    <?php if ( $display_mobile_footer_single && is_mobile() ): ?>
                    <?php emanon_mobile_footer_buttons_single(); ?>
                    <?php emanon_mobile_footer_buttons_modal_window(); ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </article>
                <!--end article-->
                <?php emanon_display_pre_nex(); ?>
                <?php emanon_related_post(); ?>

            </div>
        </main>
        <!--end main-->
        <!--sidebar-->
        <aside class="col-sidebar sidebar">
            <?php get_sidebar(); ?>
        </aside>
        <!--end sidebar-->
    </div>
</div>
<!--end content-->

<?php get_footer(); ?>
<?php
	if( !is_bot() && !is_user_logged_in() && is_active_widget( '', '', 'popular_posts_widget' ) ) { 
		set_emanon_post_views( get_the_ID() );
	}
?>
