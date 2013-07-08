<?php

global $sr_prefix;

$gallery = get_post_meta($post->ID, $sr_prefix.'_medias', true);

$display = get_option($sr_prefix.'_portfoliodisplay');
if (get_post_meta($post->ID, $sr_prefix.'_portfoliodisplay', true) == '' || get_post_meta($post->ID, $sr_prefix.'_portfoliodisplay', true) == 'default')
{ $display = $display; } else { $display = get_post_meta($post->ID, $sr_prefix.'_portfoliodisplay', true); }

$postid = $post->ID;




$slides = explode('|||',$gallery);
						
$slider = '';
foreach ($slides as $s) {
	$object = explode('~~', $s);
	$type = $object[0];
	$val = $object[1];
	
	$slider .= "<li>"; 
	if ($type == 'image') { 
		$attachement = sr_get_attachment_infos( $val );
		$image = wp_get_attachment_image_src($val, 'single-portfolio-image-big'); $image = $image[0];
		$fb_image = wp_get_attachment_image_src($val, 'full'); $fb_image = $fb_image[0];
		$thisimage = '<img src="'.$image.'" alt="'.get_the_title($image[1]).'"/>';
		if(get_option($sr_prefix.'_portfoliodisablefancybox') !== "on") {
			$slider .= '<div class="imgoverlay"><a href="'.$fb_image.'" class="openfancybox" rel="gallery'.get_the_ID().'" title="'.get_the_title($image[1]).'">'.$thisimage.'<div class="overlay"><span class="overlayicon overlaylupe"></span></div></a></div>';
		} else {
			$slider .= $thisimage;
		}
		
		if ($attachement['caption'] && !get_option($sr_prefix.'_portfoliodisablecaption')) { 
				$slider .= '<div class="single-caption"><span class="caption-text">'.$attachement['caption'].'</span><span class="caption-bg"></span></div>';  }
	} else {
		$slider .= '<div class="embeddedvideo">'.$val.'</div>';
	}
	$slider .= "</li>";
}

?>
    <div class="entry-media-item">
		<?php if($display !== "list" ) {  ?>
        <div id="slider-<?php echo get_the_ID(); ?>" class="flexslider-container portfolio-slider">        
            <div class="flexslider">
                <ul class="slides">
                    <?php echo $slider; ?>                
                </ul>
            </div>
        </div>
        <?php } else { ?>
        <ul class="gallery-list">
            <?php echo $slider; ?>
        </ul>
        <?php }  ?>
    </div> <!-- END .entry-media -->
