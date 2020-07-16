<?php
add_action( 'widgets_init','rambo_sidebar_category'); 
   function rambo_sidebar_category() { return   register_widget( 'rambo_sidbar_category_list_widget' ); }
/**
 * Adds rambo_sidbar_usefull_page_widget widget.
 */
class rambo_sidbar_category_list_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'rambo_sidbar_category_list_widget', // Base ID
			__('Rambo Sidebar Category list', 'rambo'), // Name
			array( 'description' => __( 'A list or dropdown of categories.', 'rambo' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$number_of_cat = apply_filters( 'widget_title', $instance['number_of_cat'] );
		if($number_of_cat=='') { $number_of_cat = 5; }
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; ?>		
		<div class="row-fluid sidebar_link">
		<?php
			$category_ids = get_all_category_ids(array('limit' =>'5'));
			foreach($category_ids as $cat_id) {	?>
			<a href="<?php echo get_category_link( $cat_id ); ?>"><i class="fa fa-caret-right icon-spacing"></i> <?php echo $cat_name = get_cat_name($cat_id); ?></a>
			<?php }	?>
		</div>
		<?php		
		echo $args['after_widget']; // end of sidbar usefull links widget		
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] )  && isset( $instance[ 'number_of_cat' ] )) {
			$title = $instance[ 'title' ];
			$number_of_cat = $instance[ 'number_of_cat' ];
		}
		else {
			$title = __( 'Usefull Links', 'rambo' );
			$number_of_cat = 5;
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','rambo' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'number_of_cat' ); ?>"><?php _e( 'Number of category to show:','rambo' ); ?></label> 
		<input size="3" maxlength="2"id="<?php echo $this->get_field_id( 'number_of_cat' ); ?>" name="<?php echo $this->get_field_name( 'number_of_cat' ); ?>" type="text" value="<?php echo esc_attr( $number_of_cat ); ?>" />
		</p>		
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['number_of_cat'] = ( ! empty( $new_instance['number_of_cat'] ) ) ? strip_tags( $new_instance['number_of_cat'] ) : '';
		return $instance;
	}

} // class Foo_Widget
?>