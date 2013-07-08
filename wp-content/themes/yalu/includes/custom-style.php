<?php 
$sr_prefix = "_sr";
header("Content-type: text/css");
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];
require_once( $path_to_wp . '/wp-load.php' );



/***********************
GET CUSTOM COLOR
***********************/
$main_color = '#1e7987';
if (get_option($sr_prefix.'_customcolor')){
    $main_color = get_option($sr_prefix.'_customcolor'); 
} 


/***********************
GET CUSTOM CSS
***********************/
if (get_option($sr_prefix.'_customcss')){
    $customcss = get_option($sr_prefix.'_customcss'); 
}  else {
	$customcss = '';
}



/***********************
GET CUSTOM FONTS AND SET DEFAULTS
***********************/
$bodyfont = get_option($sr_prefix.'_bodyfont'); 
	if (!$bodyfont || $bodyfont == 'default') { $bodyfont = "'Helvetica', Helvetica, Arial"; }
$bodyfontsize = get_option($sr_prefix.'_bodyfontsize'); 
	if (!$bodyfontsize) { $bodyfontsize = "13px"; }
$bodyfontlineheight = get_option($sr_prefix.'_bodyfontlineheight'); 
	if (!$bodyfontlineheight) { $bodyfontlineheight = "20px"; }
	
$headingfont = get_option($sr_prefix.'_headingfont');
	if (!$headingfont || $headingfont == 'default') { $headingfont = "'Montserrat', Helvetica, Arial"; }	

$navigationfont = get_option($sr_prefix.'_navigationfont');
	if (!$navigationfont || $navigationfont == 'default') { $navigationfont = "'Montserrat', Helvetica, Arial"; }
$navigationfontsize = get_option($sr_prefix.'_navigationfontsize'); 
	if (!$navigationfontsize) { $navigationfontsize = "14px"; }	
$navigationfontweight = get_option($sr_prefix.'_navigationfontweight'); 
	if (!$navigationfontweight) { $navigationfontweight = "bold"; }	
$navigationfonttransform = get_option($sr_prefix.'_navigationfonttransform'); 
	if (!$navigationfonttransform) { $navigationfonttransform = "uppercase"; }
	
$restfont = get_option($sr_prefix.'_restfont');
	if (!$restfont || $restfont == 'default') { $restfont = "'Montserrat', Helvetica, Arial"; }

?>


<?php if (get_option($sr_prefix.'_logo')) {
	$logoId =  sr_get_attachment_id_from_src(get_option($sr_prefix.'_logo'));
	$logodata = wp_get_attachment_image_src( $logoId, "full" );
	$logoHeight = $logodata[2];
?>
/* HEIGHT MENU */
nav#main-nav > ul > li > a  { line-height: <?php echo $logoHeight; ?>px; }   
<?php } ?>



/* CUSTOM FONTS */
body { font-family: <?php echo $bodyfont; ?>; font-size: <?php echo $bodyfontsize; ?>; line-height: <?php echo $bodyfontlineheight; ?>; }
h1, h2, h3, h4, h5, h6 { font-family: <?php echo $headingfont; ?>; }
nav#main-nav > ul > li > a { font-family: <?php echo $navigationfont; ?>; font-size: <?php echo $navigationfontsize; ?>; font-weight: <?php echo $navigationfontweight; ?>; text-transform: <?php echo $navigationfonttransform; ?>; }
nav#responsive-nav > ul > li > a { font-family: <?php echo $navigationfont; ?>; font-size: <?php echo $navigationfontsize; ?>; font-weight: <?php echo $navigationfontweight; ?>; text-transform: <?php echo $navigationfonttransform; ?>; }
input[type=submit] { font-family: <?php echo $restfont; ?>; }
a.link-moreinfo { font-family: <?php echo $restfont; ?>; }
#top .top-info { font-family: <?php echo $restfont; ?>; }
.blog-meta li { font-family: <?php echo $restfont; ?>; }
.blog-date .day { font-family: <?php echo $restfont; ?>; }
.blog-date .month { font-family: <?php echo $restfont; ?>; }
.blog-quote .quote-text { <?php echo $restfont; ?>; }
.blog-link .link-target { <?php echo $restfont; ?>; }
.portfolio-entry .portfolio-intro p { <?php echo $restfont; ?>; }
.iconbox p { <?php echo $restfont; ?>; } 
.toggle .toggle-title .toggle-name { <?php echo $restfont; ?>; }
.tabs ul.tab_nav li a { <?php echo $restfont; ?>; }
a.y-button { <?php echo $restfont; ?>; }
#load-more { <?php echo $restfont; ?>; }
    



/* COLOR */
::selection { background-color: <?php echo $main_color; ?>; }
::-moz-selection { background-color: <?php echo $main_color; ?>; }
::-webkit-selection { background-color: <?php echo $main_color; ?>; }
.colored { color: <?php echo $main_color; ?>; }
.title span { border-color: <?php echo $main_color; ?>; }
input[type=submit] { background-color: <?php echo $main_color; ?>; }
a { color: <?php echo $main_color; ?>; }
#top .top-info span.phone-highlight { color: <?php echo $main_color; ?>; }
nav#main-nav > ul > li:hover > a { color: <?php echo $main_color; ?>; }
nav#main-nav > ul > li.current-menu-item > a, nav#main-nav > ul > li.current-menu-ancestor > a { color: <?php echo $main_color; ?>; }
nav#main-nav ul li .sub-menu { border-color: <?php echo $main_color; ?>; }
nav#main-nav ul .sub-menu li a:hover { color: <?php echo $main_color; ?>; }
nav#main-nav ul .sub-menu li.current-menu-item > a { color: <?php echo $main_color; ?>; }
.breadcrumb a:hover { color: <?php echo $main_color; ?>; }
.blog-headline h3 a:hover, .blog-headline h4 a:hover { color: <?php echo $main_color; ?>; }
.blog-meta li a:hover { color: <?php echo $main_color; ?>; }
.blog-date { background-color: <?php echo $main_color; ?>; }
.blog-quote { background-color: <?php echo $main_color; ?>; }
.blog-tags a:hover { background-color: <?php echo $main_color; ?>; }
.portfolio-meta li a:hover { color: <?php echo $main_color; ?>; }
.entry-views { background-color: <?php echo $main_color; ?>; }
.entry-views span { color: <?php echo $main_color; ?>; }
.filter ul li a.active { background-color: <?php echo $main_color; ?>; }
#single-pagination li a:hover, #entries-pagination li a:hover { background-color: <?php echo $main_color; ?>; }
.box-color { background-color: <?php echo $main_color; ?>; }
.highlight-color { background-color: <?php echo $main_color; ?>; }
.toggle .toggle-active .toggle-icon { background-color: <?php echo $main_color; ?>; border-color: <?php echo $main_color; ?>; }
.toggle .toggle-title:hover .toggle-name, .toggle .toggle-active .toggle-name { color: <?php echo $main_color; ?>; }
.tabs ul.tab_nav li a:hover { color: <?php echo $main_color; ?>; }
.tabs ul.tab_nav li a.active { background-color: <?php echo $main_color; ?>; border-color: <?php echo $main_color; ?>; }
a.default-button1 {	background-color: <?php echo $main_color; ?>; }
a.default-button3 {	color: <?php echo $main_color; ?>; }
a.default-button4:hover { border-color: <?php echo $main_color; ?>; color: <?php echo $main_color; ?>; }
a.default-button5:hover { border-color: <?php echo $main_color; ?>; color: <?php echo $main_color; ?>; }
a.default-button6:hover { border-color: <?php echo $main_color; ?>; color: <?php echo $main_color; ?>; }
.skill .skill_bar .skill_active { background-color: <?php echo $main_color; ?>; }
.widget ul.menu li a:hover, .widget ul li.current-menu-item a, .widget ul li.current-cat a  { color: <?php echo $main_color; ?>; }
.tag-list a:hover { background-color: <?php echo $main_color; ?>; }
#load-more a:hover { background-color: <?php echo $main_color; ?>; }
#totop:hover .topbg { background-color: <?php echo $main_color; ?>; }
.imgoverlay a .overlay { background-color: <?php echo $main_color; ?>; }
#notfound-404 h2 { color: <?php echo $main_color; ?>; }      

.flex-direction-nav li .flex-next:hover { background-color: <?php echo $main_color; ?>; }
.flex-direction-nav li .flex-prev:hover { background-color: <?php echo $main_color; ?>; }
.flex-control-nav li a.flex-active { background-color: <?php echo $main_color; ?>; }
div.jp-play-bar { background-color: <?php echo $main_color; ?>; }
div.jp-volume-bar-value { background-color: <?php echo $main_color; ?>; }
div.jp-type-playlist div.jp-playlist a:hover { color: <?php echo $main_color; ?>; }
div.jp-type-playlist div.jp-playlist a.jp-playlist-current { color: <?php echo $main_color; ?>; }
div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover { color: <?php echo $main_color; ?>; }
div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover{ color: <?php echo $main_color; ?>; }

.tp-leftarrow.default, .tp-rightarrow.default {	background-image: url(../files/images/sprites.png);	}
.tp-rightarrow.default:hover { background-color: <?php echo $main_color; ?>;	}
.tp-leftarrow.default:hover { background-color: <?php echo $main_color; ?>;	}
.tp-bullets.simplebullets.round .bullet.selected {	background-color: <?php echo $main_color; ?>;	}
.tp-caption.yalu-title-big-grey, .tp-caption.yalu-title-big-white, .tp-caption.yalu-title-big-colored, .tp-caption.yalu-title-medium-grey, .tp-caption.yalu-title-medium-white, .tp-caption.yalu-title-medium-colored, .tp-caption.yalu-title-small-grey, .tp-caption.yalu-title-small-white, .tp-caption.yalu-title-small-colored { font-family: <?php echo $headingfont; ?>; }
.tp-caption.yalu-title-big-colored { color: <?php echo $main_color; ?>;	}
.tp-caption.yalu-title-medium-colored { color: <?php echo $main_color; ?>; }
.tp-caption.yalu-title-small-colored { color: <?php echo $main_color; ?>; }
.tp-caption.yalu-title-big-white a, .tp-caption.yalu-title-medium-white a, .tp-caption.yalu-title-small-white a, .tp-caption.yalu-text-white a { color: #ffffff;  }
.tp-caption.yalu-title-big-colored a, .tp-caption.yalu-title-medium-colored a, .tp-caption.yalu-title-small-colored a, .tp-caption.yalu-text-colored a {  color: <?php echo $main_color; ?>; }
.tp-caption a:hover { color: <?php echo $main_color; ?>; }
.tp-caption.yalu-title-big-colored a:hover, .tp-caption.yalu-title-medium-colored a:hover, .tp-caption.yalu-title-small-colored a:hover, .tp-caption.yalu-text-colored a:hover { color: #333333; }

/* CUSTOM CSS (Theme Options) */
<?php echo stripslashes($customcss); ?>