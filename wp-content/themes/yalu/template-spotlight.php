<?php
/*
Template Name: Spotlight
*/

//get global prefix
global $sr_prefix;

//get template header
get_header();


?>

            <div class="main-content">
                
                <?php
            
                     $query = new WP_Query(array(
                         'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
                         's' => get_query_var('s'),
                         'post_type' => array('post'),
                         'category_name' => "professional-spotlight"
                     ) );    
        
                     
                     if (!have_posts()) { 
                         echo '<div class="nopost"><h3>'.__("No posts has been found!", 'sr_yalu_theme').'</h3></div>';
                     }
                ?>
            
                <?php
                    get_template_part( 'includes/loop', 'spotlight');
                ?>
                
                <?php sr_pagination(__('Previous', 'sr_yalu_theme'), __('Next', 'sr_yalu_theme')); ?>                
                
            </div>    
        
<?php get_footer(); ?>