<?php
/*
Template Name: Sidebar Right
*/

//get global prefix
global $sr_prefix;

//get template header
get_header();

if (have_posts()) : while (have_posts()) : the_post(); 

?>
                    
		<div class="main-content left-float"> 
                   
			<?php the_content(); ?>
            <?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
             
            <?php if (get_option($sr_prefix.'_commentspage') == 'enabled' && comments_open() && !post_password_required() ) { ?>
            <div id="comment-section" class="page-comment clearfix">
                <?php comments_template( '', true ); ?>
            </div>
            <?php } ?> 
        
        </div>   
        
        <aside class="right-float">
        	<?php get_sidebar(); ?>
        </aside>   
               

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>