<?php

$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

// Access WordPress
require_once( $path_to_wp . '/wp-load.php' );


$sc = 'sc';
/*-----------------------------------------------------------------------------------*/
/*	Sections & Options
/*-----------------------------------------------------------------------------------*/

$options = array(
	
	array( "name" => __("Accordion", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "accordion",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => "Group",
				   "id" => $sc."_accordiongroup",
				   "type" => "groupstart"
				  ),
				
				array( "name" => __("Size", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_accordionsize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Small", 
							  	"value" => "small"),
						array(	"name" =>"Big", 
							  	"value" => "big")
						)
				  ),
			
				array( "name" => __("Open", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_accordionopen",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"No", 
									"value" => "no"),			 	
							array(	"name" =>"Yes", 
									"value" => "yes")
							)
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sc."_accordiontitle",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_accordiontext",
					   "type" => "textarea"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_accordiongroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add Tab", 'sr_yalu_theme'),
				   "id" => $sc."_accordionduplicater",
				   "group" => $sc."_accordiongroup",
				   "type" => "grouduplicater"
				  ),

	array ( "name" => __("Accordion", 'sr_yalu_theme'),
		   	"id" => "accordion",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Alerts", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "alert",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Alert Size", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_alertsize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Small", 
							  	"value" => "small"),
						array(	"name" =>"Big", 
							  	"value" => "big")
						)
				  ),
			
			array( "name" => __("Alert Type/Color", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_alertcolor",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Info / Blue", 
							  	"value" => "info"),
						array(	"name" =>"Note / Yellow", 
							  	"value" => "note"),
						array(	"name" =>"Confirm / Green", 
							  	"value" => "confirm"),
						array(	"name" =>"Error / Red", 
							  	"value" => "error")
						)
				  ),
			
			array( "name" => __("Alert Hide Option", 'sr_yalu_theme'),
				   "desc" => "Do you want to add the option for closing/hiding the alert message",
				   "id" => $sc."_alertclose",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Yes", 
							  	"value" => "yes"),
						array(	"name" =>"No", 
							  	"value" => "no")
						)
				  ),
	
			array( "name" => __("Alert Text", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_alerttext",
				   "type" => "textarea"
				  ),
						
	
	array( "name" => __("Alerts", 'sr_yalu_theme'),
		   "id" => "alert",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Buttons", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "buttons",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Button Size", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_buttonsize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" => __("Small", 'sr_yalu_theme'), 
							  	"value" => "small-button"),
						array(	"name" => __("Medium", 'sr_yalu_theme'), 
							  	"value"=> "medium-button"),
						array(	"name" => __("Big", 'sr_yalu_theme'), 
							  	"value"=> "big-button")
						)
				  ),
			
			array( "name" => __("Button Color", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_buttoncolor",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" => __("Default - Colored", 'sr_yalu_theme'), 
							  	"value" => "default-button1"),
						array(	"name" => __("Default - Dark", 'sr_yalu_theme'), 
							  	"value" => "default-button2"),
						array(	"name" => __("Default - Light", 'sr_yalu_theme'), 
							  	"value" => "default-button3"),
						array(	"name" => __("Default - Light Bordered", 'sr_yalu_theme'), 
							  	"value" => "default-button4"),
						array(	"name" => __("Default - White Bordered", 'sr_yalu_theme'), 
							  	"value" => "default-button5"),
						array(	"name" => __("Default - Dark Bordered", 'sr_yalu_theme'), 
							  	"value" => "default-button6"),
						array(	"name" => __("White", 'sr_yalu_theme'), 
							  	"value" => "white-button"),
						array(	"name" => __("Blue", 'sr_yalu_theme'), 
							  	"value"=> "blue-button"),
						array(	"name" => __("Green", 'sr_yalu_theme'), 
							  	"value"=> "green-button"),
						array(	"name" => __("Yellow", 'sr_yalu_theme'), 
							  	"value"=> "yellow-button"),
						array(	"name" => __("Orange", 'sr_yalu_theme'), 
							  	"value"=> "orange-button"),
						array(	"name" => __("Red", 'sr_yalu_theme'), 
							  	"value"=> "red-button")
						)
				  ),
			
			array( "name" => __("Button Target", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_buttontarget",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" => __("_self", 'sr_yalu_theme'), 
							  	"value" => "_self"),
						array(	"name" => __("_blank", 'sr_yalu_theme'), 
							  	"value"=> "_blank"),
						array(	"name" => __("_parent", 'sr_yalu_theme'), 
							  	"value"=> "_parent"),
						array(	"name" => __("_top", 'sr_yalu_theme'), 
							  	"value"=> "_top")
						)
				  ),
	
			array( "name" => __("Button URL", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_buttonurl",
				   "type" => "text"
				  ),
			
			array( "name" => __("Button Text", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_buttontext",
				   "type" => "text"
				  ),
			
	
	array( "name" => __("Buttons", 'sr_yalu_theme'),
		   	"id" => "buttons",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Columns", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "columns",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Column Layout", 'sr_yalu_theme'),
				   "desc" => __("Choose your layout for the columns you want include.", 'sr_yalu_theme'),
				   "id" => $sc."_columnlayout",
				   "type" => "radiocustom",
				   "option" => array( 
						array(	"name" =>"Layout 2 x one_half", 
							  	"value" => "layout_onehalf-onehalf"),
						array( 	"name"=>"Layout one_third + two_third", 
							  	"value"=> "layout_onethird-twothird"),
						array( 	"name"=>"Layout two_third + one_third", 
							  	"value"=> "layout_twothird-onethird"),
						array(	"name" =>"Layout 3 x one_third", 
							  	"value"=> "layout_onethird-onethird-onethird"),
						array(	"name" =>"Layout one_half + 2 x one_fourth", 
							  	"value"=> "layout_onehalf-onefourth-onefourth"),
						array(	"name" =>"Layout 4 x one_fourth", 
							  	"value"=> "layout_onefourth-onefourth-onefourth-onefourth"),
						array(	"name" =>"Layout 5 x one_fifth", 
							  	"value"=> "layout_onefifth-onefifth-onefifth-onefifth-onefifth")
						)
				  ),
	
			array( "name" => __("Column 1", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_column_one",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Column 2", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_column_two",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Column 3", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_column_three",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Column 4", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_column_four",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Column 5", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_column_five",
				   "type" => "textarea"
				  ),
			
	
	array( "name" => __("Columns", 'sr_yalu_theme'),
		   	"id" => "columns",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Contact Form", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "contact",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("Recipient Email", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_contactsendto",
				   "type" => "text"
				  ),
			
			array( "name" => __("Subject", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_contactsubject",
				   "type" => "text"
				  ),
			
			array( "name" => __("Submit Button", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_contactsubmit",
				   "type" => "text"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_contactgroup",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Fieltype", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_contacttype",
					   "type" => "selectbox",
					   "option" => array( 
						array(	"name" => __("Textfield", 'sr_yalu_theme'), 
							  	"value" => "textfield"),
						array(	"name" => __("Textarea", 'sr_yalu_theme'), 
							  	"value"=> "textarea")
						)
					  ),
				
				array( "name" => __("Fieldname / Label", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_contactname",
					   "type" => "text"
					  ),
				
				array( "name" => __("Slugname", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_contactslug",
					   "type" => "text"
					  ),
				
				array( "name" => __("Required field?", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_contactreq",
					   "type" => "selectbox",
					   "option" => array( 
						array(	"name" =>"Yes", 
							  	"value" => "yes"),
						array( 	"name"=>"No", 
							  	"value"=> "no")
						)
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_contactgroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add FIeld", 'sr_yalu_theme'),
				   "id" => $sc."_contactduplicater",
				   "group" => $sc."_contactgroup",
				   "type" => "grouduplicater"
				  ),

	array( "name" => __("Contact Form", 'sr_yalu_theme'),
		   	"id" => "contact",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Gallery", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "gallery",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Choose Gallery", 'sr_yalu_theme'),
				   "desc" => __("Please make sure to have created/added a Gallery", 'sr_yalu_theme'),
				   "id" => $sc."_galleryid",
				   "type" => "gallery"
				  ),
			
			array( "name" => __("Columns", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_gallerycolumns",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"4", 
								"value" => "4"),			 	
						array(	"name" =>"5", 
								"value" => "5"),
						array(	"name" =>"6", 
								"value" => "6")
						)
				  ),
				   
			array( "name" => __("Carousel", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_gallerycarousel",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"No", 
								"value" => "no"),			 	
						array(	"name" =>"Yes", 
								"value" => "yes")
						)
				  ),
	
	array( "name" => __("Gallery", 'sr_yalu_theme'),
		   "id" => "gallery",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Google Map", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "map",
		   "type" => "sectionstart"
		  ),
						
			array( "name" => __("Latitude & Longitude", 'sr_yalu_theme'),
				   "desc" => __("Enter the google map latitude & longitude using this tool:<br>http://itouchmap.com/latlong.html", 'sr_yalu_theme'),
				   "id" => $sc."_maplatlong",
				   "type" => "text"
				  ),
			
			array( "name" => __("Infotext", 'sr_yalu_theme'),
				   "desc" => __("This Text will be displayed on the Google Map", 'sr_yalu_theme'),
				   "id" => $sc."_maptext",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Pin Icon Url", 'sr_yalu_theme'),
				   "desc" => __("Enter the url to your pin icon", 'sr_yalu_theme'),
				   "id" => $sc."_mapicon",
				   "type" => "text"
				  ),
			
			array( "name" => __("Height", 'sr_yalu_theme'),
				   "desc" => __("Default is 400.  Width is 100% of parent container.", 'sr_yalu_theme'),
				   "id" => $sc."_mapheight",
				   "type" => "text"
				  ),
			
			/*array( "name" => __("Map ID", 'sr_yalu_theme'),
				   "desc" => __("This is important if you want to use more maps in the same page.", 'sr_yalu_theme'),
				   "id" => $sc."_mapid",
				   "type" => "text"
				  ),*/
	
	array( "name" => __("Google map", 'sr_yalu_theme'),
		   "id" => "map",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Hightlight Field", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "highlight",
		   "type" => "sectionstart"
		  ),
						
			array( "name" => __("Style", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlightstyle",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Default", 
								"value" => "default"),			 	
						array(	"name" =>"Colored", 
								"value" => "colored"),
						array(	"name" =>"Bordered", 
								"value" => "bordered")
						)
				  ),
			
			array( "name" => __("Align", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlightalign",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Float Left/right", 
								"value" => "float"),
						array(	"name" =>"Normal", 
								"value" => "normal"),
						array(	"name" =>"Center", 
								"value" => "center")
						)
				  ),
			
			array( "name" => __("Title", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlighttitle",
				   "type" => "text"
				  ),
			
			array( "name" => __("Title size", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlighttitlesize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Big", 
								"value" => "h2"),			 	
						array(	"name" =>"Small", 
								"value" => "h4")
						)
				  ),
			
			array( "name" => __("Title color", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlighttitlecolor",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"None (grey/white)", 
								"value" => ""),			 	
						array(	"name" =>"Colored (main color)", 
								"value" => "colored")
						)
				  ),
			
			array( "name" => __("Subtitle", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlightsubtitle",
				   "type" => "text"
				  ),
			
			array( "name" => __("Text", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlighttext",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Button Link", 'sr_yalu_theme'),
				   "desc" => __("After adding the Highlight Field you can use your custom Button style using the Button shortcode.", 'sr_yalu_theme'),
				   "id" => $sc."_highlightbuttonlink",
				   "type" => "text"
				  ),
			
			array( "name" => __("Button Text", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_highlightbuttontext",
				   "type" => "text"
				  ),
	
	array( "name" => __("Hightlight Field", 'sr_yalu_theme'),
		   "id" => "highlight",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("IconBox", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "iconbox",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("IconBox Layout", 'sr_yalu_theme'),
				   "desc" => __("Choose a layout", 'sr_yalu_theme'),
				   "id" => $sc."_iconboxlayout",
				   "type" => "radiocustom",
				   "option" => array( 
						array(	"name" =>"Layout 4 x one_fourth", 
							  	"value"=> "layout_onefourth-onefourth-onefourth-onefourth")	,		 
						array(	"name" =>"Layout 3 x one_third", 
							  	"value"=> "layout_onethird-onethird-onethird"),
						array(	"name" =>"Layout 2 x one_half", 
							  	"value" => "layout_onehalf-onehalf")
						)
				  ),
			
			array( "name" => __("Spaced", 'sr_yalu_theme'),
				   "desc" => '',
				   "id" => $sc."_iconboxspaced",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"No", 
								"value" => "no"),			 	
						array(	"name" =>"Yes", 
								"value" => "yes")
						)
				  ),
			
			array( "name" => __("Scale On Hover", 'sr_yalu_theme'),
				   "desc" => '',
				   "id" => $sc."_iconboxscale",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"No", 
								"value" => "no"),			 	
						array(	"name" =>"Yes", 
								"value" => "yes")
						)
				  ),
	
			array( "name" => "Group",
				   "id" => $sc."_iconboxgroup_one",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => __("When empty background color is light grey.", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxcolor_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Icon URL", 'sr_yalu_theme'),
					   "desc" => __("Enter the url to your image icon file", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxicon_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxname_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxtext_one",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Link URL (more info)", 'sr_yalu_theme'),
					   "desc" => __("Leave it empty if you don't want to add more info link", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxlink_one",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_iconboxgroup_one",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_iconboxgroup_two",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => __("When empty background color is light grey.", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxcolor_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Icon URL", 'sr_yalu_theme'),
					   "desc" => __("Enter the url to your image icon file", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxicon_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxname_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxtext_two",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Link URL (more info)", 'sr_yalu_theme'),
					   "desc" => __("Leave it empty if you don't want to add more info link", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxlink_two",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_iconboxgroup_two",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_iconboxgroup_three",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => __("When empty background color is light grey.", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxcolor_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Icon URL", 'sr_yalu_theme'),
					   "desc" => __("Enter the url to your image icon file", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxicon_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxname_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxtext_three",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Link URL (more info)", 'sr_yalu_theme'),
					   "desc" => __("Leave it empty if you don't want to add more info link", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxlink_three",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_iconboxgroup_three",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_iconboxgroup_four",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => __("When empty background color is light grey.", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxcolor_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Icon URL", 'sr_yalu_theme'),
					   "desc" => __("Enter the url to your image icon file", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxicon_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxname_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_iconboxtext_four",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Link URL (more info)", 'sr_yalu_theme'),
					   "desc" => __("Leave it empty if you don't want to add more info link", 'sr_yalu_theme'),
					   "id" => $sc."_iconboxlink_four",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_iconboxgroup_four",
				   "type" => "groupend"
				  ),
			
	array( "name" => __("IconBox", 'sr_yalu_theme'),
		   "id" => "iconbox",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Latest News", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "latestnews",
		   "type" => "sectionstart"
		  ),
						
			array( "name" => __("Title", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_latestnewstitle",
				   "type" => "text"
				  ),
			
			array( "name" => __("Number of Posts", 'sr_yalu_theme'),
				   "desc" => '',
				   "id" => $sc."_latestnewsnumber",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"1", 
								"value" => "1"),			 	
						array(	"name" =>"2", 
								"value" => "2"),
						array(	"name" =>"3", 
								"value" => "3"),
						array(	"name" =>"4", 
								"value" => "4")
						)
				  ),
	
	array( "name" => __("Latest News", 'sr_yalu_theme'),
		   "id" => "latestnews",
		   "type" => "sectionend"),
	
	
	
	array( "name" => __("Pricing Tables", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "pricing",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("Pricing Layout", 'sr_yalu_theme'),
				   "desc" => __("Choose a layout", 'sr_yalu_theme'),
				   "id" => $sc."_pricinglayout",
				   "type" => "radiocustom",
				   "option" => array( 
						array(	"name" =>"Layout 2 x one_half", 
							  	"value" => "layout_onehalf-onehalf"),
						array(	"name" =>"Layout 3 x one_third", 
							  	"value"=> "layout_onethird-onethird-onethird"),
						array(	"name" =>"Layout 4 x one_fourth", 
							  	"value"=> "layout_onefourth-onefourth-onefourth-onefourth")
						)
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_one",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingcolor_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtitle_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Price", 'sr_yalu_theme'),
					   "desc" => __("Enter the price with currency", 'sr_yalu_theme'),
					   "id" => $sc."_pricingprice_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Time indication", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Listing", 'sr_yalu_theme'),
					   "desc" => __("Enter the different listing values seperated by a double '||' sign.", 'sr_yalu_theme')."<br /><br /><b>Example</b><br>100MB Disk Space||200MB Monthly Traffic||2 Subdomains<br>",
					   "id" => $sc."_pricinglisting_one",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Button Text", 'sr_yalu_theme'),
				   	   "desc" => __("After adding the Pricing Table you can use your custom Button style using the Button shortcode.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingbutton_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Button URL", 'sr_yalu_theme'),
					   "desc" => __("Enter a url for the sign up button.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingurl_one",
					   "type" => "text"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_one",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_two",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingcolor_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtitle_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Price", 'sr_yalu_theme'),
					   "desc" => __("Enter the price with currency", 'sr_yalu_theme'),
					   "id" => $sc."_pricingprice_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Time indication", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Listing", 'sr_yalu_theme'),
					   "desc" => __("Enter the different listing values seperated by a double '||' sign.", 'sr_yalu_theme')."<br /><br /><b>Example</b><br>100MB Disk Space||200MB Monthly Traffic||2 Subdomains<br>",
					   "id" => $sc."_pricinglisting_two",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Button Text", 'sr_yalu_theme'),
				   	   "desc" => __("After adding the Pricing Table you can use your custom Button style using the Button shortcode.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingbutton_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Button URL", 'sr_yalu_theme'),
					   "desc" => __("Enter a url for the sign up button.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingurl_two",
					   "type" => "text"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_two",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_three",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingcolor_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtitle_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Price", 'sr_yalu_theme'),
					   "desc" => __("Enter the price with currency", 'sr_yalu_theme'),
					   "id" => $sc."_pricingprice_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Time indication", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Listing", 'sr_yalu_theme'),
					   "desc" => __("Enter the different listing values seperated by a double '||' sign.", 'sr_yalu_theme')."<br /><br /><b>Example</b><br>100MB Disk Space||200MB Monthly Traffic||2 Subdomains<br>",
					   "id" => $sc."_pricinglisting_three",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Button Text", 'sr_yalu_theme'),
				   	   "desc" => __("After adding the Pricing Table you can use your custom Button style using the Button shortcode.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingbutton_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Button URL", 'sr_yalu_theme'),
					   "desc" => __("Enter a url for the sign up button.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingurl_three",
					   "type" => "text"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_three",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_four",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingcolor_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtitle_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Price", 'sr_yalu_theme'),
					   "desc" => __("Enter the price with currency", 'sr_yalu_theme'),
					   "id" => $sc."_pricingprice_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Time indication", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Listing", 'sr_yalu_theme'),
					   "desc" => __("Enter the different listing values seperated by a double '||' sign.", 'sr_yalu_theme')."<br /><br /><b>Example</b><br>100MB Disk Space||200MB Monthly Traffic||2 Subdomains<br>",
					   "id" => $sc."_pricinglisting_four",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Button Text", 'sr_yalu_theme'),
				   	   "desc" => __("After adding the Pricing Table you can use your custom Button style using the Button shortcode.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingbutton_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Button URL", 'sr_yalu_theme'),
					   "desc" => __("Enter a url for the sign up button.", 'sr_yalu_theme'),
					   "id" => $sc."_pricingurl_four",
					   "type" => "text"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_four",
				   "type" => "groupend"
				  ),

	array( "name" => __("Pricing Tables", 'sr_yalu_theme'),
		   	"id" => "pricing",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Recent Works", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "recentworks",
		   "type" => "sectionstart"
		  ),
						
			array( "name" => __("Title", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_recentworkstitle",
				   "type" => "text"
				  ),
			
			array( "name" => __("Columns", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_recentworkscolumn",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"2", 
								"value" => "2"),
						array(	"name" =>"3", 
								"value" => "3"),
						array(	"name" =>"4", 
								"value" => "4")
						)
				  ),
			
			array( "name" => __("Number of Projects", 'sr_yalu_theme'),
				   "desc" => __("Please enter a valid number", 'sr_yalu_theme'),
				   "id" => $sc."_recentworksnumber",
				   "type" => "text"
				  ),
	
	array( "name" => __("Recent Works", 'sr_yalu_theme'),
		   "id" => "recentworks",
		   "type" => "sectionend"),
	
	
	
	array( "name" => __("Selhosted Audio", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "selhostedaudio",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("MP3 File URL", 'sr_yalu_theme'),
				   "desc" => __("The url to the mp3 file", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedaudiomp3",
				   "type" => "text"
				  ),
			
			array( "name" => __("OGA/OGG File URL", 'sr_yalu_theme'),
				   "desc" => __("The url to the oga/ogg file", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedaudiooga",
				   "type" => "text"
				  ),
			
			array( "name" => __("Image (Optional)", 'sr_yalu_theme'),
				   "desc" => __("Enter the url of one of your media image", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedaudiopic",
				   "type" => "text"
				  ),
			
			array( "name" => __("ID", 'sr_yalu_theme'),
				   "desc" => __("This is important if you want to add multiple audios/videos. Use a unique value.", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedaudioid",
				   "type" => "text"
				  ),
	
	array( "name" => __("Selhosted Audio", 'sr_yalu_theme'),
		   "id" => "selhostedaudio",
		   "type" => "sectionend"),
	
	
	
	array( "name" => __("Selhosted Video", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "selhostedvideo",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("M4V File URL", 'sr_yalu_theme'),
				   "desc" => __("The url to the m4v file", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedvideom4v",
				   "type" => "text"
				  ),
			
			array( "name" => __("OGA/OGG File URL", 'sr_yalu_theme'),
				   "desc" => __("The url to the oga/ogg file", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedvideooga",
				   "type" => "text"
				  ),
			
			array( "name" => __("WEBMV File URL", 'sr_yalu_theme'),
				   "desc" => __("The url to the webmv file", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedvideowebmv",
				   "type" => "text"
				  ),
			
			array( "name" => __("Image (Optional)", 'sr_yalu_theme'),
				   "desc" => __("Enter the url of one of your media image", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedvideopic",
				   "type" => "text"
				  ),
			
			array( "name" => __("ID", 'sr_yalu_theme'),
				   "desc" => __("This is important if you want to add multiple audios/videos. Use a unique value.", 'sr_yalu_theme'),
				   "id" => $sc."_selhostedvideoid",
				   "type" => "text"
				  ),
	
	array( "name" => __("Selhosted Video", 'sr_yalu_theme'),
		   "id" => "selhostedvideo",
		   "type" => "sectionend"),
	
	
	
	array( "name" => __("Skills", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "skills",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => "Group",
				   "id" => $sc."_skillgroup",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Skill Size", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_skillsize",
					   "type" => "selectbox",
					   "option" => array( 
						array(	"name" => __("Small", 'sr_yalu_theme'), 
							  	"value" => "small"),
						array(	"name" => __("Big", 'sr_yalu_theme'), 
							  	"value"=> "big")
						)
					  ),
				
				array( "name" => __("Percent Amount", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sc."_skillpercent",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_skillname",
					   "type" => "text"
					  ),
				
				array( "name" => __("Color (Ex. '#000000')", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_skillcolor",
					   "type" => "color"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_skillgroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add Skill", 'sr_yalu_theme'),
				   "id" => $sc."_skillduplicater",
				   "group" => $sc."_skillgroup",
				   "type" => "grouduplicater"
				  ),

	array ( "name" => __("Skills", 'sr_yalu_theme'),
		   	"id" => "skills",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Tabs", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "tab",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => "Group",
				   "id" => $sc."_tabgroup",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Tab Name", 'sr_yalu_theme'),
				   	   "desc" => "",
					   "id" => $sc."_tabname",
					   "type" => "text"
					  ),
				
				array( "name" => __("Tab Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_tabtext",
					   "type" => "textarea"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_tabgroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add Tab", 'sr_yalu_theme'),
				   "id" => $sc."_tabduplicater",
				   "group" => $sc."_tabgroup",
				   "type" => "grouduplicater"
				  ),

	array ( "name" => __("Tabs", 'sr_yalu_theme'),
		   	"id" => "tab",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Team Member", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "team",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Team Layout", 'sr_yalu_theme'),
				   "desc" => __("Choose a layout", 'sr_yalu_theme'),
				   "id" => $sc."_teamlayout",
				   "type" => "radiocustom",
				   "option" => array( 
						array(	"name" =>"Layout 2 x one_half", 
							  	"value" => "layout_onehalf-onehalf"),
						array(	"name" =>"Layout 3 x one_third", 
							  	"value"=> "layout_onethird-onethird-onethird"),
						array(	"name" =>"Layout 4 x one_fourth", 
							  	"value"=> "layout_onefourth-onefourth-onefourth-onefourth")
						)
				  ),
	
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_one",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image URL", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_one",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_one",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_one",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_two",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image URL", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_two",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_two",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_two",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_three",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image URL", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_three",
					   "type" => "text"
					  ),
			
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_three",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_three",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_three",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_four",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image URL", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_four",
					   "type" => "text"
					  ),
			
				array( "name" => __("Name", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_four",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_yalu_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_four",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_four",
				   "type" => "groupend"
				  ),
			
	array( "name" => __("Team Member", 'sr_yalu_theme'),
		   "id" => "team",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Testimonial", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "testimonial",
		   "type" => "sectionstart"
		  ),
						
			array( "name" => __("Quote", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_testimonialquote",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Name", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_testimonialname",
				   "type" => "text"
				  ),
			
			array( "name" => __("Name Adittion", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_testimonialnameadd",
				   "type" => "text"
				  ),
	
	array( "name" => __("Testimonial", 'sr_yalu_theme'),
		   "id" => "testimonial",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Title Seperator", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "seperator",
		   "type" => "sectionstart"
		  ),
						
			array( "name" => __("Title", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_seperatortitle",
				   "type" => "text"
				  ),
			
			array( "name" => __("Size", 'sr_yalu_theme'),
				   "desc" => __("H4 is the default size which you've seen on the live preview.", 'sr_yalu_theme'),
				   "id" => $sc."_seperatorsize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"H1", 
								"value" => "h1"),			 	
						array(	"name" =>"H2", 
								"value" => "h2"),
						array(	"name" =>"H3", 
								"value" => "h3"),
						array(	"name" =>"H4", 
								"value" => "h4"),
						array(	"name" =>"H5", 
								"value" => "h5"),
						array(	"name" =>"H6", 
								"value" => "h6")
						)
				  ),
	
	array( "name" => __("Title Seperator", 'sr_yalu_theme'),
		   "id" => "seperator",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Toggle", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "toggle",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("Toggle Size", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_togglesize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Small", 
							  	"value" => "small"),
						array(	"name" =>"Big", 
							  	"value" => "big")
						)
				  ),
			
			array( "name" => __("Toggle Open", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_toggleopen",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"No", 
							  	"value" => "no"),			 	
						array(	"name" =>"Yes", 
							  	"value" => "yes")
						)
				  ),
	
			array( "name" => __("Toggle Title", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_toggletitle",
				   "type" => "text"
				  ),
			
			array( "name" => __("Toggle Text", 'sr_yalu_theme'),
				   "desc" => "",
				   "id" => $sc."_toggletext",
				   "type" => "textarea"
				  ),
						
	
	array( "name" => __("Toggle", 'sr_yalu_theme'),
		   "id" => "toggle",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Video", 'sr_yalu_theme'),
		   "desc" => "",
		   "id" => "video",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Iframe Code", 'sr_yalu_theme'),
				   "desc" => __("Please enter the embedded iframe code which is provided by vimeo, youtube, ...", 'sr_yalu_theme'),
				   "id" => $sc."_video",
				   "type" => "textarea"
				  ),
	
	array( "name" => __("Video", 'sr_yalu_theme'),
		   "id" => "video",
		    "type" => "sectionend"),
	
	
);

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="js/tinymce_popup.js"></script>
<script language="javascript" type="text/javascript" src="js/shortcodes-tinymce.js"></script>
<!-- <style type="text/css" src="css/dialog.css"></style> -->
<link rel="stylesheet" href="css/shortcodes-tinymce.css" />

<title>Shortcodes</title>

</head>
<body>

<div id="shortcodes">

	<div class="sc_option_panel">
    	<ul class="sc_list">
		<?php 
        
        foreach ($options as $opt) {
            if ($opt['type'] == 'sectionstart') {
                echo '<li class="'.$opt['id'].'"><a href="'.$opt['id'].'"><b>'.$opt['name'].'</b></a></li>';	 
            }
        }
        
        ?>
		</ul>
	</div> <!-- END .sc_option_panel -->
    
    
    
    <div class="sc_option">
    
    	<?php 
        
        foreach ($options as $option) {
            switch ( $option['type'] ) {
		
			//sectionstart
			case "sectionstart":
				echo '	<div id="'.$option['id'].'" class="option-content">
						<div class="option-title"><b>'.$option['name'].'</b><br /><span><i>'.$option['desc'].'</i></span></div>
						<form id="form_'.$option['id'].'" action="" method="get" accept-charset="utf-8">
						';
			break;
			
			//sectionend
			case "sectionend":
				echo '	<a href="" id="insert_'.$option['id'].'" class="submit">'.__("Insert", 'sr_yalu_theme').'</a> 
						</form>
						</div>';
			break;
			
			//groupstart
			case "groupstart":
				echo '	<div id="'.$option['id'].'" class="group">';
			break;
			
			//groupend
			case "groupend":
				echo '	</div>';
			break;
			
			//grouduplicater
			case "grouduplicater";
				echo '	<a href="'.$option['group'].'" id="'.$option['id'].'" class="groupduplicater">&raquo; '.$option['name'].'</a><br>';
			break;
			
			//text
			case "text":
				echo '<div id="'.$option['id'].'" class="option clear">';
					echo '	<div class="option_name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sr_description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="option_value">
								<input type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="" size="30" />
							</div>';
				echo '</div>';
			break;
			
			// selectbox  
			case 'selectbox':  
				echo '<div id="'.$option['id'].'" class="option clear">';
					echo '	<div class="option_name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sr_description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="option_value">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								$i = 0;
								foreach ($option['option'] as $var) {
									echo '<option value="'.$var['value'].'" /> '.$var['name'].'</div>';
								$i++;	
								}			  
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			//textarea
			case "textarea":
				echo '<div id="'.$option['id'].'" class="option clear">';
					echo '	<div class="option_name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sr_description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="option_value">
								<textarea name="'.$option['id'].'" id="'.$option['id'].'"></textarea>
							</div>';
				echo '</div>';
			break;
			
			//radiocustom
			case "radiocustom":
				echo '<div id="'.$option['id'].'" class="option clear radiocustom">';
					echo '	<div class="option_name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sr_description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="option_value">';
					
					$i = 0;
					foreach ($option['option'] as $var) {
						echo '<input type="radio" name="'.$option['id'].'" id="'.$var['value'].'" value="'.$var['value'].'" />
						<a class="customradio '.$var['value'].'" href="'.$var['value'].'"><span>'.$var['name'].'</span></a>';
					$i++;	
					}
	
					echo '	</div>';		
				echo '</div>';
			break;
			
			//color
			case "color":
				echo '<div id="'.$option['id'].'" class="option clear">';
					echo '	<div class="option_name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sr_description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="option_value">
								<input type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="" size="30" class="sr-color-field" />
							</div>';		
				echo '</div>';
			break;
			
			//gallery
			case "gallery":
				echo '<div id="'.$option['id'].'" class="option clear">';
					echo '	<div class="option_name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sr_description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="option_value">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								  $gal = get_posts( array('post_type' => 'gallery') );
								  foreach ( $gal as $g ) {
									if ($g->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
									$option = '<option value="' . $g->ID . '" '.$active.'>';
									$option .= $g->post_title;
									$option .= '</option>';
									echo $option;
								  }
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			}
			
        }
        
        ?>
    
    </div> <!-- END .sc_option_panel -->

</div>
    
</body>
</html>