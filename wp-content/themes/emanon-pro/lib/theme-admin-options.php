<?php
/**
* Admin customize
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/

/*------------------------------------------------------------------------------------
/* Meta description 文字数のカウント
/*----------------------------------------------------------------------------------*/
$active_meta_tage_settings = get_theme_mod( 'active_meta_tage_settings', true );

if ( $active_meta_tage_settings ):
function meta_description_counter() {
	?>
	<script type="text/javascript">
		jQuery( document ).ready(function($) {
			if( 'post' == $('#post_type').val() || 'page' == $('#post_type').val() ) {
			meta_description_count_field( "#emanon_meta_description" );
			}
		});

		function meta_description_count_field( target ) {
			jQuery( target ).after( "<span class=\"meta_description_word_counter\" style='display:block; margin:0 15px 0 0;'></span>" );
			jQuery( target ).bind({
			keyup: function() {
			meta_description_set_counter();
			},
			change: function() {
			meta_description_set_counter();
		}
		});

		meta_description_set_counter();
		function meta_description_set_counter(){
			jQuery( "span.meta_description_word_counter" ).text( "<?php _e( 'word counter:', 'emanon' ); ?>"+jQuery( target ).val().length );
			};
		}
	</script>
	<?php
}
add_action( 'admin_head-post.php', 'meta_description_counter' );
add_action( 'admin_head-post-new.php', 'meta_description_counter' );
endif;

/*------------------------------------------------------------------------------------
/* 広告非表示の設定
/*----------------------------------------------------------------------------------*/
function add_custom_menu() {
	add_meta_box( 'hide_ad_setting', __( 'Hide ad setting', 'emanon' ), 'hide_ad_setting_form', 'post', 'side', 'low' );
	add_meta_box( 'hide_ad_setting', __( 'Hide ad setting', 'emanon' ), 'hide_ad_setting_form', 'page', 'side', 'low' );
}
add_action( 'admin_menu', 'add_custom_menu' );

//フォーム表示
function hide_ad_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	$hide_ad_value = get_post_meta( $post->ID, 'emanon_hide_ad', true );

	if( $hide_ad_value == 1 ) {
		$hide_ad_checked = "checked";
		} else { $hide_ad_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_hide_ad" id="emanon_hide_ad" value="1"' . $hide_ad_checked . '/>'. __( 'Hide ad' , 'emanon') . '</label>';
}

//入力内容の更新処理
function hide_ad_setting_save( $post_id ) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	 $data = isset($_POST['emanon_hide_ad']) ? $_POST['emanon_hide_ad']: null;

	if( get_post_meta( $post_id, 'emanon_hide_ad') == "" ) {
		add_post_meta ( $post_id, 'emanon_hide_ad', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_hide_ad', true ) ) {
		update_post_meta( $post_id, 'emanon_hide_ad', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_hide_ad', get_post_meta( $post_id, 'emanon_hide_ad', true ) );
	}

}
add_action( 'save_post', 'hide_ad_setting_save' );

/*------------------------------------------------------------------------------------
/* CTA表示の設定
/*----------------------------------------------------------------------------------*/
function cta_custom_menu() {
	add_meta_box( 'cta_setting', __( 'CTA setting', 'emanon' ), 'cta_setting_form', 'post', 'side', 'low' );
	add_meta_box( 'cta_setting', __( 'CTA setting', 'emanon' ), 'cta_setting_form', 'page', 'side', 'low' );
}
add_action( 'admin_menu', 'cta_custom_menu' );

//フォーム表示
function cta_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	$cta_type_value = get_post_meta( $post->ID,'emanon_cta_type', true );

	echo '<select name="emanon_cta_type">';

	echo '<option value=""';
	if( $cta_type_value == '' ){ echo 'selected'; }
	echo '>'. __( 'Common' , 'emanon') .'</option>';
	echo '<option value="cta1"';
	if( $cta_type_value == 'cta1' ){ echo 'selected'; }
	echo '>'. __( 'Potential customers' , 'emanon') .'</option>';
	echo '<option value="cta2"';
	if( $cta_type_value == 'cta2' ){ echo 'selected'; }
	echo '>'. __( 'Eventually customers' , 'emanon') .'</option>';
	echo '<option value="cta3"';
	if( $cta_type_value == 'cta3' ){ echo 'selected'; }
	echo '>'. __( 'Compare customers' , 'emanon') .'</option>';
	echo '<option value="cta4"';
	if( $cta_type_value == 'cta4' ){ echo 'selected'; }
	echo '>'. __( 'Prospect customers' , 'emanon') .'</option>';
	echo '</select><br>' . "\n";

	$hide_cta_value = get_post_meta( $post->ID, 'emanon_hide_cta', true );

	if( $hide_cta_value == 1 ) {
		$hide_cta_checked = "checked";
		} else { $hide_cta_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_hide_cta" id="emanon_hide_cta" value="1"' . $hide_cta_checked . '/>'. __( 'Hide cta' , 'emanon') . '</label><br>' . "\n";

	$hide_popup_cta_value = get_post_meta( $post->ID, 'emanon_hide_popup_cta', true );

	if( $hide_popup_cta_value == 1 ) {
		$hide_popup_cta_checked = "checked";
		} else { $hide_popup_cta_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_hide_popup_cta" id="emanon_hide_popup_cta" value="1"' . $hide_popup_cta_checked . '/>'. __( 'Hide popup cta' , 'emanon') . '</label>';
}

//入力内容の更新処理 cta setting
function cta_setting_save( $post_id ) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset( $_POST['emanon_cta_type'] ) ? $_POST['emanon_cta_type']: null;

	if( get_post_meta( $post_id, 'emanon_cta_type') == "" ) {
		add_post_meta ( $post_id, 'emanon_cta_type', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_cta_type', true ) ) {
		update_post_meta( $post_id, 'emanon_cta_type', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_cta_type', get_post_meta( $post_id, 'emanon_cta_type', true ) );
	}

}
add_action( 'save_post', 'cta_setting_save' );

//入力内容の更新処理 hide cta
function hide_cta_setting_save( $post_id ) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset($_POST['emanon_hide_cta']) ? $_POST['emanon_hide_cta']: null;

	if( get_post_meta( $post_id, 'emanon_hide_cta') == "" ) {
		add_post_meta ( $post_id, 'emanon_hide_cta', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_hide_cta', true ) ) {
		update_post_meta( $post_id, 'emanon_hide_cta', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_hide_cta', get_post_meta( $post_id, 'emanon_hide_cta', true ) );
	}

}
add_action( 'save_post', 'hide_cta_setting_save' );

//入力内容の更新処理 hide popup cta
function hide_popup_cta_setting_save( $post_id ) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset( $_POST['emanon_hide_popup_cta'] ) ? $_POST['emanon_hide_popup_cta']: null;

	if( get_post_meta( $post_id, 'emanon_hide_popup_cta') == "" ) {
		add_post_meta ( $post_id, 'emanon_hide_popup_cta', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_hide_popup_cta', true ) ) {
		update_post_meta( $post_id, 'emanon_hide_popup_cta', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_hide_popup_cta', get_post_meta( $post_id, 'emanon_hide_popup_cta', true ) );
	}

}
add_action( 'save_post', 'hide_popup_cta_setting_save' );

/*------------------------------------------------------------------------------------
/* おすすめ記事の表示設定
/*----------------------------------------------------------------------------------*/
function featured_entry_menu() {
	add_meta_box( 'featured_entry_setting', __( 'Featured entry setting', 'emanon' ), 'featured_entry_setting_form', 'post', 'side', 'low' );
	add_meta_box( 'featured_entry_setting', __( 'Featured entry setting', 'emanon' ), 'featured_entry_setting_form', 'page', 'side', 'low' );
}
add_action( 'admin_menu', 'featured_entry_menu' );

//フォーム表示
function featured_entry_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	$featured_entry_value = get_post_meta( $post->ID, 'emanon_featured_entry', true );

	if( $featured_entry_value == 1 ) {
		$featured_entry_checked = "checked";
		} else { $featured_entry_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_featured_entry" id="emanon_featured_entry" value="1"' . $featured_entry_checked . '/>'. __( 'Display featured entry' , 'emanon') . '</label>';
}

//入力内容の更新処理
function featured_entry_setting_save( $post_id ) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset($_POST['emanon_featured_entry']) ? $_POST['emanon_featured_entry']: null;

	if( get_post_meta( $post_id, 'emanon_featured_entry') == "" ) {
		add_post_meta ( $post_id, 'emanon_featured_entry', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_featured_entry', true ) ) {
		update_post_meta( $post_id, 'emanon_featured_entry', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_featured_entry', get_post_meta( $post_id, 'emanon_featured_entry', true ) );
	}

}
add_action( 'save_post', 'featured_entry_setting_save' );

/*------------------------------------------------------------------------------------
/* アイキャッチ画像の表示設定
/*----------------------------------------------------------------------------------*/
function thumbnail_menu() {
	add_meta_box( 'thumbnail_setting', __( 'Thumbnail setting', 'emanon' ), 'thumbnail_setting_form', 'post', 'side', 'low' );
	add_meta_box( 'thumbnail_setting', __( 'Thumbnail setting', 'emanon' ), 'thumbnail_setting_form', 'page', 'side', 'low' );
}
add_action( 'admin_menu', 'thumbnail_menu' );

//フォーム表示
function thumbnail_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	$thumbnail_value = get_post_meta( $post->ID, 'emanon_none_display_thumbnail', true );

	if( $thumbnail_value == 1 ) {
		$thumbnail_checked = "checked";
		} else { $thumbnail_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_none_display_thumbnail" id="emanon_none_display_thumbnail" value="1"' . $thumbnail_checked . '/>'. __( 'None display thumbnail.' , 'emanon') . '</label>';
}

//入力内容の更新処理
function thumbnail_setting_save( $post_id ) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset($_POST['emanon_none_display_thumbnail']) ? $_POST['emanon_none_display_thumbnail']: null;

	if( get_post_meta( $post_id, 'emanon_none_display_thumbnail') == "" ) {
		add_post_meta ( $post_id, 'emanon_none_display_thumbnail', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_thumbnail', true ) ) {
		update_post_meta( $post_id, 'emanon_none_display_thumbnail', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_none_display_thumbnail', get_post_meta( $post_id, 'emanon_none_display_thumbnail', true ) );
	}

}
add_action( 'save_post', 'thumbnail_setting_save' );

/*------------------------------------------------------------------------------------
/* Subtitle設定
/*----------------------------------------------------------------------------------*/
function add_subtitle_setting() {
	add_meta_box( 'subtitle_setting', __( 'Subtitle setting', 'emanon' ), 'subtitle_setting_form', 'page', 'normal', 'high' );
	add_meta_box( 'subtitle_setting', __( 'Subtitle setting', 'emanon' ), 'subtitle_setting_form', 'post', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'add_subtitle_setting' );

//フォーム表示
function subtitle_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	echo '<label>' . __( 'Subtitle' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_subtitle" id="emanon_subtitle" value="' . esc_html( get_post_meta( $post->ID, 'emanon_subtitle', true ) ) . '" size="20" style="width:80%" />';
	echo '<p>' . __( 'It is displayed directly under the title of the page body.' , 'emanon') . '<br>';

}

//入力内容の更新処理
function subtitle_setting_save($post_id) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$meta_keywords = isset( $_POST[ 'emanon_subtitle' ] ) ? $_POST[ 'emanon_subtitle' ] : null;

	if( get_post_meta ( $post_id, 'emanon_subtitle') == "" ) {
		add_post_meta ( $post_id, 'emanon_subtitle', $meta_keywords, true );
		} elseif ( $meta_keywords != get_post_meta( $post_id, 'emanon_subtitle', true ) ) {
		update_post_meta( $post_id, 'emanon_subtitle', $meta_keywords );
		} elseif ( $meta_keywords == "" ) {
		delete_post_meta( $post_id, 'emanon_subtitle', get_post_meta( $post_id, 'emanon_subtitle', true ) );
	}

}
add_action( 'save_post', 'subtitle_setting_save' );

/*------------------------------------------------------------------------------------
/* SEO設定
/*----------------------------------------------------------------------------------*/
function add_seo_setting() {
	add_meta_box( 'seo_setting', __( 'SEO setting', 'emanon' ), 'seo_setting_form', 'page', 'normal', 'high' );
	add_meta_box( 'seo_setting', __( 'SEO setting', 'emanon' ), 'seo_setting_form', 'post', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'add_seo_setting' );

//フォーム表示
function seo_setting_form() {
	global $post;
	$active_meta_tage_settings = get_theme_mod( 'active_meta_tage_settings', true );

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	if( $active_meta_tage_settings) {
	echo '<label>' . __( 'meta keywords' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_meta_keywords" id="emanon_meta_keywords" value="' . esc_html( get_post_meta( $post->ID, 'emanon_meta_keywords', true ) ) . '" size="20" style="width:50%" />';
	echo '<p>' . __( 'Set the peculiar keyword indicating this page contents.(Option)' , 'emanon') . '<br>';
	echo __( 'During Meta keyword ,(separated by single-byte comma). (Example) keyword 1,keyword 2' , 'emanon' ) . '</p>';

	echo '<label>' . __( 'meta description' , 'emanon' ) . '</label><br>';
	echo '<textarea name="emanon_meta_description" id="emanon_meta_description" cols="60" rows="4" style="width:99%">' . esc_html( get_post_meta( $post->ID, 'emanon_meta_description', true) ) . '</textarea>';
	echo '<p>' . __( 'Set the summarized writing indicating page contents .(Option)' , 'emanon' ) . '<br />';
	echo	__( 'In the case of non-input, 120 characters are extracted from the post.' , 'emanon' ) . '</p><br />';

	$noindex_value = get_post_meta( $post->ID, 'emanon_noindex', true );

	if( $noindex_value	== 1 ) {
		$noindex_checked	= "checked";
		} else { $noindex_checked	 = "/";
	}

	echo '<label><input type="checkbox" name="emanon_noindex" id="emanon_noindex" value="1"' .	$noindex_checked . '/></label>' ;
	echo __( 'noindex' , 'emanon') . '<br />';
	echo '<p>' . __( 'Discourage search engines from indexing this page' , 'emanon' ) . '</p>';

	$nofollow_value = get_post_meta( $post->ID, 'emanon_nofollow', true );

	if( $nofollow_value == 1 ) {
		$nofollow_checked = "checked";
		} else { $nofollow_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_nofollow" id="emanon_nofollow" value="1"' . $nofollow_checked . '/></label>' ;
	echo	__( 'nofollow' , 'emanon') . '<br />';
	echo '<p>' . __( 'Discourage search engines from following this page' , 'emanon' ) . '</p></label>';

		} else { echo '<p>' . __( 'SEO setting function is turns off.' , 'emanon' ) . '</p></label>';
	}

}

//入力内容の更新処理
function seo_setting_save($post_id) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$meta_keywords = isset( $_POST[ 'emanon_meta_keywords' ] ) ? $_POST[ 'emanon_meta_keywords' ] : null;

	if( get_post_meta ( $post_id, 'emanon_meta_keywords') == "" ) {
		add_post_meta ( $post_id, 'emanon_meta_keywords', $meta_keywords, true );
		} elseif ( $meta_keywords != get_post_meta( $post_id, 'emanon_meta_keywords', true ) ) {
		update_post_meta( $post_id, 'emanon_meta_keywords', $meta_keywords );
		} elseif ( $meta_keywords == "" ) {
		delete_post_meta( $post_id, 'emanon_meta_keywords', get_post_meta( $post_id, 'emanon_meta_keywords', true ) );
	}

	$meta_description = isset( $_POST[ 'emanon_meta_description' ] ) ? $_POST[ 'emanon_meta_description' ] : null;

	if( get_post_meta ( $post_id, 'emanon_meta_description' ) == "" ) {
		add_post_meta ( $post_id, 'emanon_meta_description', $meta_description, true );
		} elseif ( $meta_description != get_post_meta( $post_id, 'emanon_meta_description', true ) ) {
		update_post_meta( $post_id, 'emanon_meta_description', $meta_description );
		} elseif ( $meta_description == "" ) {
		delete_post_meta( $post_id, 'emanon_meta_description', get_post_meta( $post_id, 'emanon_meta_description', true ) );
	}

	$meta_noindex = isset( $_POST[ 'emanon_noindex' ] ) ? $_POST[ 'emanon_noindex' ] : null;

	if( get_post_meta ( $post_id, 'emanon_noindex' ) == "" ) {
		add_post_meta ( $post_id, 'emanon_noindex', $meta_noindex, true );
		} elseif ( $meta_noindex != get_post_meta( $post_id, 'emanon_noindex', true ) ) {
		update_post_meta( $post_id, 'emanon_noindex', $meta_noindex );
		} elseif ( $meta_noindex == "" ) {
		delete_post_meta( $post_id, 'emanon_noindex', get_post_meta( $post_id, 'emanon_noindex', true ) );
	}

	$meta_nofollow = isset( $_POST[ 'emanon_nofollow' ] ) ? $_POST[ 'emanon_nofollow' ] : null;

	if( get_post_meta ( $post_id, 'emanon_nofollow' ) == "" ) {
		add_post_meta ( $post_id, 'emanon_nofollow', $meta_nofollow, true );
		} elseif ( $meta_nofollow != get_post_meta( $post_id, 'emanon_nofollow', true ) ) {
		update_post_meta( $post_id, 'emanon_nofollow', $meta_nofollow );
		} elseif ( $meta_nofollow == "" ) {
		delete_post_meta( $post_id, 'emanon_nofollow', get_post_meta( $post_id, 'emanon_nofollow', true ) );
	}

}
add_action( 'save_post', 'seo_setting_save' );

/*------------------------------------------------------------------------------------
/* カスタムCSS設定
/*----------------------------------------------------------------------------------*/
function add_custom_css_setting() {
	add_meta_box( 'custom_css', __( 'Custom CSS setting', 'emanon' ), 'custom_css_setting_form', 'page', 'normal', 'high' );
	add_meta_box( 'custom_css', __( 'Custom CSS setting', 'emanon' ), 'custom_css_setting_form', 'post', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'add_custom_css_setting' );

//フォーム表示
function custom_css_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	echo '<textarea name="emanon_custom_css_setting" id="emanon_custom_css_setting" cols="60" rows="4" style="width:99%">' . esc_html( get_post_meta( $post->ID, 'emanon_custom_css_setting', true) ) . '</textarea>';
	echo '<p>' . __( 'Enter CSS code of this page. Style tag is not required. Code example: .example { font-size: 20px; color: #000; }' , 'emanon' ) . '</p>';

}

//入力内容の更新処理
function custom_css_setting_save($post_id) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

		$custom_css_setting = isset( $_POST[ 'emanon_custom_css_setting' ] ) ? $_POST[ 'emanon_custom_css_setting' ] : null;

		if( get_post_meta ( $post_id, 'emanon_custom_css_setting' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_custom_css_setting', $custom_css_setting, true );
			} elseif ( $custom_css_setting != get_post_meta( $post_id, 'emanon_custom_css_setting', true ) ) {
			update_post_meta( $post_id, 'emanon_custom_css_setting', $custom_css_setting );
			} elseif ( $custom_css_setting == "" ) {
			delete_post_meta( $post_id, 'emanon_custom_css_setting', get_post_meta( $post_id, 'emanon_custom_css_setting', true ) );
		}
}
add_action( 'save_post', 'custom_css_setting_save' );

/*------------------------------------------------------------------------------------
/* カスタムJavaScript設定
/*----------------------------------------------------------------------------------*/
function add_custom_js_setting() {
	add_meta_box( 'custom_js', __( 'Custom JavaScript setting', 'emanon' ), 'custom_js_setting_form', 'page', 'normal', 'low' );
	add_meta_box( 'custom_js', __( 'Custom JavaScript setting', 'emanon' ), 'custom_js_setting_form', 'post', 'normal', 'low' );
}
add_action( 'add_meta_boxes', 'add_custom_js_setting' );

//フォーム表示
function custom_js_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	echo '<textarea name="emanon_custom_js_setting" id="emanon_custom_js_setting" cols="60" rows="4" style="width:99%">' . esc_html( get_post_meta( $post->ID, 'emanon_custom_js_setting', true) ) . '</textarea>';
	echo '<p>' . __( 'Enter JavaScript code of this page. script tag is not required.' , 'emanon' ) . '</p>';

}

//入力内容の更新処理
function custom_js_setting_save($post_id) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

		$custom_css_setting = isset( $_POST[ 'emanon_custom_js_setting' ] ) ? $_POST[ 'emanon_custom_js_setting' ] : null;

		if( get_post_meta ( $post_id, 'emanon_custom_js_setting' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_custom_js_setting', $custom_css_setting, true );
			} elseif ( $custom_css_setting != get_post_meta( $post_id, 'emanon_custom_js_setting', true ) ) {
			update_post_meta( $post_id, 'emanon_custom_js_setting', $custom_css_setting );
			} elseif ( $custom_css_setting == "" ) {
			delete_post_meta( $post_id, 'emanon_custom_js_setting', get_post_meta( $post_id, 'emanon_custom_js_setting', true ) );
		}
}
add_action( 'save_post', 'custom_js_setting_save' );

function insert_custom_js() {
	if ( is_singular() ) {
			$custom_js = post_custom( 'emanon_custom_js_setting' );
			if ( $custom_js ) {
				echo '<!--custom js-->'. "\n";
				echo '<script type="text/javascript">' . $custom_js . '</script>'. "\n";
				echo '<!--end custom js-->'. "\n";
			}
	}
}
add_action( 'wp_footer','insert_custom_js', 9998 );

/*------------------------------------------------------------------------------------
/* ランディングページ（リード）フォーム設定
/*----------------------------------------------------------------------------------*/
function add_page_lp_setting() {
	add_meta_box( 'page_lp', __( 'Page LP setting', 'emanon' ), 'page_lp_setting_form', 'page', 'normal', 'low' );
}
add_action( 'add_meta_boxes', 'add_page_lp_setting' );

//フォーム表示
function page_lp_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );
	echo '<p>' . __( 'By inputting the tag of the mail delivery system, you can set up an input form such as mail magazine registration.', 'emanon' ) . '<br>';

	echo __( 'After entering the tag, please select the landing page (lead) with the attribute of the fixed page.', 'emanon' ) . '</p>';

	echo '<label>' . __( 'Form Title' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_form_title" id="emanon_form_title" value="' . esc_html( get_post_meta( $post->ID, 'emanon_form_title', true ) ) . '" size="20" style="width:50%" /><br><br>';

	echo '<label>' . __( 'Form action' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_form_action" id="emanon_form_action" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_form_action', true ) ) . '" size="20" style="width:99%" /><br>';

	echo '<label>' . __( 'Input hidden' , 'emanon' ) . '</label><br>';
	echo '<textarea name="emanon_input_hidden" id="emanon_input_hidden" cols="60" rows="8" style="width:99%">' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_hidden', true) ) . '</textarea><br>';

	echo '<label>' . __( 'Input submit' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_input_submit" id="emanon_input_submit" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_submit', true ) ) . '" size="20" style="width:99%" /><br>';

	echo '<ol>';
	echo '<li><span><input type="text" name="emanon_input_label_1" id="emanon_input_label_1" value="' . esc_html( get_post_meta( $post->ID, 'emanon_input_label_1', true ) ) . '" placeholder="'. __( 'label' , 'emanon' ) . '" size="10" style="width:20%" /></span><br>';
	echo '<span><input type="text" name="emanon_input_text_1" id="emanon_input_text_1" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_text_1', true ) ) . '" placeholder="'. __( 'Input text' , 'emanon' ) . '" size="20" style="width:99%" /></span></li>';

	echo '<li><span><input type="text" name="emanon_input_label_2" id="emanon_input_label_2" value="' . esc_html( get_post_meta( $post->ID, 'emanon_input_label_2', true ) ) . '" placeholder="'. __( 'label' , 'emanon' ) . '" size="10" style="width:20%" /></span><br>';
	echo '<span><input type="text" name="emanon_input_text_2" id="emanon_input_text_2" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_text_2', true ) ) . '" placeholder="'. __( 'Input text' , 'emanon' ) . '"size="20" style="width:99%" /></span></li>';

	echo '<li><span><input type="text" name="emanon_input_label_3" id="emanon_input_label_3" value="' . esc_html( get_post_meta( $post->ID, 'emanon_input_label_3', true ) ) . '" placeholder="'. __( 'label' , 'emanon' ) . '" size="10" style="width:20%" /></span><br>';
	echo '<span><input type="text" name="emanon_input_text_3" id="emanon_input_text_3" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_text_3', true ) ) . '" placeholder="'. __( 'Input text' , 'emanon' ) . '"size="20" style="width:99%" /></span></li>';

	echo '<li><span><input type="text" name="emanon_input_label_4" id="emanon_input_label_4" value="' . esc_html( get_post_meta( $post->ID, 'emanon_input_label_4', true ) ) . '" placeholder="'. __( 'label' , 'emanon' ) . '" size="10" style="width:20%" /></span><br>';
	echo '<span><input type="text" name="emanon_input_text_4" id="emanon_input_text_4" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_text_4', true ) ) . '" placeholder="'. __( 'Input text' , 'emanon' ) . '"size="20" style="width:99%" /></span></li>';

	echo '<li><span><input type="text" name="emanon_input_label_5" id="emanon_input_label_5" value="' . esc_html( get_post_meta( $post->ID, 'emanon_input_label_5', true ) ) . '" placeholder="'. __( 'label' , 'emanon' ) . '" size="10" style="width:20%" /></span><br>';
	echo '<span><input type="text" name="emanon_input_text_5" id="emanon_input_text_5" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_text_5', true ) ) . '" placeholder="'. __( 'Input text' , 'emanon' ) . '"size="20" style="width:99%" /></span></li>';

	echo '<li><span><input type="text" name="emanon_input_label_6" id="emanon_input_label_6" value="' . esc_html( get_post_meta( $post->ID, 'emanon_input_label_6', true ) ) . '" placeholder="'. __( 'label' , 'emanon' ) . '" size="10" style="width:20%" /></span><br>';
	echo '<span><input type="text" name="emanon_input_text_6" id="emanon_input_text_6" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_input_text_6', true ) ) . '" placeholder="'. __( 'Input text' , 'emanon' ) . '"size="20" style="width:99%" /></span></li>';

	echo '</ol>';

	echo '<label>' . __( 'Form Message' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_form_message" id="emanon_form_message" value="' . esc_html( get_post_meta( $post->ID, 'emanon_form_message', true ) ) . '" size="20" style="width:50%" /><br><br>';

	echo '<label>' . __( 'You can also install short code of 「Contact Form 7」' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_short_code" id="emanon_short_code" value="' . htmlspecialchars( get_post_meta( $post->ID, 'emanon_short_code', true ) ) . '" size="20" style="width:50%" />';
	echo '<p>' . __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ) . '</p>';

//フォームの表示制御
?>
<script type="text/javascript">
	jQuery(window).load(function() {
	select_template( jQuery( '#page_template' ).val() );
	jQuery( '#page_template' ).on( 'change.set-editor-class', function() {
	select_template( jQuery(this).val() );
	});
});
	function select_template( template_name ) {
		if ( template_name === 'templates/lp-lead.php' ) {
			if (jQuery( '#adv-settings input[value=page_lp]' ).attr( 'checked' ) === undefined) {
			jQuery( '#adv-settings input[value=page_lp]' ).click();
			}
		} else {
			if (jQuery( '#adv-settings input[value=page_lp]' ).attr( 'checked' ) !== undefined) {
			jQuery( '#adv-settings input[value=page_lp]' ).click();
			}
		}
}
</script>
<?php

}

//入力内容の更新処理
function page_lp_setting_save($post_id) {

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

		$form_title = isset( $_POST[ 'emanon_form_title' ] ) ? $_POST[ 'emanon_form_title' ] : null;

		if( get_post_meta ( $post_id, 'emanon_form_title' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_form_title', $form_title, true );
			} elseif ( $form_title != get_post_meta( $post_id, 'emanon_form_title', true ) ) {
			update_post_meta( $post_id, 'emanon_form_title', $form_title );
			} elseif ( $form_title == "" ) {
			delete_post_meta( $post_id, 'emanon_form_title', get_post_meta( $post_id, 'emanon_form_title', true ) );
		}

		$short_code = isset( $_POST[ 'emanon_short_code' ] ) ? $_POST[ 'emanon_short_code' ] : null;

		if( get_post_meta ( $post_id, 'emanon_short_code' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_short_code', $short_code, true );
			} elseif ( $short_code != get_post_meta( $post_id, 'emanon_short_code', true ) ) {
			update_post_meta( $post_id, 'emanon_short_code', $short_code );
			} elseif ( $short_code == "" ) {
			delete_post_meta( $post_id, 'emanon_short_code', get_post_meta( $post_id, 'emanon_short_code', true ) );
		}

		$form_action = isset( $_POST[ 'emanon_form_action' ] ) ? $_POST[ 'emanon_form_action' ] : null;

		if( get_post_meta ( $post_id, 'emanon_form_action' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_form_action', $form_action, true );
			} elseif ( $form_action != get_post_meta( $post_id, 'emanon_form_action', true ) ) {
			update_post_meta( $post_id, 'emanon_form_action', $form_action );
			} elseif ( $form_action == "" ) {
			delete_post_meta( $post_id, 'emanon_form_action', get_post_meta( $post_id, 'emanon_form_action', true ) );
		}

		$input_hidden = isset( $_POST[ 'emanon_input_hidden' ] ) ? $_POST[ 'emanon_input_hidden' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_hidden' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_hidden', $input_hidden, true );
			} elseif ( $input_hidden != get_post_meta( $post_id, 'emanon_input_hidden', true ) ) {
			update_post_meta( $post_id, 'emanon_input_hidden', $input_hidden );
			} elseif ( $input_hidden == "" ) {
			delete_post_meta( $post_id, 'emanon_input_hidden', get_post_meta( $post_id, 'emanon_input_hidden', true ) );
		}

		$input_label_1 = isset( $_POST[ 'emanon_input_label_1' ] ) ? $_POST[ 'emanon_input_label_1' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_label_1' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_label_1', $input_label_1, true );
			} elseif ( $input_label_1 != get_post_meta( $post_id, 'emanon_input_label_1', true ) ) {
			update_post_meta( $post_id, 'emanon_input_label_1', $input_label_1 );
			} elseif ( $input_label_1 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_label_1', get_post_meta( $post_id, 'emanon_input_label_1', true ) );
		}

		$input_label_2 = isset( $_POST[ 'emanon_input_label_2' ] ) ? $_POST[ 'emanon_input_label_2' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_label_2' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_label_2', $input_label_2, true );
			} elseif ( $input_label_2 != get_post_meta( $post_id, 'emanon_input_label_2', true ) ) {
			update_post_meta( $post_id, 'emanon_input_label_2', $input_label_2 );
			} elseif ( $input_label_2 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_label_2', get_post_meta( $post_id, 'emanon_input_label_2', true ) );
		}

		$input_label_3 = isset( $_POST[ 'emanon_input_label_3' ] ) ? $_POST[ 'emanon_input_label_3' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_label_3' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_label_3', $input_label_3, true );
			} elseif ( $input_label_3 != get_post_meta( $post_id, 'emanon_input_label_3', true ) ) {
			update_post_meta( $post_id, 'emanon_input_label_3', $input_label_3 );
			} elseif ( $input_label_3 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_label_3', get_post_meta( $post_id, 'emanon_input_label_3', true ) );
		}

		$input_label_4 = isset( $_POST[ 'emanon_input_label_4' ] ) ? $_POST[ 'emanon_input_label_4' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_label_4' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_label_4', $input_label_4, true );
			} elseif ( $input_label_4 != get_post_meta( $post_id, 'emanon_input_label_4', true ) ) {
			update_post_meta( $post_id, 'emanon_input_label_4', $input_label_4 );
			} elseif ( $input_label_4 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_label_4', get_post_meta( $post_id, 'emanon_input_label_4', true ) );
		}

		$input_label_5 = isset( $_POST[ 'emanon_input_label_5' ] ) ? $_POST[ 'emanon_input_label_5' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_label_5' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_label_5', $input_label_5, true );
			} elseif ( $input_label_5 != get_post_meta( $post_id, 'emanon_input_label_5', true ) ) {
			update_post_meta( $post_id, 'emanon_input_label_5', $input_label_5 );
			} elseif ( $input_label_5 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_label_5', get_post_meta( $post_id, 'emanon_input_label_5', true ) );
		}

		$input_label_6 = isset( $_POST[ 'emanon_input_label_6' ] ) ? $_POST[ 'emanon_input_label_6' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_label_6' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_label_6', $input_label_6, true );
			} elseif ( $input_label_6 != get_post_meta( $post_id, 'emanon_input_label_6', true ) ) {
			update_post_meta( $post_id, 'emanon_input_label_6', $input_label_6 );
			} elseif ( $input_label_6 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_label_6', get_post_meta( $post_id, 'emanon_input_label_6', true ) );
		}

		$input_text_1 = isset( $_POST[ 'emanon_input_text_1' ] ) ? $_POST[ 'emanon_input_text_1' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_text_1' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_text_1', $input_text_1, true );
			} elseif ( $input_text_1 != get_post_meta( $post_id, 'emanon_input_text_1', true ) ) {
			update_post_meta( $post_id, 'emanon_input_text_1', $input_text_1 );
			} elseif ( $input_text_1 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_text_1', get_post_meta( $post_id, 'emanon_input_text_1', true ) );
		}

		$input_text_2 = isset( $_POST[ 'emanon_input_text_2' ] ) ? $_POST[ 'emanon_input_text_2' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_text_2' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_text_2', $input_text_2, true );
			} elseif ( $input_text_2 != get_post_meta( $post_id, 'emanon_input_text_2', true ) ) {
			update_post_meta( $post_id, 'emanon_input_text_2', $input_text_2 );
			} elseif ( $input_text_2 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_text_2', get_post_meta( $post_id, 'emanon_input_text_2', true ) );
		}

		$input_text_3 = isset( $_POST[ 'emanon_input_text_3' ] ) ? $_POST[ 'emanon_input_text_3' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_text_3' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_text_3', $input_text_3, true );
			} elseif ( $input_text_3 != get_post_meta( $post_id, 'emanon_input_text_3', true ) ) {
			update_post_meta( $post_id, 'emanon_input_text_3', $input_text_3 );
			} elseif ( $input_text_3 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_text_3', get_post_meta( $post_id, 'emanon_input_text_3', true ) );
		}

		$input_text_4 = isset( $_POST[ 'emanon_input_text_4' ] ) ? $_POST[ 'emanon_input_text_4' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_text_4' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_text_4', $input_text_4, true );
			} elseif ( $input_text_4 != get_post_meta( $post_id, 'emanon_input_text_4', true ) ) {
			update_post_meta( $post_id, 'emanon_input_text_4', $input_text_4 );
			} elseif ( $input_text_4 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_text_4', get_post_meta( $post_id, 'emanon_input_text_4', true ) );
		}

		$input_text_5 = isset( $_POST[ 'emanon_input_text_5' ] ) ? $_POST[ 'emanon_input_text_5' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_text_5' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_text_5', $input_text_5, true );
			} elseif ( $input_text_5 != get_post_meta( $post_id, 'emanon_input_text_5', true ) ) {
			update_post_meta( $post_id, 'emanon_input_text_5', $input_text_5 );
			} elseif ( $input_text_5 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_text_5', get_post_meta( $post_id, 'emanon_input_text_5', true ) );
		}

		$input_text_6 = isset( $_POST[ 'emanon_input_text_6' ] ) ? $_POST[ 'emanon_input_text_6' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_text_6' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_text_6', $input_text_6, true );
			} elseif ( $input_text_6 != get_post_meta( $post_id, 'emanon_input_text_6', true ) ) {
			update_post_meta( $post_id, 'emanon_input_text_6', $input_text_6 );
			} elseif ( $input_text_6 == "" ) {
			delete_post_meta( $post_id, 'emanon_input_text_6', get_post_meta( $post_id, 'emanon_input_text_6', true ) );
		}

		$input_submit= isset( $_POST[ 'emanon_input_submit' ] ) ? $_POST[ 'emanon_input_submit' ] : null;

		if( get_post_meta ( $post_id, 'emanon_input_submit' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_input_submit', $form_title, true );
			} elseif ( $input_submit!= get_post_meta( $post_id, 'emanon_input_submit', true ) ) {
			update_post_meta( $post_id, 'emanon_input_submit', $input_submit);
			} elseif ( $input_submit== "" ) {
			delete_post_meta( $post_id, 'emanon_input_submit', get_post_meta( $post_id, 'emanon_input_submit', true ) );
		}

		$form_message = isset( $_POST[ 'emanon_form_message' ] ) ? $_POST[ 'emanon_form_message' ] : null;

		if( get_post_meta ( $post_id, 'emanon_form_message' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_form_message', $form_message, true );
			} elseif ( $form_title != get_post_meta( $post_id, 'emanon_form_message', true ) ) {
			update_post_meta( $post_id, 'emanon_form_message', $form_message );
			} elseif ( $form_title == "" ) {
			delete_post_meta( $post_id, 'emanon_form_message', get_post_meta( $post_id, 'emanon_form_message', true ) );
		}
}
add_action( 'save_post', 'page_lp_setting_save' );

/* ---------------------------------------------------------------------------
/* エディタボタン追加
/*----------------------------------------------------------------------------------*/
$qtags_add_button = get_theme_mod( 'qtags_add_button', true );

if ( $qtags_add_button ):
	function emanon_add_quicktags() {
	 if (wp_script_is( 'quicktags' ) ) {
	?>
		<script type="text/javascript">
		QTags.addButton( 'h2', 'h2', '<h2>', '</h2>', '', 'h2', '1' );
		QTags.addButton( 'h3', 'h3', '<h3>', '</h3>', '', 'h3', '2' );
		QTags.addButton( 'h4', 'h4', '<h4>', '</h4>', '', 'h4', '3' );
		QTags.addButton( 'h5', 'h5', '<h5>', '</h5>', '', 'h5', '4' );
		QTags.addButton( 'h6', 'h6', '<h6>', '</h6>', '', 'h6', '5' );
		QTags.addButton( 'p', 'p', '<p>', '</p>', '', 'p', '6' );

		QTags.addButton( 'small','小文字','<span class="small">', '</span>', '','small', '10')
		QTags.addButton( 'big','大文字','<span class="big">', '</span>', '','large', '11')

		QTags.addButton( 'black bold','太文字（黒）','<span class="important-bold">', '</span>', '','black bold', '12');
		QTags.addButton( 'blue bold','太文字（青）','<span class="success-bold">', '</span>', '','blue bold', '13')
		QTags.addButton( 'red bold','太文字（赤）','<span class="danger-bold">', '</span>', '','red bold', '14')

		QTags.addButton('blue under','アンダーライン（青）','<span class="success-under">','</span>', '','blue under', '15')
		QTags.addButton('red under','アンダーライン（赤）','<span class="danger-under">','</span>', '','red under', '16')
		QTags.addButton('yellow under','アンダーライン（黄）','<span class="important-under">','</span>', '','yellow under', '17')

		QTags.addButton('yellow marker','マーカー（黄）','<span class="important-marker">','</span>', '','yellow marker', '18')

		QTags.addButton( 'text-left','左寄せ','<div class="text-left">', '</div>', '','text-left', '20')
		QTags.addButton( 'text-center','中央寄せ','<div class="text-center">', '</div>', '','text-center', '21')
		QTags.addButton( 'text-right','右寄せ','<div class="text-right">', '</div>', '','text-right', '22')

		QTags.addButton( 'box white', '補足説明枠', '<div class="box-default">', '</div>', '', 'box white', '23');
		QTags.addButton( 'box gray', '注意説明枠', '<div class="box-info">', '</div>', '', 'box gray', '24');

		QTags.addButton( 'nextpage', 'ページ送り', '<!--nextpage-->', '', '', 'nextpage', '24' );
		QTags.addButton( 'hr', '水平線', '<hr>', '', '', 'hr', '25' );

		QTags.addButton( 'cite','引用元','<cite>引用元: <a href="" target="_blank">', '</a></cite>', '','cite', '40')

		QTags.addButton( 'btn s', 'ボタン 小', '<span class="btn btn-sm"><a href="">', '</a></span>', '', 'btn s', '41' );
		QTags.addButton( 'btn m', 'ボタン 中', '<span class="btn btn-mid"><a href="">', '</a></span>', '', 'btn m', '42' );
		QTags.addButton( 'btn l', 'ボタン 大', '<span class="btn btn-lg"><a href="">', '</a></span>', '', 'btn l', '43' );

		QTags.addButton( 'col2', '2カラム', '<div class="clearfix"><div class="col6 first">左</div><div class="col6">右</div></div>', '', 'col2', '44' );
		QTags.addButton( 'col3', '3カラム', '<div class="clearfix"><div class="col4 first">左</div><div class="col4">中央</div><div class="col4">右</div></div>', '', 'col3', '45' );
		QTags.addButton( 'clearfix', 'clearfix', '<div class="clearfix"></div>', '', 'clearfix', '46' );

		</script>
	<?php
		}
	}
	add_action( 'admin_print_footer_scripts', 'emanon_add_quicktags' );
endif;