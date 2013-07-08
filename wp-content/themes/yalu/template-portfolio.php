<?php
/*
Template Name: Portfolio
*/

//get global prefix
global $sr_prefix;

//get template header
get_header();

$cols = get_option($sr_prefix.'_portfoliocolumns');
if (!$cols) { $cols = 3; }

?>
                
                
                <?php 
					$category = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliocategories', true);
                    if (get_query_var('portfolio_category')) { $category = get_query_var('portfolio_category'); }
                    $sr_portfoliocount = get_option($sr_prefix.'_portfoliocount');
					
					if ($category[0] == '' && count($category) < 2) { $taxquery = false; } else {
						$taxquery = array(
										array(
											'taxonomy' => 'portfolio_category',
											'field' => 'slug',
											'terms' => $category
										)
									);
					}
				?>
                
                <?php
				if (get_post_meta(get_the_ID(), $sr_prefix.'_portfoliofilter', true) !== 'no' && count($category) > 1 && is_array($category)) {
				?>	
				<div class="filter">
					<ul id="menu-portfolio-filter" class="masonryfilter clearfix">
                    	<li><a class="active" data-option-value="*">All</a></li>
                        <?php foreach ($category as $c) { 
							$term = get_term_by('slug', $c, 'portfolio_category');
							$termlink = get_term_link($c, 'portfolio_category');
							if ($c !== '') {
						?>
                        <li><a data-option-value=".<?php echo $c; ?>" href="<?php echo $termlink; ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></li>
                        <?php } } ?>
                    </ul>
            	</div>
				<?php } // END if get option ?>
        
        
				<?php 
                                        
                    $query = new WP_Query(array(
                        'posts_per_page'=> $sr_portfoliocount,
                        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
                        'm' => get_query_var('m'),		   
                        'w' => get_query_var('w'),
                        'post_type' => array('portfolio'),
						'tax_query' => $taxquery
                    ) );
                
                ?>
                    
                <?php if (!have_posts($query)) { echo '<div class="nopost"><h3>'.__("No posts has been found!", 'sr_yalu_theme').'</h3></div>'; } ?>

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