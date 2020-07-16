<?php
add_action( 'widgets_init','rambo_widget_newsletter'); 
   function rambo_widget_newsletter() { return   register_widget( 'rambo_sidbar_newsletter_widget' ); }
/**
 * Adds rambo_sidbar_usefull_page_widget widget.
 */
class rambo_sidbar_newsletter_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'rambo_sidbar_newsletter_widget', // Base ID
			__('Rambo Sidebar NewS Letter', 'rambo'), // Name
			array( 'description' => __( 'The widgets is subcribe news letter .', 'rambo' ), ) // Args
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
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; ?>		
		<div class="row-fluid">
			<form method="POST" name="Newsletter" action="#">
				<div class="input-append newsletter_space">
				<input type="text" placeholder="Email Address" name="newsletter_email" id="newsletter_email" class="span9 newsletter_box">
				<button type="submit" class="newsletter_btn" name="submit_newsletter" id="submit_newsletter"> Subcribe</button>
				
				</div>
			</form>
		</div>
		<?php 
		if(isset($_POST['submit_newsletter'])) 
		{ 	if(empty($_POST['newsletter_email']))
			{	
				echo "<font color='red'>New letter can not be blank.</font>";	
					
			}else 
			if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$_POST['newsletter_email'])) 
			{	
				echo "<font color='red'>Invalid email address</font>";
						
			}else  
			if($_POST['newsletter_email'])
			{	
				$maildata =wp_mail(sanitize_email(get_option('admin_email'))."Hi User sent you a message from ".get_option("blogname"),stripslashes('This is news letter massage')."Message sent from:: ".trim($_POST['newsletter_email']),"From: "."Hi User"." <".trim($_POST['newsletter_email']).">\r\nReply-To:".trim($_POST['newsletter_email']));
				if($maildata)
				{ 	echo "<font color='green'>News Letter are subsciber.</font>";	}
			}			
		} ?>		
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
		if ( isset( $instance[ 'title' ] )) {
			$title = $instance[ 'title' ];			
		}
		else {
			$title = __( 'Newsletter', 'rambo' );			
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','rambo' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
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
		return $instance;
	}

} // class Foo_Widget
?>