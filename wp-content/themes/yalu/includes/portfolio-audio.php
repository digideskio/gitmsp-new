<?php

global $sr_prefix;

$mp3 = get_post_meta($post->ID, $sr_prefix.'_audio_mp3', true);
$oga = get_post_meta($post->ID, $sr_prefix.'_audio_oga', true);
$poster = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$postid = $post->ID;

?>	
    	        
        <div class="entry-media-item">
        
        	<?php if(has_post_thumbnail()) { ?>
				<?php the_post_thumbnail(); ?>
            <?php } ?>
            
            <script type="text/javascript">
                jQuery(document).ready(function(){
                    if(jQuery().jPlayer) {
                        jQuery("#jquery_jplayer_audio<?php echo $postid; ?>").jPlayer({
                            ready: function () {
                                jQuery(this).jPlayer("setMedia", {
                                    <?php if($poster != '') : ?>
                                    poster: "<?php echo $poster; ?>",
                                    <?php endif; ?>
									<?php if($mp3 != '') : ?>
                                    mp3: "<?php echo $mp3; ?>",
                                    <?php endif; ?>
                                    <?php if($oga != '') : ?>
                                    oga: "<?php echo $oga; ?>",
                                    <?php endif; ?>
                                    end: ""
                                });
                            },
                            swfPath: "<?php echo get_template_directory_uri(); ?>/files/jplayer",
                            cssSelectorAncestor: "#jp_interface_audio<?php echo $postid; ?>",
                            supplied: "<?php if($oga != '') : ?>oga,<?php endif; ?><?php if($mp3 != '') : ?>mp3, <?php endif; ?> all"
                        });
                    
                    }
                });
            </script>
        
            <div id="jquery_jplayer_audio<?php echo $postid; ?>" class="jp-jplayer jp-jplayer-audio"></div>

            <div class="jp-audio-container">
                <div class="jp-audio">
                    <div class="jp-type-single">
                        <div id="jp_interface_audio<?php echo $postid; ?>" class="jp-interface">
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
    