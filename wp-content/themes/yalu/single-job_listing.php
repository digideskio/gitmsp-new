<?php

//get global prefix
global $sr_prefix;

// Count the views
if(!isset($_COOKIE["viewscookie".get_the_ID()]) && !isset($_POST['countlikes'])) { 
  sr_setPostMeta(get_the_ID(), 'views');
  setcookie("viewscookie".get_the_ID(), 'yes', time()+3600, '/');
}

//get template header
get_header();

$sidebar = get_option($sr_prefix.'_blogentriessidebar');
if (!$sidebar) { $sidebar = 'right'; }

?>
      
<div class="main-content <?php if ($sidebar == 'right') { ?>left-float<?php } else { ?>right-float<?php } ?>">
  <div id="blog-single" class="clearfix">    
    <?php get_template_part( 'includes/singlepost', 'blog'); ?>
  </div>
</div>

<aside id="sidebar" class="<?php if ($sidebar == 'right') { ?>right-float<?php } else { ?>left-float<?php } ?>">
  <a href="<?php bloginfo('siteurl');?>/job-board">Back to Job Board</a>
</aside>  
            
<?php get_footer(); ?>      
  