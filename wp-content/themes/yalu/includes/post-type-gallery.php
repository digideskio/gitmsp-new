<?php

global $sr_prefix;

$gallery = get_post_meta($post->ID, $sr_prefix.'_medias', true);
$postid = $post->ID;

if( empty($gallery) && (get_option($sr_prefix.'_blogentriesdisplay') !== 'featuredimage' || get_option($sr_prefix.'_blogpostgallerydisplay') == "list") ) {
?>	
	
<?php if(has_post_thumbnail()) { ?>
	<div class="entry-media blog-media">
		<?php the_post_thumbnail('blog-thumb'); ?>
	</div> <!-- END .entry-media -->
<?php } ?>
    
<?php	
} else {	

$medias = explode('|||', $gallery);

$output_medias = '';
foreach ($medias as $media) {
	$object = explode('~~', $media);
	$type = $object[0];
	$val = $object[1];
	
	$output_medias .= "<li>"; 
	if ($type == 'image') { 
		$image = wp_get_attachment_image_src($val, 'single-blog-image'); $image = $image[0];
		$fancyimage = wp_get_attachment_image_src($val, 'full'); $fancyimage = $fancyimage[0];
		$thisimage = '<img src="'.$image.'" alt="'.get_the_title($image[1]).'"/>';
		if(get_option($sr_prefix.'_blogpostsdisablefancybox') !== "on") {
			$output_medias .= '<div class="imgoverlay"><a href="'.$fancyimage.'" class="openfancybox" rel="gallery'.get_the_ID().'" title="'.get_the_title($image[1]).'">'.$thisimage.'<div class="overlay"><span class="overlayicon overlaylupe"></span></div></a></div>';
		} else {
			$output_medias .= $thisimage;
		}
	} else {
		$output_medias .= '<div class="embeddedvideo">'.$val.'</div>';
	}
	$output_medias .= "</li>";
}

?>
    <?php if(get_option($sr_prefix.'_blogpostgallerydisplay') !== "list" ) {  ?>
    <div class="entry-media blog-media">
        <div id="slider-<?php echo $postid; ?>" class="flexslider-container post-slider">        
            <div class="flexslider">
                <ul class="slides">
                    <?php echo $output_medias; ?>                
                </ul>
            </div>
        </div>
    </div> <!-- END .entry-media -->
    <?php } else { ?>
    <div class="entry-media blog-media">
		<?php the_post_thumbnail('blog-thumb'); ?>
	</div> <!-- END .entry-media -->
    <?php } ?>
        
<?php } ?>