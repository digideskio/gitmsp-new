$(document).ready(function() {
						  

	$('.sc_list li:first-child a').addClass('active');
	$('.sc_option .option-content:first-child').show();
	
	
	$('.sc_list li a').click(function() {
	
		$('.sc_list li a').removeClass('active');
		$(this).addClass('active');
		
		var showoption = $(this).attr('href');
		$('.sc_option .option-content').hide();
		$('.sc_option #'+showoption).show();
		
		return (false);
	});
	
	
	
	
	/*
	* 	Custom radio
	*/
	$('.customradio').click(function() { 
		
		value = $(this).attr('href');
		parent = $(this).parent();
		
		$(parent).find(".customradio").removeClass('active');
		$(this).addClass('active');
		
		$(parent).find("input").removeAttr("checked");
		$(parent).find("#"+value).attr("checked", "checked");
		
		var form = $(parent).parents('form').attr('id');
		
		
		
		/* custom columns show/hide */
		if (form == 'form_columns') {
			$(parent).parents(".option-content").find('#sc_column_one').hide();
			$(parent).parents(".option-content").find('#sc_column_two').hide();
			$(parent).parents(".option-content").find('#sc_column_three').hide();
			$(parent).parents(".option-content").find('#sc_column_four').hide();
			$(parent).parents(".option-content").find('#sc_column_five').hide();
			
			if (value == 'layout_onehalf-onehalf' || value == 'layout_onethird-twothird' || value == 'layout_twothird-onethird') {
				$(parent).parents(".option-content").find('#sc_column_one').show();
				$(parent).parents(".option-content").find('#sc_column_two').show();
			} else if (value == 'layout_onethird-onethird-onethird' || value == 'layout_onehalf-onefourth-onefourth') {
				$(parent).parents(".option-content").find('#sc_column_one').show();
				$(parent).parents(".option-content").find('#sc_column_two').show();
				$(parent).parents(".option-content").find('#sc_column_three').show();
			} else if (value == 'layout_onefourth-onefourth-onefourth-onefourth') {
				$(parent).parents(".option-content").find('#sc_column_one').show();
				$(parent).parents(".option-content").find('#sc_column_two').show();
				$(parent).parents(".option-content").find('#sc_column_three').show();
				$(parent).parents(".option-content").find('#sc_column_four').show();
			} else if (value == 'layout_onefifth-onefifth-onefifth-onefifth-onefifth') {
				$(parent).parents(".option-content").find('#sc_column_one').show();
				$(parent).parents(".option-content").find('#sc_column_two').show();
				$(parent).parents(".option-content").find('#sc_column_three').show();
				$(parent).parents(".option-content").find('#sc_column_four').show();
				$(parent).parents(".option-content").find('#sc_column_five').show();
			}
		}
		
		
		
		/* icon box show/hide */
		if (form == 'form_iconbox') {
			$(parent).parents(".option-content").find('#sc_iconboxgroup_one').hide();
			$(parent).parents(".option-content").find('#sc_iconboxgroup_two').hide();
			$(parent).parents(".option-content").find('#sc_iconboxgroup_three').hide();
			$(parent).parents(".option-content").find('#sc_iconboxgroup_four').hide();
			
			if (value == 'layout_onehalf-onehalf') {
				$(parent).parents(".option-content").find('#sc_iconboxgroup_one').show();
				$(parent).parents(".option-content").find('#sc_iconboxgroup_two').show();
			} else if (value == 'layout_onethird-onethird-onethird') {
				$(parent).parents(".option-content").find('#sc_iconboxgroup_one').show();
				$(parent).parents(".option-content").find('#sc_iconboxgroup_two').show();
				$(parent).parents(".option-content").find('#sc_iconboxgroup_three').show();
			} else if (value == 'layout_onefourth-onefourth-onefourth-onefourth') {
				$(parent).parents(".option-content").find('#sc_iconboxgroup_one').show();
				$(parent).parents(".option-content").find('#sc_iconboxgroup_two').show();
				$(parent).parents(".option-content").find('#sc_iconboxgroup_three').show();
				$(parent).parents(".option-content").find('#sc_iconboxgroup_four').show();
			}
		}
		
		
		/* team member show/hide */
		if (form == 'form_team') {
			$(parent).parents(".option-content").find('#sc_teamgroup_one').hide();
			$(parent).parents(".option-content").find('#sc_teamgroup_two').hide();
			$(parent).parents(".option-content").find('#sc_teamgroup_three').hide();
			$(parent).parents(".option-content").find('#sc_teamgroup_four').hide();
			
			if (value == 'layout_onehalf-onehalf') {
				$(parent).parents(".option-content").find('#sc_teamgroup_one').show();
				$(parent).parents(".option-content").find('#sc_teamgroup_two').show();
			} else if (value == 'layout_onethird-onethird-onethird') {
				$(parent).parents(".option-content").find('#sc_teamgroup_one').show();
				$(parent).parents(".option-content").find('#sc_teamgroup_two').show();
				$(parent).parents(".option-content").find('#sc_teamgroup_three').show();
			} else if (value == 'layout_onefourth-onefourth-onefourth-onefourth') {
				$(parent).parents(".option-content").find('#sc_teamgroup_one').show();
				$(parent).parents(".option-content").find('#sc_teamgroup_two').show();
				$(parent).parents(".option-content").find('#sc_teamgroup_three').show();
				$(parent).parents(".option-content").find('#sc_teamgroup_four').show();
			}
		}
		
		
		/* pricing tables show/hide */
		if (form == 'form_pricing') {
			$(parent).parents(".option-content").find('#sc_pricinggroup_one').hide();
			$(parent).parents(".option-content").find('#sc_pricinggroup_two').hide();
			$(parent).parents(".option-content").find('#sc_pricinggroup_three').hide();
			$(parent).parents(".option-content").find('#sc_pricinggroup_four').hide();
			
			if (value == 'layout_onehalf-onehalf') {
				$(parent).parents(".option-content").find('#sc_pricinggroup_one').show();
				$(parent).parents(".option-content").find('#sc_pricinggroup_two').show();
			} else if (value == 'layout_onethird-onethird-onethird') {
				$(parent).parents(".option-content").find('#sc_pricinggroup_one').show();
				$(parent).parents(".option-content").find('#sc_pricinggroup_two').show();
				$(parent).parents(".option-content").find('#sc_pricinggroup_three').show();
			} else if (value == 'layout_onefourth-onefourth-onefourth-onefourth') {
				$(parent).parents(".option-content").find('#sc_pricinggroup_one').show();
				$(parent).parents(".option-content").find('#sc_pricinggroup_two').show();
				$(parent).parents(".option-content").find('#sc_pricinggroup_three').show();
				$(parent).parents(".option-content").find('#sc_pricinggroup_four').show();
			}
		}
		
		
		return false;
		
	
	});
	
	
	
	
	/*
	* 	DUPLICATER
	*/
		
	$('.groupduplicater').click(function() {
		
		var group = $(this).attr('href');
		var parent = $(this).parent('form');
		var groupcontent = $(this).parent('form').find('.group:first').html();
		
		$(this).before('<div id="'+group+'" class="group">'+groupcontent+'</div>');
		
		return false;
	});
	
	
	
	
	/*
	* 	Submit
	*/
	$('.submit').click(function() {
		var check = true;
		
		// ---------------------- CONTROL COLUMNS
		if ($(this).attr('id') == 'insert_columns') {
			var layout = $(this).parent('form').find('input[name="sc_columnlayout"]:checked').val();
			if (layout) {   } else { alert('Please Choose a column layout'); check = false; } 
		}
		// ---------------------- CONTROL COLUMNS
		
		
		// ---------------------- CONTROL ICONBOX
		if ($(this).attr('id') == 'insert_iconbox') {
			var layout = $(this).parent('form').find('input[name="sc_iconboxlayout"]:checked').val();
			if (layout) {   } else { alert('Please Choose a IconBox layout'); check = false; } 
		}
		// ---------------------- CONTROL ICONBOX
		
		
		// ---------------------- CONTROL TEAM
		if ($(this).attr('id') == 'insert_team') {
			var layout = $(this).parent('form').find('input[name="sc_teamlayout"]:checked').val();
			if (layout) {   } else { alert('Please Choose a Team layout'); check = false; } 
		}
		// ---------------------- CONTROL TEAM
		
		
		// ---------------------- CONTROL PRICING
		if ($(this).attr('id') == 'insert_pricing') {
			var layout = $(this).parent('form').find('input[name="sc_pricinglayout"]:checked').val();
			if (layout) {   } else { alert('Please Choose a Pricing layout'); check = false; } 
		}
		// ---------------------- CONTROL TEAM
		
		
		// ---------------------- CONTROL CONTACT
		if ($(this).attr('id') == 'insert_contact') {
			var mail = $(this).parent('form').find('input#sc_contactsendto').val();
			if (mail) {   } else { alert('Please enter a recipient email'); check = false; } 
		}
		// ---------------------- CONTROL CONTACT
				
		
		if (check) {
			ButtonDialog.insert(ButtonDialog.local_ed, $(this).attr('id'));
		}
		
		return false;
	});
	

});



	
var ButtonDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ButtonDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertColumns(ed, id) {
	 	
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		 
		var outputbefore = ''; 
		var output = ''; 
		
		// ---------------------- COLUMNS
		if (id == 'insert_columns') {
			
			var layout = $('#'+id).parent('form').find('input[name="sc_columnlayout"]:checked').val();
			var text_one = $('#'+id).parent('form').find('textarea#sc_column_one').val();
			var text_two = $('#'+id).parent('form').find('textarea#sc_column_two').val();
			var text_three = $('#'+id).parent('form').find('textarea#sc_column_three').val();
			var text_four = $('#'+id).parent('form').find('textarea#sc_column_four').val();
			var text_five = $('#'+id).parent('form').find('textarea#sc_column_five').val();
						
			if (layout == 'layout_onehalf-onehalf') {
				output = '[one_half]'+text_one+'[/one_half]';	
				output += '[one_half_last]'+text_two+'[/one_half_last]';	
			} else if (layout == 'layout_twothird-onethird') {
				output = '[two_third]'+text_one+'[/two_third]';	
				output += '[one_third_last]'+text_two+'[/one_third_last]';	
			} else if (layout == 'layout_onethird-twothird') {
				output = '[one_third]'+text_one+'[/one_third]';	
				output += '[two_third_last]'+text_two+'[/two_third_last]';	
			} else if (layout == 'layout_onethird-onethird-onethird') {
				output = '[one_third]'+text_one+'[/one_third]';	
				output += '[one_third]'+text_two+'[/one_third]';	
				output += '[one_third_last]'+text_three+'[/one_third_last]';	
			} else if (layout == 'layout_onehalf-onefourth-onefourth') {
				output = '[one_half]'+text_one+'[/one_half]';	
				output += '[one_fourth]'+text_two+'[/one_fourth]';	
				output += '[one_fourth_last]'+text_three+'[/one_fourth_last]';	
			} else if (layout == 'layout_onefourth-onefourth-onefourth-onefourth') {
				output = '[one_fourth]'+text_one+'[/one_fourth]';	
				output += '[one_fourth]'+text_two+'[/one_fourth]';	
				output += '[one_fourth]'+text_three+'[/one_fourth]';	
				output += '[one_fourth_last]'+text_four+'[/one_fourth_last]';	
			} else if (layout == 'layout_onefifth-onefifth-onefifth-onefifth-onefifth') {
				output = '[one_fifth]'+text_one+'[/one_fifth]';	
				output += '[one_fifth]'+text_two+'[/one_fifth]';	
				output += '[one_fifth]'+text_three+'[/one_fifth]';	
				output += '[one_fifth]'+text_four+'[/one_fifth]';	
				output += '[one_fifth_last]'+text_five+'[/one_fifth_last]';	
			}
			
			
		}
		// ---------------------- COLUMNS
		
		
		
		
		// ---------------------- SKILLS
		if (id == 'insert_skills') {
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					var skill_percent = jQuery(this).find('input#sc_skillpercent').val();
					var skill_name = jQuery(this).find('input#sc_skillname').val();
					var skill_size = jQuery(this).find('select#sc_skillsize').val();
					var skill_color = jQuery(this).find('input#sc_skillcolor').val();
					output += '[skill amount="'+skill_percent+'" name="'+skill_name+'" size="'+skill_size+'" color="'+skill_color+'"]';
			});
			
		}
		// ---------------------- SKILLS
		
		
		
		// ---------------------- SELHOSTEDT AUDIO
		if (id == 'insert_selhostedaudio') {
			
			var mp3 = $('#'+id).parent('form').find('input#sc_selhostedaudiomp3').val();
			var oga = $('#'+id).parent('form').find('input#sc_selhostedaudiooga').val();
			var pic = $('#'+id).parent('form').find('input#sc_selhostedaudiopic').val();
			var id = $('#'+id).parent('form').find('input#sc_selhostedaudioid').val();
			output += '[selhostedtaudio mp3="'+mp3+'" oga="'+oga+'" pic="'+pic+'" id="'+id+'"]';
	
		}
		// ---------------------- SELHOSTEDT AUDIO
		
		
		
		// ---------------------- SELHOSTEDT VIDEO
		if (id == 'insert_selhostedvideo') {
			
			var m4v = $('#'+id).parent('form').find('input#sc_selhostedvideom4v').val();
			var oga = $('#'+id).parent('form').find('input#sc_selhostedvideooga').val();
			var webmv = $('#'+id).parent('form').find('input#sc_selhostedvideowebmv').val();
			var pic = $('#'+id).parent('form').find('input#sc_selhostedvideopic').val();
			var id = $('#'+id).parent('form').find('input#sc_selhostedvideoid').val();
			output += '[selhostedtvideo m4v="'+m4v+'" oga="'+oga+'" webmv="'+webmv+'" pic="'+pic+'" id="'+id+'"]';
	
		}
		// ---------------------- SELHOSTEDT VIDEO
		
		
		
		
		// ---------------------- CONTACT
		if (id == 'insert_contact') {
			
			var fields = '';
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					
					var fieldtype = $(this).find('select#sc_contacttype').val();
					var fieldname = $(this).find('input#sc_contactname').val();
					var slugname = $(this).find('input#sc_contactslug').val();
					if (slugname == '') { slugname = fieldname.toLowerCase(); slugname = slugname.replace(' ',''); } 
					var required = $(this).find('select#sc_contactreq').val();
					
					output += '[field type='+fieldtype+' name="'+fieldname+'" slug='+slugname+' required='+required+']';
					if (fieldtype !== 'submitbutton') { fields += slugname+','; }
					
			});
			
			var email =  $('#'+id).parent('form').find('input#sc_contactsendto').val();
			var subject =  $('#'+id).parent('form').find('input#sc_contactsubject').val();
			var submitname = $('#'+id).parent('form').find('input#sc_contactsubmit').val();
			
			output = '[contactgroup fields='+fields+' email='+email+' subject="'+subject+'" submit="'+submitname+'"]'+output+'[/contactgroup]';
		}
		// ---------------------- CONTACT
		
		
		
		// ---------------------- BUTTONS
		if (id == 'insert_buttons') {
			
			var color = $('#'+id).parent('form').find('select#sc_buttoncolor').val();
			var size = $('#'+id).parent('form').find('select#sc_buttonsize').val();
			var target = $('#'+id).parent('form').find('select#sc_buttontarget').val();
			var url = $('#'+id).parent('form').find('input#sc_buttonurl').val();
			var text = $('#'+id).parent('form').find('input#sc_buttontext').val();
			
			output = '[button color='+color+' url="'+url+'" size="'+size+'" target="'+target+'"]'+text+'[/button]';
			
		}
		// ---------------------- BUTTONS
		
		
		
		// ---------------------- ALERT
		if (id == 'insert_alert') {
			
			var color = $('#'+id).parent('form').find('select#sc_alertcolor').val();
			var size = $('#'+id).parent('form').find('select#sc_alertsize').val();
			var aclose = $('#'+id).parent('form').find('select#sc_alertclose').val();
			var text = $('#'+id).parent('form').find('textarea#sc_alerttext').val();
			
			output = '[alert color='+color+' size='+size+' close='+aclose+']'+text+'[/alert]';
			
		}
		// ---------------------- ALERT
		
		
		
		// ---------------------- TOGGLE
		if (id == 'insert_toggle') {
			
			var title = $('#'+id).parent('form').find('input#sc_toggletitle').val();
			var size = $('#'+id).parent('form').find('select#sc_togglesize').val();
			var aopen = $('#'+id).parent('form').find('select#sc_toggleopen').val();
			var text = $('#'+id).parent('form').find('textarea#sc_toggletext').val();
			output = '[toggle title="'+title+'" size='+size+' open='+aopen+']'+text+'[/toggle]';
			
		}
		// ---------------------- TOGGLE
		
		
		// ---------------------- TABS
		if (id == 'insert_tab') {
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					var tab_name = jQuery(this).find('input#sc_tabname').val();
					var tab_text = jQuery(this).find('textarea#sc_tabtext').val();
					outputbefore += tab_name+',';
					output += '[tab id="'+(index+1)+'"]'+tab_text+'[/tab]';
			});
			
			output = '[tabs title="'+outputbefore+'"]'+output+'[/tabs]';
		}
		// ---------------------- TABS
		
		
		// ---------------------- ACCORDION
		if (id == 'insert_accordion') {
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					var accordion_size = jQuery(this).find('select#sc_accordionsize').val();
					var accordion_open = jQuery(this).find('select#sc_accordionopen').val();
					var accordion_name = jQuery(this).find('input#sc_accordiontitle').val();
					var accordion_text = jQuery(this).find('textarea#sc_accordiontext').val();
					output += '[accordion title="'+accordion_name+'" size="'+accordion_size+'" open="'+accordion_open+'"]'+accordion_text+'[/accordion]';
			});
			
			output = '[accordiongroup]'+output+'[/accordiongroup]';
		}
		// ---------------------- ACCORDION
		
		
		
		// ---------------------- GALLERY
		if (id == 'insert_gallery') {
			
			var gal_id = $('#'+id).parent('form').find('select#sc_galleryid').val();
			var cols = $('#'+id).parent('form').find('select#sc_gallerycolumns').val();
			var carousel = $('#'+id).parent('form').find('select#sc_gallerycarousel').val();
			
			output = '[sr_customgallery id="'+gal_id+'" columns="'+cols+'" carousel="'+carousel+'"]';
			
		}
		// ---------------------- GALLERY
		
		
		
		// ---------------------- VIDEO
		if (id == 'insert_video') {
			
			var iframe = $('#'+id).parent('form').find('textarea#sc_video').val();
			
			output = '[sr_video]'+iframe+'[/sr_video]';
			
		}
		// ---------------------- VIDEO
		
		
		
		// ---------------------- SEPERATOR
		if (id == 'insert_seperator') {
			
			var title = $('#'+id).parent('form').find('input#sc_seperatortitle').val();
			var size = $('#'+id).parent('form').find('select#sc_seperatorsize').val();
			
			output = '[seperator title="'+title+'" size="'+size+'"]';
			
		}
		// ---------------------- SEPERATOR
		
		
		
		// ---------------------- LATEST NEWS
		if (id == 'insert_latestnews') {
			
			var title = $('#'+id).parent('form').find('input#sc_latestnewstitle').val();
			var number = $('#'+id).parent('form').find('select#sc_latestnewsnumber').val();
			
			output = '[latestnews title="'+title+'" number="'+number+'"]';
			
		}
		// ---------------------- LATEST NEWS
		
		
		// ---------------------- RECENT WORKS
		if (id == 'insert_recentworks') {
			
			var title = $('#'+id).parent('form').find('input#sc_recentworkstitle').val();
			var col = $('#'+id).parent('form').find('select#sc_recentworkscolumn').val();
			var number = $('#'+id).parent('form').find('input#sc_recentworksnumber').val();
			
			output = '[recentworks title="'+title+'" col="'+col+'" number="'+number+'"]';
			
		}
		// ---------------------- RECENT WORKS
		
		
		
		// ---------------------- MAP
		if (id == 'insert_map') {
			
			var latlong = $('#'+id).parent('form').find('input#sc_maplatlong').val();
			var text = $('#'+id).parent('form').find('textarea#sc_maptext').val();
			var icon = $('#'+id).parent('form').find('input#sc_mapicon').val();
			var height = $('#'+id).parent('form').find('input#sc_mapheight').val();
			var id = $('#'+id).parent('form').find('input#sc_mapid').val();

			output = '[googlemap latlong="'+latlong+'" icon="'+icon+'" height="'+height+'"]'+text+'[/googlemap]';
			
		}
		// ---------------------- MAP
		
		
		
		// ---------------------- HIGHLIGHT
		if (id == 'insert_highlight') {
			
			var style = $('#'+id).parent('form').find('select#sc_highlightstyle').val();
			var align = $('#'+id).parent('form').find('select#sc_highlightalign').val();
			var title = $('#'+id).parent('form').find('input#sc_highlighttitle').val();
			var titlesize = $('#'+id).parent('form').find('select#sc_highlighttitlesize').val();
			var titlecolor = $('#'+id).parent('form').find('select#sc_highlighttitlecolor').val();
			var subtitle = $('#'+id).parent('form').find('input#sc_highlightsubtitle').val();
			var text = $('#'+id).parent('form').find('textarea#sc_highlighttext').val();
			var buttonlink = $('#'+id).parent('form').find('input#sc_highlightbuttonlink').val();
			var buttontext = $('#'+id).parent('form').find('input#sc_highlightbuttontext').val();
			
			if (style == 'colored') { var buttoncolor = 'default-button3' } else { var buttoncolor = 'default-button1' }
			
			output = '[highlight style="'+style+'" align="'+align+'"][highlighttext title="'+title+'" titlesize="'+titlesize+'" titlecolor="'+titlecolor+'" subtitle="'+subtitle+'" align="'+align+'"]'+text+'[/highlighttext]';
			if (buttonlink && buttontext) { output = output+'[highlightbutton align="'+align+'"][button color='+buttoncolor+' url="'+buttonlink+'" size="medium-button" target="_self"]'+buttontext+'[/button][/highlightbutton]'; }
			output = output+'[/highlight]';
			
		}
		// ---------------------- TOGGLE
		
		
		// ---------------------- TESTIMONIAL
		if (id == 'insert_testimonial') {
			
			var quote = $('#'+id).parent('form').find('textarea#sc_testimonialquote').val();
			var name = $('#'+id).parent('form').find('input#sc_testimonialname').val();
			var nameaddition = $('#'+id).parent('form').find('input#sc_testimonialnameadd').val();
			
			output = '[testimonial name="'+name+'" nameaddition="'+nameaddition+'"]'+quote+'[/testimonial]';
			
		}
		// ---------------------- TESTIMONIAL
		
		
		// ---------------------- ICONBOX
		if (id == 'insert_iconbox') {
			
			var layout = $('#'+id).parent('form').find('input[name="sc_iconboxlayout"]:checked').val();
			var spaced = $('#'+id).parent('form').find('select#sc_iconboxspaced').val();
			var scale = $('#'+id).parent('form').find('select#sc_iconboxscale').val();
			
			var color_one = $('#'+id).parent('form').find('input#sc_iconboxcolor_one').val();
			var icon_one = $('#'+id).parent('form').find('input#sc_iconboxicon_one').val();
			var name_one = $('#'+id).parent('form').find('input#sc_iconboxname_one').val();
			var text_one = $('#'+id).parent('form').find('textarea#sc_iconboxtext_one').val();
			var link_one = $('#'+id).parent('form').find('input#sc_iconboxlink_one').val();
			
			var color_two = $('#'+id).parent('form').find('input#sc_iconboxcolor_two').val();
			var icon_two = $('#'+id).parent('form').find('input#sc_iconboxicon_two').val();
			var name_two = $('#'+id).parent('form').find('input#sc_iconboxname_two').val();
			var text_two = $('#'+id).parent('form').find('textarea#sc_iconboxtext_two').val();
			var link_two = $('#'+id).parent('form').find('input#sc_iconboxlink_two').val();
			
			var color_three = $('#'+id).parent('form').find('input#sc_iconboxcolor_three').val();
			var icon_three = $('#'+id).parent('form').find('input#sc_iconboxicon_three').val();
			var name_three = $('#'+id).parent('form').find('input#sc_iconboxname_three').val();
			var text_three = $('#'+id).parent('form').find('textarea#sc_iconboxtext_three').val();
			var link_three = $('#'+id).parent('form').find('input#sc_iconboxlink_three').val();
			
			var color_four = $('#'+id).parent('form').find('input#sc_iconboxcolor_four').val();
			var icon_four = $('#'+id).parent('form').find('input#sc_iconboxicon_four').val();
			var name_four = $('#'+id).parent('form').find('input#sc_iconboxname_four').val();
			var text_four = $('#'+id).parent('form').find('textarea#sc_iconboxtext_four').val();
			var link_four = $('#'+id).parent('form').find('input#sc_iconboxlink_four').val();

						
			if (layout == 'layout_onehalf-onehalf') {
				output = '[iconbox_one_half name="'+name_one+'" icon="'+icon_one+'" color="'+color_one+'" link="'+link_one+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_one+'[/iconbox_one_half]';	
				output += '[iconbox_one_half_last name="'+name_two+'" icon="'+icon_two+'" color="'+color_two+'" link="'+link_two+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_two+'[/iconbox_one_half_last]';	
			} else if (layout == 'layout_onethird-onethird-onethird') {
				output = '[iconbox_one_third name="'+name_one+'" icon="'+icon_one+'" color="'+color_one+'" link="'+link_one+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_one+'[/iconbox_one_third]';	
				output += '[iconbox_one_third name="'+name_two+'" icon="'+icon_two+'" color="'+color_two+'" link="'+link_two+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_two+'[/iconbox_one_third]';	
				output += '[iconbox_one_third_last name="'+name_three+'" icon="'+icon_three+'" color="'+color_three+'" link="'+link_three+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_three+'[/iconbox_one_third_last]';	
			} else if (layout == 'layout_onefourth-onefourth-onefourth-onefourth') {
				output = '[iconbox_one_fourth name="'+name_one+'" icon="'+icon_one+'" color="'+color_one+'" link="'+link_one+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_one+'[/iconbox_one_fourth]';	
				output += '[iconbox_one_fourth name="'+name_two+'" icon="'+icon_two+'" color="'+color_two+'" link="'+link_two+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_two+'[/iconbox_one_fourth]';	
				output += '[iconbox_one_fourth name="'+name_three+'" icon="'+icon_three+'" color="'+color_three+'" link="'+link_three+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_three+'[/iconbox_one_fourth]';	
				output += '[iconbox_one_fourth_last name="'+name_four+'" icon="'+icon_four+'" color="'+color_four+'" link="'+link_four+'" spaced="'+spaced+'" scale="'+scale+'"]'+text_four+'[/iconbox_one_fourth_last]';	
			}
			
			
			
		}
		// ---------------------- ICONBOX
		
		
		// ---------------------- TEAM
		if (id == 'insert_team') {
			
			var layout = $('#'+id).parent('form').find('input[name="sc_teamlayout"]:checked').val();
			
			var img_one = $('#'+id).parent('form').find('input#sc_teamimage_one').val();
			var name_one = $('#'+id).parent('form').find('input#sc_teamname_one').val();
			var title_one = $('#'+id).parent('form').find('input#sc_teamtitle_one').val();
			var text_one = $('#'+id).parent('form').find('textarea#sc_teamtext_one').val();
			var facebook_one = $('#'+id).parent('form').find('input#sc_teamfacebook_one').val();
			var twitter_one = $('#'+id).parent('form').find('input#sc_teamtwitter_one').val();
			var google_one = $('#'+id).parent('form').find('input#sc_teamgoogle_one').val();
			var linkedin_one = $('#'+id).parent('form').find('input#sc_teamlinkedin_one').val();
			var mail_one = $('#'+id).parent('form').find('input#sc_teammail_one').val();
			
			var img_two = $('#'+id).parent('form').find('input#sc_teamimage_two').val();
			var name_two = $('#'+id).parent('form').find('input#sc_teamname_two').val();
			var title_two = $('#'+id).parent('form').find('input#sc_teamtitle_two').val();
			var text_two = $('#'+id).parent('form').find('textarea#sc_teamtext_two').val();
			var facebook_two = $('#'+id).parent('form').find('input#sc_teamfacebook_two').val();
			var twitter_two = $('#'+id).parent('form').find('input#sc_teamtwitter_two').val();
			var google_two = $('#'+id).parent('form').find('input#sc_teamgoogle_two').val();
			var linkedin_two = $('#'+id).parent('form').find('input#sc_teamlinkedin_two').val();
			var mail_two = $('#'+id).parent('form').find('input#sc_teammail_two').val();
			
			var img_three = $('#'+id).parent('form').find('input#sc_teamimage_three').val();
			var name_three = $('#'+id).parent('form').find('input#sc_teamname_three').val();
			var title_three = $('#'+id).parent('form').find('input#sc_teamtitle_three').val();
			var text_three = $('#'+id).parent('form').find('textarea#sc_teamtext_three').val();
			var facebook_three = $('#'+id).parent('form').find('input#sc_teamfacebook_three').val();
			var twitter_three = $('#'+id).parent('form').find('input#sc_teamtwitter_three').val();
			var google_three = $('#'+id).parent('form').find('input#sc_teamgoogle_three').val();
			var linkedin_three = $('#'+id).parent('form').find('input#sc_teamlinkedin_three').val();
			var mail_three = $('#'+id).parent('form').find('input#sc_teammail_three').val();
			
			var img_four = $('#'+id).parent('form').find('input#sc_teamimage_four').val();
			var name_four = $('#'+id).parent('form').find('input#sc_teamname_four').val();
			var title_four = $('#'+id).parent('form').find('input#sc_teamtitle_four').val();
			var text_four = $('#'+id).parent('form').find('textarea#sc_teamtext_four').val();
			var facebook_four = $('#'+id).parent('form').find('input#sc_teamfacebook_four').val();
			var twitter_four = $('#'+id).parent('form').find('input#sc_teamtwitter_four').val();
			var google_four = $('#'+id).parent('form').find('input#sc_teamgoogle_four').val();
			var linkedin_four = $('#'+id).parent('form').find('input#sc_teamlinkedin_four').val();
			var mail_four = $('#'+id).parent('form').find('input#sc_teammail_four').val();
			
						
			if (layout == 'layout_onehalf-onehalf') {
				output = '[team_one_half name="'+name_one+'" title="'+title_one+'" img="'+img_one+'" fb="'+facebook_one+'" tw="'+twitter_one+'" gl="'+google_one+'" li="'+linkedin_one+'" mail="'+mail_one+'"]'+text_one+'[/team_one_half]';	
				output += '[team_one_half_last name="'+name_two+'" title="'+title_two+'" img="'+img_two+'" fb="'+facebook_two+'" tw="'+twitter_two+'" gl="'+google_two+'" li="'+linkedin_two+'" mail="'+mail_two+'"]'+text_two+'[/team_one_half_last]';	
			} else if (layout == 'layout_onethird-onethird-onethird') {
				output = '[team_one_third name="'+name_one+'" title="'+title_one+'" img="'+img_one+'" fb="'+facebook_one+'" tw="'+twitter_one+'" gl="'+google_one+'" li="'+linkedin_one+'" mail="'+mail_one+'"]'+text_one+'[/team_one_third]';	
				output += '[team_one_third name="'+name_two+'" title="'+title_two+'" img="'+img_two+'" fb="'+facebook_two+'" tw="'+twitter_two+'" gl="'+google_two+'" li="'+linkedin_two+'" mail="'+mail_two+'"]'+text_two+'[/team_one_third]';	
				output += '[team_one_third_last name="'+name_three+'" title="'+title_three+'" img="'+img_three+'" fb="'+facebook_three+'" tw="'+twitter_three+'" gl="'+google_three+'" li="'+linkedin_three+'" mail="'+mail_three+'"]'+text_three+'[/team_one_third_last]';	
			} else if (layout == 'layout_onefourth-onefourth-onefourth-onefourth') {
				output = '[team_one_fourth name="'+name_one+'" title="'+title_one+'" img="'+img_one+'" fb="'+facebook_one+'" tw="'+twitter_one+'" gl="'+google_one+'" li="'+linkedin_one+'" mail="'+mail_one+'"]'+text_one+'[/team_one_fourth]';	
				output += '[team_one_fourth name="'+name_two+'" title="'+title_two+'" img="'+img_two+'" fb="'+facebook_two+'" tw="'+twitter_two+'" gl="'+google_two+'" li="'+linkedin_two+'" mail="'+mail_two+'"]'+text_two+'[/team_one_fourth]';	
				output += '[team_one_fourth name="'+name_three+'" title="'+title_three+'" img="'+img_three+'" fb="'+facebook_three+'" tw="'+twitter_three+'" gl="'+google_three+'" li="'+linkedin_three+'" mail="'+mail_three+'"]'+text_three+'[/team_one_fourth]';	
				output += '[team_one_fourth_last name="'+name_four+'" title="'+title_four+'" img="'+img_four+'" fb="'+facebook_four+'" tw="'+twitter_four+'" gl="'+google_four+'" li="'+linkedin_four+'" mail="'+mail_four+'"]'+text_four+'[/team_one_fourth_last]';	
			}
			
			
			
		}
		// ---------------------- TEAM
		
		
		
		// ---------------------- PRICING
		if (id == 'insert_pricing') {
			
			var layout = $('#'+id).parent('form').find('input[name="sc_pricinglayout"]:checked').val();
			
			var color_one = $('#'+id).parent('form').find('input#sc_pricingcolor_one').val();
			var title_one = $('#'+id).parent('form').find('input#sc_pricingtitle_one').val();
			var price_one = $('#'+id).parent('form').find('input#sc_pricingprice_one').val();
			var time_one = $('#'+id).parent('form').find('input#sc_pricingtime_one').val();
			var listing_one = $('#'+id).parent('form').find('textarea#sc_pricinglisting_one').val();
			var button_one = $('#'+id).parent('form').find('input#sc_pricingbutton_one').val();
			var url_one = $('#'+id).parent('form').find('input#sc_pricingurl_one').val();
			
			var color_two = $('#'+id).parent('form').find('input#sc_pricingcolor_two').val();
			var title_two = $('#'+id).parent('form').find('input#sc_pricingtitle_two').val();
			var price_two = $('#'+id).parent('form').find('input#sc_pricingprice_two').val();
			var time_two = $('#'+id).parent('form').find('input#sc_pricingtime_two').val();
			var listing_two = $('#'+id).parent('form').find('textarea#sc_pricinglisting_two').val();
			var button_two = $('#'+id).parent('form').find('input#sc_pricingbutton_two').val();
			var url_two = $('#'+id).parent('form').find('input#sc_pricingurl_two').val();
			
			var color_three = $('#'+id).parent('form').find('input#sc_pricingcolor_three').val();
			var title_three = $('#'+id).parent('form').find('input#sc_pricingtitle_three').val();
			var price_three = $('#'+id).parent('form').find('input#sc_pricingprice_three').val();
			var time_three = $('#'+id).parent('form').find('input#sc_pricingtime_three').val();
			var listing_three = $('#'+id).parent('form').find('textarea#sc_pricinglisting_three').val();
			var button_three = $('#'+id).parent('form').find('input#sc_pricingbutton_three').val();
			var url_three = $('#'+id).parent('form').find('input#sc_pricingurl_three').val();
			
			var color_four = $('#'+id).parent('form').find('input#sc_pricingcolor_four').val();
			var title_four = $('#'+id).parent('form').find('input#sc_pricingtitle_four').val();
			var price_four = $('#'+id).parent('form').find('input#sc_pricingprice_four').val();
			var time_four = $('#'+id).parent('form').find('input#sc_pricingtime_four').val();
			var listing_four = $('#'+id).parent('form').find('textarea#sc_pricinglisting_four').val();
			var button_four = $('#'+id).parent('form').find('input#sc_pricingbutton_four').val();
			var url_four = $('#'+id).parent('form').find('input#sc_pricingurl_four').val();
			
						
			if (layout == 'layout_onehalf-onehalf') {
				output = '[pricingwrapper columns="2"]';
				output += '[pricing title="'+title_one+'" color="'+color_one+'" price="'+price_one+'" time="'+time_one+'"][pricingbody]'+listing_one+'[/pricingbody][pricingbutton][button color=white-button url="'+url_one+'" size="medium-button" target="_self"]'+button_one+'[/button][/pricingbutton][/pricing]';	
				output += '[pricing title="'+title_two+'" color="'+color_two+'" price="'+price_two+'" time="'+time_two+'"][pricingbody]'+listing_two+'[/pricingbody][pricingbutton][button color=white-button url="'+url_two+'" size="medium-button" target="_self"]'+button_two+'[/button][/pricingbutton][/pricing]';
				output += '[/pricingwrapper]';	
			} else if (layout == 'layout_onethird-onethird-onethird') {
				output = '[pricingwrapper columns="3"]';
				output += '[pricing title="'+title_one+'" color="'+color_one+'" price="'+price_one+'" time="'+time_one+'"][pricingbody]'+listing_one+'[/pricingbody][pricingbutton][button color=white-button url="'+url_one+'" size="medium-button" target="_self"]'+button_one+'[/button][/pricingbutton][/pricing]';	
				output += '[pricing title="'+title_two+'" color="'+color_two+'" price="'+price_two+'" time="'+time_two+'"][pricingbody]'+listing_two+'[/pricingbody][pricingbutton][button color=white-button url="'+url_two+'" size="medium-button" target="_self"]'+button_two+'[/button][/pricingbutton][/pricing]';	
				output += '[pricing title="'+title_three+'" color="'+color_three+'" price="'+price_three+'" time="'+time_three+'"][pricingbody]'+listing_three+'[/pricingbody][pricingbutton][button color=white-button url="'+url_three+'" size="medium-button" target="_self"]'+button_three+'[/button][/pricingbutton][/pricing]';		
				output += '[/pricingwrapper]';	
			} else if (layout == 'layout_onefourth-onefourth-onefourth-onefourth') {
				output = '[pricingwrapper columns="4"]';
				output += '[pricing title="'+title_one+'" color="'+color_one+'" price="'+price_one+'" time="'+time_one+'"][pricingbody]'+listing_one+'[/pricingbody][pricingbutton][button color=white-button url="'+url_one+'" size="medium-button" target="_self"]'+button_one+'[/button][/pricingbutton][/pricing]';	
				output += '[pricing title="'+title_two+'" color="'+color_two+'" price="'+price_two+'" time="'+time_two+'"][pricingbody]'+listing_two+'[/pricingbody][pricingbutton][button color=white-button url="'+url_two+'" size="medium-button" target="_self"]'+button_two+'[/button][/pricingbutton][/pricing]';	
				output += '[pricing title="'+title_three+'" color="'+color_three+'" price="'+price_three+'" time="'+time_three+'"][pricingbody]'+listing_three+'[/pricingbody][pricingbutton][button color=white-button url="'+url_three+'" size="medium-button" target="_self"]'+button_three+'[/button][/pricingbutton][/pricing]';
				output += '[pricing title="'+title_four+'" color="'+color_four+'" price="'+price_four+'" time="'+time_four+'"][pricingbody]'+listing_four+'[/pricingbody][pricingbutton][button color=white-button url="'+url_four+'" size="medium-button" target="_self"]'+button_four+'[/button][/pricingbutton][/pricing]';	
				output += '[/pricingwrapper]';	
			}
			
			
		}
		// ---------------------- PRICING
		
		
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ButtonDialog.init, ButtonDialog);
