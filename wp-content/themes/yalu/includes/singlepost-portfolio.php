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
                         <?php the_content(); ?>
                    </div>
                    <?php } ?>
                    
                    <div class="portfolio-details">
                         
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