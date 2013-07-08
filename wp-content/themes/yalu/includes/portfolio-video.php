<?php

global $sr_prefix;

$m4v = get_post_meta($post->ID, $sr_prefix.'_video_m4v', true);
$ogv = get_post_meta($post->ID, $sr_prefix.'_video_oga', true);
$webmv = get_post_meta($post->ID, $sr_prefix.'_video_webmv', true);
$poster = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$postid = $post->ID;

?>	
    
        <div class="entry-media-item">
            
            <script type="text/javascript">				
				jQuery(document).ready(function(){
		
					if(jQuery().jPlayer) {
						jQuery("#jquery_jplayer_video<?php echo $postid; ?>").jPlayer({
							ready: function () {
								jQuery(this).jPlayer("setMedia", {
									<?php if($m4v != '') : ?>
                                    m4v: "<?php echo $m4v; ?>",
                                    <?php endif; ?>
									<?php if($ogv != '') : ?>
                                    ogv: "<?php echo $ogv; ?>",
                                    <?php endif; ?>
                                    <?php if($webmv != '') : ?>
                                    webmv: "<?php echo $webmv; ?>",
                                    <?php endif; ?>
									<?php if($poster != '') : ?>
                                    poster: "<?php echo $poster; ?>"
                                    <?php endif; ?>
								});
							},
							size: {
					          width: "100%",
					          height: "auto"
					        },
							swfPath: "<?php echo get_template_directory_uri(); ?>/files/jplayer",
							cssSelectorAncestor: "#jp_interface_video<?php echo $postid; ?>",
							supplied: "<?php if($ogv != '') : ?>ogv,<?php endif; ?><?php if($m4v != '') : ?>m4v,<?php endif; ?><?php if($webmv != '') : ?>webmv,<?php endif; ?>all"
						});
					}
				});
            </script>
        
           <div id="jquery_jplayer_video<?php echo $postid; ?>" class="jp-jplayer jp-jplayer-video"></div>

           <div class="jp-video-container">
                <div class="jp-video">
                    <div class="jp-type-single">
                        <div id="jp_interface_video<?php echo $postid; ?>" class="jp-interface">
                            <ul class="jp-controls">

                                <li><div class="seperator-first"></div></li>
                                <li><div class="seperator-second"></div></li>
                                <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                                <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                                <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                                <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                            </ul>

                            <div class="jp-progress-container">
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-volume-bar-container">
                                <div class="jp-volume-bar">

                                    <div class="jp-volume-bar-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>