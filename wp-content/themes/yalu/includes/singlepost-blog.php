<?php
//get global prefix
global $sr_prefix;
global $query;

if ($query) { $query = $query; } else { $query = $wp_query; }

if (have_posts()) : while (have_posts()) : the_post();


$style = get_option($sr_prefix.'_blogstyle');
if (!$style) { $style = 'layout-fixed'; }

$format = get_post_format(); 
if( false === $format ) { $format = 'standard'; }

?>  

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<div class="entry-content blog-content clearfix">
                    	
                        <?php 
                        if( $format == 'standard' || $format == 'gallery' || $format == 'image' || $format == 'video' || $format == 'audio' ) { 
							if($format == 'gallery') {
								get_template_part( 'includes/post-type', $format.'-single' );
							} else {
								get_template_part( 'includes/post-type', $format );
							}
						} ?>
                        
                    	<div class="blog-left">
                        	<?php if ( !get_option($sr_prefix.'_blogpostsdisabledate') ) { ?>
                            <div class="blog-date"><span class="day"><?php the_time('d') ?></span><span class="month"><?php the_time('M') ?></span></div>
                            <?php } ?>
                            <?php if ( !get_option($sr_prefix.'_blogpostsdisabletype') ) { ?>
                        	<div class="blog-format"><span class="format-<?php echo $format; ?>"></span></div>
                            <?php } ?>
                        </div>
                        
                        <div class="blog-right">
                            <div class="blog-text">
                            <?php 
							if( $format == 'standard' || $format == 'gallery' || $format == 'image' || $format == 'video' || $format == 'audio' || $format == 'aside' ) { 
								the_content(); 
							} else {
								get_template_part( 'includes/post-type', $format );
							}?>
                            </div>
                            
                            <?php if ( !get_option($sr_prefix.'_blogpostsdisabletags') ) { ?>
                            <div class="blog-tags clearfix"><?php the_tags( '', '', ''); ?></div>
                            <?php } ?>
                            
                            <?php if ( !get_option($sr_prefix.'_blogpostsdisableshare') ) { ?>
                            <div class="share blog-share clearfix">
                                <div class="sharetitle"><h5><?php _e('Share this post', 'sr_yalu_theme'); ?></h5></div>
                                <?php sr_sharebutton(); ?>
                            </div>
                            <?php } ?>
                            
                            <?php if ( !get_option($sr_prefix.'_blogpostsdisableauthorinfo') && get_the_author_meta('description') ) { ?>
                            <div class="blog-author clearfix">
                                <div class="author-image">
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar( get_the_author_meta('user_email'), '40', '' ); ?></a>
                                </div>   
                                <div class="author-bio">
                                    <h5><?php _e('About the Author', 'sr_yalu_theme'); ?></h5>
                                    <p><?php the_author_meta('description'); ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                        
                    </div> <!-- END .entry-content -->
                	</div> <!-- END .post-ID -->
                
                
					<?php if (get_option($sr_prefix.'_commentsblog') == 'enabled' && comments_open() && !post_password_required() ) { ?>
                    <div id="comment-section" class="clearfix">
                        <?php comments_template( '', true ); ?>
                    </div>
                    <?php } ?>
                
<?php endwhile; endif; ?>