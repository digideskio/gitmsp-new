<?php 

global $sr_prefix;

?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- scaling not possible (for smartphones, ipad, etc.) -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />


<?php  
$titles = sr_getTitle();
if ($titles['tax']) {
	$title =  $titles['tax'].' | '.$titles['title'];
	$pagetitle =  $titles['title'].': '.$titles['tax'];
} else {
	$title =  $titles['title'];
	$pagetitle =  $titles['title'];
}
?>
<title><?php echo $title; ?> | <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

<?php sr_get_social_metas(); ?>

<?php get_template_part( 'includes/custom-fonts' ); ?>

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<div id="page-content">

	<?php if (get_option($sr_prefix.'_topbar_info') || !get_option($sr_prefix.'_socialdisable')) { ?>
    <div id="top">
    	<div class="top-inner wrapper clearfix">
            <?php if (get_option($sr_prefix.'_topbar_info')) { ?>
            <div class="top-info left-float">
            	<?php echo stripslashes(get_option($sr_prefix.'_topbar_info')); ?>
            </div>
            <?php } ?>
            
            <?php if (!get_option($sr_prefix.'_socialdisable')) { ?>
            <div class="top-right widget right-float">
                <ul class="socialmedia-widget" >
                    <?php if (get_option($sr_prefix.'_facebook')) { ?><li><a class="facebook" href="<?php echo get_option($sr_prefix.'_facebook'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_twitter')) { ?><li><a class="twitter" href="<?php echo get_option($sr_prefix.'_twitter'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_googleplus')) { ?><li><a class="googleplus" href="<?php echo get_option($sr_prefix.'_googleplus'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_vimeo')) { ?><li><a class="vimeo" href="<?php echo get_option($sr_prefix.'_vimeo'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_pinterest')) { ?><li><a class="pinterest" href="<?php echo get_option($sr_prefix.'_pinterest'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_youtube')) { ?><li><a class="youtube" href="<?php echo get_option($sr_prefix.'_youtube'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_instagram')) { ?><li><a class="instagram" href="<?php echo get_option($sr_prefix.'_instagram'); ?>" target="_blank"></a></li><?php } ?>
					<?php if (get_option($sr_prefix.'_dribbble')) { ?><li><a class="dribbble" href="<?php echo get_option($sr_prefix.'_dribbble'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_deviantart')) { ?><li><a class="deviantart" href="<?php echo get_option($sr_prefix.'_deviantart'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_behance')) { ?><li><a class="behance" href="<?php echo get_option($sr_prefix.'_behance'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_thumblr')) { ?><li><a class="thumblr" href="<?php echo get_option($sr_prefix.'_thumblr'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_flickr')) { ?><li><a class="flickr" href="<?php echo get_option($sr_prefix.'_flickr'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_forrst')) { ?><li><a class="forrst" href="<?php echo get_option($sr_prefix.'_forrst'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (get_option($sr_prefix.'_linkedin')) { ?><li><a class="linkedin" href="<?php echo get_option($sr_prefix.'_linkedin'); ?>" target="_blank"></a></li><?php } ?>
                    <?php if (!get_option($sr_prefix.'_rss')) { ?><li><a class="rss" href="<?php echo bloginfo('rss2_url') ?>" target="_blank"></a></li><?php } ?>
                </ul>
             </div>
             <?php } ?> 
    	</div>  <!-- END .top-inner -->         
	</div> <!-- END #top -->
    <?php } ?>

    <header>        
        <div class="header-inner wrapper clearfix">
                        
            <?php if (get_option($sr_prefix.'_logo')) {
				$logoId =  sr_get_attachment_id_from_src(get_option($sr_prefix.'_logo'));
				$logodata = wp_get_attachment_image_src( $logoId, "full" );
				$logoWidth = $logodata[1];
				$logoHeight = $logodata[2];
				$logo = get_option($sr_prefix.'_logo');
			?>
            <div id="logo" class="left-float">
                <a class="logotype" href="<?php echo home_url(); ?>"><img src="<?php echo $logo; ?>" style="height:<?php echo $logoHeight; ?>px;" alt="Logo"></a>
            </div>    
            <?php } else { ?>
        	<div id="logo" class="left-float">
                <a class="logotype" href="<?php echo home_url(); ?>"><h1><strong><?php bloginfo('name'); ?></strong></h1></a>
            </div>	
            <?php } ?>
            
            <?php  
                if(has_nav_menu('primary-menu')) {  
			?>
            <div class="menu right-float clearfix">
            <?php	
                    wp_nav_menu(  
                        array(  
                            'theme_location'  => 'primary-menu', 
                            'container'       => 'nav',  			        
                            'container_id'    => 'main-nav',  
                            'container_class' => '',  
                            'menu_class'      => '', 
                            'menu_id'         => 'primary' 
                        )
                    );  
            ?>
            </div>
            <?php 
			 	}
            ?>
                    
        </div> <!-- END .header-inner -->    
    </header> <!-- END header -->

	<section id="main">
    
    	<?php get_template_part( 'includes/page-title' ); ?>
    	
  		<div class="main-inner wrapper clearfix">