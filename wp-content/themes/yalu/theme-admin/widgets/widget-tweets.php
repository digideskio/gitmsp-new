<?php

/*-----------------------------------------------------------------------------------
	
	Plugin Name: Latest Tweet Widget  
	Description: Display your latest tweete  
	Version: 1.0  
	Author: SpabRice  
	Author URI: http://www.spab-rice.com  
	
-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Register Tweet Widget & enqueu scripts
/*-----------------------------------------------------------------------------------*/

add_action( 'widgets_init', 'sr_tweets_widget' );

function sr_tweets_widget() {
	register_widget( 'sr_tweet_widget' );
}

if( !function_exists( 'sr_tweets_js' ) ) {
    function sr_tweets_js() {
        
		wp_register_script('sr-tweet-widget', get_template_directory_uri() . '/theme-admin/widgets/js/jquery.tweet.js', 'jquery', '1.0', true);
		wp_enqueue_script('sr-tweet-widget');
    	
    }
    add_action('wp_enqueue_scripts', 'sr_tweets_js');
}


/*-----------------------------------------------------------------------------------*/
/*	Widget Class
/*-----------------------------------------------------------------------------------*/

class sr_tweet_widget extends WP_Widget {

	/*  Widget setup  */
	
	function sr_tweet_widget() {
	
		// Widget settings
		$widget_ops = array( 'classname' => 'sr_tweet_widget', 'description' => __('A widget that displays your latest tweets.', 'sr_yalu_theme') );
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base', 'sr-tweet-widget' );
		
		// Create widget
		$this->WP_Widget( 'sr_tweet_widget', __('SR - Latest Tweets','sr_yalu_theme'), $widget_ops, $control_ops );
	}
	


	/*  Display Widget */
	
	function widget( $args, $instance ) {
		extract( $args );

		// Get the inputs
		$sr_title = apply_filters('widget_title', $instance['title'] );
		$sr_twitter_username = $instance['username'];
		$sr_twitter_postcount = $instance['postcount'];
		if ($sr_twitter_postcount > 3) { $sr_twitter_postcount = 3; }
		
		// Display the WidgetBefore settings
		echo $before_widget;
		
		
		// Display the title
		if ( $sr_title ) { echo $before_title . $sr_title . $after_title; }
			
			
		$id = rand(0,999);
		/* Display Latest Tweets */
		?>
			<script type="text/javascript">
				jQuery(function(){
				  jQuery(".tweet_<?php echo $id; ?>").tweet({
					join_text: "auto",
					username: "<?php echo $sr_twitter_username; ?>",
					avatar_size: 30,
					count: <?php echo $sr_twitter_postcount; ?>,
					auto_join_text_default: "",
					auto_join_text_ed: "",
					auto_join_text_ing: "",
					auto_join_text_reply: "",
					auto_join_text_url: "",
					loading_text: "loading tweets..."
				  });
				});
  			</script>
            <div class="twitter-widget tweet_<?php echo $id; ?>"></div>
         <?php   
		
		
		// Display the WidgetAfter settings
		echo $after_widget;
	}
	
	

	/* Update Widget */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['username'] = strip_tags( $new_instance['username'] );
		$instance['postcount'] = strip_tags( $new_instance['postcount'] );

		return $instance;
	}
	
	
	/* Widget settings */
	
	function form( $instance ) {

		// Set up default settings
		$defaults = array(
		'title' => 'Latest Tweets',
		'username' => 'spabrice',
		'postcount' => '3'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		
		?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'sr_yalu_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Username: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'username' ); ?>"><?php _e('Twitter Username', 'sr_yalu_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" value="<?php echo $instance['username']; ?>" />
		</p>
		
		<!-- Postcount: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'postcount' ); ?>"><?php _e('Number of tweets', 'sr_yalu_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'postcount' ); ?>" name="<?php echo $this->get_field_name( 'postcount' ); ?>" value="<?php echo $instance['postcount']; ?>" />
            <small><?php _e('Choose a number of tweets (max = 3)', 'sr_yalu_theme'); ?></small>
		</p>
		
		
		
	<?php
	}
}

?>