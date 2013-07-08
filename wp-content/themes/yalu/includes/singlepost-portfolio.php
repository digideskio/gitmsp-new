<?php
//get global prefix
global $sr_prefix;
global $query;

if ($query) { $query = $query; } else { $query = $wp_query; }

if (have_posts()) : while (have_posts()) : the_post();

####### GET METAS 
$slides = get_post_meta(get_the_ID(), $sr_prefix.'_medias', true);
$client = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_client', true);
$date = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_date', true);
$link = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_link', true);
$linkname = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_linkname', true);
if (!$linkname) { $linkname = __( "Visit Live Project", 'sr_yalu_theme' ); }

$m4v = get_post_meta($post->ID, $sr_prefix.'_video_m4v', true);
$ogv = get_post_meta($post->ID, $sr_prefix.'_video_oga', true);
$webmv = get_post_meta($post->ID, $sr_prefix.'_video_webmv', true);

$mp3 = get_post_meta($post->ID, $sr_prefix.'_audio_mp3', true);
$oga = get_post_meta($post->ID, $sr_prefix.'_audio_oga', true);

?>  

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <div class="entry-media portfolio-media">
                <?php if (!empty($m4v) && !empty($ogv)) { get_template_part( 'includes/portfolio', 'video' ); } ?>
				<?php if (!empty($mp3) && !empty($oga)) { get_template_part( 'includes/portfolio', 'audio' ); } ?>
				<?php if ($slides) { get_template_part( 'includes/portfolio', 'gallery' ); } ?>
                </div>
                
                <div class="entry-content portfolio-content clearfix">
                	
                    <?php if(get_the_content() !== "") { ?>
                    <div class="portfolio-description">
           				 <h4 class="title"><span><strong><?php _e( "Description", 'sr_yalu_theme' ) ?></strong></span></h4>
                         <?php the_content(); ?>
                    </div>
                    <?php } ?>
                    
                    <div class="portfolio-details">
           				<h4 class="title"><span><strong><?php _e( "Details", 'sr_yalu_theme' ) ?></strong></span></h4>
                        
                        <?php 
							// CATEGORIES
							if ( !get_option($sr_prefix.'_portfoliocats')) {
								$categories = wp_get_post_terms(get_the_ID(),'portfolio_category');
								$separator = ',';
								$output = '';

								if($categories){
									foreach($categories as $category) {
										$output .= 	'<a href="'.get_term_link($category->slug, 'portfolio_category' ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'sr_yalu_theme' ), $category->slug ) ) . '">
													'.$category->name.'</a>'.$separator;
									}
									$cats = trim($output, $separator);
								}
							}
						?>
                         
                        <ul class="portfolio-meta clearfix">
                        	<?php if ( !get_option($sr_prefix.'_portfoliodate') && $date ) { ?>
                         	<li class="meta-date"><span class="meta-title"><?php _e( "Date", 'sr_yalu_theme' ) ?></span><?php echo $date; ?></li>
                            <?php } ?>
                            <?php if ( !get_option($sr_prefix.'_portfolioclient') && $client ) { ?>
                         	<li class="meta-client"><span class="meta-title"><?php _e( "Client", 'sr_yalu_theme' ) ?></span><?php echo $client; ?></li>
                            <?php } ?>
                            <?php if ( !get_option($sr_prefix.'_portfoliocats') ) { ?>
                         	<li class="meta-category"><span class="meta-title"><?php _e( "Category", 'sr_yalu_theme' ) ?></span><?php echo $cats; ?></li>
                            <?php } ?>
                            <?php if ( !get_option($sr_prefix.'_portfoliotags') ) { ?>
                         	<li class="meta-tags"><span class="meta-title"><?php _e( "Tags", 'sr_yalu_theme' ) ?></span><?php echo get_the_term_list(get_the_ID(), 'portfolio_tags', '', ',', ''); ?></li>
                            <?php } ?>
                        </ul>
                         
                     	<?php if ($link) { ?>
                        	<a class="y-button default-button4 medium-button" href="<?php echo $link; ?>" target="_blank"><?php echo $linkname; ?></a>
                        <?php } ?>
                         
                        <?php if ( !get_option($sr_prefix.'_portfoliodisableshare') ) { ?>
                        <div class="share portfolio-share clearfix">
                            <div class="sharetitle"><h5><?php _e('Share this', 'sr_yalu_theme'); ?></h5></div>
                            <?php sr_sharebutton(); ?>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div> <!-- END .entry-content -->
                </div> <!-- END #post-id -->
            
				<?php if (get_option($sr_prefix.'_commentsportfolio') == 'enabled' && comments_open() && !post_password_required() ) { ?>
                <div id="comment-section" class="clearfix <?php echo 'single-'.$style; ?>">
                    <?php comments_template( '', true ); ?>
                </div>
                <?php } ?>
                
<?php endwhile; endif; ?>