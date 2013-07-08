<?php
//get global prefix
global $sr_prefix;
global $query;
global $related;

if ($query) { $query = $query; } else { $query = $wp_query; }
if ($related) { $query = $related; }

while ($query->have_posts()) : $query->the_post(); 
	
	// GET CATEGORIES
	$categories = wp_get_object_terms($post->ID, 'portfolio_category'); 
	$current_cats = '';
	$masonry_cats = '';
	$private = false;
	foreach($categories as $cat){
		$category = $cat->name; 
		$current_cats .= $category.', ';
		$category = strtolower($category);
		if ($category == 'private') { $private = true; }
		$replace = array(" ", "'", '"', "&amp;",  "amp;", "&");
		$category = str_replace($replace, "", $category);
		$masonry_cats .= $category.' ';
	}
	$current_cats = substr($current_cats, 0, -2);
	
	// CACHING CUSTOM POSTMETAS
	$externlink = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_externlink', true);
	$subtitle = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_subtitle', true);

?>  
				
               	<div class="portfolio-entry masonry-item <?php echo $masonry_cats; ?>">
                	<div class="entry-thumb">
                        <div class="imgoverlay">
                        	<?php  if ($externlink) { ?>
                            <a href="<?php echo $externlink; ?>" target="_blank">
                            <?php } else { ?>    
                            <a href="<?php the_permalink(); ?>">
                            <?php } ?>
                               	<?php 
									if (!get_option($sr_prefix.'_portfoliocrop')) {
										the_post_thumbnail('portfolio-crop-thumb');	
									} else {
										the_post_thumbnail('portfolio-thumb');	
									}
								 ?>
                                <div class="overlay"><span class="overlayicon"></span></div>
                            </a>
                        </div>
                    </div>
                    
                    <?php if (!get_option($sr_prefix.'_portfolioinfos')) { ?>    
                    <div class="portfolio-intro">
                    	<h5><?php  if ($externlink) { ?>
                            <a href="<?php echo $externlink; ?>" target="_blank">
                            <?php } else { ?>    
                            <a href="<?php the_permalink(); ?>">
                            <?php } ?><strong><?php the_title(); ?></strong></a></h5>
                    	<?php  if ($subtitle) { echo '<p>'.$subtitle.'</p>'; } ?>           
                    </div>
                    <?php } ?>
                </div>
                
<?php endwhile; ?>