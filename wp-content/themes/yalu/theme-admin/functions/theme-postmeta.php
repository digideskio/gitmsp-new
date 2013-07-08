<?php

/*-----------------------------------------------------------------------------------

	Custom Post/Portfolio Meta boxes

-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Add metaboxes
/*-----------------------------------------------------------------------------------*/

function add_meta_subtitle() {  
    add_meta_box(  
        'meta_subtitle', // $id  
        __('Pagetitle', 'sr_yalu_theme'), // $title  
        'show_meta_subtitle', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority		
}  
add_action('add_meta_boxes', 'add_meta_subtitle');

function add_meta_medias() {  
    add_meta_box(  
        'meta_medias', // $id  
        __('Medias', 'sr_yalu_theme'), // $title  
        'show_meta_medias', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority	
	
	add_meta_box(  
        'meta_medias', // $id  
        __('Medias', 'sr_yalu_theme'), // $title  
        'show_meta_medias', // $callback  
        'portfolio', // $page  
        'normal', // $context  
        'high'); // $priority	
}  
add_action('add_meta_boxes', 'add_meta_medias');

function add_meta_gallery() {  
    add_meta_box(  
        'meta_gallery', // $id  
        __('Gallery', 'sr_yalu_theme'), // $title  
        'show_meta_gallery', // $callback  
        'gallery', // $page  
        'normal', // $context  
        'high'); // $priority	
}  
add_action('add_meta_boxes', 'add_meta_gallery');

function add_meta_video() {  
    add_meta_box(  
        'meta_video', // $id  
        __('Video', 'sr_yalu_theme'), // $title  
        'show_meta_video', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority
	
	add_meta_box(  
        'meta_video_portfolio', // $id  
        __('Selfhosted Video', 'sr_yalu_theme'), // $title  
        'show_meta_video_portfolio', // $callback  
        'portfolio', // $page  
        'normal', // $context  
        'high'); // $priority
	
}  
add_action('add_meta_boxes', 'add_meta_video');

function add_meta_audio() {  
    add_meta_box(  
        'meta_audio', // $id  
        __('Selfhosted Audio', 'sr_yalu_theme'), // $title  
        'show_meta_audio', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority
	
	add_meta_box(  
        'meta_audio_portfolio', // $id  
        __('Selfhosted Audio', 'sr_yalu_theme'), // $title  
        'show_meta_audio_portfolio', // $callback  
        'portfolio', // $page  
        'normal', // $context  
        'high'); // $priority
	
}  
add_action('add_meta_boxes', 'add_meta_audio');

function add_meta_quote() {  
    add_meta_box(  
        'meta_quote', // $id  
        __('Quote', 'sr_yalu_theme'), // $title  
        'show_meta_quote', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority
	
}  
add_action('add_meta_boxes', 'add_meta_quote');

function add_meta_link() {  
    add_meta_box(  
        'meta_link', // $id  
        __('Link', 'sr_yalu_theme'), // $title  
        'show_meta_link', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority
	
}  
add_action('add_meta_boxes', 'add_meta_link');

function add_meta_portfolioinfos() {  
    add_meta_box(  
        'meta_portfolioinfos', // $id  
        __('Portfolio Infos', 'sr_yalu_theme'), // $title  
        'show_meta_portfolioinfos', // $callback  
        'portfolio', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_portfolioinfos');

function add_meta_portfoliostyling() {  
    add_meta_box(  
        'meta_portfoliostyling', // $id  
        __('Portfolio Styling', 'sr_yalu_theme'), // $title  
        'show_meta_portfoliostyling', // $callback  
        'portfolio', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_portfoliostyling');

function add_meta_portfoliocategories() {  
    add_meta_box(  
        'meta_portfoliocategories', // $id  
        __('Portfolio Categories', 'sr_yalu_theme'), // $title  
        'show_meta_portfoliocategories', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_portfoliocategories');

function add_meta_gallerysettings() {  
    add_meta_box(  
        'meta_gallerysettings', // $id  
        __('Gallery Settings', 'sr_yalu_theme'), // $title  
        'show_meta_gallerysettings', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_gallerysettings');

function add_meta_slides() {  
    add_meta_box(  
        'meta_slides', // $id  
        __('Slides', 'sr_yalu_theme'), // $title  
        'show_meta_slides', // $callback  
        'slider', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_slides');

function add_meta_sliderpagesettings() {  
    add_meta_box(  
        'meta_sliderpagesettings', // $id  
        __('Slider Settings', 'sr_yalu_theme'), // $title  
        'show_meta_sliderpagesettings', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_sliderpagesettings');

function add_meta_contact() {  
    add_meta_box(  
        'meta_contact', // $id  
        __('Contact Settings', 'sr_yalu_theme'), // $title  
        'show_meta_contact', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_contact');



/*-----------------------------------------------------------------------------------*/
/*	Define fields
/*-----------------------------------------------------------------------------------*/


/*  REVSLIDER */
$revolutionslider = array();
$revolutionslider[0] = array( "name" => __("No Slider", 'sr_yalu_theme'), "value" => "false");

if(class_exists('RevSlider')){
	
	$slider = new RevSlider();
	$arrSliders = $slider->getArrSliders();
	foreach($arrSliders as $revSlider) { 
		$revolutionslider[] = array( "name" => $revSlider->getTitle(), "value" => $revSlider->getAlias());
	}
}
/*  REVSLIDER */


$sr_prefix = '_sr';  

$sr_meta_subtitle = array(  
	array(  
	    'label' => __("Subtitle", 'sr_yalu_theme'),  
	    'desc'  => __("Enter your subtitle for this page.  Leave it empty if you son't want do show any subtitle.", 'sr_yalu_theme'),  
	    'id'    => $sr_prefix.'_subtitle',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Show Breadcrumb", 'sr_yalu_theme'),
	   	"desc" => __("Do you want to show the breadcrumb?", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_breadcrumb',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Yes", 'sr_yalu_theme'), 
							  	"value" => "true"),
						array(	"name" => __("No", 'sr_yalu_theme'), 
							  	"value"=> "false")
						)
	),
	array(  
		"label" => __("Slider", 'sr_yalu_theme'),
	   	"desc" => __("This will overwrite the pagetitle area", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_slider',  
	    'type'  => 'select'  ,
		'option' => $revolutionslider
	),
	
	
	array(  
		"label" => __("Show Featured Image", 'sr_yalu_theme'),
	   	"desc" => __("This shows the featured image as background image for the pagetitle area; Please select a featured image.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_featuredimage',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("No", 'sr_yalu_theme'), 
							  	"value" => "false"),
						array(	"name" => __("Yes", 'sr_yalu_theme'), 
							  	"value"=> "true")
						)
	),
	array(  
		"label" => __("Title color", 'sr_yalu_theme'),
	   	"desc" => __("This will only apply if featured image is activated.  If you have a dark featured image, choose the light color.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_titlecolor',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Normal", 'sr_yalu_theme'), 
							  	"value" => "normal"),
						array(	"name" => __("Light", 'sr_yalu_theme'), 
							  	"value"=> "light")
						)
	)
 );


$sr_meta_medias = array(  
	array(  
	    'label' => __("Medias / Gallery", 'sr_yalu_theme'),  
	    'desc'  => __("Add images or embedded videos, then drag and drop to arrange them.", 'sr_yalu_theme'),  
	    'id'    => $sr_prefix.'_medias',  
	    'type'  => 'medias'  
	)
 );


$sr_meta_gallery = array(  
	array(  
	    'label' => __("Gallery", 'sr_yalu_theme'),  
	    'desc'  => __("Add the gallery images, then drag and drop to arrange them.", 'sr_yalu_theme'),  
	    'id'    => $sr_prefix.'_gallery',  
	    'type'  => 'gallery'  
	)
 );


$sr_meta_audio = array(  
	array(  
		"label" => __("MP3 File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the mp3 file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_audio_mp3',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_audio_oga',  
	    'type'  => 'text'  
	)
 );


$sr_meta_audio_portfolio = array(  
	array(  
		"label" => __("MP3 File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the mp3 file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_audio_mp3',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_audio_oga',  
	    'type'  => 'text'  
	)
 );


$sr_meta_video = array(  
	array(  
		"label" => __("Embedded Video", 'sr_yalu_theme'),
	   	"desc" => __("Include the embedded iframe.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_video',  
	    'type'  => 'textarea'  
	),
	array(  
		"label" => "",
	   	"desc" => __("Or self hosted video.  Please leave these fields empty if you don't want to show an self hosted video.", 'sr_yalu_theme'),
	    'type'  => 'info'  
	),
	array(  
		"label" => __("M4V File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the M4V file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_video_m4v',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_video_oga',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("WEBMV File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the webmv file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_video_webmv',  
	    'type'  => 'text'  
	)
 );


$sr_meta_video_portfolio = array(  
	array(  
		"label" => __("M4V File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the M4V file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_video_m4v',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_video_oga',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("WEBMV File URL", 'sr_yalu_theme'),
	   	"desc" => __("The url to the webmv file", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_video_webmv',  
	    'type'  => 'text'  
	)
 );


$sr_meta_quote = array(  
	array(  
		"label" => __("Quote", 'sr_yalu_theme'),
	   	"desc" => __("Enter the quote.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_quote',  
	    'type'  => 'textarea'  
	)
 );


$sr_meta_link = array(  
	array(  
		"label" => __("Link", 'sr_yalu_theme'),
	   	"desc" => __("Link url", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_link',  
	    'type'  => 'text'  
	)
 );

$sr_meta_portfolioinfos = array(  
	array(  
		"label" => __("Subtitle", 'sr_yalu_theme'),
	   	"desc" => __("Enter a subtitle for your Portfolio item", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfolio_subtitle',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Client", 'sr_yalu_theme'),
	   	"desc" => __("Enter a client name", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfolio_client',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Date", 'sr_yalu_theme'),
	   	"desc" => __("Enter a date (Ex. January 2013)", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfolio_date',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Link", 'sr_yalu_theme'),
	   	"desc" => __("Link to the a file download or live project. Please use 'http://'", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfolio_link',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Link Name", 'sr_yalu_theme'),
	   	"desc" => __("Name for Link", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfolio_linkname',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Extern Link", 'sr_yalu_theme'),
	   	"desc" => __("When clicking the portfolio item, the page will be redirected to this link.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfolio_externlink',  
	    'type'  => 'text'  
	)
 );



$sr_meta_portfoliostyling = array(  
	array(  
		"label" => __("Style", 'sr_yalu_theme'),
	   	"desc" => __("Choose your style for this Portfolio Item. 'Theme Option Setting' will take the settings of the theme options.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfoliostyle',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Theme Option Setting", 'sr_yalu_theme'), 
								"value" => "default"),
						array(	"name" => __("Left / Right", 'sr_yalu_theme'), 
								"value" => "layout-default"),
						array( 	"name"=> __("Fullwidth", 'sr_yalu_theme'), 
								"value"=> "layout-fullwidth")
						)
	),
	array(  
		"label" => __("Gallery Display", 'sr_yalu_theme'),
	   	"desc" => __("If you choose 'list' the gallery pictures will be displayed underneath instead of a slider. 'Theme Option Setting' will take the settings of the theme options.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfoliodisplay',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Theme Option Setting", 'sr_yalu_theme'), 
								"value" => "default"),
						array(	"name" => __("Slider", 'sr_yalu_theme'), 
								"value"=> "slider"),
						array(	"name" => __("List", 'sr_yalu_theme'), 
								"value"=> "list")
						)
	)
	
 );


$sr_meta_portfoliocategories = array(  
	array(  
		"label" => __("Category", 'sr_yalu_theme'),
	   	"desc" => __("Choose the portfolio category you want to show for this page", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfoliocategories',  
	    'type'  => 'portfoliocategories'  
	),
	array(  
		"label" => __("Show Filter", 'sr_yalu_theme'),
	   	"desc" => __("Do you want to show the Filter? Please don't select 'All' for 'Category' above.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_portfoliofilter',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Yes", 'sr_yalu_theme'), 
							  	"value" => "yes"),
						array(	"name" => __("No", 'sr_yalu_theme'), 
							  	"value"=> "no")
						)
	)
 );


$sr_meta_slides = array(  
	array(  
		 "label" => __("Slides", 'sr_yalu_theme'),
	   	 "desc"  => __("Upload as many slides you want, then drag and drop to arrange them.", 'sr_yalu_theme'),
         'id'    => $sr_prefix.'_slides',  
         'type'  => 'sortable',
		 'options' => array( 
							array( "element" => "slide", "name" => __('Slide', 'sr_yalu_theme'), "fields" => array(
								array(	"name" 	=> __('Title', 'sr_yalu_theme'),
										"id"	=> 'title',
										"type"	=> 'text' ),
								array(	"name" 	=> __('Image', 'sr_yalu_theme'),
										"id"	=> 'image',
										"type"	=> 'singleimage' ),
								array(	"name" 	=> __('Caption', 'sr_yalu_theme'),
										"id"	=> 'caption',
										"type"	=> 'textarea' ),
								array(	"name" 	=> __('Placing Caption', 'sr_yalu_theme'),
										"id"	=> 'placingcaption',
										"type"	=> 'select',
										"options" => array( 
														array(	"name" => __("Top Left", 'sr_yalu_theme'), 
																"value" => "caption-top-left"),
														array(	"name" => __("Top Center", 'sr_yalu_theme'), 
																"value" => "caption-top-center"),
														array(	"name" => __("Top Right", 'sr_yalu_theme'), 
																"value" => "caption-top-right"),
														array(	"name" => __("Center Center", 'sr_yalu_theme'), 
																"value" => "caption-center-center"),
														array(	"name" => __("Bottom Left", 'sr_yalu_theme'), 
																"value" => "caption-bottom-left"),
														array(	"name" => __("Bottom Center", 'sr_yalu_theme'), 
																"value" => "caption-bottom-center"),
														array(	"name" => __("Bottom Right", 'sr_yalu_theme'), 
																"value" => "caption-bottom-right")
														)
										),
								array(	"name" 	=> __('Align Caption', 'sr_yalu_theme'),
										"id"	=> 'aligncaption',
										"type"	=> 'select',
										"options" => array( 
														array(	"name" => __("Left", 'sr_yalu_theme'), 
																"value" => "caption-align-left"),
														array(	"name" => __("Right", 'sr_yalu_theme'), 
																"value" => "caption-align-right"),
														array(	"name" => __("Center", 'sr_yalu_theme'), 
																"value" => "caption-align-center"),
														)
										),
								array(	"name" 	=> __('Link', 'sr_yalu_theme'),
										"id"	=> 'link',
										"type"	=> 'text' )
								)
							),
		 
		 					array( "element" => "video", "name" => __('Video', 'sr_yalu_theme'), "fields" => array(
								array(	"name" 	=> __('Title', 'sr_yalu_theme'),
										"id"	=> 'title',
										"type"	=> 'text' ),
								array(	"name" 	=> __('Video code', 'sr_yalu_theme'),
										"id"	=> 'videocode',
										"type"	=> 'textarea' )
								)
							))
     )
 );

$sr_meta_slidersettings = array(  
	array(  
		"label" => __("Adapt Slides", 'sr_yalu_theme'),
	   	"desc" => __("Do you want the slides to adapt automatically to the slider height/width?", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_slideradapt',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("True", 'sr_yalu_theme'), 
							  	"value" => "true"),
						array(	"name" => __("False", 'sr_yalu_theme'), 
							  	"value"=> "false")
						)
	),
	array(  
		"label" => __("Auto Start", 'sr_yalu_theme'),
	   	"desc" => __("Select true if you want the slider to start automatically on page loading.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_slideraustostart',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("True", 'sr_yalu_theme'), 
							  	"value" => "true"),
						array(	"name" => __("False", 'sr_yalu_theme'), 
							  	"value"=> "false")
						)
	),
	array(  
		"label" => __("Direction Nav", 'sr_yalu_theme'),
	   	"desc" => __("Select true to enable the next/previous arrows.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_sliderdirectionnav',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("True", 'sr_yalu_theme'), 
							  	"value" => "true"),
						array(	"name" => __("False", 'sr_yalu_theme'), 
							  	"value"=> "false")
						)
	),
	array(  
		"label" => __("Control Nav", 'sr_yalu_theme'),
	   	"desc" => __("Select true to enable the control navigation.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_slidercontrolnav',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("False", 'sr_yalu_theme'), 
							  	"value"=> "false"),
						array(	"name" => __("True", 'sr_yalu_theme'), 
							  	"value" => "true")
						)
	),
	array(  
		"label" => __("Smooth Height", 'sr_yalu_theme'),
	   	"desc" => __("Select true to enable the smooth transition between slides of different heights.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_slidersmoothheight',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("False", 'sr_yalu_theme'), 
							  	"value"=> "false"),
						array(	"name" => __("True", 'sr_yalu_theme'), 
							  	"value" => "true")
						)
	),
	array(  
		"label" => __("Randomize", 'sr_yalu_theme'),
	   	"desc" => __("Enable the random display of the different slides", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_sliderrandomize',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("False", 'sr_yalu_theme'), 
							  	"value"=> "false"),
						array(	"name" => __("True", 'sr_yalu_theme'), 
							  	"value" => "true")
						)
	),
	array(  
		"label" => __("Slideshow Speed", 'sr_yalu_theme'),
	   	"desc" => __("Set the interval time between the slides, in milliseconds.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_sliderspeed',  
	    'type'  => 'text'
	),
	array(  
		"label" => __("Animation Duration", 'sr_yalu_theme'),
	   	"desc" => __("Set the animation speed, in milliseconds.", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_slideranimationspeed',  
	    'type'  => 'text'
	)
 );


$sr_meta_sliderpagesettings = array(  
	array(  
		"label" => __("Display Content", 'sr_yalu_theme'),
	   	"desc" => __("Do youw ant to display the content of the editor below the slider?", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_sliderpagesettings_content',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("No", 'sr_yalu_theme'), 
							  	"value" => "0"),
						array(	"name" => __("Yes", 'sr_yalu_theme'), 
							  	"value"=> "1")
						)
	),
	array(  
		"label" => __("Slider", 'sr_yalu_theme'),
	   	"desc" => __("Choose the slider you want to show for this page", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_sliderpagesettings_slider',  
	    'type'  => 'slider_post'  
	)
 );

$sr_meta_contact = array(  
	array(  
		"label" => "",
	   	"desc" => __("Leave these fields empty if ou don't want to show the google map in fullwidth.  It will replace the pagetitle area.", 'sr_yalu_theme'),
	    'id'    => "",  
	    'type'  => 'info'  
	),
	array(  
		"label" => __("Google Map Latitude & Longitude", 'sr_yalu_theme'),
	   	"desc" => __("Enter the google map latitude & longitude using this tool:<br>http://itouchmap.com/latlong.html", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_contact_latlong',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Google Map Infotext", 'sr_yalu_theme'),
	   	"desc" => __("This Text will be displayed on the Google Map", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_contact_info',  
	    'type'  => 'textarea'  
	),
	array(  
		"label" => __("Google Map Pin Icon", 'sr_yalu_theme'),
	   	"desc" => __("Enter the url to your pin icon", 'sr_yalu_theme'),
	    'id'    => $sr_prefix.'_contact_icon',  
	    'type'  => 'text'  
	),
 );



/*-----------------------------------------------------------------------------------*/
/*	Callback Show fields
/*-----------------------------------------------------------------------------------*/

function show_meta_medias() {  
 	global $sr_meta_medias, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_medias_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_medias);  
}


function show_meta_subtitle() {  
 	global $sr_meta_subtitle, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_subtitle_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_subtitle);  
}


function show_meta_gallery() {  
 	global $sr_meta_gallery, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_gallery_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_gallery);  
}


function show_meta_audio() {  
 	global $sr_meta_audio, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_audio_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
	show_fields($sr_meta_audio);  
}


function show_meta_audio_portfolio() {  
 	global $sr_meta_audio_portfolio, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_audio_portfolio_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
	show_fields($sr_meta_audio_portfolio);  
}


function show_meta_video() {  
 	global $sr_meta_video, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_video_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_video);  
}

function show_meta_video_portfolio() {  
 	global $sr_meta_video_portfolio, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_video_portfolio_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_video_portfolio);  
}


function show_meta_quote() {  
 	global $sr_meta_quote, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_quote_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_quote);  
}


function show_meta_link() {  
 	global $sr_meta_link, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_link_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_link);  
}


function show_meta_portfolioinfos() {  
 	global $sr_meta_portfolioinfos, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_portfolioinfos_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_portfolioinfos);  
}


function show_meta_portfoliostyling() {  
 	global $sr_meta_portfoliostyling, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_portfoliostyling_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_portfoliostyling);  
}


function show_meta_portfoliocategories() {  
 	global $sr_meta_portfoliocategories, $post;
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_portfoliocategories_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_portfoliocategories);  
}

function show_meta_slides() {  
 	global $sr_meta_slides, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_slides_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_slides);  
}

function show_meta_slidersettings() {  
 	global $sr_meta_slidersettings, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_slidersettings_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_slidersettings);  
}

function show_meta_sliderpagesettings() {  
 	global $sr_meta_sliderpagesettings, $post;
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_sliderpagesettings_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_sliderpagesettings);  
}

function show_meta_contact() {  
 	global $sr_meta_contact, $post;
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_contact_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_contact);  
}



/*-----------------------------------------------------------------------------------*/
/*	Show fields
/*-----------------------------------------------------------------------------------*/
function show_fields($a) {
 	global $post; 
	
	// Begin the field table and loop  
    echo '<table class="form-table">';  
    foreach ($a as $field) {  
		
		if ($field['type'] == 'info') {
			echo '<tr><th></th><td><br>------------------------<br><b>'.$field['desc'].'</b><br>------------------------</td></tr>';
		} else {
			
    	// get value of this field if it exists for this post  
    	$meta = get_post_meta($post->ID, $field['id'], true);  
    	// begin a table row with  
    	echo '<tr> 
    			<th><label for="'.$field['id'].'"><b>'.$field['label'].'</b></label><br /><span class="sr_description">'.$field['desc'].'</span></th> 
    			<td>';  
    			switch($field['type']) {  
                    					
					// text
    				case 'text':  
						echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />';  
					break;
					
					// textarea
					case 'textarea':  
					    echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>';  
					break;
										
					// select
					case 'select':  
					    echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
						$i = 0;
						foreach ($field['option'] as $var) {
							if ($meta == $var['value']) { $selected = 'selected="selected"'; } else { if ($meta == '' && $i == 0) { $selected = 'selected="selected"'; } else { $selected = '';  } }
							echo '<option value="'.$var['value'].'" '.$selected.' /> '.$var['name'].'</div>';
						$i++;	
						}			  
						echo '</select>';   
					break;
					
					// portfoliocategories
					case 'portfoliocategories':  
						$categories = get_terms( 'portfolio_category');
						 
					    echo '<select name="'.$field['id'].'[]" id="'.$field['id'].'" size="5" multiple>';
					    if ($meta[0] == 'all' || $meta[0] == '') { echo '<option value="" selected="selected">All</option>'; } 
						else { echo '<option value="">All</option>'; }
						$i = 0;
						foreach ($categories as $cat) {
							$selected = '';
							foreach ($meta as $m) { if ($m == $cat->slug) { $selected = 'selected="selected"'; } }
							echo '<option value="'.$cat->slug.'" '.$selected.'>'.$cat->name.'</option>';
						$i++;	
						}			  
						echo '</select>';   
					break;
					
					//gallery_post
					case "gallery_post":
						echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
							  $gal = get_posts( array('post_type' => 'gallery') );
							  foreach ( $gal as $g ) {
								if ($g->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
								$option = '<option value="' . $g->ID . '" '.$active.'>';
								$option .= $g->post_title;
								$option .= '</option>';
								echo $option;
							  }
						echo '</select>';
					break;
					
					//slider_post
					case "slider_post":
						echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
							  $gal = get_posts( array('post_type' => 'slider') );
							  foreach ( $gal as $g ) {
								if ($g->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
								$option = '<option value="' . $g->ID . '" '.$active.'>';
								$option .= $g->post_title;
								$option .= '</option>';
								echo $option;
							  }
						echo '</select>';
					break;
					
					// gallery  
					case 'gallery':  
						echo '<div id="sortable-medias">';
						echo '	<input class="add_image button" type="button" value="'.__("Add Images", 'sr_yalu_theme').'" />
								<textarea name="'.$field['id'].'" style="display: none;" class="media-value">'.$meta.'</textarea>';
						echo '<ul id="sortable" class="media-elements">';		
					    if ($meta) {
							$meta = explode('|||', $meta);
					        foreach($meta as $row) {
								$object = explode('~~', $row);
								$type = $object[0];
								$val = $object[1];
								if ($type == 'image') {
									$image = wp_get_attachment_image_src($val, 'thumbnail'); $image = $image[0];
									echo '<li class="ui-state-default" title="image"><img src="'.$image.'" class="'.$val.'"><div class="delete"><span></span></div></li>';
								} else if ($type == 'video') {
									echo '<li class="ui-state-default" title="video"><div class="move">move</div><textarea name="videovalue">'.$val.'</textarea><div class="delete"><span></span></div></li>';
								}
					        }  
					    }  
					    echo '</ul>';
						echo '</div>';				
					break;
					
					// medias  
					case 'medias':
						echo '<div id="sortable-medias">';
						echo '	<input class="add_image button" type="button" value="'.__("Add Images", 'sr_yalu_theme').'" /> 
								<input class="add_video button" type="button" value="'.__("Add Video", 'sr_yalu_theme').'" />
								<textarea name="'.$field['id'].'" style="display: none;" class="media-value">'.$meta.'</textarea>';
						echo '<ul id="sortable" class="media-elements">';		
					    if ($meta) {
							$meta = explode('|||', $meta);
					        foreach($meta as $row) {
								$object = explode('~~', $row);
								$type = $object[0];
								$val = $object[1];
								if ($type == 'image') {
									$image = wp_get_attachment_image_src($val, 'thumbnail'); $image = $image[0];
									echo '<li class="ui-state-default" title="image"><img src="'.$image.'" class="'.$val.'"><div class="delete"><span></span></div></li>';
								} else if ($type == 'video') {
									echo '<li class="ui-state-default" title="video"><div class="move">move</div><textarea name="videovalue">'.$val.'</textarea><div class="delete"><span></span></div></li>';
								}
					        }  
					    }  
					    echo '</ul>';
						echo '</div>';
					break;
					
					// sortable
    				case 'sortable':
						echo '<div id="sortable-elements">';
						
						// Create the selectbox + Count + Hiddenfield
						$hiddenfields = '';
						$elements = '';
						$count = 0;
						foreach ($field['options'] as $option) {
							$hiddenfields .= '<div class="'.$option['element'].'">
												<li class="ui-state-default" title="'.$option['element'].'">
												<div class="edit"><span></span></div><div class="move">'.$option['name'].' ()</div><div class="delete"><span></span></div>
												<div class="editcontent">';
							foreach ($option['fields'] as $f) {
								switch($f['type']) { 
									case 'text':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
											<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value=""></div>
										</div>';
									break;
									case 'textarea':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
											<div class="rowvalue"><textarea name="'.$f['id'].'" class="'.$f['id'].'"></textarea></div>
										</div>';
									break;
									case 'singleimage':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
											<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value="">
												<input type="button" name="add-singleimage" class="add_singleimage" value="'.__('Add Image', 'sr_yalu_theme').'"></div>
										</div>';
									break;
									case 'select':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
										$hiddenfields .= '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">';	
										$y = 0;
										foreach ($f['options'] as $var) {
											$hiddenfields .= '<option value="'.$var['value'].'" /> '.$var['name'].'</div>';
										$y++;	
										}			  
										$hiddenfields .= '</select></div></div>';   
									break;
									case 'sliderselect':  
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
										$hiddenfields .= '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">
												<option value="no">'.__("Select Slider", 'sr_yalu_theme').' ...</option>';
										  $pages = get_posts( array( 'post_type' => 'slider' ) ); 
										  foreach ( $pages as $page ) {
											$hiddenfields .= '<option value="' . $page->ID . '">'.$page->post_title.'</option>';
										  }
										$hiddenfields .= '</select></div></div>';   
									break;
								} # END switch $f
							}					
							$hiddenfields .= '</div>
												</li>
											</div>';
							
							$elements .= '<option value="'.$option['element'].'">'.$option['name'].'</option>';
							$count++;
							}
						if ($count > 1) { $elements = '<select name="element-sortable" class="element-sortable">'.$elements.'</select>'; }
						else { $elements = '<select name="element-sortable" class="element-sortable" style="display:none;">'.$elements.'</select>'; }
						// END	
						
						// display the saved values
						$values = explode('|||', $meta);
						echo '<ul id="sortable" class="visual-elements visual-slides">';
						foreach ($values as $v) {
							$item = explode('|', $v);
							
							foreach ($field['options'] as $option) {
								if ($option['element'] == $item[0]) {
									$value = explode('~~', $item[1]);
									
									echo '<li class="ui-state-default" title="'.$option['element'].'"><div class="edit"><span></span></div><div class="move">'.$option['name'].' ('.$value[0].')</div><div class="delete"><span></span></div>';
									echo '<div class="editcontent">';
									
									$i = 0;
									foreach ($option['fields'] as $f) {
										switch($f['type']) { 
											case 'text':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
													<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value="'.$value[$i].'"></div>
												</div>';
											break;
											case 'textarea':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
													<div class="rowvalue"><textarea name="'.$f['id'].'" class="'.$f['id'].'">'.$value[$i].'</textarea></div>
												</div>';
											break;
											case 'singleimage':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
													<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value="'.$value[$i].'">
														<input type="button" name="add-singleimage" class="add_singleimage" value="'.__('Add Image', 'sr_yalu_theme').'"></div>
												</div>';
											break;
											case 'select':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
												echo '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">';	
												$y = 0;
												foreach ($f['options'] as $var) {
													if ($value[$i] == $var['value']) { $selected = 'selected="selected"'; 
													} else { if ($value[$i] == '' && $y == 0) { $selected = 'selected="selected"'; } else { $selected = '';  } }
													echo '<option value="'.$var['value'].'" '.$selected.' /> '.$var['name'].'</div>';
												$y++;	
												}			  
												echo '</select></div></div>';   
											break;
											case 'sliderselect':  
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
												echo '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">
														<option value="no">'.__("Select Slider", 'sr_yalu_theme').' ...</option>';
												  $pages = get_posts( array( 'post_type' => 'slider' ) ); 
												  foreach ( $pages as $page ) {
													if ($page->ID == $value[$i]) { $active = 'selected="selected"'; }  else { $active = ''; } 
													$option = '<option value="' . $page->ID . '" '.$active.'>';
													$option .= $page->post_title;
													$option .= '</option>';
													echo $option;
												  }
												echo '</select></div></div>';   
											break;
										} # END switch $f
										$i++;	
									}
									echo '</div></li>';
								}	
							}
						}
						echo '</ul>';
						// END
						
						echo '	<input type="button" name="add-element" class="add-element add-slide" value="'.__('Add Item', 'sr_yalu_theme').'"/>
								'.$elements.'
								<textarea name="'.$field['id'].'" id="'.$field['id'].'" class="value-elements value-slides">'.$meta.'</textarea>';
						
						// HIDDEN ELEMENTS FOR JS
						echo '<div id="hiddenelements" style="display: none;">'.$hiddenfields.'</div>';
						
						echo '</div>';
					break;
					
					
					 
                 } //end switch  
    	 echo '</td></tr>';  
		} // END if info
	} // end foreach  
	echo '</table>'; // end table
}



/*-----------------------------------------------------------------------------------*/
/*	Save Datas
/*-----------------------------------------------------------------------------------*/

function save_meta_subtitle($post_id) {  
    global $sr_meta_subtitle;  
  
    // verify nonce  
    if (!isset($_POST['meta_subtitle_nonce']) || !wp_verify_nonce($_POST['meta_subtitle_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_subtitle as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_subtitle');


function save_meta_medias($post_id) {  
    global $sr_meta_medias;  
  
    // verify nonce  
    if (!isset($_POST['meta_medias_nonce']) || !wp_verify_nonce($_POST['meta_medias_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_medias as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_medias');


function save_meta_gallery($post_id) {  
    global $sr_meta_gallery;  
  
    // verify nonce  
    if (!isset($_POST['meta_gallery_nonce']) || !wp_verify_nonce($_POST['meta_gallery_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_gallery as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_gallery');



function save_meta_audio($post_id) {  
    global $sr_meta_audio;  
  
    // verify nonce  
    if (!isset($_POST['meta_audio_nonce']) || !wp_verify_nonce($_POST['meta_audio_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_audio as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_audio');



function save_meta_audio_portfolio($post_id) {  
    global $sr_meta_audio_portfolio;  
  
    // verify nonce  
    if (!isset($_POST['meta_audio_portfolio_nonce']) || !wp_verify_nonce($_POST['meta_audio_portfolio_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_audio_portfolio as $field) {  
        if ($field['type'] !== 'info') {
		$old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        } 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_audio_portfolio');



function save_meta_video($post_id) {  
    global $sr_meta_video;  
  
    // verify nonce  
    if (!isset($_POST['meta_video_nonce']) || !wp_verify_nonce($_POST['meta_video_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_video as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_video');



function save_meta_video_portfolio($post_id) {  
    global $sr_meta_video_portfolio;  
  
    // verify nonce  
    if (!isset($_POST['meta_video_portfolio_nonce']) || !wp_verify_nonce($_POST['meta_video_portfolio_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_video_portfolio as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_video_portfolio');



function save_meta_quote($post_id) {  
    global $sr_meta_quote;  
  
    // verify nonce  
    if (!isset($_POST['meta_quote_nonce']) || !wp_verify_nonce($_POST['meta_quote_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_quote as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_quote');



function save_meta_link($post_id) {  
    global $sr_meta_link;  
  
    // verify nonce  
    if (!isset($_POST['meta_link_nonce']) || !wp_verify_nonce($_POST['meta_link_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_link as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_link');



function save_meta_portfolioinfos($post_id) {  
    global $sr_meta_portfolioinfos;  
  
    // verify nonce  
    if (!isset($_POST['meta_portfolioinfos_nonce']) || !wp_verify_nonce($_POST['meta_portfolioinfos_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_portfolioinfos as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_portfolioinfos');


function save_meta_portfoliostyling($post_id) {  
    global $sr_meta_portfoliostyling;  
  
    // verify nonce  
    if (!isset($_POST['meta_portfoliostyling_nonce']) || !wp_verify_nonce($_POST['meta_portfoliostyling_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_portfoliostyling as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_portfoliostyling');


function save_meta_portfoliocategories($post_id) {  
    global $sr_meta_portfoliocategories;  
  
    // verify nonce  
    if (!isset($_POST['meta_portfoliocategories_nonce']) || !wp_verify_nonce($_POST['meta_portfoliocategories_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_portfoliocategories as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
		if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_portfoliocategories');


function save_meta_slides($post_id) {  
    global $sr_meta_slides;  
  
    // verify nonce  
    if (!isset($_POST['meta_slides_nonce']) || !wp_verify_nonce($_POST['meta_slides_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_slides as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
		if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_slides');

function save_meta_slidersettings($post_id) {  
    global $sr_meta_slidersettings;  
  
    // verify nonce  
    if (!isset($_POST['meta_slidersettings_nonce']) || !wp_verify_nonce($_POST['meta_slidersettings_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_slidersettings as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
		if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_slidersettings');


function save_meta_sliderpagesettings($post_id) {  
    global $sr_meta_sliderpagesettings;  
  
    // verify nonce  
    if (!isset($_POST['meta_sliderpagesettings_nonce']) || !wp_verify_nonce($_POST['meta_sliderpagesettings_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
   // loop through fields and save the data  
    foreach ($sr_meta_sliderpagesettings as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}  
		}
    } // end foreach   
}  
add_action('save_post', 'save_meta_sliderpagesettings');


function save_meta_contact($post_id) {  
    global $sr_meta_contact;  
  
    // verify nonce  
    if (!isset($_POST['meta_contact_nonce']) || !wp_verify_nonce($_POST['meta_contact_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
   // loop through fields and save the data  
    foreach ($sr_meta_contact as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}
    } // end foreach   
}  
add_action('save_post', 'save_meta_contact');



/*-----------------------------------------------------------------------------------*/
/*	Register and load function javascript
/*-----------------------------------------------------------------------------------*/

if( !function_exists( 'sr_admin_meta_js' ) ) {
    function sr_admin_meta_js($hook) {
		global $pagenow;

		wp_register_script('functions-script', get_template_directory_uri() . '/theme-admin/functions/js/functions_script.js', 'jquery');
		wp_enqueue_script('functions-script');
		
		if ( 
			(isset($_GET['post']) && (isset($_GET['action']) && $_GET['action'] == 'edit') && (get_post_type( $_GET['post'] )  == 'post' || get_post_type( $_GET['post'] )  == 'page') )
			|| ($pagenow == 'post-new.php' && !isset($_GET['post_type'])) ) {
			wp_register_script('customfields-script', get_template_directory_uri() . '/theme-admin/functions/js/customfields_script.js', 'jquery');
			wp_enqueue_script('customfields-script');
		}
		
		wp_register_style('functions-style', get_template_directory_uri() . '/theme-admin/functions/css/functions.css');
		wp_enqueue_style('functions-style');
    }
    
    add_action('admin_enqueue_scripts','sr_admin_meta_js',10,1);
}


?>