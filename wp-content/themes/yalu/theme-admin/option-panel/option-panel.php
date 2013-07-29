<?php


/*-----------------------------------------------------------------------------------

	Option Page

-----------------------------------------------------------------------------------*/

$sr_themename = "Yalu";
global $sr_prefix;



/*-----------------------------------------------------------------------------------*/
/*	Sections & Options
/*-----------------------------------------------------------------------------------*/
$sr_sections = array (
	
	array( "name" => __("General", 'sr_yalu_theme'),
		   "class" => "general",
		   "href" => "general"
		  ),
	
	array( "name" => __("Styling", 'sr_yalu_theme'),
		   "class" => "styling",
		   "href" => "styling"
		  ),
	
	array( "name" => __("Blog", 'sr_yalu_theme'),
		   "class" => "blog",
		   "href" => "blog"
		  ),
	
	array( "name" => __("Portfolio", 'sr_yalu_theme'),
		   "class" => "portfolio",
		   "href" => "portfolio"
		  ),
	
	array( "name" => __("Social", 'sr_yalu_theme'),
		   "class" => "social",
		   "href" => "social"
		  ),
	
	array( "name" => __("Typography", 'sr_yalu_theme'),
		   "class" => "typography",
		   "href" => "typography"
		  ),
	
	array( "name" => __("Comments", 'sr_yalu_theme'),
		   "class" => "comments",
		   "href" => "comments"
		  )
	
);

$sr_options = array(
	
	array( "name" => __("General", 'sr_yalu_theme'),
		   "id" => "general",
		   "type" => "sectionstart",
		   "desc" => ""
		  ),
			
			array( "label" => __("Branding", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_general_branding",
				   "type" => "groupstart"
				  ),
	
				array( "label" => __("Logo", 'sr_yalu_theme'),
					   "desc" => __("Add a Custom Logo from your Media Library", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_logo",
					   "type" => "image"
					  ),
				
				array( "label" => __("Favicon", 'sr_yalu_theme'),
					   "desc" => __("Add a 16px x 16px Png/Gif image that will represent your website's favicon.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_favicon",
					   "type" => "image"
					  ),
				
				array( "label" => __("Custom Login Logo", 'sr_yalu_theme'),
					   "desc" => __("Add a custom logo for the Wordpress login screen.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_loginlogo",
					   "type" => "image"
					  ),
				
			array( "label" => "Branding END",
				   "id" => $sr_prefix."_general_branding",
				   "type" => "groupend"
				  ),
			
			array( "label" => __("Top Bar", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_topbar",
				   "type" => "groupstart"
				  ),
			
				array( "label" => __("Top bar info", 'sr_yalu_theme'),
					   "desc" => __("Use some basic HTML (b, i, span) to style your Text", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_topbar_info",
					   "type" => "text",
					   "default" => "Contact us: <span class=\"phone-highlight\">612 749 4804</span>"
					  ),
				
				array( "label" => __("Activate Social Links", 'sr_yalu_theme'),
					   "desc" => __("This activates the social links in the top right area. Configure Icons in Social Media.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_socialdisable",
					   "type" => "checkbox",
					  ),
				
			array( "label" => "Top Bar END",
				   "id" => $sr_prefix."_topbar",
				   "type" => "groupend"
				  ),
			
			array( "label" => __("Footer", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_general_footer",
				   "type" => "groupstart"
				  ),
			
				array( "label" => __("Back To Top", 'sr_yalu_theme'),
					   "desc" => __("Display the back to top button", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_disablebacktotop",
					   "type" => "checkbox",
					  ),
						
				array( "label" => __("Copyright Left", 'sr_yalu_theme'),
					   "desc" => __("Left side for copyright", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_copyright_left",
					   "type" => "text"
					  ),
				
				array( "label" => __("Copyright Right", 'sr_yalu_theme'),
					   "desc" => __("Right side for copyright", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_copyright_right",
					   "type" => "text"
					  ),
								
				array( "label" => __("Tracking Code", 'sr_yalu_theme'),
					   "desc" => __("Paste your Google analytics (or other) code here.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_analytics",
					   "type" => "textarea"
					  ),
				
			array( "label" => "Footer END",
				   "id" => $sr_prefix."_general_footer",
				   "type" => "groupend"
				  ),
	
	array ( "type" => "sectionend",
		   	"id" => "sectionend"),
	
	
	
	array( "name" => __("Styling", 'sr_yalu_theme'),
		   "id" => "styling",
		   "type" => "sectionstart",
		   "desc" => ""
		  ),
		
			array( "label" => __("Layout", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_styling_layout",
				   "type" => "groupstart"
				  ),
			
				array( "label" => __("Responsive Layout", 'sr_yalu_theme'),
					   "desc" => __("This activates the responsive layout for mobile devices.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_responsive",
					   "type" => "checkbox",
					  ),
				
				array( "label" => __("Main Color", 'sr_yalu_theme'),
					   "desc" => __("Select your color", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_customcolor",
					   "type" => "color",
					   "default" => "#1e7987"
					  ),
							
			array( "label" => __("Layout", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_styling_layout",
				   "type" => "groupend"
				  ),
			
			array( "label" => __("Custom", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_styling_custom",
				   "type" => "groupstart"
				  ),
			
				array( "label" => __("Custom CSS", 'sr_yalu_theme'),
					   "desc" => __("Write your own CSS-Code.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_customcss",
					   "type" => "textarea"
					  ),
			
			array( "label" => __("Custom", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_styling_custom",
				   "type" => "groupend"
				  ),
			
				
	array ( "type" => "sectionend" ,
		   	"id" => "sectionend"),

	
	
	
	array( "name" => __("Blog", 'sr_yalu_theme'),
		   "id" => "blog",
		   "type" => "sectionstart",
		   "desc" => ""
		  ),
	
			array( "label" => __("Entries", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_blogentriesgroup",
				   "type" => "groupstart"
				  ),
											
				array( "label" => __("Excerpt length", 'sr_yalu_theme'),
					   "desc" => __("Add your own custom blog excerpt length.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogentriesexcerpt",
					   "type" => "text",
					   "default" => "50"
					  ),
				
				array( "label" => __("Read More Button", 'sr_yalu_theme'),
					   "desc" => __("Enable or disable the read more button on blog entries.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogentriesreadmore",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Display", 'sr_yalu_theme'),
					   "desc" => __("Select a display option.", 'sr_yalu_theme').'',
					   "id" => $sr_prefix."_blogentriesdisplay",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Post Format", 'sr_yalu_theme'), 
									"value"=> "postformat"),		 
							array(	"name" => __("Featured Image", 'sr_yalu_theme'), 
									"value" => "featuredimage")
							),
					   "default" => "postformat"
					  ),
				
				array( "label" => __("Sidebar", 'sr_yalu_theme'),
					   "desc" => __("Where should the sidebar float", 'sr_yalu_theme').'',
					   "id" => $sr_prefix."_blogentriessidebar",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Right", 'sr_yalu_theme'), 
									"value"=> "right"),		 
							array(	"name" => __("Left", 'sr_yalu_theme'), 
									"value" => "left")
							),
					   "default" => "right"
					  ),
																
			array( "label" => "Entries END",
				   "id" => $sr_prefix."_blogentriesgroup",
				   "type" => "groupend"
				  ),
			
			array( "label" => __("Posts (Single)", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_blogpostsgroup",
				   "type" => "groupstart"
				  ),
			
				array( "label" => __("Show Date", 'sr_yalu_theme'),
					   "desc" => __("Shows the post Date.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisabledate",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Post Type", 'sr_yalu_theme'),
					   "desc" => __("Do you want to show the post type icon? (Audio, Video, Gallery,...).", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisabletype",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Category", 'sr_yalu_theme'),
					   "desc" => __("Shows the categories.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisablecategory",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Author Name", 'sr_yalu_theme'),
					   "desc" => __("Shows the author of the post.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisableauthor",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Views count", 'sr_yalu_theme'),
					   "desc" => __("Activate and shows the views count for all posts.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisableviews",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Activate Likes count", 'sr_yalu_theme'),
				   	   "desc" => __("Activate the  build-in Like feature for your blog posts", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisablelikes",
					   "type" => "checkbox"
					  ),
								
				array( "label" => __("Tags", 'sr_yalu_theme'),
					   "desc" => __("Shows the related tags at the bottom of the post", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisabletags",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Share", 'sr_yalu_theme'),
					   "desc" => __("Activate the Share button for the posts. (Facebook, Twitter, Google, Pinterest).", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisableshare",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Author Info", 'sr_yalu_theme'),
					   "desc" => __("Shows the author description at the bottom of the post", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisableauthorinfo",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Pagination", 'sr_yalu_theme'),
					   "desc" => __("Activate the pagination Next/Previous for the Post detail page", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisablepagination",
					   "type" => "checkbox"
					  ),
																				
				array( "label" => __("Fancybox", 'sr_yalu_theme'),
					   "desc" => __("Activate Fancybox for the gallery posts", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisablefancybox",
					   "type" => "checkbox"
					  ),
								
				array( "label" => __("Display Gallery format", 'sr_yalu_theme'),
					   "desc" => __("If you choose 'list' the gallery pictures will be displayed underneath instead of a slider", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostgallerydisplay",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Slider", 'sr_yalu_theme'), 
									"value"=> "slider"),
							array(	"name" => __("List", 'sr_yalu_theme'), 
									"value"=> "list")
							),
					   "default" => "slider"
					  ),
				
				array( "label" => __("Show Media Caption Text", 'sr_yalu_theme'),
				   	   "desc" => __("The caption text you've entered for the media will be shown", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_blogpostsdisablecaption",
					   "type" => "checkbox"
					  ),
									  
				array( "label" => __("Reset Views/Likes", 'sr_yalu_theme'),
					   "desc" => "<b>".__("ATTENTION: This resets all views/likes to 0 for all posts.", 'sr_yalu_theme')."</b>",
					   "id" => $sr_prefix."_blogreset",
					   "type" => "reset"
					  ),
														
			array( "label" => "Posts END",
				   "id" => $sr_prefix."_blogpostsgroup",
				   "type" => "groupend"
				  ),
	
	array ( "type" => "sectionend",
		   	"id" => "sectionend"),
	
	
	array( "name" => __("Portfolio", 'sr_yalu_theme'),
		   "id" => "portfolio",
		   "type" => "sectionstart",
		   "desc" => ""
		  ),
	
			array( "label" => __("Portfolio Page", 'sr_yalu_theme'),
				   "desc" => __("Please choose the main portfolio page which uses the portfolio template.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_portfoliopage",
				   "type" => "pagelist"
				  ),
				
			array( "label" => __("Portfolio Grid", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_portfolio-grid",
				   "type" => "groupstart"
				  ),
						
				array( "label" => __("Crop Images", 'sr_yalu_theme'),
				   	   "desc" => __("This crops the portfolio thumbnails to the same sizes.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliocrop",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Infos", 'sr_yalu_theme'),
				   	   "desc" => __("This shows the Project information below the thumbnail picture.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfolioinfos",
					   "type" => "checkbox"
					  ),
				
				
				array( "label" => __("Count", 'sr_yalu_theme'),
				   	   "desc" => __("Enter a valid number. Leave Empty if youw ant to show all items. <b>Enter -1 for show all items.</b>", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliocount",
					   "type" => "text"
					  ),
				
				array( "label" => __("Columns", 'sr_yalu_theme'),
					   "desc" => __("Select the column amount.", 'sr_yalu_theme').'',
					   "id" => $sr_prefix."_portfoliocolumns",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => "2",	 
									"value" => "2"),		 
							array(	"name" => "3",	 
									"value" => "3"),
							array(	"name" => "4",	 
									"value" => "4")
							),
					   "default" => "3"
					  ),
				
				array( "label" => __("Pagination", 'sr_yalu_theme'),
					   "desc" => __("Choose", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliopagination",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Load More", 'sr_yalu_theme'), 
									"value"=> "loadmore"),
							array(	"name" => __("Standard (Arrows)", 'sr_yalu_theme'), 
									"value"=> "default"),
							array(	"name" => __("Hide Pagination", 'sr_yalu_theme'), 
									"value"=> "hide")
							),
					   "default" => "loadmore"
					  ),
								
				array( "label" => __("Filter", 'sr_yalu_theme'),
				   	   "desc" => __("Display the portfolio filter. Please make sure to add a Category Menu (Portfolio).", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodisablefilter",
					   "type" => "checkbox"
					  ),
				
			array( "label" => "Portfolio Grid",
				   "id" => $sr_prefix."_portfolio-grid",
				   "type" => "groupend"
				  ),
				
			array( "label" => __("Portfolio Single View", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_portfolio-single",
				   "type" => "groupstart"
				  ),
			
				array( "label" => __("Show Categories", 'sr_yalu_theme'),
				   	   "desc" => __("This shows the categories of your Project.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliocats",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Tags", 'sr_yalu_theme'),
				   	   "desc" => __("This shows the categories of your Project.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliotags",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Client", 'sr_yalu_theme'),
				   	   "desc" => __("This shows the client of your Project.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfolioclient",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Date", 'sr_yalu_theme'),
				   	   "desc" => __("This shows the date of your Project.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodate",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Show Views count", 'sr_yalu_theme'),
				   	   "desc" => __("This shows the total views of your Project.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfolioviews",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Activate Likes count", 'sr_yalu_theme'),
				   	   "desc" => __("Activate the  build-in Like feature for your projects", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliolikes",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Share", 'sr_yalu_theme'),
				   	   "desc" => __("Enable the share feature.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodisableshare",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Single Pagination", 'sr_yalu_theme'),
				   	   "desc" => __("Enable the pagination between the portfolio items.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodisablepagination",
					   "type" => "checkbox"
					  ),
								
				array( "label" => __("Fancybox", 'sr_yalu_theme'),
				   	   "desc" => __("Enable the fancybox for bigger view.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodisablefancybox",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Related Projects", 'sr_yalu_theme'),
				   	   "desc" => __("Show related projects.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodisablerelated",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Style", 'sr_yalu_theme'),
					   "desc" => __("Choose your style for Portfolio Single View", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliostyle",
					   "type" => "radiocustom",
					   "option" => array( 
							array(	"name" => __("Default", 'sr_yalu_theme'), 
									"value" => "layout-default"),
							array( 	"name"=> __("Fullwidth", 'sr_yalu_theme'), 
									"value"=> "layout-fullwidth")
							)
					  ),
				
				array( "label" => __("Gallery Display", 'sr_yalu_theme'),
					   "desc" => __("If you choose 'list' the gallery pictures will be displayed underneath instead of a slider", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodisplay",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Slider", 'sr_yalu_theme'), 
									"value"=> "slider"),
							array(	"name" => __("List", 'sr_yalu_theme'), 
									"value"=> "list")
							),
					   "default" => "slider"
					  ),
				
				array( "label" => __("Show Media Caption Text", 'sr_yalu_theme'),
				   	   "desc" => __("The caption text you've entered for the media will be shown", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_portfoliodisablecaption",
					   "type" => "checkbox"
					  ),
				
				array( "label" => __("Reset Views/Likes", 'sr_yalu_theme'),
					   "desc" => "<b>".__("ATTENTION: This resets all views/likes to 0 for all portfolio items.", 'sr_yalu_theme')."</b>",
					   "id" => $sr_prefix."_portfolioreset",
					   "type" => "resetportfolio"
					  ),
				
			array( "label" => "Portfolio Single View",
				   "id" => $sr_prefix."_portfolio-single",
				   "type" => "groupend"
				  ),
				
	array ( "type" => "sectionend",
		   	"id" => "sectionend"),
	
	
	array( "name" => __("Social", 'sr_yalu_theme'),
		   "id" => "social",
		   "type" => "sectionstart",
		   "desc" => ""
		  ),
				
			array( "label" => __("Facebook", 'sr_yalu_theme'),
				   "desc" => __("Link to your Facebook site.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_facebook",
				   "type" => "text",
				  ),
			
			array( "label" => __("Twitter", 'sr_yalu_theme'),
				   "desc" => __("Link to your Twitter profile.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_twitter",
				   "type" => "text",
				  ),
			
			array( "label" => __("Google+", 'sr_yalu_theme'),
				   "desc" => __("Link to your Google+ profile", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_googleplus",
				   "type" => "text",
				  ),
			
			array( "label" => __("Dribbble", 'sr_yalu_theme'),
				   "desc" => __("Link to your Dribbles.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_dribbble",
				   "type" => "text",
				  ),
			
			array( "label" => __("Instagram", 'sr_yalu_theme'),
				   "desc" => __("Link to your Instagram Gallery.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_instagram",
				   "type" => "text",
				  ),
			
			array( "label" => __("Pinterest", 'sr_yalu_theme'),
				   "desc" => __("Link to your Pins.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_pinterest",
				   "type" => "text",
				  ),
			
			array( "label" => __("Vimeo", 'sr_yalu_theme'),
				   "desc" => __("Link to your Vimeo videos.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_vimeo",
				   "type" => "text",
				  ),
			
			array( "label" => __("Youtube", 'sr_yalu_theme'),
				   "desc" => __("Link to your Youtube channel.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_youtube",
				   "type" => "text",
				  ),
			
			array( "label" => __("Flickr", 'sr_yalu_theme'),
				   "desc" => __("Link to your Flickr images.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_flickr",
				   "type" => "text",
				  ),
			
			array( "label" => __("Behance", 'sr_yalu_theme'),
				   "desc" => __("Link to your Behance portfolio.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_behance",
				   "type" => "text",
				  ),
			
			array( "label" => __("Deviantart", 'sr_yalu_theme'),
				   "desc" => __("Link to your Deviantart works.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_deviantart",
				   "type" => "text",
				  ),
			
			array( "label" => __("Forrst", 'sr_yalu_theme'),
				   "desc" => __("Link to your Forrst site.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_forrst",
				   "type" => "text",
				  ),
			
			array( "label" => __("Thumblr", 'sr_yalu_theme'),
				   "desc" => __("Link to your Thumblr.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_thumblr",
				   "type" => "text",
				  ),			
			
			array( "label" => __("LinkedIn", 'sr_yalu_theme'),
				   "desc" => __("Link to your LinkedIn profile.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_linkedin",
				   "type" => "text",
				  ),
			
			array( "label" => __("RSS", 'sr_yalu_theme'),
				   "desc" => __("Show RSS link to the feed.", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_rss",
				   "type" => "checkbox",
				  ),
	
	array ( "type" => "sectionend",
		   	"id" => "sectionend"),
	
	
	array( "name" => __("Typography", 'sr_yalu_theme'),
		   "id" => "typography",
		   "type" => "sectionstart",
		   "desc" => ""
		  ),
	
			array( "label" => __("Body", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_typography-body",
				   "type" => "groupstart"
				  ),
							
				array( "label" => __("Body Font", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sr_prefix."_bodyfont",
					   "type" => "fonts"
					  ),
				
				array( "label" => __("Body Font Size", 'sr_yalu_theme'),
				   	   "desc" => __("Choose the body font size.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_bodyfontsize",
					   "type" => "font-size",
					   "default" => "13px"
					  ),
				
				array( "label" => __("Body Font Line-Height", 'sr_yalu_theme'),
				   	   "desc" => __("Choose the body font line-height.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_bodyfontlineheight",
					   "type" => "font-lineheight",
					   "default" => "20px"
					  ),
			
			array( "label" => "Body",
				   "id" => $sr_prefix."_typography-body",
				   "type" => "groupend"
				  ),
			
			array( "label" => __("Headings", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_typography-headings",
				   "type" => "groupstart"
				  ),
				
				array( "label" => __("Heading Font", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sr_prefix."_headingfont",
					   "type" => "fonts"
					  ),
				
			array( "label" => "Headings",
				   "id" => $sr_prefix."_typography-headings",
				   "type" => "groupend"
				  ),
			
			array( "label" => __("Navigation", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_typography-navigation",
				   "type" => "groupstart"
				  ),
				
				array( "label" => __("Navigation Font", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sr_prefix."_navigationfont",
					   "type" => "fonts"
					  ),
				
				array( "label" => __("Navigation Font Size", 'sr_yalu_theme'),
				   	   "desc" => __("Choose the navigation font size.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_navigationfontsize",
					   "type" => "font-size",
					   "default" => "14px"
					  ),
				
				array( "label" => __("Navigation Font Weight", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sr_prefix."_navigationfontweight",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Normal", 'sr_yalu_theme'), 
									"value" => "normal"),
							array(	"name" => __("Bold", 'sr_yalu_theme'), 
									"value"=> "bold")
							),
					   "default" => "normal"
					  ),
				
				array( "label" => __("Navigation Font Transform", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sr_prefix."_navigationfonttransform",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Normal", 'sr_yalu_theme'), 
									"value" => "none"),
							array(	"name" => __("Uppercase", 'sr_yalu_theme'), 
									"value"=> "uppercase")
							),
					   "default" => "none"
					  ),
											
			array( "label" => "Navigation",
				   "id" => $sr_prefix."_typography-navigation",
				   "type" => "groupend"
				  ),
			
			array( "label" => __("Rest", 'sr_yalu_theme'),
				   "id" => $sr_prefix."_typography-rest",
				   "type" => "groupstart"
				  ),
				
				array( "label" => __("Heading Font", 'sr_yalu_theme'),
				   	   "desc" => __("Choose the font family for all other elements like buttons, date, ...)  In the live preview it's the same than the heading font.", 'sr_yalu_theme'),
					   "id" => $sr_prefix."_restfont",
					   "type" => "fonts"
					  ),
				
			array( "label" => "Rest",
				   "id" => $sr_prefix."_typography-rest",
				   "type" => "groupend"
				  ),
	
	array ( "type" => "sectionend",
		   	"id" => "sectionend"),
	
	
	array( "name" => __("Comments", 'sr_yalu_theme'),
		   "id" => "comments",
		   "type" => "sectionstart",
		   "desc" => ""
		  ),
						
				array( "label" => __("Blog Posts Comments", 'sr_yalu_theme'),
				   	   "desc" => "Disable/Enable Comments On Blog Posts",
					   "id" => $sr_prefix."_commentsblog",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Enabled", 'sr_yalu_theme'), 
									"value" => "enabled"),
							array(	"name" => __("Disabled", 'sr_yalu_theme'), 
									"value"=> "disabled")
							),
					   "default" => "enabled"
					  ),
				
				array( "label" => __("Portfolio Comments", 'sr_yalu_theme'),
				   	   "desc" => "Disable/Enable Comments On Portfolio items",
					   "id" => $sr_prefix."_commentsportfolio",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Enabled", 'sr_yalu_theme'), 
									"value" => "enabled"),
							array(	"name" => __("Disabled", 'sr_yalu_theme'), 
									"value"=> "disabled")
							),
					   "default" => "disabled"
					  ),
				
				array( "label" => __("Page Comments", 'sr_yalu_theme'),
				   	   "desc" => "Disable/Enable Comments On Pages",
					   "id" => $sr_prefix."_commentspage",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Enabled", 'sr_yalu_theme'), 
									"value" => "enabled"),
							array(	"name" => __("Disabled", 'sr_yalu_theme'), 
									"value"=> "disabled")
							),
					   "default" => "disabled"
					  ),
				
	array ( "type" => "sectionend",
		   	"id" => "sectionend")
		
		
);




/*-----------------------------------------------------------------------------------*/
/*	Add Page/Subpage & generate save/reset
/*-----------------------------------------------------------------------------------*/

function sr_theme_add_admin() {
 
global $sr_themename, $sr_prefix, $sr_options;
 
if ( isset($_GET['page']) && $_GET['page'] == basename(__FILE__) ) {
 
	if ( isset($_REQUEST['action'])  &&  $_REQUEST['action'] == 'save' ) {
 
				
		foreach ($sr_options as $value) {
			if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); }
			
			if( isset(  $value['option'] ) && $value['option'] ) {
				foreach ($value['option'] as $var) {
					if ( isset(  $var['id']) ) {
						if ( isset( $_REQUEST[ $var['id'] ] ) ) { update_option( $var['id'], $_REQUEST[ $var['id'] ]  ); } else { delete_option( $var['id'] ); }
					}
				}
			}
		}
		header("Location: themes.php?page=option-panel.php&saved=true");
		die;
		 
	} 
	else if( isset($_REQUEST['action'])  &&  $_REQUEST['action'] == 'reset' ) {
		 
		foreach ($sr_options as $value) {
			delete_option( $value['id'] ); 
			
			foreach ($value['option'] as $var) {
				delete_option( $var['id'] ); 
			}
		}
		 
		header("Location: themes.php?page=option-panel.php&reset=true");
		die;
	 
	}
}
 
add_theme_page($sr_themename, 'Theme Options', 'administrator', basename(__FILE__), 'sr_theme_interface');
}

add_action('admin_menu', 'sr_theme_add_admin');



/*-----------------------------------------------------------------------------------*/
/*	Building interface
/*-----------------------------------------------------------------------------------*/
function sr_theme_interface() {
 
global $sr_themename, $sr_prefix, $sr_options, $sr_sections;
$i=0;
 

echo '	<div class="sr_wrap">
		<form method="post">
		
		<div class="sr_header clear">
			<h1>'.$sr_themename.'</h1> <div class="icon32" id="icon-options-general"></div>
			<input name="save" type="submit" value="Save all changes" class="submit-option"/>
		</div>
		';
    
	if ( isset($_REQUEST['saved']) && $_REQUEST['saved'] != "") { echo '<div class="message_ok fade"><p><strong>'.$sr_themename.' '.__("settings saved", 'sr_yalu_theme').'.</strong></p></div>'; }
	if ( isset($_REQUEST['reset']) && $_REQUEST['reset'] != "") { echo '<div class="message_ok fade"><p><strong>'.$sr_themename.' '.__("settings reset", 'sr_yalu_theme').'.</strong></p></div>'; }
	if ( isset($_REQUEST['blogreset']) && $_REQUEST['blogreset'] != "") {
		echo '<div class="message_ok fade"><p><strong>"'.$_REQUEST['blogreset'].'" '.__("for blog settings reset", 'sr_yalu_theme').'.</strong></p></div>';
		if ($_REQUEST['blogreset'] == 'views') { sr_resetPostMeta('views','post'); }
		if ($_REQUEST['blogreset'] == 'likes') { sr_resetPostMeta('likes','post'); }
	}
	if ( isset($_REQUEST['portfolioreset']) && $_REQUEST['portfolioreset'] != "") {
		echo '<div class="message_ok fade"><p><strong>"'.$_REQUEST['portfolioreset'].'" '.__("for portfolio settings reset", 'sr_yalu_theme').'.</strong></p></div>';
		if ($_REQUEST['portfolioreset'] == 'views') { sr_resetPostMeta('views','portfolio'); }
		if ($_REQUEST['portfolioreset'] == 'likes') { sr_resetPostMeta('likes','portfolio'); }
	}
	
	
	echo '<div id="sr_body" class="clear">';
    
	//  Add the sections
	echo '<ul id="section-list">';
	foreach ($sr_sections as $section) {
	
		echo '<li class="'.$section['class'].'"><a href="'.$section['href'].'">'.$section['name'].'</a></li>';
	
	} 
	echo '</ul>';
	
	
	echo '<div class="section">';
	
	
	//  Add the options
	foreach ($sr_options as $option) {
		
		$value = stripslashes(get_option( $option['id'])  );
		if ($value == '' && (isset($option['default']) && $option['default'] !== '')) { $value = $option['default']; }
		
		switch ( $option['type'] ) {
		
		//sectionstart
		case "sectionstart":
			echo '	<div id="'.$option['id'].'" class="section-content">';
			if ($option['desc'] && $option['desc'] !== '') { echo '<div class="section-desc"><i>'.$option['desc'].'</i></div>'; }
		break;
		
		
		//sectionend
		case "sectionend":
			echo '</div>';
		break;
		
		
		//groupstart
		case "groupstart":
			echo '<div id="'.$option['id'].'" class="optiongroup">';
			echo '<div class="optiongroup-title"><h4>'.$option['label'].'</h4></div>';
			echo '<div class="optiongroup-content">';
		break;
		
		
		//groupend
		case "groupend":
			echo '	</div>'; // END optiongroup-content
			echo '	</div>'; // END optiongroup
		break;
		
		
		// hidinggroupstart
		case "hidinggroupstart":
			echo '<div id="hiding'.$option['id'].'" class="hidinggroup '.$option['id'].'_'.$option['hiding'].'">';
		break;
		
		
		// hidinggroupend
		case "hidinggroupend":
			echo '	</div>'; // END hidinggroup
		break;
		
		
		//text
		case "text":
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<input type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="'.htmlspecialchars($value, ENT_QUOTES).'" size="30" />
						</div>';		
			echo '</div>';
		break;
		
		
		//color
		case "color":
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<input type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="'.$value.'" class="sr-color-field" />
						</div>';		
			echo '</div>';
		break;
		
		
		//textgroup
		case "textgroup":
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				foreach ($option['option'] as $var) {
					$subvalue = stripslashes(get_option( $var['id'])  );
					echo '<textarea name="'.$var['id'].'" id="'.$var['id'].'" cols="20" rows="1"/>'.$subvalue.'</textarea><span class="sr_subdesc"><i>'.$var['desc'].'</i></span><br/>';  
				}

				echo '	</div>';		
			echo '</div>';
		break;
		
		
		//textarea
		case "textarea":
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<textarea name="'.$option['id'].'" id="'.$option['id'].'" cols="40" rows="10">'.$value.'</textarea>
						</div>';		
			echo '</div>';
		break;
		
		
		//textareasmall
		case "textareasmall":
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<textarea name="'.$option['id'].'" id="'.$option['id'].'" cols="40" rows="3">'.$value.'</textarea>
						</div>';		
			echo '</div>';
		break;
		
		
		//checkbox
		case 'checkbox':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<input type="checkbox" style="display:none;" name="'.$option['id'].'" id="'.$option['id'].'" ',$value ? ' checked="checked"' : '','/>
							<a class="checkbox-status',$value ? '-active' : '','" href="" title="'.$option['id'].'">'.$option['id'].'</a>
						</div>';		
			echo '</div>';
		break;
		
		
		//radio
		case "radio":
			echo '<div class="option clear" id="sr_radio">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				$i = 0;
				foreach ($option['option'] as $var) {
					if ($value == $var['value']) { $checked = 'checked="checked"'; } else { if ($value == '' && $i == 0) { $checked = 'checked="checked"'; } else { $checked = '';  } }
					echo '<div><input type="radio" name="'.$option['id'].'" id="'.$var['value'].'" value="'.$var['value'].'" '.$checked.' /> '.$var['name'].'</div>';
				$i++;	
				}

				echo '	</div>';		
			echo '</div>';
		break;
		
		
		// selectbox  
		case 'selectbox':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				echo '<select name="'.$option['id'].'" id="'.$option['id'].'">';
				$i = 0;
				foreach ($option['option'] as $var) {
					if ($value == $var['value']) { $selected = 'selected="selected"'; } else { if ($value == '' && $i == 0) { $selected = 'selected="selected"'; } else { $selected = '';  } }
					echo '<option value="'.$var['value'].'" '.$selected.' /> '.$var['name'].'</div>';
				$i++;	
				}			  
				echo '</select>'; 
			echo '	</div>';		
			echo '</div>';
		break;
		
		
		// selectbox-hiding  
		case 'selectbox-hiding':  
			echo '<div class="option clear hiding'.$option['id'].'" id="hiding">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				echo '<select name="'.$option['id'].'" id="'.$option['id'].'">';
				$i = 0;
				foreach ($option['option'] as $var) {
					if ($value == $var['value']) { $selected = 'selected="selected"'; } else { if ($value == '' && $i == 0) { $selected = 'selected="selected"'; } else { $selected = '';  } }
					echo '<option value="'.$var['value'].'" '.$selected.' /> '.$var['name'].'</div>';
				$i++;	
				}			  
				echo '</select>'; 
			echo '	</div>';		
			echo '</div>';
		break;
		
		
		// font-size  
		case 'font-size':  
			$fontsize = array('9px','10px','11px','12px','13px','14px','15px','16px','17px','18px','19px','20px','21px','22px','23px','24px','25px','26px','27px','28px','29px','30px' );
		
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				echo '<select name="'.$option['id'].'" id="'.$option['id'].'">';
				$i = 0;
				foreach ($fontsize as $size) {
					if ($value == $size) { $selected = 'selected="selected"'; } else { $selected = '';  } 
					echo '<option value="'.$size.'" '.$selected.' /> '.$size.'</div>';
				$i++;	
				}			  
				echo '</select>'; 
			echo '	</div>';		
			echo '</div>';
		break;
		
		
		// font-lineheight  
		case 'font-lineheight':  
			$fontheight = array('14px','15px','16px','17px','18px','19px','20px','21px','22px','23px','24px','25px','26px','27px','28px','29px','30px','31px','32px','33px','34px','35px','36px','37px','38px','39px','40px','41px','42px','43px','44px','45px');
		
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				echo '<select name="'.$option['id'].'" id="'.$option['id'].'">';
				$i = 0;
				foreach ($fontheight as $height) {
					if ($value == $height) { $selected = 'selected="selected"'; } else { $selected = '';  } 
					echo '<option value="'.$height.'" '.$selected.' /> '.$height.'</div>';
				$i++;	
				}			  
				echo '</select>'; 
			echo '	</div>';		
			echo '</div>';
		break;
		
		
		// fonts  
		case 'fonts': 
			
			$fonts = array('default','Amaranth','Andika','Arial','Armata','Arvo','Averia Serif Libre','Bree Serif','Cabin','Capriola','Comfortaa','Crete Round','Cuprum','Didact Gothic','Dosis','Droid Sans','Droid Serif','Enriqueta','Esteban','Francois One','Georgia','Gudea','Hammersmith One','Helvetica','Lato','Lucida Sans Unicode','Marmelad','Merriweather','Molengo','Montserrat','Nunito','Open Sans','Open Sans Condensed','PT Sans','PT Sans Caption','PT Sans Narrow','Puritan','Quando','Quicksand','Raleway','Salsa','Shanti','Share','Signika','Source Sans Pro','Tahoma','Telex','Times New Roman','Ubuntu','Ubuntu Condensed','Ubuntu Mono','Verdana','Volkhov','Yanone Kaffeesatz' );
		
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				echo '<select name="'.$option['id'].'" id="'.$option['id'].'">';
				$i = 0;
				foreach ($fonts as $font) {
					if ($value == $font) { $selected = 'selected="selected"'; } else { $selected = '';  } 
					echo '<option value="'.$font.'" '.$selected.' /> '.$font.'</div>';
				$i++;	
				}			  
				echo '</select>'; 
			echo '	</div>';		
			echo '</div>';
		break;
		
		
		//radiocustom
		case "radiocustom":
			echo '<div class="option clear" id="sr_radiocustom">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				
				$i = 0;
				foreach ($option['option'] as $var) {
					if ($value == $var['value']) { $checked = 'checked="checked"'; $active = "active"; } else { if ($value == '' && $i == 0) { $checked = 'checked="checked"'; $active = "active"; } else { $checked = ''; $active = ""; } }
					echo '<input type="radio" name="'.$option['id'].'" id="'.$var['value'].'" value="'.$var['value'].'" '.$checked.' />
					<a class="customradio '.$var['value'].' '.$active.'" href="'.$var['value'].'"><span>'.$var['name'].'</span></a>';
				$i++;	
				}

				echo '	</div>';		
			echo '</div>';
		break;
		
		
		// image  
		case 'image':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<input class="upload_image" type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="'.$value.'" size="30" />
							<input class="upload_image_button sr-button" type="button" value="Add Image" /><br />
							<span class="preview_image"><img class="'.$option['id'].'"  src="'.$value.'" alt="" /></span>
						</div>';		
			echo '</div>';  
		break;
		
		
		// imagegroup  
		case 'imagegroup':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<input class="add_image_button sr-button" type="button" value="Add Slide" /><br />
							<textarea name="'.$option['id'].'" class="groupvalue" style="display:none;">'.$value.'</textarea><br />
							<ul id="imagegroup_preview" class="preview">';
						if ($value) {
							$value = substr($value, 3);
							$value = explode('~~~', $value);
					        foreach($value as $row) {
								$object = explode('|~|', $row);
								$id = $object[0];
								$caption = $object[1];
								$image = wp_get_attachment_image_src($id, 'full');
								echo '<li><a id="image-remove"  class="image-remove button" href="#" rel="'.$id.'">-</a><span class="image"><img src="'.$image[0].'"></span><textarea id="caption">'.$caption.'</textarea><textarea id="hidden-value" style="display:none;">~~~'.$id.'|~|'.$caption.'</textarea><a id="image-moveup"  class="button" href="#" rel="'.$id.'">&uarr;</a><a id="image-movedown"  class="button" href="#" rel="'.$id.'">&darr;</a></li>';
					        }  
					    } 		
				echo '			</ul>
						</div>';		
			echo '</div>';  
		break;
		
		
		// pagelist  
		case 'pagelist':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">
							<select name="'.$option['id'].'" id="'.$option['id'].'">';
							  $pages = get_pages(); 
							  foreach ( $pages as $page ) {
								if ($page->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
								$option = '<option value="' . $page->ID . '" '.$active.'>';
								$option .= $page->post_title;
								$option .= '</option>';
								echo $option;
							  }
				echo '		</select>
						</div>';		
			echo '</div>';  
		break;
		
		
		// organize  
		case 'organize':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
					echo '<div class="organize-option">';
					
					if ($value) {
						echo '<ul id="sortable" class="organize-list">';
						$tempvalue = substr($value, 0, -3);
						$tempvalue = explode('|||', $tempvalue);
						foreach ($tempvalue as $var) {
							$varvalue = explode('|', $var);
							if ($varvalue[2] == 'active') { $active = 'active'; } else { $active = ''; }
							echo '	<li class="ui-state-default '.$active.'">'.$varvalue[0].'<a class="status" href="" title="'.$varvalue[0].'"></a><input type="checkbox" name="'.$varvalue[1].'"/></li>';
						}
						echo '</ul>';
						echo '<textarea name="'.$option['id'].'" class="organize-value" style="display:none;">'.$value.'</textarea><br />';
					} else {
						echo '<ul id="sortable" class="organize-list">';
						$valueoutput = '';
						$i = 0;
						foreach ($option['option'] as $var) {
							echo '	<li class="ui-state-default">'.$var['name'].'<a class="status" href="" title="'.$var['name'].'"></a><input type="checkbox" name="'.$var['value'].'"/></li>';
							$valueoutput .= $var['name'].'|'.$var['value'].'|nonactive|||';
						$i++;	
						}
						echo '</ul>';
						echo '<textarea name="'.$option['id'].'" class="organize-value" style="display:none;">'.$valueoutput.'</textarea><br />';
					}
					echo '</div>';
				echo ' 	</div>';		
			echo '</div>';  
		break;
		
		
		// reset
		case 'reset':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				echo '	<a href="themes.php?page=option-panel.php&blogreset=views" class="button sr_button">'.__("Reset Views", 'sr_yalu_theme').'</a>';
				echo '	<a href="themes.php?page=option-panel.php&blogreset=likes" class="button sr_button">'.__("Reset Likes", 'sr_yalu_theme').'</a>';
				echo '	</div>';		
			echo '</div>';  
		break;
		
		
		// reset
		case 'resetportfolio':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">';
				echo '	<a href="themes.php?page=option-panel.php&portfolioreset=views" class="button sr_button">'.__("Reset Views", 'sr_yalu_theme').'</a>';
				echo '	<a href="themes.php?page=option-panel.php&portfolioreset=likes" class="button sr_button">'.__("Reset Likes", 'sr_yalu_theme').'</a>';
				echo '	</div>';		
			echo '</div>';  
		break;
		
		
		// slider
		case 'slider':  
			echo '<div class="option clear">';
				echo '	<div class="option_name">
							<label for="'.$option['id'].'">'.$option['label'].'</label><br /><span class="option_desc"><i>'.$option['desc'].'</i></span>
						</div>';
				echo '	<div class="option_value">'; 
				echo '<select name="'.$option['id'].'" id="'.$option['id'].'">';
				$pages = get_posts( array( 'post_type' => 'slider' ) ); 
				foreach ( $pages as $page ) {
					if ($page->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; }
					echo '<option value="' . $page->ID . '" '.$active.'>'.$page->post_title.'</option>';
				}
				echo '</select>';
				echo '	</div>';		
			echo '</div>';	
		break;
		
		
		} // END switch ( $option['type'] ) {
	} // END foreach ($sr_options_new as $option) {
	
	
	echo '</div>'; // END section-content
	echo '</div>'; // END section



echo '	
		<div class="sr_footer clear">
		<input name="save" type="submit" value="Save all changes" class="submit-option"/> 
		<input type="hidden" name="action" value="save" />
		</form>
		<form method="post">
		<input name="reset" type="submit" value="Reset" class="reset-option" />
		<input type="hidden" name="action" value="reset" />
		</form>
		</div>
		</div> ';
 

} // END function sr_theme_interface() {




/*-----------------------------------------------------------------------------------*/
/*	Register and Enqueue admin javascript
/*-----------------------------------------------------------------------------------*/

if( !function_exists( 'sr_admin_js' ) ) {
    function sr_admin_js($hook) {
		
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-sortable');
		
		wp_register_script('admin-script', get_template_directory_uri() . '/theme-admin/option-panel/js/admin_script.js', array( 'wp-color-picker' ), 'jquery', '1.0', true);
		wp_enqueue_script('admin-script');
		
		wp_register_style('admin-style', get_template_directory_uri() . '/theme-admin/option-panel/css/admin.css');
		wp_enqueue_style('admin-style');
		
		wp_enqueue_script('media-upload');
		wp_enqueue_style('thickbox');
		
		wp_enqueue_style( 'farbtastic' );
		wp_enqueue_script( 'farbtastic' );
		
		wp_enqueue_style( 'wp-color-picker' );
	
    }
    
    add_action('admin_enqueue_scripts','sr_admin_js',10,1);
}




/*-----------------------------------------------------------------------------------*/
/* Output Custom CSS from theme options
/*-----------------------------------------------------------------------------------*/

if ( !function_exists( 'sr_head_css' ) ) {
    function sr_head_css() {
        global $sr_prefix;
        $output = '';
        $output = get_option($sr_prefix.'_color');
    }

    add_action('wp_head', 'sr_head_css');
}
?>