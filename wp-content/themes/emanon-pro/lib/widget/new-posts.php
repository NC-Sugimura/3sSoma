<?php
/**
* Widet new posts
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

class New_Post extends WP_Widget {

	/**
	 * ウィジェットを登録
	 */
	function __construct() {
		parent::__construct(
			'new_posts_widget', // Base ID
			__( '［E］New Posts widget', 'emanon' ), // Name
			array( 'description' => __( 'Display New post lists.', 'emanon' ), ) // Args
		);
	}

	/**
	 * ウィジェットのフロントエンド表示
	 *
	 * @param array $args     ウィジェットの引数 「before_title, after_title, before_widget, after_widget」
	 * @param array $instance  Widgetの設定項目
	 */
	public function widget( $args, $instance ) {
		$title  = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$number = apply_filters( 'widget_number', empty( $instance['number'] ) ? '' : $instance['number'], $instance, $this->id_base );
		$length = apply_filters( 'widget_length', empty( $instance['length'] ) ? '' : $instance['length'], $instance, $this->id_base );
		$show_date = apply_filters( 'widget_show_date', empty( $instance['show_date'] ) ? '' : $instance['show_date'], $instance, $this->id_base );
		$query = new WP_Query( apply_filters( 'widget_posts_args',
		 array(
			'posts_per_page' => $number,
			'no_found_rows' => true,
			'post_status' => 'publish',
			'ignore_sticky_posts' => true,
		)) );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
		endif; ?>
		<div id="new-post">
			<ul class="new-post-list">
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<li class="clearfix">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail( 'square-thumbnail', 'class=new-post-thumbnail' ); ?>
					<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/square-no-img.png" class="new-post-thumbnail">
					<?php endif; ?>
					<span class="new-post-title"><?php echo mb_strimwidth( get_the_title(), 0, $length, "…" ); ?></span>
					<?php if ( $show_date ): ?>
					<span class="new-post-date"><?php echo get_the_date(); ?></span>
					<?php endif; ?>
					</a>
				</li>
				<?php endwhile;
				else :
				echo '<p>'. __( 'No new post' , 'emanon') .'</p>';
				endif; ?>
				<?php wp_reset_query(); ?>
			</ul>
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
			'number' => '5',
			'length' => '46',
			'show_date' => true,
		);

		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = ( $instance['title'] );
		$number = absint( $instance['number'] );
		$length = absint( $instance['length'] );
		$show_date = $instance['show_date'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>">
			<?php _e( 'Number:','emanon' ); ?>
			</label>
			<br>
			<input class="widefat" style="width:50px!important" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" /> <?php _e( 'Posts','emanon' ); ?>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'length' ); ?>">
			<?php _e( 'Length:','emanon' ); ?>
			<br>
			</label>
			<input class="widefat" style="width:50px!important" id="<?php echo $this->get_field_id( 'length' ); ?>" name="<?php echo $this->get_field_name( 'length' ); ?>" type="text" value="<?php echo $length; ?>" /> <?php _e( '※ To restrict title display to 23 characters, enter 46','emanon' ); ?>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'show_date' ); ?>">
			</label>
			<input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />	<?php _e( 'Display post date','emanon' ); ?>
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
		$instance['number'] = (int) $new_instance['number'];
		$instance['length'] = (int) $new_instance['length'];
		$instance['show_date'] = (bool) $new_instance['show_date'];

		return $instance;
	}

} // class New_Post

// Widgetの登録
add_action( 'widgets_init', 'emanon_register_new_post_widget' );
	function emanon_register_new_post_widget() {
		register_widget( 'New_Post' );
}