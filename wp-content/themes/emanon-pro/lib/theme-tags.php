<?php
/**
* Theme tags
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

/*------------------------------------------------------------------------------------
/* 全般設定
/*----------------------------------------------------------------------------------*/
// metaタグの表示判定
function is_emanon_active_meta_tage_settings() {
	$active_meta_tage_settings = get_theme_mod( 'active_meta_tage_settings', true );
	return $active_meta_tage_settings;
}

// Keywordsの取得
function get_emanon_keywords() {
	global $wp_query;
	$post = $wp_query->get_queried_object();
	$meta_post_keywords = post_custom( 'emanon_meta_keywords' );
	$common_keywords = get_theme_mod( 'top_keywords', '' );

	if ( is_home() || is_front_page() ) {
			$keywords = $common_keywords;
		if ( $common_keywords == "" ) {
			$keywords = get_bloginfo( 'name' );
			}
	} elseif ( !empty( $post->post_password ) ) {
			$keywords = __( 'Protected post.','emanon' );
	} elseif ( is_single() ) {
		if( is_singular( 'post' ) ) {
				$keywords = $meta_post_keywords;
			if ( $meta_post_keywords == "" ) {
					$post_cat = get_the_category();
					$cat = $post_cat[0];
					$keywords = $cat->cat_name;
				}
			} else {
				$taxonomies = get_the_taxonomies();
				$taxonomy = key( $taxonomies );
				if ( $taxonomies ) {
					$terms = get_the_terms( get_the_ID(), $taxonomy );
					$term = reset( $terms );
					$keywords = $term -> name;
					}
				}
	} elseif ( is_page() ) {
			$keywords = $meta_post_keywords;
		if ( $meta_post_keywords == "" ) {
			$keywords = $common_keywords;
			}
		if ( $meta_post_keywords == "" && $common_keywords == "" ) {
			$keywords = get_bloginfo( 'name' );
			}
	} elseif ( is_category() ) {
		$keywords = single_cat_title( '', '' );
	} elseif ( is_tag() ) {
		$keywords = single_tag_title( '', '' );
	} elseif ( is_tax() ) {
		$keywords = single_cat_title( '', '' ) ;
	} elseif ( is_day() ) {
		$keywords = get_the_time(__( 'Ymd', 'emanon' ) );
	} elseif ( is_month() ) {
		$keywords = get_the_time(__( 'Ym', 'emanon') );
	} elseif ( is_year() ) {
		$keywords = get_the_time(__( 'Y', 'emanon' ) );
	} elseif ( is_search() ) {
		$keywords = get_search_query();
	} elseif ( is_404() ) {
		$keywords = __( '404 Error', 'emanon' );
	} elseif ( is_author() ) {
		$keywords = get_the_author_meta( 'display_name', get_query_var( 'author' ) );
	}
	return $keywords;
}

// Keywordsの表示
function emanon_keywords() {
	echo esc_html( strip_tags( get_emanon_keywords() ) );
}

// Descriptionの取得
function get_emanon_description() {
	global $wp_query, $page, $paged;
	$post = $wp_query->get_queried_object();
	$meta_post_description = post_custom( 'emanon_meta_description', '' );
	$top_description = get_theme_mod( 'top_description', '' );

	if ( is_front_page() ) {
		if ( $top_description == "" ) {
			$top_description = get_bloginfo( 'description' );// キャッチフレーズ
		} else {
			$top_description = get_theme_mod( 'top_description' );
		}
		$resume = $top_description;
		if ( is_paged() ) {
			$resume = trim( get_bloginfo( 'name' ) ) ." | ".__( 'List of post', 'emanon' ) ." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_home() ) {
		$resume = __( 'List of post', 'emanon' );
		if ( is_paged() ) {
		$resume = __( 'List of post', 'emanon' ) ." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_singular() ) {
		if ( !empty( $post->post_password ) ) {
		$resume = __( 'There is no overview because this is a protected post.', 'emanon' );
		} elseif ( $meta_post_description ) {
			$resume = $meta_post_description;
		} else {
			$content = $post->post_content;
			if( '' !== strpos( $content, '<!--nextpage-->' ) ) {
				$num = $page ? $page - 1 : 0;
				$split_contents = explode( '<!--nextpage-->', $content );
				$content = $split_contents[$num];
			}
			$resume = mb_substr( strip_tags( $content ), 0, 120 );
		}
	} elseif ( is_category() ) {
		$resume = trim( strip_tags( category_description() ) );
		if ( $resume == "" ) {
			$resume = single_cat_title('','') ." - ". __( 'Category of article list', 'emanon' );
		}
		if ( is_paged() ) {
		$resume = single_cat_title('','') ." - ". __( 'Category of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif( is_tag( ) ) {
		$resume = trim( strip_tags( tag_description() ) );
		if ( $resume == "" ) {
			$resume = single_tag_title('','') ." - ". __( 'Tag of article list', 'emanon' );
		}
		if ( is_paged() ) {
		$resume = single_tag_title('','') ." - ". __( 'Tag of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_tax() ) {
		$resume = trim( strip_tags( tag_description() ) );
		if ( $resume == "" ) {
			$resume = single_cat_title('','') ." - ". __( 'Taxonomy of article list', 'emanon' );
		}
		if ( is_paged() ) {
		$resume = single_cat_title('','') ." - ". __( 'Taxonomy of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_year() ) {
		$resume = get_the_time( __( 'Y', 'emanon' ) ) ." - ". __( 'Year of article list', 'emanon' );
		if ( is_paged() ) {
		$resume = get_the_time( __( 'Y', 'emanon' ) ) ." - ". __( 'Year of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_month( ) ) {
		$resume = get_the_time( __( 'Ym', 'emanon' ) ) ." - ". __( 'Month of article list', 'emanon' );
		if ( is_paged() ) {
		$resume = get_the_time( __( 'Ym', 'emanon' ) ) ." - ". __( 'Month of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_date() ) {
		$resume = get_the_time( __( 'Ymd', 'emanon' ) ) ." - ". __( 'Day of article list', 'emanon' );
		if ( is_paged() ) {
		$resume = get_the_time( __( 'Ymd', 'emanon' ) ) ." - ". __( 'Day of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_author() ) {
		$resume = get_the_author_meta( 'display_name', get_query_var( 'author' ) ) ." - ". __( 'Author of article list', 'emanon' );
		if ( is_paged() ) {
		$resume = get_the_author_meta( 'display_name', get_query_var( 'author' ) ) ." - ". __( 'Author of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
		}
	} elseif ( is_search() ) {
		$resume = get_search_query() ." - ". __( 'Search Result of article list', 'emanon' );
	} elseif ( is_404() ) {
		$resume = __( 'It looks like nothing was found at this location. Maybe try a search? or check URL.', 'emanon' );
	}
		$resume = str_replace( "\n", "", $resume );
		$resume = strip_shortcodes( $resume );
	return $resume;
}

// Descriptionの表示
function emanon_description() {
	echo esc_html( strip_tags( get_emanon_description() ) );
}

// Meta robotsの表示
function emanon_robots() {
	$noindex = post_custom( 'emanon_noindex' );
	$nofollow = post_custom( 'emanon_nofollow' );

	if ( ! get_option( 'blog_public' ) ) {
		return "";
	}

	if ( $noindex == 1 && $nofollow == 1 )
	$robots = '<meta name="robots" content="noindex, nofollow">' . "\n";
	elseif ( $noindex == 1 && $nofollow == 0 )
	$robots = '<meta name="robots" content="noindex">' . "\n";
	elseif ( $noindex == 0 && $nofollow == 1 )
	$robots = '<meta name="robots" content="nofollow">' . "\n";
	elseif ( $noindex == 0 && $nofollow == 0 )
	$robots = '';
	if ( is_search() || is_404() || is_year() || is_month() || is_day() || is_tag() || is_attachment() )
	$robots = '<meta name="robots" content="noindex, follow">' . "\n";
	echo $robots;
}

// Facebook OGPの表示
function emanon_facebook_opg() {
	$display_facebook_opg = get_theme_mod( 'display_facebook_opg', '' );
	if ( $display_facebook_opg ) {
	get_template_part( 'lib/modules/components/facebook-opg' );
	}
}

// 現在URLの表示
function emanon_ogp_url() {
	if( is_home() || is_front_page() ) {
		$ogp_url = home_url();
	} else {
		$ogp_url = the_permalink();
		}
echo esc_url( $ogp_url );
}

// OPG titleの取得
function get_emanon_opg_title() {
	$title = "";
	if ( is_home() || is_front_page() ) {
		$title =	get_bloginfo( 'name' );
		} elseif ( is_singular() ) {
			$title = trim( get_the_title() );
		} elseif ( is_category() ) {
			$title = single_cat_title('','') ." - ". __( 'Category of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} elseif ( is_tag() ) {
			$title = single_tag_title('','') ." - ". __( 'Tag of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} elseif ( is_year() ) {
			$title = get_the_time( __( 'Y', 'emanon' ) ) ." - ". __( 'Year of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} elseif ( is_month( ) ) {
			$title = get_the_time( __( 'Ym', 'emanon' ) ) ." - ". __( 'Month of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} elseif ( is_date() ) {
			$title = get_the_time( __( 'Ymd', 'emanon' ) ) ." - ". __( 'Day of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} elseif ( is_author() ) {
			$title = get_the_author_meta( 'display_name', get_query_var( 'author' ) ) ." - ". __( 'Author of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} elseif ( is_search() ) {
			$title = get_search_query() ." - ". __( 'Search Result of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} elseif ( is_404() ) {
			$title = __( 'It looks like nothing was found at this location. Maybe try a search? or check URL.', 'emanon' )." | ". get_bloginfo( 'name' );
	}
	return $title;
}

// OPG titleの表示
function emanon_opg_title() {
	echo esc_html( strip_tags( get_emanon_opg_title() ) );
}

// Facebook OGP画像の表示
function emanon_facebook_opg_image() {
	$default_image = get_theme_mod( 'facebook_opg_image', '' );
	$thumbnail_image_id = get_post_thumbnail_id();
	$thumbnail_image = wp_get_attachment_image_src( $thumbnail_image_id, 'full');
	if ( is_singular() ){
		if ( has_post_thumbnail() ) {
			echo '<meta property="og:image" content="' . esc_url( $thumbnail_image[0] ) . '">' . "\n";
		} elseif ( $default_image ) {
			echo '<meta property="og:image" content="' . esc_url( $default_image ) . '">' . "\n";
		}
	} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
		if ( $default_image ) {
			 echo '<meta property="og:image" content="' . esc_url( $default_image ) . '">' . "\n";
		}
	}
}

// Facebook Application IDの取得
function get_emanon_facebook_app_id() {
	$facebook_app_id = get_theme_mod( 'facebook_app_id', '' );
	return trim( $facebook_app_id );
}

// JavaScript用Facebook SDKの表示
function emanon_fb_root() {
	$facebook_app_id = esc_js( get_emanon_facebook_app_id() );
	if ( $facebook_app_id ) {
	echo '<div id="fb-root"></div>' . "\n";
	$fb_root =	<<<fb_root
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=$facebook_app_id";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
fb_root;
	echo $fb_root . "\n";
	}
}

// Twitterカードの表示
function emanon_twitter_card() {
	$display_twitter_card = get_theme_mod( 'display_twitter_card', '' );
	if ( $display_twitter_card ) {
		get_template_part( 'lib/modules/components/twitter-card' );
	}
}

// Twitterカードの取得
function get_emanon_twitter_card_type() {
	$twitter_card_type = get_theme_mod( 'twitter_card_type', 'summary' );
	return strip_tags( $twitter_card_type );
}

// TwitterIDの取得
function get_emanon_twitter_id() {
	$twitter_id = get_theme_mod( 'twitter_id', '' );
	return trim( $twitter_id );
}

// Twitter OGP画像の表示
function emanon_twitter_opg_image() {
	$default_image = get_theme_mod( 'twitter_opg_image', '' );
	$thumbnail_image_id = get_post_thumbnail_id();
	$thumbnail_image = wp_get_attachment_image_src( $thumbnail_image_id, 'full');
	if ( is_singular() ){
		if ( has_post_thumbnail() ) {
			echo '<meta name="twitter:image" content="' . esc_url( $thumbnail_image[0] ) . '">' . "\n";
		} elseif ( $default_image ) {
			echo '<meta name="twitter:image" content="' . esc_url( $default_image ) . '">' . "\n";
		}
	} else {
		if ( $default_image ) {
			 echo '<meta name="twitter:image" content="' . esc_url( $default_image ) . '">' . "\n";
		}
	}
}

// Twitter urlの取得
function get_emanon_twitter_profile_url() {
	$twitter_profile_url = get_theme_mod( 'twitter_profile_url', '' );
	return trim( $twitter_profile_url );
}

// Facebook urlの取得
function get_emanon_facebook_profile_url() {
	$facebook_profile_url = get_theme_mod( 'facebook_profile_url', '' );
	return trim( $facebook_profile_url );
}

// Instagram urlの取得
function get_emanon_instagram_profile_url() {
	$instagram_profile_url = get_theme_mod( 'instagram_profile_url', '' );
	return trim( $instagram_profile_url );
}

// LINE urlの取得
function get_emanon_line_profile_url() {
	$line_profile_url = get_theme_mod( 'line_profile_url', '' );
	return trim( $line_profile_url );
}

// YouTube urlの取得
function get_emanon_youtube_profile_url() {
	$youtube_profile_url = get_theme_mod( 'youtube_profile_url', '' );
	return trim( $youtube_profile_url );
}

// Feedly urlの取得
function get_emanon_feedly_url() {
	$feedly_url = get_theme_mod( 'feedly_url', get_bloginfo( 'rss_url' ) );
	return trim( $feedly_url );
}

// Google analyticsの表示
function emanon_google_analytics() {
	$tracking_id = get_theme_mod( 'tracking_id', '' );
	if ( $tracking_id ) {
	get_template_part( 'lib/modules/components/google-analytics' );
	}
}

// Google Tag Manager </head>直前に挿入
function emanon_google_tag_manager() {
	$tag_manager_id = get_theme_mod( 'tag_manager_id', '' );
	if ( $tag_manager_id ) {
	get_template_part( 'lib/modules/components/google-tag-manager' );
	}
}

// Google Tag Manager (noscript) <body>直後に挿入
function emanon_google_tag_manager_noscript() {
	$tag_manager_id = get_theme_mod( 'tag_manager_id', '' );
	if ( $tag_manager_id ) {
	get_template_part( 'lib/modules/components/google-tag-manager-noscript' );
	}
}

// <body>直後に挿入
function emanon_header_js() {
	$insert_head = get_theme_mod( 'insert_head', '' );
	if ( $insert_head ) {
	echo $insert_head . "\n";
	}
}
add_action( 'wp_head', 'emanon_header_js', 9999 );

// <body>の直後に挿入
function emanon_body_js() {
	$insert_body_after= get_theme_mod( 'insert_body_after', '' );
	if ( $insert_body_after ) {
	echo $insert_body_after . "\n";
	}
}

// <footer>直前に挿入
function emanon_footer_js() {
	$insert_footercod = get_theme_mod( 'insert_footercod', '' );
	if ( $insert_footercod ) {
	echo $insert_footercod . "\n";
	}
}
add_action( 'wp_footer', 'emanon_footer_js', 9999 );

/*------------------------------------------------------------------------------------
/* JSON-LDを用いたschema.orgの記述
/*----------------------------------------------------------------------------------*/
add_action('wp_head','insert_json_ld');
function insert_json_ld (){
	if ( is_single()) {
		if ( have_posts() ) : while (have_posts() ) : the_post();
				$context = 'http://schema.org';
				$type = 'Article';
				$headline = get_the_title();
				$dataPublished = get_the_date('Y-n-j');
				$dateModified = get_the_modified_date('Y-n-j');
				$mainEntityOfPage = get_permalink();
				$image_type = 'ImageObject';
				$image_id = get_post_thumbnail_id ();
				$image = wp_get_attachment_image_src ( $image_id, false );
				if( $image ) {
				$image_url = $image[0];
				$image_width = $image[1];
				$image_height = $image[2];
				} else {
				$no_image_large = get_template_directory_uri().'/lib/images/no-img/middle-no-img.png';
				$image_url = $no_image_large;
				$image_width = '1026';
				$image_height = '300';
				}
				$author_type = 'Person';
				$author_name = get_the_author();
				$publisher_type = 'Organization';
				$publisher_name = get_bloginfo('name');
				$display_header_logo = esc_url( get_theme_mod( 'display_header_logo', '' ) );
				if ( $display_header_logo) {
				$logo_url = $display_header_logo;
				} else {
				$logo_url = get_template_directory_uri()."/lib/images/no-img/emanon-logo.png";
				}
				$logo_width = 245;
				$logo_height = 50;

				$json= "
				\"@context\" : \"{$context}\",
				\"@type\" : \"{$type}\",
				\"headline\" : \"{$headline}\",
				\"datePublished\" : \"{$dataPublished}\",
				\"dateModified\" : \"{$dateModified}\",
				\"mainEntityOfPage\" : \"{$mainEntityOfPage}\",
				\"author\" : {
						 \"@type\" : \"{$author_type}\",
						 \"name\" : \"{$author_name}\"
						 },
				\"image\" : {
						 \"@type\" : \"{$image_type}\",
						 \"url\" : \"{$image_url}\",
						 \"width\" : \"{$image_width}\",
						 \"height\" : \"{$image_height}\"
						 },
				\"publisher\" : {
						 \"@type\" : \"{$publisher_type}\",
						 \"name\" : \"{$publisher_name}\",
						 \"logo\" : {
									\"@type\" : \"{$image_type}\",
									\"url\" : \"{$logo_url}\",
									\"width\" : \"{$logo_width}\",
									\"height\" : \"{$logo_height}\"
									}
						 }
				";
			echo '<script type="application/ld+json">{'.$json.'}</script>' . "\n";
		endwhile; endif;
	}
}

/*------------------------------------------------------------------------------------
/* フロントページ設定
/*----------------------------------------------------------------------------------*/
// ファーストビューの表示
if ( !function_exists( 'emanon_firstview' ) ):
function emanon_firstview() {
	$firstview_type = get_theme_mod( 'firstview_layout', 'no_display' );
	if ( $firstview_type == 'slider' ) {
		get_template_part( 'lib/modules/sections/section-top-slider' );
	}
	if ( $firstview_type == 'slider-content' ) {
		get_template_part( 'lib/modules/sections/section-top-slider-content' );
	}
	if ( $firstview_type == 'featured' ) {
		get_template_part( 'lib/modules/sections/section-top-featured');
	}
	if ( $firstview_type == 'pagebox' ) {
		get_template_part( 'lib/modules/sections/section-top-pagebox' );
	}
	if ( $firstview_type == 'video' ) {
		get_template_part( 'lib/modules/sections/section-top-video' );
	}
	if ( $firstview_type == 'eyecatch' ) {
		get_template_part( 'lib/modules/sections/section-top-eyecatch' );
	}
}
endif;

/*------------------------------------------------------------------------------------
/* 投稿タグ（フロントページ設定 slider-content用）
/*----------------------------------------------------------------------------------*/
// 投稿日の表示判定
function is_emanon_display_slider_content_date() {
	$display_slider_content_date = get_theme_mod( 'display_slider_content_date', true );
	return $display_slider_content_date;
}

// 更新日の表示判定
function is_emanon_display_slider_content_update_date() {
	$display_slider_content_update_date = get_theme_mod( 'display_slider_content_update_date', '' );
	return $display_slider_content_update_date;
}

// カテゴリーの表示判定
function is_emanon_display_slider_content_category() {
	$display_slider_content_category = get_theme_mod( 'display_slider_content_category', true );
	return $display_slider_content_category;
}

// タグの表示判定
function is_emanon_display_slider_content_tag() {
	$display_slider_content_tag = get_theme_mod( 'display_slider_content_tag', '' );
	return $display_slider_content_tag;
}

// コメント数の表示判定
function is_emanon_display_slider_content_comments_number() {
	$display_slider_content_comments_number = get_theme_mod( 'display_slider_content_comments_number', '' );
	return $display_slider_content_comments_number;
}

// 投稿者名の表示判定
function is_emanon_display_slider_content_author() {
	$display_slider_content_author = get_theme_mod( 'display_slider_content_author', '' );
	return $display_slider_content_author;
}

// カテゴリーの表示
function emanon_slider_content_category() {
	$categories = array();
	$display_category_nicename = get_theme_mod( 'display_category_nicename', '' );
	if ( $_categories = get_the_category() ) {
		foreach ( $_categories as $_category ) {
			$categories[] = sprintf(
				'<a href="%s">%s</a>',
				get_category_link( $_category->cat_ID ),
				esc_html( $_category->cat_name )
			);
		}
			if ( is_emanon_display_slider_content_category() && $display_category_nicename ) {
			echo '<span class="slider-post-category ' .$_category->category_nicename . '">' . implode( $categories ) . '</span>' . "\n";
			} elseif ( is_emanon_display_slider_content_category() ) {
			echo '<span class="slider-post-category">' . implode( $categories ) . '</span>' . "\n";
		}
	}
}

// 投稿タグの表示
function emanon_slider_content_meta() {
global $post;

	echo '<div class="slider-post-meta">' . "\n";
	if ( is_emanon_display_slider_content_date() && is_emanon_display_slider_content_update_date() ) {
		echo '<span><i class="fa fa-clock-o"></i><time class="date published" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ) . '">' . esc_html( get_the_date() ) . '</time></span>' . "\n";
	} elseif ( is_emanon_display_slider_content_date() && !is_emanon_display_slider_content_update_date() ) {
		echo '<span><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></span>' . "\n";
	}
	if ( is_emanon_display_slider_content_update_date() && get_the_time( 'Y-m-d' ) != get_the_modified_date( 'Y-m-d' ) ) {
		echo '<span><i class="fa fa-history"></i><time class="date updated" datetime="' . esc_attr( get_the_modified_date( 'Y-m-d' ) ). '">' . esc_html( get_the_modified_date() ). '</time></span>' . "\n";
	} elseif ( !is_emanon_display_slider_content_date() && is_emanon_display_slider_content_update_date() ) {
		echo '<span><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></span>' . "\n";
	}

	if ( $tags_list = get_the_tag_list( '', ', ' ) ) {
		if ( is_emanon_display_slider_content_tag() ) {
			echo '<span><i class="fa fa-tag"></i>' . $tags_list . '</span>' . "\n";
			}
	}

	if ( is_emanon_display_slider_content_comments_number() && ! post_password_required() && get_comments_number() ) {
		echo '<span>' . "\n";
		comments_popup_link( printf( '<i class="fa fa-comments-o"></i><span class="screen-reader-text">%s</span>' , get_the_title() ) );
		echo '</span>' . "\n";
	}

	if ( is_emanon_display_slider_content_author() ) {
		echo '<span><i class="fa fa-user"></i><span class="vcard author"><span class="fn"><a href="' . esc_url( get_author_posts_url( $post->post_author ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></span>' . "\n";
	}

	echo '</div >' . "\n";
}

/*------------------------------------------------------------------------------------
/* ランディングページ設定
/*----------------------------------------------------------------------------------*/
// ファーストビューの表示
function emanon_lp_header() {
	$display_header_section = get_theme_mod( 'display_header_section', '' );
	if ( $display_header_section ) {
		get_template_part( 'lib/modules/sections/section-lp-header' );
	}
}

// CTA［ヘッダー］セクションの表示
function emanon_lp_header_cta() {
	$display_lp_header_cta = get_theme_mod( 'display_lp_header_cta', '' );
	if ( $display_lp_header_cta ) {
		get_template_part( 'lib/modules/components/header-lp-cta' );
	}
}

// CTA［ヘッダー スクロール］セクションの表示
function emanon_lp_header_cta_scroll() {
	$display_lp_header_cta = get_theme_mod( 'display_lp_header_cta', '' );
	$lp_header_cta_type = get_theme_mod( 'lp_header_cta_type', 'default' );
	if ( $display_lp_header_cta && $lp_header_cta_type == 'tracking') {
		get_template_part( 'lib/modules/components/header-lp-cta-scroll' );
	}
}

// グローバルナビの表示
function emanon_lp_gloval_nav() {
	$display_lp_gloval_nav = get_theme_mod( 'display_lp_gloval_nav', '' );
	if ( $display_lp_gloval_nav ) {
		get_template_part( 'lib/modules/components/header-lp-global-nav' );
	}
}

// モーダルウィンドウナビの表示
function emanon_lp_header_mb_global_nav() {
	get_template_part( 'lib/modules/components/header-lp-mb-global-nav' );
}

// モバイルナビの表示
function emanon_lp_header_mb_scroll_nav() {
	$display_lp_mobile_nav = get_theme_mod( 'display_lp_mobile_nav', '' );
	if ( $display_lp_mobile_nav ) {
		get_template_part( 'lib/modules/components/header-lp-mb-horizontal-nav' );
	}
}

// 共感セクションの表示
function emanon_lp_empathy_section() {
	$display_empathy_section = get_theme_mod( 'display_empathy_section', '' );
	if ( $display_empathy_section ) {
		get_template_part( 'lib/modules/sections/section-lp-empathy' );
	}
}

// 強みセクションの表示
function emanon_lp_advantage_section() {
	$display_advantage_section = get_theme_mod( 'display_advantage_section', '' );
	if ( $display_advantage_section ) {
		get_template_part( 'lib/modules/sections/section-lp-advantage' );
	}
}

// CTA［ボタン］セクションの表示［1］
function emanon_lp_cta_btn_section_1() {
	$display_advantage_section_1 = get_theme_mod( 'display_cta_btn_lp_1', '' );
	if ( $display_advantage_section_1 ) {
		get_template_part( 'lib/modules/sections/section-lp-cta-btn' );
	}
}

// CTA［ボタン］セクションの表示［2］
function emanon_lp_cta_btn_section_2() {
	$display_advantage_section_2 = get_theme_mod( 'display_cta_btn_lp_2', '' );
	if ( $display_advantage_section_2 ) {
		get_template_part( 'lib/modules/sections/section-lp-cta-btn' );
	}
}

// CTA［ボタン］セクションの表示［3］
function emanon_lp_cta_btn_section_3() {
	$display_advantage_section_3 = get_theme_mod( 'display_cta_btn_lp_3', '' );
	if ( $display_advantage_section_3 ) {
		get_template_part( 'lib/modules/sections/section-lp-cta-btn' );
	}
}

// コンテンツセクションの表示
function emanon_lp_content_section() {
	$display_content_section = get_theme_mod( 'display_content_section', true );
	if ( $display_content_section ) {
		get_template_part( 'content', 'landing-page' );
	}
}

// 商品の特徴セクションの表示
function emanon_lp_product_features_section() {
	$display_product_features_section = get_theme_mod( 'display_product_features_section', '' );
	if ( $display_product_features_section ) {
		get_template_part( 'lib/modules/sections/section-lp-product-features' );
	}
}

// 比較セクションの表示
function emanon_lp_comparison_table_section() {
	$display_comparison_table_section= get_theme_mod( 'display_comparison_table_section', '' );
	if ( $display_comparison_table_section) {
		get_template_part( 'lib/modules/sections/section-lp-comparison' );
	}
}

// お客様の声（推薦文）セクションの表示
function emanon_lp_testimonial_section() {
	$display_testimonial_section = get_theme_mod( 'display_testimonial_section', '' );
	if ( $display_testimonial_section ) {
		get_template_part( 'lib/modules/sections/section-lp-testimonial' );
	}
}

// オファーセクションの表示
function emanon_lp_offer_section() {
	$display_offer_section = get_theme_mod( 'display_offer_section', '' );
	if ( $display_offer_section ) {
		get_template_part( 'lib/modules/sections/section-lp-offer' );
	}
}

// 特典セクションの表示
function emanon_lp_benefits_section() {
	$display_benefits_section = get_theme_mod( 'display_benefits_section', '' );
	if ( $display_benefits_section ) {
		get_template_part( 'lib/modules/sections/section-lp-benefits' );
	}
}

// クロージングセクションの表示
function emanon_lp_closing_section() {
	$display_closing_section = get_theme_mod( 'display_closing_section', '' );
	if ( $display_closing_section ) {
		get_template_part( 'lib/modules/sections/section-lp-closing' );
	}
}

// CTA［コンタクトフォーム］の表示
function emanon_lp_cta_section() {
	$display_cta_lp = get_theme_mod( 'display_cta_lp', '' );
	if ( $display_cta_lp ) {
		get_template_part( 'lib/modules/sections/section-lp-cta' );
	}
}

// FAQセクションの表示
function emanon_lp_faq_section() {
	$display_faq_section = get_theme_mod( 'display_faq_section', '' );
	if ( $display_faq_section ) {
		get_template_part( 'lib/modules/sections/section-lp-faq' );
	}
}

// 追伸の表示
function emanon_lp_postscript_section() {
	$display_postscript_section = get_theme_mod( 'display_postscript_section', '' );
	if ( $display_postscript_section ) {
		get_template_part( 'lib/modules/sections/section-lp-postscript' );
	}
}

// モバイルCTAの表示
function emanon_lp_mobile_cta_section() {
	$display_mobile_cta_section = get_theme_mod( 'display_mobile_cta_section', '' );
	if ( $display_mobile_cta_section ) {
		get_template_part( 'lib/modules/sections/section-lp-mobile-cta' );
	}
}

/*------------------------------------------------------------------------------------
/* ヘッダー設定
/*----------------------------------------------------------------------------------*/
// ヘッダーレイアウトの表示
function emanon_header_layout() {
	$header_layout_type = get_theme_mod( 'header_layout_type', 'header-default' );
	if ( !is_page_template( 'templates/lp.php' ) ) {
		if ( $header_layout_type == 'header-default') {
			get_template_part( 'lib/modules/components/header-layout-default' );
		}
		if ( $header_layout_type == 'header-center' ) {
			get_template_part( 'lib/modules/components/header-layout-center' );
		}
		if ( $header_layout_type == 'header-line' ) {
			get_template_part( 'lib/modules/components/header-layout-line' );
		}
	}
}

// Descriptionの表示
function emanon_header_description() {
	$header_description = get_bloginfo( 'description' );
	if ( is_front_page() || is_home() ) {
		echo '<h1 class="site-description" itemprop="description">' . $header_description . '</h1>' . "\n";
	} else {
		echo '<p class="site-description" itemprop="description">' . $header_description . '</p>' . "\n";
	}
}

// ヘッダーロゴの表示
function emanon_header_logo() {
	$header_logo = get_theme_mod( 'display_header_logo', '' );
	$header_tagline_position_type = get_theme_mod( 'header_tagline_position_type', 'upper-left' );

	$tag = 'p';
	if ( is_front_page() ) {
		$tag = 'h1';
	}

	if ( $header_logo ) {
	echo '<div class="header-table">' . "\n";
		if ( $header_tagline_position_type == 'no-display' ) {
			echo '<div class="header-logo"><'. $tag .'><a href="' . home_url( '/' ) . '"><img src="' . esc_url( $header_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" ></a></'. $tag .'></div>' . "\n";
		}
		else {
			echo '<div class="header-logo"><a href="' . home_url( '/' ) . '"><img src="' . esc_url( $header_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" ></a></div>' . "\n";
		}
	if ( $header_tagline_position_type == 'logo-under' ) {
		echo '<div>' . "\n";
		echo emanon_header_description();
		echo '</div>' . "\n";
	}
	echo '</div>' . "\n";
	}
	else {
	echo '<div class="header-table">' . "\n";
		if ( $header_tagline_position_type == 'no-display' ) {
			echo '<div class="header-site-name" itemprop="headline"><'. $tag .'><a href="' . home_url( '/' ) .'">' . get_bloginfo( 'name' ) . '</a></'. $tag .'></div>' . "\n";
		}
		else {
			echo '<div class="header-site-name" itemprop="headline"><a href="' . home_url( '/' ) .'">' . get_bloginfo( 'name' ) . '</a></div>' . "\n";
		}
	if ( $header_tagline_position_type == 'logo-under' ) {
		echo '<div>' . "\n";
		echo emanon_header_description();
		echo '</div>' . "\n";
	}
	echo '</div>' . "\n";
	}
}

// ヘッダーロゴの表示（スクロールナビ用/ランディングページ用）
function emanon_simple_header_logo() {
	$header_logo = get_theme_mod( 'display_header_logo', '' );
	if ( $header_logo ) {
	echo '<div class="header-table">' . "\n";
	echo '<div class="header-logo"><a href="' . home_url( '/' ) . '"><img src="' . esc_url( $header_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" ></a></div>' . "\n";
	echo '</div>' . "\n";
	}
	else {
	echo '<div class="header-table">' . "\n";
	echo '<div class="header-site-name" itemprop="headline"><a href="' . home_url( '/' ) .'">' . get_bloginfo( 'name' ) . '</a></div>' . "\n";
	echo '</div>' . "\n";
	}
}

// ヘッダーロゴの表示（モーダルウィンドウナビ用）
function emanon_mb_header_logo() {
	$header_logo = get_theme_mod( 'display_header_logo', '' );
	if ( $header_logo ) {
	echo '<div class="modal-header-logo"><a href="' . home_url( '/' ) . '"><img src="' . esc_url( $header_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" ></a></div>' . "\n";
	}
	else {
	echo '<div class="modal-header-site-name"><a href="' . home_url( '/' ) .'">' . get_bloginfo( 'name' ) . '</a></div>' . "\n";
	}
}

// ヘッダーCTAの表示判定
function is_emanon_header_cta() {
	$display_header_cta = get_theme_mod( 'display_header_cta', '' );
	return $display_header_cta;
}

// ヘッダーCTAの表示
function emanon_header_cta() {
	get_template_part( 'lib/modules/components/header-cta' );
}

// スクロールナビの表示
function emanon_header_scroll_nav() {
	$global_nav_design_type = get_theme_mod( 'global_nav_design_type', 'default' );
	if ( $global_nav_design_type == 'tracking' ) {
		get_template_part( 'lib/modules/components/header-scroll-nav' );
	}
}

// スクロールナビ［モバイル用］の表示
function emanon_header_mb_scroll_nav() {
	$global_nav_design_type = get_theme_mod( 'global_nav_design_type', 'default' );
	if ( $global_nav_design_type == 'tracking' ) {
		get_template_part( 'lib/modules/components/header-mb-scroll-nav' );
	}
}

// モバイルナビの表示
function emanon_header_mb_horizontal_nav() {
	$display_mobile_nav = get_theme_mod( 'display_mobile_nav', '' );
	if ( $display_mobile_nav ) {
		get_template_part( 'lib/modules/components/header-mb-horizontal-nav' );
	}
}

// モーダルウィンドウナビの表示
function emanon_header_mb_global_nav() {
	get_template_part( 'lib/modules/components/header-mb-global-nav' );
}

// ヘッダーインフォメーションの表示
function emanon_header_info() {
	$front_page = get_theme_mod( 'display_header_info_front_page', '' );
	$post = get_theme_mod( 'display_header_info_post', '' );
	$page = get_theme_mod( 'display_header_info_page', '' );
	$archive = get_theme_mod( 'display_header_info_archive', '' );
	$header_info_title = get_theme_mod( 'header_info_title', '' );
	$header_info_url = get_theme_mod( 'header_info_url', '' );

	if ( is_front_page() && $front_page || is_home() && $front_page || is_single() && $post || is_page() && $page || is_archive() && $archive || is_search() && $archive || is_404() && $archive ) {
	if ( $header_info_title ) {
		echo '<div class="header-info"><a href="' . $header_info_url  .'">' . $header_info_title . '</a></div>' . "\n";
		}
	}
}

// 検索キーワードリストの表示
function emanon_search_keywords_lists() {
	$display_search_keywords_lists_pc = get_theme_mod( 'display_search_keywords_lists_pc', '' );
	$display_search_keywords_lists_mb = get_theme_mod( 'display_search_keywords_lists_mb', '' );
	if ( $display_search_keywords_lists_pc && !wp_is_mobile() || $display_search_keywords_lists_mb && wp_is_mobile() ) {
		get_template_part( 'lib/modules/components/search-keywords-lists' );
	}
}

/*------------------------------------------------------------------------------------
/* サブタイトルの表示
/*----------------------------------------------------------------------------------*/
function emanon_subtitle() {
	$subtitle = post_custom( 'emanon_subtitle' );
	if ( $subtitle ) {
	echo '<span class="entry-subtitle">' . esc_html( $subtitle ) . '</span>' . "\n";
	}
}

/*------------------------------------------------------------------------------------
/* パンくずリストの表示（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
function get_emanon_breadcrumb() {

global $wp_query;

	$page_for_posts = get_option( 'page_for_posts' ); // フロントページの表示>投稿ページ
	$microdata_li   = ' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
	$microdata_a    = ' itemprop="item"';
	$microdata_span = ' itemprop="name"';
	$postType       = get_post_type();
	$post_type_obj  = get_post_type_object( $postType) ;

	$breadcrumb_home_name_type = get_theme_mod( 'breadcrumb_home_name_type', 'site_title' );
	$breadcrumb_home_name = get_theme_mod( 'breadcrumb_home_name', __( 'Home', 'emanon' ) );

	if ( $breadcrumb_home_name ) {
	$name = get_theme_mod( 'breadcrumb_home_name', __( 'Home', 'emanon' ) );
	} else {
	$name = '<span class="display-none">Home</span>';
	}

	if ( $breadcrumb_home_name_type == 'home' ) {
	$bread_home = $name;
	} else {
	$bread_home = get_bloginfo('name');
	}

	if( $post_type_obj ) {
		$post_type_name = esc_html( $post_type_obj->labels->name );
	}

	$bread_crumb_html = '<!--breadcrumb-->
	<div class="content-inner">
	<nav id="breadcrumb" class="rcrumbs clearfix">
	<ol itemscope itemtype="http://schema.org/BreadcrumbList">';

	$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . home_url('/') . '"><i class="fa fa-home"></i><span' . $microdata_span . '>' . $bread_home . '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="1" /></li>';

if ( is_archive() || ( is_single() && !is_attachment() ) ) {

	if ( is_singular( 'post' ) || is_category() || is_tag() || is_tax() || is_date() || is_author() ) {
		if ( $page_for_posts ) {
		$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . get_permalink( $page_for_posts ) . '"><span' . $microdata_span . '>'. get_the_title( $page_for_posts ). '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="2" /></li>';
		}
	} else {
		if ( is_single() ) {
		$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . home_url().'/'.$postType.'"><span' . $microdata_span . '>' .$post_type_name . '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="2" /></li>';
		} else {
		$bread_crumb_html .= '<li' . $microdata_li . '><span' . $microdata_span . '>' .$post_type_name . '</span><meta itemprop="position" content="2" /></li>';
		}
	}
}

if( is_home() ) {

	if ( $page_for_posts ) {
	$bread_crumb_html .= '<li' . $microdata_li . '><span' . $microdata_span . '>'. get_the_title( $page_for_posts ). '</span><meta itemprop="position" content="2" /></li>';
	}

} elseif ( is_single() ) {

	if ( is_singular( 'post' ) ) {

		$category = get_the_category();
		$ancestors_cta = array_reverse( get_ancestors( $category[0]->term_id, 'category', 'taxonomy' ) );
		array_push( $ancestors_cta, $category[0]->term_id );
		foreach ( $ancestors_cta as $cta_parent_term_id ) {
			$cta_parent_obj = get_term( $cta_parent_term_id, 'category' );
			$term_url = get_term_link( $cta_parent_obj->term_id, $cta_parent_obj->taxonomy );
			$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . $term_url . '"><span' . $microdata_span . '>' . esc_html( $cta_parent_obj->name ) . '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="' . esc_attr( ( $page_for_posts == true ) ? '3' : '2' ). '" /></li>';
		}

	} else {
		$taxonomies = get_the_taxonomies();
		$taxonomy = key( $taxonomies );
		if ( $taxonomies ):
			$terms = get_the_terms( get_the_ID(), $taxonomy );
			$term 	= reset( $terms );
			if ( $term -> parent != 0 ) {
				$ancestors = array_reverse( get_ancestors( $term->term_id, $taxonomy ) );
				foreach( $ancestors_ as $ancestor ):
					$pan_term = get_term( $ancestor, $taxonomy );
					$bread_crumb_html	.= '<li'.$microdata_li.'><a'.$microdata_a.' href="'.get_term_link( $ancestor,$taxonomy ).'"><span'.$microdata_span.'>'.esc_html( $pan_term->name ).'</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="2" /></li>';
				endforeach;
			}
			$term_url = get_term_link( $term->term_id, $taxonomy );
			$bread_crumb_html .= '<li'.$microdata_li.'><a'.$microdata_a.' href="' . $term_url . '"><span'.$microdata_span.'>' . esc_html( $term->name ) . '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="' . esc_attr( ( $page_for_posts == true ) ? '3' : '2' ). '" /></li>';
		endif;

	}

	$bread_crumb_html .= '<li><span>' . get_the_title() . '</span></li>';

} elseif ( is_page() ) {

		$post = $wp_query->get_queried_object();
		if ( $post->post_parent == 0 ){
			$bread_crumb_html .= '<li><span>' . get_the_title() . '</span></li>';
		} else {
			$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
			array_push( $ancestors, $post->ID );
			foreach ( $ancestors as $ancestor ) {
				if( $ancestor != end( $ancestors ) ) {
					$bread_crumb_html .= '<li'.$microdata_li.'><a'.$microdata_a.' href="'. get_permalink($ancestor) .'"><span'.$microdata_span.'>'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="2" /></li>';
				} else {
					$bread_crumb_html .= '<li><span>' . strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) . '</span></li>';
				}
			}
		}

} elseif ( is_category() ) {

	$cat = get_queried_object();

	if( $cat -> parent != 0 ):
		$ancestors_term = array_reverse( get_ancestors( $cat->cat_ID, 'category' ) );

	foreach( $ancestors_term as $ancestor ):
		$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . get_category_link( $ancestor ) . '"><span' . $microdata_span . '>' . esc_html( get_cat_name( $ancestor ) ) . '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="' . esc_attr( ( $page_for_posts == true ) ? '3' : '2' ). '" /></li>';
		endforeach;
	endif;

	$bread_crumb_html .= '<li><span>'. $cat->cat_name. '</span></li>';

} elseif ( is_tag() ) {

	$bread_crumb_html .= '<li><span>'. single_tag_title( '' , false ) .'</span></li>';

} elseif ( is_tax() ) {

	$term = $wp_query->queried_object->term_id;
	$term_parent = $wp_query->queried_object->parent;
	$taxonomy = $wp_query->queried_object->taxonomy;

	if( $term_parent != 0 ):
		$ancestors_term = array_reverse( get_ancestors( $term, $taxonomy ) );
		foreach( $ancestors_term as $ancestor ):
			$pan_term = get_term( $ancestor, $taxonomy );
			$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . get_term_link( $ancestor, $taxonomy ) . '"><span' . $microdata_span . '>' . esc_html( $pan_term->name ) . '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="' . esc_attr( ( $page_for_posts == true ) ? '3' : '2' ). '" /></li>';
		endforeach;
	endif;

	$bread_crumb_html .= '<li><span>' . esc_html( single_cat_title( '', '', false ) ) . '</span></li>';

} elseif ( is_date() ) {

	if( is_day() ) {

	$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . get_year_link( get_the_time( 'Y' ) ) . '"><span' . $microdata_span . '>' . get_the_time( 'Y' ) . __( 'Year', 'emanon' ) .'</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="' . esc_attr( ( $page_for_posts == true ) ? '3' : '2' ). '" /></li>';
	$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ). '"><span' . $microdata_span . '>' . get_the_time( 'm' ) . __( 'Month', 'emanon' ) . '</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="' . esc_attr( ( $page_for_posts == true ) ? '4' : '3' ). '" /></li>';
	$bread_crumb_html .= '<li><span>'. get_the_time( 'd' ) . __( 'Day', 'emanon' ) .'</span></li>';

	} elseif ( is_month() ) {

	$bread_crumb_html .= '<li' . $microdata_li . '><a' . $microdata_a . ' href="' . get_year_link( get_the_time( 'Y' ) ) . '"><span' . $microdata_span . '>' . get_the_time( 'Y' ) . __( 'Year', 'emanon' ) .'</span></a><i class="fa fa-angle-right"></i><meta itemprop="position" content="' . esc_attr( ( $page_for_posts == true ) ? '3' : '2' ). '" /></li>';
	$bread_crumb_html .= '<li><span>'. get_the_time( 'm' ) . __( 'Month', 'emanon' ) .'</span></li>';

	} else {

	$bread_crumb_html .= '<li><span>' . get_the_time( 'Y' ) . __( 'Year', 'emanon' ) . '</span></li>';

	}

} elseif ( is_author() ) {

	$bread_crumb_html .= '<li><span>' . get_the_author_meta( 'display_name' ).'</span></li>';

} elseif ( is_404() ) {
	$bread_crumb_html .= '<li><span>' . __( 'File not found', 'emanon' ) . '</span></li>';

} elseif ( is_search() ) {
	$bread_crumb_html .= '<li><span>' . __( 'Search results', 'emanon' ) . '</span></li>';

} elseif ( is_attachment() ) {
	$bread_crumb_html .= '<li><span>' . get_the_title() . '</span></li>';

}

$bread_crumb_html .= '</ol>
</nav>
</div>
<!--end breadcrumb-->';
	return $bread_crumb_html;
}

// 投稿ページに表示判定
function emanon_single_breadcrumb() {
	$display_single_breadcrumb = get_theme_mod( 'display_single_breadcrumb', true );
	if ( $display_single_breadcrumb ) {
		echo get_emanon_breadcrumb();
	}
}

// アーカイブページ等に表示判定
function emanon_archive_breadcrumb() {
	$display_archive_breadcrumb = get_theme_mod( 'display_archive_breadcrumb', true );
	if ( $display_archive_breadcrumb && !is_front_page() ) {
		echo get_emanon_breadcrumb();
	}
}

// 固定ページに表示判定
function emanon_page_breadcrumb() {
	$display_page_breadcrumb = get_theme_mod( 'display_page_breadcrumb' , true );
	if ( $display_page_breadcrumb && !is_front_page() ) {
		echo get_emanon_breadcrumb();
	}
}

/*------------------------------------------------------------------------------------
/* アイキャッチ画像 キャプションの表示（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
function emanon_post_thumbnail_caption() {
	$display_post_thumbnail_caption = get_theme_mod( 'display_post_thumbnail_caption' , '' );
	$caption = get_post( get_post_thumbnail_id() )->post_excerpt;
	if ( $display_post_thumbnail_caption && $caption ) {
		echo '<div class="article-thumbnail-caption">' . $caption . '</div>';
	}
}

/*------------------------------------------------------------------------------------
/* 投稿タグ（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// 投稿日の表示判定
function is_emanon_display_entry_date() {
	$display_entry_date = get_theme_mod( 'display_entry_date', true );
	return $display_entry_date;
}

// 更新日の表示判定
function is_emanon_display_update_date() {
	$display_update_date = get_theme_mod( 'display_update_date', '' );
	return $display_update_date;
}

// カテゴリーの表示判定
function is_emanon_display_category() {
	$display_category = get_theme_mod( 'display_category', '' );
	return $display_category;
}

// タグの表示判定
function is_emanon_display_tag() {
	$display_tag = get_theme_mod( 'display_tag', '' );
	return $display_tag;
}

// コメント数の表示判定
function is_emanon_display_comments_number() {
	$display_comments_number = get_theme_mod( 'display_comments_number', '' );
	return $display_comments_number;
}

// 投稿者名の表示判定
function is_emanon_display_author() {
	$display_author = get_theme_mod( 'display_author', true );
	return $display_author;
}

// 投稿タグの表示
function emanon_entry_meta() {
global $post;

	echo '<ul class="post-meta clearfix">' . "\n";
	if ( is_emanon_display_entry_date() && is_emanon_display_update_date() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ) . '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	} elseif ( is_emanon_display_entry_date() && !is_emanon_display_update_date() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}
	if ( is_emanon_display_update_date() && get_the_time( 'Y-m-d' ) != get_the_modified_date( 'Y-m-d' ) ) {
		echo '<li><i class="fa fa-history"></i><time class="date updated" datetime="' . esc_attr( get_the_modified_date( 'Y-m-d' ) ). '">' . esc_html( get_the_modified_date() ). '</time></li>' . "\n";
	} elseif ( !is_emanon_display_entry_date() && is_emanon_display_update_date() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}

	$categories = array();
	if ( $_categories = get_the_category() ) {
		foreach ( $_categories as $_category ) {
			$categories[] = sprintf(
				'<a href="%s">%s</a>',
				get_category_link( $_category->cat_ID ),
				esc_html( $_category->cat_name )
			);
		}
			if ( is_emanon_display_category() ) {
			echo '<li><i class="fa fa-clone"></i>' . implode( ', ', $categories ) . '</li>' . "\n";
		}
	}

	if ( $tags_list = get_the_tag_list( '', ', ' ) ) {
		if ( is_emanon_display_tag() ) {
			echo '<li><i class="fa fa-tag"></i>' . $tags_list . '</li>' . "\n";
			}
	}

	if ( is_emanon_display_comments_number() && ! post_password_required() && get_comments_number() ) {
		echo '<li>' . "\n";
		comments_popup_link( printf( '<i class="fa fa-comments-o"></i><span class="screen-reader-text">%s</span>' , get_the_title() ) );
		echo '</li>' . "\n";
	}

	if ( is_emanon_display_author() ) {
		echo '<li><i class="fa fa-user"></i><span class="vcard author"><span class="fn"><a href="' . esc_url( get_author_posts_url( $post->post_author ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></li>' . "\n";
	} else {
		echo '<li class="display-none"><i class="fa fa-user"></i><span class="vcard author"><span class="fn"><a href="' . esc_url( get_author_posts_url( $post->post_author ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></li>' . "\n";
	}
	echo '</ul >' . "\n";
}

/*------------------------------------------------------------------------------------
/* SNSシェアボタン（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// シェアボタンの上部表示
function emanon_top_sns_share() {
	$display_top_sns_share = get_theme_mod( 'display_top_sns_share', '' );
	$sns_layout_type = get_theme_mod( 'sns_layout_type', 'no_count' );
	if ( $display_top_sns_share && $sns_layout_type == 'no_count' ) {
		get_template_part( 'lib/modules/components/sns-buttons' );
	} elseif ( $display_top_sns_share && $sns_layout_type == 'count' ) {
		get_template_part( 'lib/modules/components/sns-buttons-count' );
	}
}

// シェアボタンの下部表示
function emanon_bottom_sns_share() {
	$display_bottom_sns_share = get_theme_mod( 'display_bottom_sns_share', '' );
	$sns_layout_type = get_theme_mod( 'sns_layout_type', 'no_count' );
	if ( $display_bottom_sns_share && $sns_layout_type == 'no_count' ) {
		get_template_part( 'lib/modules/components/sns-buttons' );
	} elseif ( $display_bottom_sns_share && $sns_layout_type == 'count' ) {
		get_template_part( 'lib/modules/components/sns-buttons-count' );
	}
}

// Twitterシェアボタンの表示判定
function is_emanon_display_twitter_btn() {
	$display_twitter_btn = get_theme_mod( 'display_twitter_btn', true );
	return $display_twitter_btn;
}

// Facebookシェアボタンの表示判定
function is_emanon_display_facebook_btn() {
	$display_facebook_btn = get_theme_mod( 'display_facebook_btn', true );
	return $display_facebook_btn;
}

// Hatenaシェアボタンの表示判定
function is_emanon_display_hatena_btn() {
	$display_hatena_btn = get_theme_mod( 'display_hatena_btn', true );
	return $display_hatena_btn;
}

// Pocketシェアボタンの表示判定
function is_emanon_display_pocket_btn() {
	$display_pocket_btn = get_theme_mod( 'display_pocket_btn', true );
	return $display_pocket_btn;
}

// LINEシェアボタンの表示判定
function is_emanon_display_line_btn() {
	$display_line_btn = get_theme_mod( 'display_line_btn', true );
	return $display_line_btn;
}

/*------------------------------------------------------------------------------------
/* モバイルフッターボタン（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// モバイルフッターボタンの表示(投稿ページ)
function emanon_mobile_footer_buttons_single() {
	$display_mobile_footer_single = get_theme_mod( 'display_mobile_footer_single', '' );
		if ( $display_mobile_footer_single ) {
			get_template_part( 'lib/modules/components/mobile-footer-buttons' );
	}
}

// モバイルフッターボタンの表示(固定ページ)
function emanon_mobile_footer_buttons_page() {
	$display_mobile_footer_page = get_theme_mod( 'display_mobile_footer_page', '' );
		if ( $display_mobile_footer_page ) {
		get_template_part( 'lib/modules/components/mobile-footer-buttons' );
	}
}

// モバイルフッターボタン［モーダルウィンドウ］
function emanon_mobile_footer_buttons_modal_window() {
	if ( is_mobile() ) {
			get_template_part( 'lib/modules/components/mobile-footer-buttons-modal-window' );
	}
}

/*------------------------------------------------------------------------------------
/* SNSフォローボタン（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// Facebook Likeボタンの表示
function emanon_content_fb_like_follow() {
	$display_fb_like_btn = get_theme_mod( 'display_fb_like_btn', '' );
	if ( $display_fb_like_btn ) {
		get_template_part( 'lib/modules/components/facebook-follow' );
	}
}

// Twitter followボタンの表示
function emanon_content_twitter_follow() {
	$display_content_twitter_follow = get_theme_mod( 'display_content_twitter_follow', '' );
	if ( $display_content_twitter_follow ) {
		get_template_part( 'lib/modules/components/sns-follow-twitter' );
	}
}

// SNSフォローボタンの表示
function emanon_content_sns_follow() {
	$display_content_sns_follow = get_theme_mod( 'display_content_sns_follow', '' );
	if ( $display_content_sns_follow ) {
		get_template_part( 'lib/modules/components/sns-follow' );
	}
}

/*------------------------------------------------------------------------------------
/* 投稿者プロフィールの表示（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
function emanon_author_profile() {
	$display_author_profile = get_theme_mod( 'display_author_profile', '' );
	if ( $display_author_profile ) {
		get_template_part( 'lib/modules/components/author-profile' );
	}
}

// Archiveページでの表示
function emanon_author_archive() {
	$display_author_profile = get_theme_mod( 'display_author_profile', '' );
	if ( $display_author_profile && is_author() ) {
		get_template_part( 'lib/modules/components/author-archive' );
	}
}

/*------------------------------------------------------------------------------------
/* 関連記事（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// 前後記事の表示
function emanon_display_pre_nex() {
	$display_pre_nex = get_theme_mod( 'display_pre_nex', true );
	if ( $display_pre_nex ) {
		get_template_part( 'lib/modules/components/post-navigation' );
	}
}

// 前後記事のアイキャッチ表示判定
function is_emanon_display_pre_nex_thumbnail_img() {
	$display_pre_nex_thumbnail_img = get_theme_mod( 'display_pre_nex_thumbnail_img', true );
	return $display_pre_nex_thumbnail_img;
}

if ( is_emanon_display_pre_nex_thumbnail_img() ):
function emanon_add_img_pre_nex( $output, $format, $link, $post, $adjacent ){
	if( has_post_thumbnail( $post ) ) {
		$thumbnail_img = get_the_post_thumbnail( $post, 'square-thumbnail' );
	} else {
		$thumbnail_img = '<img src="' . get_template_directory_uri()."/lib/images/no-img/square-no-img.png" . '" alt="no image" />';
	}
	$output = str_replace( '<span class="nav-title clearfix">', '<span class="nav-title clearfix">' . $thumbnail_img, $output );
	return $output;
	}

add_filter( 'next_post_link', 'emanon_add_img_pre_nex', 10, 5 );
add_filter( 'previous_post_link', 'emanon_add_img_pre_nex', 10, 5 );
endif;

// 関連記事の表示
function emanon_related_post() {
	$display_related_post = get_theme_mod( 'display_related_post', true );
	if ( $display_related_post ) {
		get_template_part( 'lib/modules/components/related-post' );
	}
}

/*------------------------------------------------------------------------------------
/* 保護ページのタイトルから「保護中：」を削除
/*----------------------------------------------------------------------------------*/
add_filter( 'protected_title_format', 'edit_emanon_protected_title' );
function edit_emanon_protected_title() {

	$title = get_theme_mod( 'protected_title', __( 'Protected:', 'emanon' ) );

	if ( ! get_theme_mod( 'delete_protected_title' ) ) {
		return '' . esc_html( $title ). ' %s';
	} else {
	return '%s';
	}
}

add_filter('the_password_form', 'emanon_password_form');
function emanon_password_form( $post = 0 ) {
	$post = get_post( $post );
	$label = 'pwbox-' . ( empty($post->ID) ? rand() : $post->ID );
	$message = get_theme_mod( 'protected_message', __( 'This content is password protected. To view it please enter your password below:', 'emanon' ) );
	$output = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form" method="post">
	<p>' . nl2br( wp_kses_post( $message ) ) . '</p>
	<div class="text-center"><label for="' . $label . '">' . __( 'Password:' ) . ' <input name="post_password" id="' . $label . '" type="password" size="20" /></label><input type="submit" name="Submit" value="' . esc_attr_x( 'Enter', 'post password form' ) . '" /></div></form>
	';
	return $output;
}

/*------------------------------------------------------------------------------------
/* リストページ（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// レイアウトクラスの追加
function emanon_content_entry_layout( $classes ) {
	$entry_layout_type = get_theme_mod( 'content_entry_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			$classes[] = 'one-column';
		} elseif ( $entry_layout_type == 'two_column' ) {
			$classes[] = 'two-column';
		} elseif ( $entry_layout_type == 'three_column' ) {
			$classes[] = 'three-column';
		} elseif ( $entry_layout_type == 'big_column' ) {
			$classes[] = 'big-column';
		}
		return $classes;
}
add_filter( 'post_class', 'emanon_content_entry_layout' );

// アーカイブレイアウトクラスの追加
function emanon_archive_entry_layout( $classes ) {
	$entry_layout_type = get_theme_mod( 'archive_entry_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			$classes[] = 'ar-one-column';
		} elseif ( $entry_layout_type == 'two_column' ) {
			$classes[] = 'ar-two-column';
		} elseif ( $entry_layout_type == 'three_column' ) {
			$classes[] = 'ar-three-column';
		} elseif ( $entry_layout_type == 'big_column' ) {
			$classes[] = 'ar-big-column';
		}
		return $classes;
}
add_filter( 'post_class', 'emanon_archive_entry_layout' );

// 投稿者リストレイアウトクラスの追加
function emanon_author_list_layout( $classes ) {
	$entry_layout_type = get_theme_mod( 'author_list_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			$classes[] = 'au-one-column';
		} elseif ( $entry_layout_type == 'two_column' ) {
			$classes[] = 'au-two-column';
		} elseif ( $entry_layout_type == 'three_column' ) {
			$classes[] = 'au-three-column';
		}
		return $classes;
}
add_filter( 'post_class', 'emanon_author_list_layout' );

// アイキャッチ画像のレイアウト対応
function emanon_content_entry_thumbnail() {
	$entry_layout_type = get_theme_mod( 'content_entry_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			get_template_part( 'lib/modules/components/thumb' );
		} elseif ( $entry_layout_type == 'two_column' ) {
			get_template_part( 'lib/modules/components/thumb-card' );
		} elseif ( $entry_layout_type == 'three_column' ) {
			get_template_part( 'lib/modules/components/thumb-card' );
		} elseif ( $entry_layout_type == 'big_column' ) {
			get_template_part( 'lib/modules/components/thumb-card-large' );
	}
}

// 投稿日の表示判定
function is_emanon_display_entry_date_list() {
	$display_entry_date_list = get_theme_mod( 'display_entry_date_list', true );
	return $display_entry_date_list;
}

// 更新日の表示判定
function is_emanon_display_update_date_list() {
	$display_update_date_list = get_theme_mod( 'display_update_date_list', '' );
	return $display_update_date_list;
}

// カテゴリーの表示判定
function is_emanon_display_category_list() {
	$display_category_list = get_theme_mod( 'display_category_list', true );
	return $display_category_list;
}

// タグの表示判定
function is_emanon_display_tag_list() {
	$display_tag_list = get_theme_mod( 'display_tag_list', '' );
	return $display_tag_list;
}

// コメント数の表示判定
function is_emanon_display_comments_number_list() {
	$display_comments_number_list = get_theme_mod( 'display_comments_number_list', '' );
	return $display_comments_number_list;
}

// 投稿者名の表示
function is_emanon_display_author_list() {
	$display_author_list = get_theme_mod( 'display_author_list', '' );
	return $display_author_list;
}

// 投稿メタの表示
function emanon_entry_meta_list() {

global $post;

	echo '<ul class="post-meta clearfix">' . "\n";
	if ( is_emanon_display_entry_date_list() && is_emanon_display_update_date_list() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ) . '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	} elseif ( is_emanon_display_entry_date_list() && !is_emanon_display_update_date_list() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}
	if ( is_emanon_display_update_date_list() && get_the_time( 'Y-m-d' ) != get_the_modified_date( 'Y-m-d' ) ) {
		echo '<li><i class="fa fa-history"></i><time class="date updated" datetime="' . esc_attr( get_the_modified_date( 'Y-m-d' ) ). '">' . esc_html( get_the_modified_date() ). '</time></li>' . "\n";
	} elseif ( !is_emanon_display_entry_date_list() && is_emanon_display_update_date_list() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}

	if ( $tags_list = get_the_tag_list( '', ', ' ) ) {
		if ( is_emanon_display_tag_list() ) {
			echo '<li><i class="fa fa-tag"></i>' . $tags_list . '</li>' . "\n";
			}
	}

	if ( is_emanon_display_comments_number_list() && ! post_password_required() && get_comments_number() ) {
		echo '<li>' . "\n";
		comments_popup_link( printf( '<i class="fa fa-comments-o"></i><span class="screen-reader-text">%s</span>' , get_the_title() ) );
		echo '</li>' . "\n";
	}

	if ( is_emanon_display_author_list() ) {
		echo '<li itemscope itemtype="http://schema.org/Person" itemprop="author"><i class="fa fa-user"></i><span class="vcard author"><span class="fn" itemprop="name"><a href="' . esc_url( get_author_posts_url( $post->post_author ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></li>' . "\n";
	}
	echo '</ul >' . "\n";
}

function emanonn_entry_meta_category() {
	if ( is_sticky() && is_home() || is_sticky() && is_front_page() ) {
		echo '<span class="cat-name">' . __( 'Recommended Articles', 'emanon' ) . '</span>' . "\n";
	} elseif ( is_emanon_display_category_list() && !is_category() ) {
		$display_category_nicename = get_theme_mod( 'display_category_nicename', '' );
		$category = get_the_category();
		if ( !empty( $category) ) {
			$category = $category[0];
		}
		if ( $category && $display_category_nicename ) {
			echo '<span class="cat-name ' .$category->category_nicename . '">' . sprintf('<a href="%s">%s</a>', get_category_link( $category->cat_ID ), esc_html( $category->cat_name ) ) . '</span>' . "\n";
		} elseif ( $category ) {
			echo '<span class="cat-name">' . sprintf('<a href="%s">%s</a>', get_category_link( $category->cat_ID ), esc_html( $category->cat_name ) ) . '</span>' . "\n";
		}
	}
}

// 抜粋の表示
function emanon_excerpt() {
	$display_excerpt = get_theme_mod( 'display_excerpt', true );
	return $display_excerpt;
}

// 抜粋の長さを取得
function get_emanon_excerpt_length() {
	$excerpt_length = get_theme_mod( 'excerpt_length', 40 );
	return $excerpt_length;
}

function emanon_excerpt_length( $length ) {
	return intval( get_emanon_excerpt_length() );
}

add_filter( 'excerpt_length', 'emanon_excerpt_length', 999 );

// 抜粋の末尾を取得
function get_emanon_excerpt_more() {
	$excerpt_more = get_theme_mod( 'excerpt_more', '' );
	return strip_tags( $excerpt_more );
}

function emanon_excerpt_more( $more ) {
	return get_emanon_excerpt_more();
}
add_filter( 'excerpt_more', 'emanon_excerpt_more' );

// 続きを読むの表示
function emanon_read_more() {
	$display_read_more = get_theme_mod( 'display_read_more', true );
	if ( $display_read_more ) {
		get_template_part( 'lib/modules/components/read-more' );
	}
}

// 続きを読むの取得
function get_emanon_read_more_type() {
	$read_more_type = get_theme_mod( 'read_more_type', 'read_more' );
	return $read_more_type;
}

/*------------------------------------------------------------------------------------
/* 検索結果の範囲
/*----------------------------------------------------------------------------------*/
// 検査結果を投稿記事のみにする
function emanon_search_filter( $query ) {
	$search_results_post = get_theme_mod( 'search_results_post', true );
	if ( $search_results_post&& !is_admin() && $query -> is_main_query() && $query -> is_search() ) {
		$query -> set( 'post_type', 'post' );
	}
}
add_action( 'pre_get_posts','emanon_search_filter' );

/*------------------------------------------------------------------------------------
/* フッター設定
/*----------------------------------------------------------------------------------*/
// トップページに戻るボタンの表示
function emanon_top_page_btn() {
	$display_top_page_btn_pc = get_theme_mod( 'display_top_page_btn_pc', true );
	$display_top_page_btn_sp = get_theme_mod( 'display_top_page_btn_sp', true );
	if ( $display_top_page_btn_pc && !is_mobile() ) {
		echo '<div class="pagetop wow slideInUp"><a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i><span class="br"></span>Page Top</a></div>';
	} elseif ( $display_top_page_btn_sp && is_mobile() ) {
		echo '<div class="pagetop wow slideInUp"><a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i><span class="br"></span>Page Top</a></div>';
	}
}

// フッターCTA サイト名・ロゴの表示
function emanon_footer_logo() {
	$footer_logo = get_theme_mod( 'footer_logo', '' );
	$cta_footer_title = get_theme_mod( 'cta_footer_title', get_bloginfo( 'name' )	 );
	$cta_footer_title_url = get_theme_mod( 'cta_footer_title_url', home_url( '/' )	);
	if ( $footer_logo ) {
	echo '<a href="' . esc_url( $cta_footer_title_url ) . '"><img src="' . esc_url( $footer_logo ) . '" alt="' . esc_html( $cta_footer_title ) . '" ></a>' . "\n";
	} else {
	echo '<p><a href="' . esc_url( $cta_footer_title_url ) .'">' . esc_html( $cta_footer_title ) . '</a></p>' . "\n";
	}
}

// フッターCTAの表示
function emanon_cta_footer_section() {
	$display_cta_footer_section_frontpage = get_theme_mod( 'display_cta_footer_section_frontpage', '' );
	$display_cta_footer_section_page_single = get_theme_mod( 'display_cta_footer_section_page_single', '' );
	$display_cta_footer_section_archive = get_theme_mod( 'display_cta_footer_section_archive', '' );
		if ( $display_cta_footer_section_frontpage && is_home() || $display_cta_footer_section_frontpage && is_front_page() || $display_cta_footer_section_page_single && is_single() || $display_cta_footer_section_page_single && is_page() && !is_page_template( 'templates/lp.php' ) || $display_cta_footer_section_archive	 && is_archive() ) {
		get_template_part( 'lib/modules/sections/section-cta-footer' );
	}
}

// PopUp CTAの表示
function emanon_cta_popup() {
	$display_cta_popup_mobile = get_theme_mod( 'display_cta_popup_mobile', '' );
	$display_cta_popup_frontpage = get_theme_mod( 'display_cta_popup_frontpage', '' );
	$display_cta_popup_archive = get_theme_mod( 'display_cta_popup_archive', '' );
	$display_cta_popup_lp = get_theme_mod( 'display_cta_popup_lp', '' );
	$emanon_hide_popup_cta = post_custom( 'emanon_hide_popup_cta' );
	if ( $emanon_hide_popup_cta ) {
	$display_cta_popup_single = '';
	} else {
	$display_cta_popup_single = get_theme_mod( 'display_cta_popup_single', '' );
	}
	if ( $emanon_hide_popup_cta ) {
	$display_cta_popup_page = '';
	} else {
	$display_cta_popup_page = get_theme_mod( 'display_cta_popup_page', '' );
	}

	if ( $display_cta_popup_mobile && wp_is_mobile() ) {
		if ( $display_cta_popup_frontpage && is_front_page() || $display_cta_popup_single && is_single() || $display_cta_popup_page && is_page() && !is_page_template( 'templates/lp.php' ) && !is_front_page() || $display_cta_popup_lp && is_page_template( 'templates/lp.php' ) || $display_cta_popup_archive	&& is_archive() ) {
			get_template_part( 'lib/modules/components/cta-popup-mobile' ); // モーダルウィンドウ
			}
		} elseif ( !wp_is_mobile() ) {
			if ( $display_cta_popup_frontpage && is_front_page() || $display_cta_popup_single && is_single() || $display_cta_popup_page && is_page() && !is_page_template( 'templates/lp.php' ) && !is_front_page() || $display_cta_popup_lp && is_page_template( 'templates/lp.php' ) || $display_cta_popup_archive	&& is_archive() ) {
			get_template_part( 'lib/modules/components/cta-popup' );
		}
	}
}

// Pop up CTA mobile［モーダルウィンドウ］
function emanon_cta_popup_modal_window() {
	$display_cta_popup_mobile = get_theme_mod( 'display_cta_popup_mobile', '' );
	$display_cta_popup_frontpage = get_theme_mod( 'display_cta_popup_frontpage', '' );
	$display_cta_popup_archive = get_theme_mod( 'display_cta_popup_archive', '' );
	$emanon_hide_popup_cta = post_custom( 'emanon_hide_popup_cta' );
	if ( $emanon_hide_popup_cta ) {
		$display_cta_popup_single = '';
	} else {
		$display_cta_popup_single = get_theme_mod( 'display_cta_popup_single', '' );
	}
	if ( $emanon_hide_popup_cta ) {
		$display_cta_popup_page = '';
	} else {
		$display_cta_popup_page = get_theme_mod( 'display_cta_popup_page', '' );
	}
	$cta_popup_mobile_icon = get_theme_mod( 'cta_popup_mobile_icon', 'fa fa-envelope-o' );

	if ( $display_cta_popup_mobile && wp_is_mobile() && !is_404() ) {
		if ( $display_cta_popup_frontpage && is_home() || $display_cta_popup_frontpage && is_front_page() || $display_cta_popup_single && is_single() || $display_cta_popup_page && is_page() || $display_cta_popup_archive	&& is_archive() ) {
		echo '<div class="popup-btn-mobile wow fadeInRight" data-wow-delay="2.0s"><a href="#modal-cta-popup" data-remodal-target="modal-cta-popup"><i class="' . esc_html( $cta_popup_mobile_icon ) . '"></i></div>';
		}
	}
}

// SNSフォローボタンの表示判定
function is_emanon_footer_sns_follow() {
	$display_footer_sns_follow = get_theme_mod( 'display_footer_sns_follow', '' );
	return ( $display_footer_sns_follow );
}

// SNSフォローボタンの表示
function emanon_footer_sns_follow() {
	if ( is_emanon_footer_sns_follow() ) {
	echo '<div class="footer-top">' . "\n";
	echo '<div class="container">' . "\n";
	echo '<div class="col12">' . "\n";
	echo '<div class="footer-top-inner">' . "\n";
	echo '<ul>' . "\n";
		if ( get_emanon_twitter_profile_url() ) { ?><li><a href="<?php echo esc_html( get_emanon_twitter_profile_url() ); ?>" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li> <?php }
		if ( get_emanon_facebook_profile_url() ) { ?><li><a href="<?php echo esc_url( get_emanon_facebook_profile_url() ); ?>" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li> <?php }
		if ( get_emanon_instagram_profile_url() ) { ?><li><a href="<?php echo esc_url( get_emanon_instagram_profile_url() ); ?>" target="_blank"><i class="fa fa-instagram"></i><span>Instagram</span></a></li> <?php }
		if ( get_emanon_line_profile_url() ) { ?><li><a href="<?php echo esc_url( get_emanon_line_profile_url() ); ?>" target="_blank"><span class="line">LINE@</span></a></li> <?php }
		if ( get_emanon_youtube_profile_url() ) { ?><li><a href="<?php echo esc_url( get_emanon_youtube_profile_url() ); ?>" target="_blank"><i class="fa fa-youtube"></i><span>YouTube</span></a></li> <?php }
		if ( get_emanon_feedly_url() ) { ?><li><a href="https://feedly.com/i/subscription/feed/<?php echo esc_url( get_emanon_feedly_url() ); ?>" target="_blank"><i class="fa fa-rss"></i><span>Feedly</span></a></li> <?php }
	echo '</ul>' . "\n";
	echo '</div>' . "\n";
	echo '</div>' . "\n";
	echo '</div>' . "\n";
	echo '</div>' . "\n";
	}
}

/*------------------------------------------------------------------------------------
/* Facebook Messenger設定
/*----------------------------------------------------------------------------------*/
function emanon_facebook_messenger() {
	$fm_frontpage = get_theme_mod( 'display_facebook_messenger_frontpage', '' );
	$fm_single = get_theme_mod( 'display_facebook_messenger_single', '' );
	$fm_page = get_theme_mod( 'display_facebook_messenger_page', '' );
	$fm_archive = get_theme_mod( 'display_facebook_messenger_archive', '' );
	$fm_lp = get_theme_mod( 'display_facebook_messenger_lp', '' );
	$fm_mobile = get_theme_mod( 'display_facebook_messenger_mobile', '' );
	$fm_code = get_theme_mod( 'insert_facebook_messenger_code', '' );

	if ( $fm_mobile && wp_is_mobile() ) {
		if ( is_front_page() && $fm_frontpage && $fm_code || is_home() && $fm_frontpage && $fm_code || is_single() && $fm_single && $fm_code || is_page() && !is_page_template( 'templates/lp.php' ) && $fm_page && $fm_code || is_archive() && $fm_archive && $fm_code || is_page_template( 'templates/lp.php' ) && $fm_lp  && $fm_code ) {
		echo $fm_code . "\n";}
	} elseif ( !wp_is_mobile() ) {
		if ( is_front_page() && $fm_frontpage && $fm_code || is_home() && $fm_frontpage && $fm_code || is_single() && $fm_single && $fm_code || is_page() && !is_page_template( 'templates/lp.php' ) && $fm_page && $fm_code || is_archive() && $fm_archive && $fm_code || is_page_template( 'templates/lp.php' ) && $fm_lp  && $fm_code ) {
		echo $fm_code . "\n";}
	}
}

/*------------------------------------------------------------------------------------
/* 投稿ページ・固定ページ CTA設定
/*----------------------------------------------------------------------------------*/
// CTAボタン（投稿用）の表示
function emanon_cta_single() {
	$emanon_hide_cta = post_custom( 'emanon_hide_cta', '' );
	if ( $emanon_hide_cta ) {
	$display_cta_single = '';
	} else {
	$display_cta_single = get_theme_mod( 'display_cta_single', '' );
	}
	if ( $display_cta_single ) {
	$emanon_cta_type = post_custom( 'emanon_cta_type', 'cta1' );
		if ( $emanon_cta_type == 'cta1' ) {
			get_template_part( 'lib/modules/components/cta-post-potential' );
		} elseif ( $emanon_cta_type == 'cta2' ) {
			get_template_part( 'lib/modules/components/cta-post-eventually' );
		} elseif ( $emanon_cta_type == 'cta3' ) {
			get_template_part( 'lib/modules/components/cta-post-compare' );
		} elseif ( $emanon_cta_type == 'cta4' ) {
			get_template_part( 'lib/modules/components/cta-post-prospect' );
		} else {
			get_template_part( 'lib/modules/components/cta-post-common' );
		}
	}
}

// CTAボタン（固定ページ用）の表示
function emanon_cta_page() {
	$emanon_hide_cta = post_custom( 'emanon_hide_cta', '' );
	if ( $emanon_hide_cta ) {
	$display_cta_page = '';
	} else {
	$display_cta_page = get_theme_mod( 'display_cta_page', '' );
	}
	if ( $display_cta_page ) {
	$emanon_cta_type = post_custom( 'emanon_cta_type', 'cta1' );
		if ( $emanon_cta_type == 'cta1' ) {
			get_template_part( 'lib/modules/components/cta-post-potential' );
		} elseif ( $emanon_cta_type == 'cta2' ) {
			get_template_part( 'lib/modules/components/cta-post-eventually' );
		} elseif ( $emanon_cta_type == 'cta3' ) {
			get_template_part( 'lib/modules/components/cta-post-compare' );
		} elseif ( $emanon_cta_type == 'cta4' ) {
			get_template_part( 'lib/modules/components/cta-post-prospect' );
		} else {
			get_template_part( 'lib/modules/components/cta-post-common' );
		}
	}
}

/*------------------------------------------------------------------------------------
/* 広告設定
/*----------------------------------------------------------------------------------*/
// 投稿ページの広告表示判定
function is_emanon_ad_single() {
	$display_ad_single = get_theme_mod( 'display_ad_single', '' );
	return $display_ad_single;
}

// 固定ページの広告表示判定
function is_emanon_ad_page() {
	$display_ad_page = get_theme_mod( 'display_ad_page', '' );
	return $display_ad_page;
}

// フロントページ・アーカイブページの広告表示判定
function is_emanon_ad_listpage() {
	$display_ad_listpage = get_theme_mod( 'display_ad_listpage', '' );
	return $display_ad_listpage;
}

// 広告ラベルの取得
function get_emanon_ad_label() {
	$emanon_ad_label = get_theme_mod( 'emanon_ad_label', __( 'Sponsor link', 'emanon' ) );
	return strip_tags( $emanon_ad_label );
}

// サイドバー広告 300px 300pxの表示
function emanon_sidebar_ad300() {
	$emanon_hide_ad = post_custom( 'emanon_hide_ad', '' );
	if ( $emanon_hide_ad ) {
	$sidebar_ad300 = '';
	} else {
	$sidebar_ad300 = get_theme_mod( 'sidebar_ad300', '' );
	}
	if ( $sidebar_ad300 ) {
		get_template_part( 'lib/modules/components/ad-300' );
	}
}

// h2見出しを判定し 300px 300pxを表示
define( 'H2_REG', '/<h2.*?>/i' );
function get_h2_included_in_body( $the_content ) {
	if ( preg_match( H2_REG, $the_content, $h2results ) ) {
		return $h2results[0];
	}
}

function add_ads_before_1st_h2( $the_content ) {
	$emanon_hide_ad = post_custom( 'emanon_hide_ad', '' );
	if ( $emanon_hide_ad ) {
	$h2_right_ad300 = '';
	$h2_left_ad300 = '';
	} else {
	$h2_right_ad300 = get_theme_mod( 'h2_right_ad300', '' );
	$h2_left_ad300 = get_theme_mod( 'h2_left_ad300', '' );
	}
	if ( $h2_right_ad300 || $h2_left_ad300 ) {
		ob_start();
		get_template_part( 'lib/modules/components/ad-300h2' );
		$ad_template = ob_get_clean();
		$h2result = get_h2_included_in_body( $the_content );
		if ( $h2result ) {
			$the_content = preg_replace( H2_REG, $ad_template.$h2result, $the_content, 1);
		}
	}
	return $the_content;
}
add_filter( 'the_content','add_ads_before_1st_h2' );

// h2上部 right 300px 300pxの表示判定
function is_emanon_h2_right_ad300() {
	$h2_right_ad300 = get_theme_mod( 'h2_right_ad300', '' );
	return $h2_right_ad300;
}

// h2上部 left 300px 300pxの表示判定
function is_emanon_h2_left_ad300() {
	$h2_left_ad300 = get_theme_mod( 'h2_left_ad300', '' );
	return $h2_left_ad300;
}

// ページ下部 300px 300pxの表示
function emanon_under_ad300() {
	$emanon_hide_ad = post_custom( 'emanon_hide_ad', '' );
	if ( $emanon_hide_ad ) {
	$right_ad300 = '';
	$left_ad300  = '';
	} else {
	$right_ad300 = get_theme_mod( 'under_right_ad300', '' );
	$left_ad300 = get_theme_mod( 'under_left_ad300', '' );
	}
	if ( $right_ad300 || $left_ad300 ) {
	get_template_part( 'lib/modules/components/ad-300under' );
	}
}

// ページ下部 right 300px 300pxの表示判定
function is_emanon_under_right_ad300() {
	$right_ad300 = get_theme_mod( 'under_right_ad300', '' );
	return $right_ad300;
}

// ページ下部 left 300px 300pxの表示判定
function is_emanon_under_left_ad300() {
	$left_ad300 = get_theme_mod( 'under_left_ad300', '' );
	return $left_ad300;
}

/*------------------------------------------------------------------------------------
/* Archiveページの説明文表示
/*----------------------------------------------------------------------------------*/
function get_emanon_archive_description() {
	if ( is_category() ) {
		$description = trim( strip_tags( category_description() ) );
		if ( $description == "" ) {
			$description = __( 'Category of article list', 'emanon' );
		}
	} elseif ( is_tag() ) {
				$description = trim( strip_tags( tag_description() ) );
		if ( $description == "" ) {
			$description = __( 'Tag of article list', 'emanon' );
		}
	} elseif ( is_archive() ) {
			$description = __( 'Article list', 'emanon' );
	} elseif ( is_author() ) {
			$description = __( 'Author of article list', 'emanon' );
	}
	return $description;

}

function emanon_archive_description() {
	echo esc_html( get_emanon_archive_description() );
}

/*------------------------------------------------------------------------------------
/* iframeのレスポンシブ対応
/*----------------------------------------------------------------------------------*/
function emanon_iframe_in_div( $the_content ) {
	if ( is_singular() ) {
	//YouTube動画
	$the_content = preg_replace( '/<iframe[^>]+?youtube\.com[^<]+?<\/iframe>/is', '<div class="responsive-wrap">${0}</div>', $the_content );
	//GoogleMap
	$the_content = preg_replace( '/<iframe[^>]+?google\.com\/maps\/embed[^<]+?<\/iframe>/is', '<div class="responsive-wrap">${0}</div>', $the_content );
	//slideshare
	$the_content = preg_replace( '/<iframe[^>]+?slideshare\.net[^<]+?<\/iframe>/is', '<div class="responsive-wrap">${0}</div>', $the_content );
	//vimeo
	$the_content = preg_replace( '/<iframe[^>]+?player\.vimeo\.com[^<]+?<\/iframe>/is', '<div class="responsive-wrap">${0}</div>', $the_content );
	}
	return $the_content;
}
add_filter( 'the_content','emanon_iframe_in_div' );

/*------------------------------------------------------------------------------------
/* ページスピード設定
/*----------------------------------------------------------------------------------*/
// HTMLの圧縮
function emanon_html_compress_start() {
	$html_minified = get_theme_mod( 'html_minified', '' );
	if ( $html_minified ) {
		$ob_start = ob_start();
		return $ob_start;
	}
}

function emanon_html_compress_end() {
	$html_minified = get_theme_mod( 'html_minified', '' );
	if ( $html_minified ) {
		$html_compress = ob_get_clean();
		$html_compress = str_replace( "\t", '', $html_compress );
		$html_compress = str_replace( "\r", '', $html_compress );
		$html_compress = str_replace( "\n", '', $html_compress );
		$html_compress = preg_replace( '/<!--[\s\S]*?-->/', '', $html_compress );
		echo $html_compress;
	}
}

// jQueryのフッター移動
function emanon_enqueue_script() {
	$jquery_bottom = get_theme_mod( 'jquery_bottom', '' );
	if ( $jquery_bottom ) {
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',array(), '', true ); //head内でjQueryが必要な場合は無効
			} else {
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',array(), '', false );
	 }
 }

// font-awesome.css 読み込み遅延の判定
function is_replace_font_awesom_tag() {
	$font_awesome_lazyload = get_theme_mod( 'font_awesome_lazyload', '' );
	return $font_awesome_lazyload;
}

// font-awesome.css 読み込み遅延
if ( is_replace_font_awesom_tag() ) {
function replace_font_awesome_tag ( $tag, $handle ) {
	if ( 'font-awesome' !== $handle ) {
		return $tag;
	}
		return str_replace( 'stylesheet', 'subresource', $tag );
	}

add_filter( 'style_loader_tag', 'replace_font_awesome_tag', 10, 2);
}

/*------------------------------------------------------------------------------------
/* CSS統合/圧縮
/*----------------------------------------------------------------------------------*/
define( 'TEMPLA', get_template_directory() );
define( 'STYLE', get_stylesheet_directory() );
require_once(ABSPATH . 'wp-admin/includes/file.php'); // WP_Filesystemの使用

// 圧縮版style.cssの読み込み切り替え
if ( !function_exists( 'emanon_enqueue_style' ) ):
function emanon_enqueue_style() {
	$css_minified = get_theme_mod( 'css_minified', '' );
	$stop_animation = get_theme_mod( 'stop_animation', '' );
		if ( $css_minified ) {
		wp_enqueue_style( 'emanon-style-min', get_template_directory_uri() . '/style-min.css' );
			} else {
		wp_enqueue_style( 'emanon-style', get_stylesheet_uri() );
		if ( !$stop_animation ) {
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/css/animate.min.css' );
		}
	}
}
endif;

if ( !function_exists( 'emanon_css_compression' ) ):
function emanon_css_compression() {
	$stop_animation = get_theme_mod( 'stop_animation', '' );
	$parent_css = TEMPLA . '/style.css';
	$animate_css = TEMPLA . '/lib/css/animate.min.css';

	$css = '';

 if ( WP_Filesystem() ) { // WP_Filesystemの初期化
	global $wp_filesystem; // $wp_filesystemオブジェクトの呼び出し
	if( is_file( $parent_css ) ) $css .= $wp_filesystem->get_contents( $parent_css );
	if( is_file( $animate_css ) && !$stop_animation ) $css .= $wp_filesystem->get_contents( $animate_css );
}

// CSS 圧縮
	if( class_exists('CSSmin') ) {
		$minify = new CSSmin();
		if( method_exists( $minify, "run" ) ) {
				$css = trim( $minify->run( $css ) );
		}

// 圧縮後のCSSファイル保存
	$style_min = TEMPLA . '/style-min.css';

if ( WP_Filesystem() ) { // WP_Filesystemの初期化
		global $wp_filesystem; // $wp_filesystemオブジェクトの呼び出し
		// $wp_filesystemオブジェクトのメソッドとしてファイルに書き込む
		$wp_filesystem->put_contents( $style_min, $css );
	}

	return;
}

}
add_action( 'customize_save_after', 'emanon_css_compression', 10, 1 );
endif;

/*------------------------------------------------------------------------------------
/* Copyright
/*----------------------------------------------------------------------------------*/
// Site name
function get_emanon_footer_copyright() {
	$footer_copyright_text = '&copy;&nbsp;'.get_bloginfo( 'name' );
	$footer_copyright_text = apply_filters( 'emanon_footer_custom_copyright_text', $footer_copyright_text );
	return strip_tags( $footer_copyright_text );
}

// Powered by emanon
function emanon_footer_copy() {
	$powered_by = '<br class="br-sp"> Powered by <a href="https://wp-emanon.jp/" target="_blank" rel="nofollow">Emanon</a>';
	$powered_by = apply_filters( 'emanon_footer_custom_powered_by', $powered_by );
	echo '<div class="copyright">' . "\n";
	echo '<small><a href="' . esc_url( home_url() ) . '">' . esc_html( get_emanon_footer_copyright() ) . '</a>' . $powered_by . '</small>' . "\n";
	echo '</div>' . "\n";
}