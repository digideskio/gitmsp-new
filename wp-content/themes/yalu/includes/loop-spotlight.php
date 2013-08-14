<?php
//get global prefix
global $sr_prefix;
global $query;

if ($query) { $query = $query; } else { $query = $wp_query; }

while ($query->have_posts()) : $query->the_post(); 

$format = get_post_format(); 
if( false === $format ) { $format = 'standard'; }
    

?>  
        
                    <div class="blog-entry clearfix">
                    
                        <?php 
                        if( $format == 'standard' || $format == 'gallery' || $format == 'image' || $format == 'video' || $format == 'audio' ) { 
                            get_template_part( 'includes/post-type', $format ); 
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
                            
                        <?php 
                        if( $format == 'standard' || $format == 'gallery' || $format == 'image' || $format == 'video' || $format == 'audio' ) { ?>
                            <div class="blog-headline">
                                <h3><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h3>
                                <ul class="blog-meta clearfix">
                                    <li class="meta-comments"><?php comments_number('0', '1', '%'); ?> <?php _e("Comments", 'sr_yalu_theme'); ?></li>
                                </ul>
                            </div>
                            
                            <div class="blog-intro">
                                <?php if ( ! post_password_required() ) { ?>
                                <?php 
                                    $excerptlength  = get_option($sr_prefix.'_blogentriesexcerpt');
                                    $readmore       = get_option($sr_prefix.'_blogentriesreadmore');
                                    if (!$excerptlength) { $excerptlength = 30; }
                                    echo content('excerpt', $excerptlength, false); ?>
                                <?php } else { ?>    
                                    <p><?php _e("This post is password protected.", 'sr_yalu_theme'); ?></p>
                                <?php } ?>                      
                            </div>
                            
                            <?php if (!$readmore) { ?>
                            <div class="blog-readmore"><a class="link-moreinfo" href="<?php the_permalink(); ?>"><?php _e("read more", 'sr_yalu_theme'); ?></a></div>
                            <?php } ?>
                            
                        <?php } else { ?>
                            <?php get_template_part( 'includes/post-type', $format ); ?>
                            
                        <?php }  ?>
                        
                        </div>
                        
                    </div> <!-- END .blog-entry -->
        
                
<?php endwhile; ?>