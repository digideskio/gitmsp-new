<?php
//get global prefix
global $sr_prefix;

//get template header
get_header();

$sidebar = get_option($sr_prefix.'_blogentriessidebar');
if (!$sidebar) { $sidebar = 'right'; }

?>

      <div class="main-content <?php if ($sidebar == 'right') { ?>left-float<?php } else { ?>right-float<?php } ?>">
                <div id="blog-entries" class="clearfix">
          <?php
                            if (get_query_var('s')) {
                                $query = new WP_Query(array(
                                    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
                                    's' => get_query_var('s'),
                                    'post_type' => array('post')
                                ) );
                                
                            } 
                            
                            if (!have_posts()) { 
                echo '<div class="nopost"><h3>'.__("No posts has been found!", 'sr_yalu_theme').'</h3></div>';
              }
                    ?>
                
          <?php
                      get_template_part( 'includes/loop', 'blog');
                    ?>
                </div> <!-- END #blog-entries -->
                
                <?php sr_pagination(__('Previous', 'sr_yalu_theme'), __('Next', 'sr_yalu_theme')); ?>                
                
          </div>    
        
            <aside id="sidebar" class="<?php if ($sidebar == 'right') { ?>right-float<?php } else { ?>left-float<?php } ?>">
                <?php get_sidebar(); ?>
            </aside> 
        
<?php get_footer(); ?>