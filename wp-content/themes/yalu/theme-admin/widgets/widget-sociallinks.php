<?php

/*-----------------------------------------------------------------------------------
	
	Plugin Name: Social Links Widget  
	Description: Show you social links  
	Version: 1.0  
	Author: SpabRice  
	Author URI: http://www.spab-rice.com  
	
-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Register Social link Widget & enqueu scripts
/*-----------------------------------------------------------------------------------*/

add_action( 'widgets_init', 'sr_sociallinks_widget' );

function sr_sociallinks_widget() {
	register_widget( 'sr_sociallinks_widget' );
}


/*-----------------------------------------------------------------------------------*/
/*	Widget Class
/*-----------------------------------------------------------------------------------*/

class sr_sociallinks_widget extends WP_Widget {

	/*  Widget setup  */
	
	function sr_sociallinks_widget() {
	
		// Widget settings
		$widget_ops = array( 'classname' => 'sr_sociallinks_widget', 'description' => __('A widget that displays all Social links which have been activated.', 'sr_yalu_theme') );
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base', 'sr-sociallinks-widget' );
		
		// Create widget
		$this->WP_Widget( 'sr_sociallinks_widget', __('SR - Social Links','sr_yalu_theme'), $widget_ops, $control_ops );
	}
	


	/*  Display Widget */
	
	function widget( $args, $instance ) {
		extract( $args );
		
		// Get the inputs
		$sr_title = apply_filters('widget_title', $instance['title'] );
		$sr_facebook = $instance['facebook'];
		$sr_twitter = $instance['twitter'];
		$sr_googleplus = $instance['googleplus'];
		$sr_pinterest = $instance['pinterest'];
		$sr_instagram = $instance['instagram'];
		$sr_dribbble = $instance['dribbble'];
		$sr_vimeo = $instance['vimeo'];
		$sr_youtube = $instance['youtube'];
		$sr_flickr = $instance['flickr'];
		$sr_behance = $instance['behance'];
		$sr_deviantart = $instance['deviantart'];
		$sr_forrst = $instance['forrst'];
		$sr_thumblr = $instance['thumblr'];
		$sr_linkedin = $instance['linkedin'];
		$sr_rss = $instance['rss'];
		
		
		// Display the WidgetBefore settings
		echo $before_widget;
		
		// Display the title
		if ( $sr_title ) { echo $before_title . $sr_title . $after_title; }
		
			
		/* Display Social Buttons */
		?>
			<ul class="socialmedia-widget" >
                    <?php if($sr_facebook !== '') { echo '<li><a class="facebook" href="'.$sr_facebook.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_twitter !== '') { echo '<li><a class="twitter" href="'.$sr_twitter.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_googleplus !== '') { echo '<li><a class="googleplus" href="'.$sr_googleplus.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_pinterest !== '') { echo '<li><a class="pinterest" href="'.$sr_pinterest.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_instagram !== '') { echo '<li><a class="instagram" href="'.$sr_instagram.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_dribbble !== '') { echo '<li><a class="dribbble" href="'.$sr_dribbble.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_vimeo !== '') { echo '<li><a class="vimeo" href="'.$sr_vimeo.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_youtube !== '') { echo '<li><a class="youtube" href="'.$sr_youtube.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_flickr !== '') { echo '<li><a class="flickr" href="'.$sr_flickr.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_behance !== '') { echo '<li><a class="behance" href="'.$sr_behance.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_deviantart !== '') { echo '<li><a class="deviantart" href="'.$sr_deviantart.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_forrst !== '') { echo '<li><a class="forrst" href="'.$sr_forrst.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_thumblr !== '') { echo '<li><a class="thumblr" href="'.$sr_thumblr.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_linkedin !== '') { echo '<li><a class="linkedin" href="'.$sr_linkedin.'" target="_blank"></a></li>'; }?>
                    <?php if($sr_rss !== '') { echo '<li><a class="rss" href="'.$sr_rss.'" target="_blank"></a></li>'; }?>
             </ul>
         <?php   
		
		
		// Display the WidgetAfter settings
		echo $after_widget;
	}
	
	

	/* Update Widget */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['googleplus'] = strip_tags( $new_instance['googleplus'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['dribbble'] = strip_tags( $new_instance['dribbble'] );
		$instance['vimeo'] = strip_tags( $new_instance['vimeo'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		$instance['flickr'] = strip_tags( $new_instance['flickr'] );
		$instance['behance'] = strip_tags( $new_instance['behance'] );
		$instance['deviantart'] = strip_tags( $new_instance['deviantart'] );
		$instance['forrst'] = strip_tags( $new_instance['forrst'] );
		$instance['thumblr'] = strip_tags( $new_instance['thumblr'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['rss'] = strip_tags( $new_instance['rss'] );

		return $instance;
	}
	
	
	/* Widget settings */
	
	function form( $instance ) {
		
		// Set up default settings
		$defaults = array(
			'title' => 'Social Widget',
			'facebook' => '',
			'twitter' => '',
			'googleplus' => '',
			'pinterest' => '',
			'instagram' => '',
			'dribbble' => '',
			'vimeo' => '',
			'youtube' => '',
			'flickr' => '',
			'behance' => '',
			'deviantart' => '',
			'forrst' => '',
			'thumblr' => '',
			'linkedin' => '',
			'rss' => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		
		?>

		<p>
            <i><?php _e('Enter your social profile links including "http://"', 'sr_yalu_theme'); ?></i>
		</p>
        
        <!-- Title -->
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
        </p>
        
        
        <!-- Facebook -->
		<p>
		<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" />
        </p>
        
        
        <!-- Twitter -->
		<p>
		<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" />
        </p>
        
        
        <!-- Googleplus -->
		<p>
		<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e('Google Plus:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" value="<?php echo $instance['googleplus']; ?>" />
        </p>
        
        
        <!-- pinterest -->
		<p>
		<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" />
        </p>
        
        <!-- instagram -->
		<p>
		<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" />
        </p>
        
        
        <!-- dribbble -->
		<p>
		<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('Dribbble:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" />
        </p>
        
        
        <!-- vimeo -->
		<p>
		<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" />
        </p>
        
        <!-- youtube -->
		<p>
		<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" />
        </p>
        
        
        <!-- behance -->
		<p>
		<label for="<?php echo $this->get_field_id( 'behance' ); ?>"><?php _e('Behance:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" value="<?php echo $instance['behance']; ?>" />
        </p>
        
        
        <!-- deviantart -->
		<p>
		<label for="<?php echo $this->get_field_id( 'deviantart' ); ?>"><?php _e('Deviantart:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'deviantart' ); ?>" name="<?php echo $this->get_field_name( 'deviantart' ); ?>" value="<?php echo $instance['deviantart']; ?>" />
        </p>
        
        
        <!-- forrst -->
		<p>
		<label for="<?php echo $this->get_field_id( 'forrst' ); ?>"><?php _e('Forrst:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'forrst' ); ?>" name="<?php echo $this->get_field_name( 'forrst' ); ?>" value="<?php echo $instance['forrst']; ?>" />
        </p>
        
        
        <!-- thumblr -->
		<p>
		<label for="<?php echo $this->get_field_id( 'thumblr' ); ?>"><?php _e('Thumblr:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'thumblr' ); ?>" name="<?php echo $this->get_field_name( 'thumblr' ); ?>" value="<?php echo $instance['thumblr']; ?>" />
        </p>
        
        
        <!-- linkedin -->
		<p>
		<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linked In:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" />
        </p>
        
        
         <!-- Rss -->
		<p>
		<label for="<?php echo $this->get_field_id( 'rss' ); ?>"><?php _e('Rss:', 'sr_yalu_theme') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'rss' ); ?>" name="<?php echo $this->get_field_name( 'rss' ); ?>" value="<?php echo $instance['rss']; ?>" />
        </p>
            
            
		
		
		
	<?php
	}
}

?>