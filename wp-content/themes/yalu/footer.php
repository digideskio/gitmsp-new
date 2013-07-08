<?php 

global $sr_prefix;

?>

		</div> <!-- END .main-inner -->
    </section> <!-- END #main  -->

	<footer>
    	<div class="footer-inner wrapper clearfix">
    			<div class="column one-fourth"><?php dynamic_sidebar('Footer Left'); ?></div>
    			<div class="column one-fourth"><?php dynamic_sidebar('Footer Center Left'); ?></div>
    			<div class="column one-fourth"><?php dynamic_sidebar('Footer Center Right'); ?></div>
    			<div class="column one-fourth last-col"><?php dynamic_sidebar('Footer Right'); ?></div>
        </div>
        
        <?php if(get_option($sr_prefix.'_copyright_left') && get_option($sr_prefix.'_copyright_right')) { ?>
        <div class="copyright">
        	<div class="wrapper clearfix">
                <?php if(get_option($sr_prefix.'_copyright_left') !== '') { echo '<div class="left-float">'.stripslashes(get_option($sr_prefix.'_copyright_left')).'</div>'; }?>
                <?php if(get_option($sr_prefix.'_copyright_right') !== '') { echo '<div class="right-float">'.stripslashes(get_option($sr_prefix.'_copyright_right')).'</div>'; }?>
            </div>
        </div>
        <?php } ?>
        
    </footer> <!-- END #footer -->

<?php if (!get_option($sr_prefix.'_disablebacktotop')) { ?>
    <a href="" id="totop" title="Back to top"><span class="topbg"></span><span class="topicon">Back To Top</span></a>
<?php } ?>

</div> <!-- END #page -->

<?php wp_footer(); ?>

</body>
</html>