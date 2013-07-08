<?php

global $sr_prefix;

$link = get_post_meta($post->ID, $sr_prefix.'_link', true);

?>
<div class="blog-link">
    <div class="link-target"><a href="<?php echo $link; ?>" target="_blank"><?php echo the_content(); ?></a></div>
    <div class="link-name">- <?php echo the_title(); ?> -</div>
</div>