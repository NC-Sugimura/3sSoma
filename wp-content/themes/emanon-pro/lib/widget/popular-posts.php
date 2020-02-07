<?php
/**
* Widget popular posts
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.9.3
*/

class Popular_Posts extends WP_Widget {

	/**
	 * ウィジェットを登録
	 */
	function __construct() {
		parent::__construct(
			'popular_posts_widget', // Base ID
			__( '［E］Popular posts widget', 'emanon' ), // Name
			array( 'description' => __( 'Display popular posts.', 'emanon' ), ) // Args
		);
	}

	/**
	 * ウィジェットのフロントエンド表示
	 *
	 * @param array $args     ウィジェットの引数 「before_title, after_title, before_widget, after_widget」
	 * @param array $instance  Widgetの設定項目
	 */
	public function widget( $args, $instance ) {
		$title      = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$count      = apply_filters( 'widget_body', empty( $instance['count'] ) ? '' : $instance['count'], $instance, $this->id_base );
		$length     = apply_filters( 'widget_length', empty( $instance['length'] ) ? '' : $instance['length'], $instance, $this->id_base );
		$show_rank  = apply_filters( 'widget_checkbox', empty( $instance['show_rank'] ) ? '' : $instance['show_rank'], $instance, $this->id_base );
		$show_views = apply_filters( 'widget_checkbox', empty( $instance['show_views'] ) ? '' : $instance['show_views'], $instance, $this->id_base );
		$defaults = array (
			'post_type'      => 'post',
			'posts_per_page' => $count,
			'meta_key'       => 'post_views_count',
			'orderby'        => 'meta_value_num',
			'order'          => 'DESC',
			'no_found_rows'  => true,
		);
		$query = get_posts( $defaults );
		$i = 1;
		
		echo $args['before_widget'];
		if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
		endif; ?>
			<div class="popular-post">
				<?php if ( $query ): ?>
				<ul>
					<?php foreach( $query as $post ) : ?>
					<li>
					<a href="<?php echo get_permalink( $post->ID ); ?>">
						<?php if ( get_the_post_thumbnail( $post->ID ) ): ?>
						<?php echo get_the_post_thumbnail( $post->ID, 'square-thumbnail' ); ?>
						<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/square-no-img.png" class="popular-post-thumbnail">
						<?php endif; ?>
						<?php if( $show_rank ) echo '<div class="popular-post-rank"><span class="rank">'.$i.'</span></div>'; $i++; ?>
						<div class="popular-post-title"><?php echo mb_strimwidth( $post->post_title, 0, $length, "&#133;" ); ?>
						<?php if( $show_views ) echo '<span class="popular-post-views">'.get_post_meta( $post->ID, 'post_views_count', true ).' views</span>'; ?>
						</div>
						</a>
					</li>
					<?php endforeach; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<?php else: ?>
				<p><?php _e( 'Sorry. No data so far.','emanon' ); ?></p>
				<?php endif; ?>
			</div>
		<?php
			echo $args['after_widget'];
	}

	/**
	 * 管理画面にWidgetを表示
	 *
	 * @param array $instance データベースからの前回保存された値
	 */
	public function form( $instance ) {

		$defaults = array(
			'title' => '',
			'count' => '5',
			'length' => '46',
			'show_rank' => true,
			'show_views' => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = ( $instance['title'] );
		$count = ( $instance['count'] );
		$length = ( $instance['length'] );
		$show_rank = ( $instance['show_rank'] );
		$show_views = ( $instance['show_views'] );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'count' ); ?>">
			<?php _e( 'Number:','emanon' ); ?>
			</label>
			<br>
			<input class="widefat" style="width:50px!important" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="number" step="1" min="1" value="<?php echo $count; ?>" /> <?php _e( 'Posts','emanon' ); ?>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'length' ); ?>">
			<?php _e( 'Length:','emanon' ); ?>
			<br>
			</label>
			<input class="widefat" style="width:50px!important" id="<?php echo $this->get_field_id( 'length' ); ?>" name="<?php echo $this->get_field_name( 'length' ); ?>" type="number" step="1" min="1" value="<?php echo $length; ?>" /> <?php _e( 'To restrict title display to 23 characters, enter 46','emanon' ); ?>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'show_rank' ); ?>">
			</label>
			<input class="checkbox" type="checkbox" <?php checked( $show_rank ); ?> id="<?php echo $this->get_field_id( 'show_rank' ); ?>" name="<?php echo $this->get_field_name( 'show_rank' ); ?>" />	<?php _e( 'Display rank','emanon' ); ?>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'show_views' ); ?>">
			</label>
			<input class="checkbox" type="checkbox" <?php checked( $show_views ); ?> id="<?php echo $this->get_field_id( 'show_views' ); ?>" name="<?php echo $this->get_field_name( 'show_views' ); ?>" />	<?php _e( 'Display views','emanon' ); ?>
		</p>
		<?php
	}

	/**
	 * Widgetフォームの値を保存用にサニタイズ
	 *
	 * @param array $new_instance 新しいオプション値
	 * @param array $old_instance 以前のオプション値
	 *
	 * @return array 保存（更新）する設定データ
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['count'] = (int) $new_instance['count'];
		$instance['length'] = (int) $new_instance['length'];
		$instance['show_rank'] = (bool) $new_instance['show_rank'];
		$instance['show_views'] = (bool) $new_instance['show_views'];
		return $instance;
	}

} // class Popular_Posts_Widget

// Widgetの登録
add_action( 'widgets_init', 'emanon_register_popular_posts_widget' );
	function emanon_register_popular_posts_widget() {
		register_widget( 'Popular_Posts' );
}

// アクセス数の取得
function get_emanon_post_views( $postID ) {
	$count_key = 'post_views_count';
	$count = get_post_meta( $postID, $count_key, true );
	if( '' == $count ) {
			delete_post_meta( $postID, $count_key );
			add_post_meta( $postID, $count_key, '0' );
			return "0";
	}
	return $count . '';
}

// アクセス数の保存
function set_emanon_post_views( $postID ) {
	$count_key = 'post_views_count';
	$count = get_post_meta( $postID, $count_key, true );
	if( '' == $count ){
			$count = 0;
			delete_post_meta( $postID, $count_key );
			add_post_meta( $postID, $count_key, '0' );
	} else {
			$count++;
			update_post_meta( $postID, $count_key, $count );
	}
}

// 投稿一覧に閲覧数を追加

	if( is_active_widget( '', '', 'popular_posts_widget' ) ) {
		// 投稿一覧に[閲覧数]列を追加
		add_filter( 'manage_posts_columns', function( $columns ) {
			$columns['views'] = __( 'Views','emanon' );
			return $columns;
		} );
		
		// 閲覧数を表示
		add_action( 'manage_posts_custom_column', function( $column_name, $post_id ) {
			if ( 'views' === $column_name ) {
				$views = intval( get_post_meta( $post_id, 'post_views_count', true ) );
				echo $views;
			}
		}, 10, 2 );
		
		// ソート追加
		add_filter( 'manage_edit-post_sortable_columns', function( $columns ) {
			$columns['views'] = __( 'Views','emanon' );
			return $columns;
		} );
		
		// ソート設定
		add_filter( 'request', function( $vars ) {
			if ( isset( $vars['orderby'] ) && __( 'Views','emanon' ) == $vars['orderby'] ) {
				$vars = array_merge( $vars, array(
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num'
				));
			}
			return $vars;
		} );
	
	}

// 投稿一覧に閲覧数クリアを追加

	if( is_active_widget( '', '', 'popular_posts_widget' ) ) {
		// 一括処理項目追加
		add_filter( 'bulk_actions-edit-post', function( $actions ) {
				$actions += array( 'clear_views' => __( 'Clear views','emanon' ) );
				return $actions;
		} );
		
		// 一括処理部分
		add_filter( 'handle_bulk_actions-edit-post', function( $redirect_to, $doaction, $post_ids ) {
			if ( $doaction == 'clear_views' ) {
				foreach ( $post_ids as $post_id ) {
					update_post_meta( $post_id, 'post_views_count', 0 );
				}
			}
			$redirect_to = add_query_arg( 'bulk_views_clear', count( $post_ids ), $redirect_to );
			return $redirect_to;
		}, 10, 3 );
		
		// 一括処理結果通知
		add_action( 'admin_notices', function () {
			if ( ! empty( $_REQUEST['bulk_views_clear'] ) ) {
				$cleared_count = intval( $_REQUEST['bulk_views_clear'] );
				echo '<div id="message" class="updated fade">' .$cleared_count.__( 'Initialized number of views','emanon' ) .'</div>';
			}
		} );
	
	}

// Bot判定
	if( ! function_exists( 'is_bot' ) ) {
		function is_bot() {
			$bots = array(
				'Googlebot',
				'Mediapartners-Google',
				'Google Web Preview',
				'Yahoo! Slurp',
				'YahooCacheSystem',
				'msnbot',
				'bingbot',
				'MJ12bot',
				'Ezooms',
				'pirst; MSIE 8.0;',
				'ia_archiver',
				'Sogou web spider',
				'AhrefsBot',
				'YandexBot',
				'Purebot',
				'Baiduspider',
				'UnwindFetchor',
				'TweetmemeBot',
				'MetaURI',
				'PaperLiBot',
				'Showyoubot',
				'JS-Kit',
				'PostRank',
				'Crowsnest',
				'PycURL',
				'bitlybot',
				'Hatena',
				'facebookexternalhit',
				'NINJA bot',
				'alexa',
				'archive.org_bot',
				);
			foreach( $bots as $bot ){
				if (stripos( $_SERVER['HTTP_USER_AGENT'], $bot ) !== false ) {
					return true;
				}
			}
			return false;
		}
	}
