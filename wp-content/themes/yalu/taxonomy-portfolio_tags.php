<?php
/*
Portfolio Category
*/

//get global prefix
global $sr_prefix;

//get template header
get_header();

$cols = get_option($sr_prefix.'_portfoliocolumns');
if (!$cols) { $cols = 3; }

?>
		
        		<?php 
                    
                    $sr_portfoliocount = get_option($sr_prefix.'_portfoliocount');
                    
                    $query = new WP_Query(array(
                        'posts_per_page'=> $sr_portfoliocount,
                        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
                        'portfolio_tags' => get_query_var('portfolio_tags'),
                        'post_type' => array('portfolio')
                    ) );
                
                ?>
                    
                <div id="portfolio-grid" class="masonry portfolio-entries masonry-col-<?php echo $cols; ?> clearfix">
                    <?php 
                        get_template_part( 'includes/loop', 'portfolio'); 
                    ?> 
                </div>
                
                
				<?php
                if (get_option($sr_prefix.'_portfoliopagination') !== 'default' && get_option($sr_prefix.'_portfoliopagination') !== 'hide') {
					$max_num_page = $query->max_num_pages; loadmore('portfolio', $max_num_page, $category);
				} else if (get_option($sr_prefix.'_portfoliopagination') == 'default') {
					sr_pagination(__('Previous', 'sr_yalu_theme'), __('Next', 'sr_yalu_theme'));
				}
                ?>
		        
<?php get_footer(); ?>