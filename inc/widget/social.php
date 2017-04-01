<?php
/**
 * Plugin Name: Social Widget
 */

add_action( 'widgets_init', 'maha_social_load_widget' );

function maha_social_load_widget() {
	register_widget( 'maha_widget_social' );
}

class maha_widget_social extends WP_Widget {

	/**
	 * Widget setup.
	 */
	public function __construct() {
		parent::__construct(
			'maha_widget_social', // Base ID
			__( wp_get_theme().': Social Link', 'marigold' ), // Name
			array( 'width' => 290, 'height' => 360, 'id_base' => 'maha_widget_social' ), // Control
			array( 'classname' => 'maha-widget-social', 'description' => __( 'Widget to display your social network link', 'marigold' ), ) // Setting
		);
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$facebook = $instance['facebook'];
		$twitter = $instance['twitter'];
		$googleplus = $instance['googleplus'];
		$instagram = $instance['instagram'];
		$bloglovin = $instance['bloglovin'];
		$youtube = $instance['youtube'];
		$tumblr = $instance['tumblr'];
		$pinterest = $instance['pinterest'];
		$dribbble = $instance['dribbble'];
		$soundcloud = $instance['soundcloud'];
		$vimeo = $instance['vimeo'];
		$linkedin = $instance['linkedin'];
		$snapchat = $instance['snapchat'];
		$rss = $instance['rss'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		?>
		<div class="social-widget">
			<?php if($facebook) : ?><a href="http://facebook.com/<?php echo marigold_mod('mgmod_facebook'); ?>" target="_blank"><i class="mf-facebook"></i></a><?php endif; ?>
			<?php if($twitter) : ?><a href="http://twitter.com/<?php echo marigold_mod('mgmod_twitter'); ?>" target="_blank"><i class="mf-twitter"></i></a><?php endif; ?>
			<?php if($instagram) : ?><a href="http://instagram.com/<?php echo marigold_mod('mgmod_instagram'); ?>" target="_blank"><i class="mf-instagram"></i></a><?php endif; ?>
			<?php if($pinterest) : ?><a href="http://pinterest.com/<?php echo marigold_mod('mgmod_pinterest'); ?>" target="_blank"><i class="mf-pinterest"></i></a><?php endif; ?>
			<?php if($bloglovin) : ?><a href="http://bloglovin.com/<?php echo marigold_mod('mgmod_bloglovin'); ?>" target="_blank"><i class="mf-bloglovin"></i></a><?php endif; ?>
			<?php if($googleplus) : ?><a href="http://plus.google.com/<?php echo marigold_mod('mgmod_google'); ?>" target="_blank"><i class="mf-googleplus"></i></a><?php endif; ?>
			<?php if($tumblr) : ?><a href="http://<?php echo marigold_mod('mgmod_tumblr'); ?>.tumblr.com/" target="_blank"><i class="mf-tumblr"></i></a><?php endif; ?>
			<?php if($youtube) : ?><a href="http://youtube.com/<?php echo marigold_mod('mgmod_youtube'); ?>" target="_blank"><i class="mf-youtube"></i></a><?php endif; ?>
			<?php if($dribbble) : ?><a href="http://dribbble.com/<?php echo marigold_mod('mgmod_dribbble'); ?>" target="_blank"><i class="mf-dribbble"></i></a><?php endif; ?>
			<?php if($soundcloud) : ?><a href="http://soundcloud.com/<?php echo marigold_mod('mgmod_soundcloud'); ?>" target="_blank"><i class="mf-soundcloud"></i></a><?php endif; ?>
			<?php if($vimeo) : ?><a href="http://vimeo.com/<?php echo marigold_mod('mgmod_vimeo'); ?>" target="_blank"><i class="mf-vimeo"></i></a><?php endif; ?>
			<?php if($linkedin) : ?><a href="<?php echo marigold_mod('mgmod_linkedin'); ?>" target="_blank"><i class="mf-linkedin"></i></a><?php endif; ?>
			<?php if($snapchat) : ?><a href="https://snapchat.com/add/<?php echo marigold_mod('mgmod_snapchat'); ?>" target="_blank"><i class="mf-snapchat"></i></a><?php endif; ?>
			<?php if($rss) : ?><a href="<?php echo marigold_mod('mgmod_rss'); ?>" target="_blank"><i class="mf-rss"></i></a><?php endif; ?>
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
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['googleplus'] = strip_tags( $new_instance['googleplus'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['bloglovin'] = strip_tags( $new_instance['bloglovin'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		$instance['tumblr'] = strip_tags( $new_instance['tumblr'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );
		$instance['dribbble'] = strip_tags( $new_instance['dribbble'] );
		$instance['soundcloud'] = strip_tags( $new_instance['soundcloud'] );
		$instance['vimeo'] = strip_tags( $new_instance['vimeo'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['snapchat'] = strip_tags( $new_instance['snapchat'] );
		$instance['rss'] = strip_tags( $new_instance['rss'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Subscribe & Follow', 'facebook' => 'on', 'twitter' => 'on', 'instagram' => 'on', 'facebook' => true, 'twitter' => true, 'instagram' => true, 'googleplus' => false, 'bloglovin' => false, 'youtube' => false, 'tumblr' => false, 'pinterest' => true, 'dribbble' => false, 'soundcloud' => false, 'vimeo' => false, 'linkedin' => false, 'snapchat' => false, 'rss' => true );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:90%;" />
		</p>
		
		<p>Note: Set your social links in the Customizer</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Show Facebook:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" <?php checked( (bool) $instance['facebook'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Show Twitter:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" <?php checked( (bool) $instance['twitter'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>">Show Instagram:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" <?php checked( (bool) $instance['instagram'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>">Show Pinterest:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" <?php checked( (bool) $instance['pinterest'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'bloglovin' ); ?>">Show Bloglovin:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'bloglovin' ); ?>" name="<?php echo $this->get_field_name( 'bloglovin' ); ?>" <?php checked( (bool) $instance['bloglovin'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>">Show Google Plus:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" <?php checked( (bool) $instance['googleplus'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>">Show Tumblr:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" <?php checked( (bool) $instance['tumblr'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>">Show Youtube:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" <?php checked( (bool) $instance['youtube'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>">Show Dribbble:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" <?php checked( (bool) $instance['dribbble'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'soundcloud' ); ?>">Show Soundcloud:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'soundcloud' ); ?>" name="<?php echo $this->get_field_name( 'soundcloud' ); ?>" <?php checked( (bool) $instance['soundcloud'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>">Show Vimeo:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" <?php checked( (bool) $instance['vimeo'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>">Show Linkedin:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" <?php checked( (bool) $instance['linkedin'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'snapchat' ); ?>">Show Snapchat:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'snapchat' ); ?>" name="<?php echo $this->get_field_name( 'snapchat' ); ?>" <?php checked( (bool) $instance['snapchat'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'rss' ); ?>">Show RSS:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'rss' ); ?>" name="<?php echo $this->get_field_name( 'rss' ); ?>" <?php checked( (bool) $instance['rss'], true ); ?> />
		</p>


	<?php
	}
}

?>