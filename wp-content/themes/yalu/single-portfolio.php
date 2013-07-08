<?php

//get global prefix
global $sr_prefix;

// Count the views
if(!isset($_COOKIE["viewscookie".get_the_ID()]) && !isset($_POST['countlikes'])) { 
	sr_setPostMeta(get_the_ID(), 'views');
	setcookie("viewscookie".get_the_ID(), 'yes', time()+3600, '/');
}

//get template header
get_header();

$style = get_option($sr_prefix.'_portfoliostyle');
if (!$style) { $style = 'layout-default'; }

if (get_post_meta(get_the_ID(), $sr_prefix.'_portfoliostyle', true) == '' || get_post_meta(get_the_ID(), $sr_prefix.'_portfoliostyle', true) == 'default')
{ $style = $style; } else { $style = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliostyle', true); }

?>

                 
        <div id="portfolio-single" class="clearfix portfolio-<?php echo $style; ?>">     	
             <?php   get_template_part( 'includes/singlepost', 'portfolio'); ?>
        </div>
         
        <?php
        	$related = sr_related_posts(get_the_ID(), 'portfolio_tags', array('posts_per_page' => 3));
			if( $related && $related->have_posts() && !get_option($sr_prefix.'_portfoliodisablerelated')) {
		?>	
		<h4 class="title"><span><strong><?php _e("Related Projects", 'sr_yalu_theme'); ?></strong></span></h4>
        
		<div id="portfolio-grid" class="masonry portfolio-entries masonry-col-3 clearfix">
					
		<?php 
			while ($related->have_posts()) : $related->the_post();
				get_template_part( 'includes/loop', 'portfolio'); 
			endwhile;	
			?>
		</div>
		<?php	} // End if related post
			wp_reset_query();
		?>
		

<?php get_footer(); ?>