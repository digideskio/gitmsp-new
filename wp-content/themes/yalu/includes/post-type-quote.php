<?php

global $sr_prefix;

$quote = get_post_meta($post->ID, $sr_prefix.'_quote', true);

?>
<div class="blog-quote">
    <div class="quote-text"><?php echo $quote; ?></div>
    <div class="quote-author">- <?php the_title(); ?> -</div>
</div>