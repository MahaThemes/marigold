<?php
/**
 * Plugin Name: About Widget
 */

add_action( 'widgets_init', 'maha_about_load_widget' );

function maha_about_load_widget() {
	register_widget( 'maha_widget_about' );
}

class maha_widget_about extends WP_Widget {

	/**
	 * Widget setup.
	 */
	public function __construct() {
		parent::__construct(
			'maha_widget_about', // Base ID
			__( wp_get_theme().': About Me', 'marigold' ), // Name
			array( 'width' => 290, 'height' => 360, 'id_base' => 'maha_widget_about' ), // Control
			array( 'classname' => 'maha-widget-about', 'description' => __( 'Widget to display your About Page', 'marigold' ), ) // Setting
		);
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$image = $instance['image'];
		$round = $instance['round'];
		$description = $instance['description'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		?>
			
			<div class="about-widget">
			
			<?php if($image) : ?>
			<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($title); ?>" <?php if($round == true) : ?>class="about-round"<?php endif; ?>/>
			<?php endif; ?>
			
			<?php if($description) : ?>
			<p><?php echo wp_kses_post($description); ?></p>
			<?php endif; ?>	
			
			</div>
			
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['image'] = strip_tags( $new_instance['image'] );
		$instance['round'] = $new_instance['round'];
		$instance['description'] = $new_instance['description'];

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'About Me', 'image' => '', 'description' => '', 'round' => false);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:96%;" />
		</p>
		
		<!-- image url -->
		<p>
			<label for="<?php echo $this->get_field_id( 'image' ); ?>">Image URL:</label>
			<input id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo $instance['image']; ?>" style="width:96%;" /><br />
		</p>
		
		<!-- round image -->
		<p>
			<label for="<?php echo $this->get_field_id( 'round' ); ?>">Make image a circle:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'round' ); ?>" name="<?php echo $this->get_field_name( 'round' ); ?>" <?php checked( (bool) $instance['round'], true ); ?> />
			<br><small>For a perfect circle your image need to have the same height and width. For example: 290x290 px</small>
		</p>
		
		<!-- description -->
		<p>
			<label for="<?php echo $this->get_field_id( 'description' ); ?>">About me text:</label>
			<textarea id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" style="width:95%;" rows="6"><?php echo $instance['description']; ?></textarea>
		</p>


	<?php
	}
}
?>