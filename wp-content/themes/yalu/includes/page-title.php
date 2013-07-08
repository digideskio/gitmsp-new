<?php
//get global prefix
global $sr_prefix;

$titles = sr_getTitle();
if ($titles['tax']) {
	$title =  $titles['tax'].' | '.$titles['title'];
	$pagetitle =  $titles['title'].': '.$titles['tax'];
} else {
	$title =  $titles['title'];
	$pagetitle =  $titles['title'];
}

if (is_home()) { $theId = get_option( 'page_for_posts' );  } else if (!is_404() && !is_tag() && !is_category() && !is_search() && !is_archive() && !is_tax()) { $theId = get_the_ID();  }

?>
                
        <?php // IF SLIDER ISSET 
			if (isset($theId) && get_post_meta($theId, $sr_prefix.'_slider', true) && get_post_meta($theId, $sr_prefix.'_slider', true) !== 'false') { ?>
            <?php if(class_exists('RevSlider')){ putRevSlider(get_post_meta($theId, $sr_prefix.'_slider', true)); } ?>
        <?php } else {  
		
		// GET MAP INFO IF TEMPLATE IS CONTACT
		if( is_page_template( 'template-contact.php' ) && get_post_meta(get_the_ID(), $sr_prefix.'_contact_latlong', true) ) {
			$latlong = get_post_meta(get_the_ID(), $sr_prefix.'_contact_latlong', true);
			$mapinfo = get_post_meta(get_the_ID(), $sr_prefix.'_contact_info', true);
			$pin = get_post_meta(get_the_ID(), $sr_prefix.'_contact_icon', true);
			echo sr_googleMap($latlong, $mapinfo, $pin, 400, 'header');						   
		} else { 
		
		?>
        
    	<div id="page-title" class="<?php if (isset($theId) && get_post_meta($theId, $sr_prefix.'_featuredimage', true)  == 'true') { ?>withbackground<?php } ?>">
        	
            <?php if (isset($theId) && get_post_meta($theId, $sr_prefix.'_featuredimage', true)  == 'true') { ?>
            <div class="pagetitle-background">
                <?php if (is_home()) { echo get_the_post_thumbnail( $theId, '' ); } else { the_post_thumbnail(''); } ?>
            </div>
            <?php } ?>
        	
        
        	<div class="wrapper clearfix">            
                <div class="title-name left-float <?php if (isset($theId) && get_post_meta($theId, $sr_prefix.'_titlecolor', true)  == 'light') { ?>light-title<?php } ?>">
                	<h3><strong><?php echo $pagetitle; ?></strong></h3>
					<?php if (isset($theId) && get_post_meta($theId, $sr_prefix.'_subtitle', true)) { ?>
                    <h6 class="subtitle"><?php echo get_post_meta($theId, $sr_prefix.'_subtitle', true); ?></h6>
                    <?php } ?>
                    
                    <?php if (is_single()) { 
						if (get_post_type() == 'post') { sr_getBlogMeta(); }
						if (get_post_type() == 'portfolio') { 
							$subtitle = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_subtitle', true);
							if ($subtitle) { echo '<h6 class="subtitle">'.$subtitle.'</h6>'; }
						}
					} ?>
                </div>
                
                <?php if (isset($theId) && get_post_meta($theId, $sr_prefix.'_breadcrumb', true) == 'false' || is_single() || !isset($theId)) { } else { ?>
                <div class="breadcrumb right-float">
                    <?php echo sr_breadcrumb(); ?>
                </div>
                <?php } ?>
                
                <?php if (is_single()) { ?>
                
                <?php if(get_post_type() == 'post' && !get_option($sr_prefix.'_blogpostsdisablepagination')) { 
					sr_singlepagination('blog','single-pagination','right-float clearfix'); }
					else if (get_post_type() == 'portfolio' && !get_option($sr_prefix.'_portfoliodisablepagination')) { 
					sr_singlepagination('portfolio','single-pagination','right-float clearfix'); }
					?>	
                    
                    <ul id="views-likes" class="right-float clearfix">
                        <?php if ( (get_post_type() == 'post' && !get_option($sr_prefix.'_blogpostsdisableviews')) || (get_post_type() == 'portfolio' && !get_option($sr_prefix.'_portfolioviews')) ) { ?>
                        <li class="entry-views"><span class="views-value"><?php echo sr_getPostMeta(get_the_ID(), 'views'); ?></span></li>
                        <?php } ?>
                        
                        <?php if ( (get_post_type() == 'post' && !get_option($sr_prefix.'_blogpostsdisablelikes')) || (get_post_type() == 'portfolio' && !get_option($sr_prefix.'_portfoliolikes')) ) { ?>
                        <li class="entry-likes"><a href="<?php the_permalink(); ?>" <?php if (isset($_COOKIE["likescookie".get_the_ID()])) { echo 'class="likesactive"'; } ?> data-id="<?php echo get_the_ID(); ?>"><span class="likes-value"><?php echo sr_getPostMeta(get_the_ID(), 'likes'); ?></span></a></li>
                        <?php } ?>
                    </ul>
                
                <?php } ?>
        	</div>
        </div> <!-- END #page-title -->
        
        
        <?php } // END is template-contact ?>
		<?php } // END if SLIDER ?>