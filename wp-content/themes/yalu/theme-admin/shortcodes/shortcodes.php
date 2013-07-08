<?php

 
/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Columns
/*-----------------------------------------------------------------------------------*/
function sr_one_half( $atts, $content = null ) {
   return '<div class="column one-half">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('one_half', 'sr_one_half');

function sr_one_half_last( $atts, $content = null ) {
   return '<div class="column one-half last-col">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div><div class="clear"></div>';
}
add_shortcode('one_half_last', 'sr_one_half_last');

function sr_one_third( $atts, $content = null ) {
   return '<div class="column one-third">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('one_third', 'sr_one_third');

function sr_one_third_last( $atts, $content = null ) {
   return '<div class="column one-third last-col">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div><div class="clear"></div>';
}
add_shortcode('one_third_last', 'sr_one_third_last');

function sr_two_third( $atts, $content = null ) {
   return '<div class="column two-third">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('two_third', 'sr_two_third');

function sr_two_third_last( $atts, $content = null ) {
   return '<div class="column two-third last-col">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div><div class="clear"></div>';
}
add_shortcode('two_third_last', 'sr_two_third_last');

function sr_one_fourth( $atts, $content = null ) {
   return '<div class="column one-fourth">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('one_fourth', 'sr_one_fourth');

function sr_one_fourth_last( $atts, $content = null ) {
   return '<div class="column one-fourth last-col">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div><div class="clear"></div>';
}
add_shortcode('one_fourth_last', 'sr_one_fourth_last');

function sr_two_fourth( $atts, $content = null ) {
   return '<div class="column two-fourth">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('two_fourth', 'sr_two_fourth');

function sr_two_fourth_last( $atts, $content = null ) {
   return '<div class="column two-fourth last-col">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div><div class="clear"></div>';
}
add_shortcode('two_fourth_last', 'sr_two_fourth_last');

function sr_three_fourth( $atts, $content = null ) {
   return '<div class="column three-fourth">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('three_fourth', 'sr_three_fourth');

function sr_three_fourth_last( $atts, $content = null ) {
   return '<div class="column three-fourth last-col">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div><div class="clear"></div>';
}
add_shortcode('three_fourth_last', 'sr_three_fourth_last');

function sr_one_fifth( $atts, $content = null ) {
   return '<div class="column one-fifth">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('one_fifth', 'sr_one_fifth');

function sr_one_fifth_last( $atts, $content = null ) {
   return '<div class="column one-fifth last-col">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div><div class="clear"></div>';
}
add_shortcode('one_fifth_last', 'sr_one_fifth_last');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Iconbox
/*-----------------------------------------------------------------------------------*/
function sr_iconbox_one_half( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'Icon Title',
	  'icon' => '',
	  'color' => '',
	  'link' => '',
	  'spaced' => 'no',
	  'scale' => 'no'
      ), $atts ) );
	
	$img_id = sr_get_attachment_id_from_src($icon);
	$iconimage = wp_get_attachment_image($img_id, 'iconbox-thumb');
	
	if ($color && $color !== '') { $colorstyle = 'style="background: '.$color.';"'; $colorclass = 'box-color';  } else { $colorstyle = ''; $colorclass = ''; }
	if ($spaced == 'no') { $spacedclass = 'box-nonspaced';  } else { $spacedclass = '';  }
	if ($scale == 'yes') { $scaleclass = 'box-scale';  } else { $scaleclass = '';  }
	   
	$output = '<div class="iconbox box-one-half '.$colorclass.' '.$spacedclass.' '.$scaleclass.'" '.$colorstyle.'>
            	<div class="box-inner clearfix">';
	if ($icon) { $output .= '<div class="icon">'.$iconimage.'</div>'; }			
    $output .= '	<h3><strong>'.$name.'</strong></h3>
                    <div class="seperator"></div>
                    <p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';
	if ($link) { $output .= '<a class="link-moreinfo" href="'.$link.'">'.__("more Info", 'sr_yalu_theme').'</a>'; }			
    $output .= '</div>
            </div>';
   
   return $output;
}
add_shortcode('iconbox_one_half', 'sr_iconbox_one_half');

function sr_iconbox_one_half_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'Icon Title',
	  'icon' => '',
	  'color' => '',
	  'link' => '',
	  'spaced' => 'no',
	  'scale' => 'no'
      ), $atts ) );
	
	$img_id = sr_get_attachment_id_from_src($icon);
	$iconimage = wp_get_attachment_image($img_id, 'iconbox-thumb');
	
	if ($color && $color !== '') { $colorstyle = 'style="background: '.$color.';"'; $colorclass = 'box-color';  } else { $colorstyle = ''; $colorclass = ''; }
	if ($spaced == 'no') { $spacedclass = 'box-nonspaced';  } else { $spacedclass = '';  }
	if ($scale == 'yes') { $scaleclass = 'box-scale';  } else { $scaleclass = '';  }
	   
	$output = '<div class="iconbox box-one-half '.$colorclass.' '.$spacedclass.' '.$scaleclass.' box-last" '.$colorstyle.'>
            	<div class="box-inner clearfix">';
	if ($icon) { $output .= '<div class="icon">'.$iconimage.'</div>'; }			
    $output .= '	<h3><strong>'.$name.'</strong></h3>
                    <div class="seperator"></div>
                    <p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';
	if ($link) { $output .= '<a class="link-moreinfo" href="'.$link.'">'.__("more Info", 'sr_yalu_theme').'</a>'; }			
    $output .= '</div>
            </div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('iconbox_one_half_last', 'sr_iconbox_one_half_last');

function sr_iconbox_one_third( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'Icon Title',
	  'icon' => '',
	  'color' => '',
	  'link' => '',
	  'spaced' => 'no',
	  'scale' => 'no'
      ), $atts ) );
	
	$img_id = sr_get_attachment_id_from_src($icon);
	$iconimage = wp_get_attachment_image($img_id, 'iconbox-thumb');
	
	if ($color && $color !== '') { $colorstyle = 'style="background: '.$color.';"'; $colorclass = 'box-color';  } else { $colorstyle = ''; $colorclass = ''; }
	if ($spaced == 'no') { $spacedclass = 'box-nonspaced';  } else { $spacedclass = '';  }
	if ($scale == 'yes') { $scaleclass = 'box-scale';  } else { $scaleclass = '';  }
	   
	$output = '<div class="iconbox box-one-third '.$colorclass.' '.$spacedclass.' '.$scaleclass.'" '.$colorstyle.'>
            	<div class="box-inner clearfix">';
	if ($icon) { $output .= '<div class="icon">'.$iconimage.'</div>'; }			
    $output .= '	<h3><strong>'.$name.'</strong></h3>
                    <div class="seperator"></div>
                    <p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';
	if ($link) { $output .= '<a class="link-moreinfo" href="'.$link.'">'.__("more Info", 'sr_yalu_theme').'</a>'; }			
    $output .= '</div>
            </div>';
   
   return $output;
}
add_shortcode('iconbox_one_third', 'sr_iconbox_one_third');

function sr_iconbox_one_third_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'Icon Title',
	  'icon' => '',
	  'color' => '',
	  'link' => '',
	  'spaced' => 'no',
	  'scale' => 'no'
      ), $atts ) );
	
	$img_id = sr_get_attachment_id_from_src($icon);
	$iconimage = wp_get_attachment_image($img_id, 'iconbox-thumb');
	
	if ($color && $color !== '') { $colorstyle = 'style="background: '.$color.';"'; $colorclass = 'box-color';  } else { $colorstyle = ''; $colorclass = ''; }
	if ($spaced == 'no') { $spacedclass = 'box-nonspaced';  } else { $spacedclass = '';  }
	if ($scale == 'yes') { $scaleclass = 'box-scale';  } else { $scaleclass = '';  }
	   
	$output = '<div class="iconbox box-one-third '.$colorclass.' '.$spacedclass.' '.$scaleclass.' box-last" '.$colorstyle.'>
            	<div class="box-inner clearfix">';
	if ($icon) { $output .= '<div class="icon">'.$iconimage.'</div>'; }			
    $output .= '	<h3><strong>'.$name.'</strong></h3>
                    <div class="seperator"></div>
                    <p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';
	if ($link) { $output .= '<a class="link-moreinfo" href="'.$link.'">'.__("more Info", 'sr_yalu_theme').'</a>'; }			
    $output .= '</div>
            </div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('iconbox_one_third_last', 'sr_iconbox_one_third_last');

function sr_iconbox_one_fourth( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'Icon Title',
	  'icon' => '',
	  'color' => '',
	  'link' => '',
	  'spaced' => 'no',
	  'scale' => 'no'
      ), $atts ) );
	
	$img_id = sr_get_attachment_id_from_src($icon);
	$iconimage = wp_get_attachment_image($img_id, 'iconbox-thumb');
	
	if ($color && $color !== '') { $colorstyle = 'style="background: '.$color.';"'; $colorclass = 'box-color';  } else { $colorstyle = ''; $colorclass = ''; }
	if ($spaced == 'no') { $spacedclass = 'box-nonspaced';  } else { $spacedclass = '';  }
	if ($scale == 'yes') { $scaleclass = 'box-scale';  } else { $scaleclass = '';  }
	   
	$output = '<div class="iconbox box-one-fourth '.$colorclass.' '.$spacedclass.' '.$scaleclass.'" '.$colorstyle.'>
            	<div class="box-inner clearfix">';
	if ($icon) { $output .= '<div class="icon">'.$iconimage.'</div>'; }			
    $output .= '	<h3><strong>'.$name.'</strong></h3>
                    <div class="seperator"></div>
                    <p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';
	if ($link) { $output .= '<a class="link-moreinfo" href="'.$link.'">'.__("more Info", 'sr_yalu_theme').'</a>'; }			
    $output .= '</div>
            </div>';
   
   return $output;
}
add_shortcode('iconbox_one_fourth', 'sr_iconbox_one_fourth');

function sr_iconbox_one_fourth_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'Icon Title',
	  'icon' => '',
	  'color' => '',
	  'link' => '',
	  'spaced' => 'no',
	  'scale' => 'no'
      ), $atts ) );
	
	$img_id = sr_get_attachment_id_from_src($icon);
	$iconimage = wp_get_attachment_image($img_id, 'iconbox-thumb');
	
	if ($color && $color !== '') { $colorstyle = 'style="background: '.$color.';"'; $colorclass = 'box-color';  } else { $colorstyle = ''; $colorclass = ''; }
	if ($spaced == 'no') { $spacedclass = 'box-nonspaced';  } else { $spacedclass = '';  }
	if ($scale == 'yes') { $scaleclass = 'box-scale';  } else { $scaleclass = '';  }
	   
	$output = '<div class="iconbox box-one-fourth '.$colorclass.' '.$spacedclass.' '.$scaleclass.' box-last" '.$colorstyle.'>
            	<div class="box-inner clearfix">';
	if ($icon) { $output .= '<div class="icon">'.$iconimage.'</div>'; }			
    $output .= '	<h3><strong>'.$name.'</strong></h3>
                    <div class="seperator"></div>
                    <p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';
	if ($link) { $output .= '<a class="link-moreinfo" href="'.$link.'">'.__("more Info", 'sr_yalu_theme').'</a>'; }			
    $output .= '</div>
            </div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('iconbox_one_fourth_last', 'sr_iconbox_one_fourth_last');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Team
/*-----------------------------------------------------------------------------------*/
function sr_team_one_half( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => ''
      ), $atts ) );

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-half">
            	<div class="team">';
	if ($img) { $output .= '<div class="team-pic">'.$image.'</div>'; }			
    $output .= '   	<h5 class="team-name"><strong>'.$name.'</strong></h5>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '   	<p class="team-text">
                    ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                    </p>';
	if ($fb || $tw || $gl || $li || $mail) { 
		$output .= '<ul class="team-social">';
		if ($fb) { $output .= '<li><a class="facebook" href="'.$fb.'" target="_blank"></a></li>';  }
		if ($tw) { $output .= '<li><a class="twitter" href="'.$tw.'" target="_blank"></a></li>';  }
		if ($gl) { $output .= '<li><a class="googleplus" href="'.$gl.'" target="_blank"></a></li>';  }
		if ($li) { $output .= '<li><a class="linkedin" href="'.$li.'" target="_blank"></a></li>';  }
		if ($mail) { $output .= '<li><a class="mail" href="mailto:'.$mail.'" target="_blank"></a></li>';  }
		$output .= '</ul>';
	}			
    $output .= '</div>
            </div>';
   
   return $output;
}
add_shortcode('team_one_half', 'sr_team_one_half');

function sr_team_one_half_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => ''
      ), $atts ) );

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-half last-col">
            	<div class="team">';
	if ($img) { $output .= '<div class="team-pic">'.$image.'</div>'; }			
    $output .= '   	<h5 class="team-name"><strong>'.$name.'</strong></h5>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '   	<p class="team-text">
                    ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                    </p>';
	if ($fb || $tw || $gl || $li || $mail) { 
		$output .= '<ul class="team-social">';
		if ($fb) { $output .= '<li><a class="facebook" href="'.$fb.'" target="_blank"></a></li>';  }
		if ($tw) { $output .= '<li><a class="twitter" href="'.$tw.'" target="_blank"></a></li>';  }
		if ($gl) { $output .= '<li><a class="googleplus" href="'.$gl.'" target="_blank"></a></li>';  }
		if ($li) { $output .= '<li><a class="linkedin" href="'.$li.'" target="_blank"></a></li>';  }
		if ($mail) { $output .= '<li><a class="mail" href="mailto:'.$mail.'" target="_blank"></a></li>';  }
		$output .= '</ul>';
	}			
    $output .= '</div>
            </div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('team_one_half_last', 'sr_team_one_half_last');

function sr_team_one_third( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => ''
      ), $atts ) );

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-third">
            	<div class="team">';
	if ($img) { $output .= '<div class="team-pic">'.$image.'</div>'; }			
    $output .= '   	<h5 class="team-name"><strong>'.$name.'</strong></h5>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '   	<p class="team-text">
                    ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                    </p>';
	if ($fb || $tw || $gl || $li || $mail) { 
		$output .= '<ul class="team-social">';
		if ($fb) { $output .= '<li><a class="facebook" href="'.$fb.'" target="_blank"></a></li>';  }
		if ($tw) { $output .= '<li><a class="twitter" href="'.$tw.'" target="_blank"></a></li>';  }
		if ($gl) { $output .= '<li><a class="googleplus" href="'.$gl.'" target="_blank"></a></li>';  }
		if ($li) { $output .= '<li><a class="linkedin" href="'.$li.'" target="_blank"></a></li>';  }
		if ($mail) { $output .= '<li><a class="mail" href="mailto:'.$mail.'" target="_blank"></a></li>';  }
		$output .= '</ul>';
	}			
    $output .= '</div>
            </div>';
   
   return $output;
}
add_shortcode('team_one_third', 'sr_team_one_third');

function sr_team_one_third_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => ''
      ), $atts ) );

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-third last-col">
            	<div class="team">';
	if ($img) { $output .= '<div class="team-pic">'.$image.'</div>'; }			
    $output .= '   	<h5 class="team-name"><strong>'.$name.'</strong></h5>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '   	<p class="team-text">
                    ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                    </p>';
	if ($fb || $tw || $gl || $li || $mail) { 
		$output .= '<ul class="team-social">';
		if ($fb) { $output .= '<li><a class="facebook" href="'.$fb.'" target="_blank"></a></li>';  }
		if ($tw) { $output .= '<li><a class="twitter" href="'.$tw.'" target="_blank"></a></li>';  }
		if ($gl) { $output .= '<li><a class="googleplus" href="'.$gl.'" target="_blank"></a></li>';  }
		if ($li) { $output .= '<li><a class="linkedin" href="'.$li.'" target="_blank"></a></li>';  }
		if ($mail) { $output .= '<li><a class="mail" href="mailto:'.$mail.'" target="_blank"></a></li>';  }
		$output .= '</ul>';
	}			
    $output .= '</div>
            </div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('team_one_third_last', 'sr_team_one_third_last');

function sr_team_one_fourth( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => ''
      ), $atts ) );

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-fourth">
            	<div class="team">';
	if ($img) { $output .= '<div class="team-pic">'.$image.'</div>'; }			
    $output .= '   	<h5 class="team-name"><strong>'.$name.'</strong></h5>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '   	<p class="team-text">
                    ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                    </p>';
	if ($fb || $tw || $gl || $li || $mail) { 
		$output .= '<ul class="team-social">';
		if ($fb) { $output .= '<li><a class="facebook" href="'.$fb.'" target="_blank"></a></li>';  }
		if ($tw) { $output .= '<li><a class="twitter" href="'.$tw.'" target="_blank"></a></li>';  }
		if ($gl) { $output .= '<li><a class="googleplus" href="'.$gl.'" target="_blank"></a></li>';  }
		if ($li) { $output .= '<li><a class="linkedin" href="'.$li.'" target="_blank"></a></li>';  }
		if ($mail) { $output .= '<li><a class="mail" href="mailto:'.$mail.'" target="_blank"></a></li>';  }
		$output .= '</ul>';
	}			
    $output .= '</div>
            </div>';
   
   return $output;
}
add_shortcode('team_one_fourth', 'sr_team_one_fourth');

function sr_team_one_fourth_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => ''
      ), $atts ) );

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-fourth last-col">
            	<div class="team">';
	if ($img) { $output .= '<div class="team-pic">'.$image.'</div>'; }			
    $output .= '   	<h5 class="team-name"><strong>'.$name.'</strong></h5>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '   	<p class="team-text">
                    ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                    </p>';
	if ($fb || $tw || $gl || $li || $mail) { 
		$output .= '<ul class="team-social">';
		if ($fb) { $output .= '<li><a class="facebook" href="'.$fb.'" target="_blank"></a></li>';  }
		if ($tw) { $output .= '<li><a class="twitter" href="'.$tw.'" target="_blank"></a></li>';  }
		if ($gl) { $output .= '<li><a class="googleplus" href="'.$gl.'" target="_blank"></a></li>';  }
		if ($li) { $output .= '<li><a class="linkedin" href="'.$li.'" target="_blank"></a></li>';  }
		if ($mail) { $output .= '<li><a class="mail" href="mailto:'.$mail.'" target="_blank"></a></li>';  }
		$output .= '</ul>';
	}			
    $output .= '</div>
            </div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('team_one_fourth_last', 'sr_team_one_fourth_last');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Pricing
/*-----------------------------------------------------------------------------------*/
function sr_pricing( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'color' => '',
	  'title' => 'Title',
	  'price' => '19 $',
	  'time' => 'per month',
	  'url' => '#'
      ), $atts ) );
	   
   if ($color && $color !== '') { $colorstyle = 'style="background:'.$color.';"';  } else { $colorstyle = ''; }
   
   $output = '<div class="price-col">	
                    <div class="price-header" '.$colorstyle.'>
                        <h3>'.$title.'</h3>
                        <h1><strong>'.$price.'</strong></h1>
                        <span class="pricetime">'.$time.'</span>
                    </div>	
                    ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '	
                </div>';
   
   return $output;
}
add_shortcode('pricing', 'sr_pricing');


function sr_pricingbody( $atts, $content = null ) {
   
   $listing = preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content));
	$listing = explode('||',$listing);
	
	$list = '';
	foreach ($listing as $l) {
		$list .= '<li>'.$l.'</li>';	
	}
   
   $output = '<div class="price-body"><ul>'.$list.'</ul></div>';
   
   return $output;
}
add_shortcode('pricingbody', 'sr_pricingbody');


function sr_pricingbutton( $atts, $content = null ) {
   
   $output = '<div class="price-footer">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
   
   return $output;
}
add_shortcode('pricingbutton', 'sr_pricingbutton');


function sr_pricingwrapper( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'columns' => '4'
      ), $atts ) );
	
   
   $output = '<div class="pricing col'.$columns.' clearfix">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
   
   return $output;
}
add_shortcode('pricingwrapper', 'sr_pricingwrapper');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Page Description
/*-----------------------------------------------------------------------------------*/
function sr_pagedescription( $atts, $content = null )
{		
	return '<h2 class="page-description"><i>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</i></h2>';	
}
add_shortcode('pagedescription', 'sr_pagedescription');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Seperator Title
/*-----------------------------------------------------------------------------------*/
function sr_seperator( $atts, $content = null )
{	
	extract( shortcode_atts( array(
	  'title' => 'Title',
	  'size' => 'h4'
      ), $atts ) );
	
	if ($title == '') {
	return '';	
	} else {
	return '<'.$size.' class="title"><span><strong>' . $title . '</strong></span></'.$size.'>';	
	}
}
add_shortcode('seperator', 'sr_seperator');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Buttons
/*-----------------------------------------------------------------------------------*/
function sr_button( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'color' => 'white-button',
      'size' => 'medium-button',
      'target' => '_self',
	  'url' => ''
      ), $atts ) );
		
	return '<a href="'.$url.'" class="y-button '.$color.' '.$size.'"  target="'.$target.'">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</a>';	
}
add_shortcode('button', 'sr_button');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Alerts
/*-----------------------------------------------------------------------------------*/
function sr_alert( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'size' => 'small',
      'close' => 'yes',
      'color' => 'info'
      ), $atts ) );
	
	if ($close == 'yes') { $alerclose = '<a href="" class="alert-close">x</a>'; } else { $alerclose = ''; }
		
	return ' 	<div class="alert alert-'.$size.' alert-'.$color.'">
                	<div class="alert-icon"><span class="icon"></span></div>
                    <div class="alert-message">
                    	' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                    </div>
                    '.$alerclose.'
                </div>

	';
}
add_shortcode('alert', 'sr_alert');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Toggles
/*-----------------------------------------------------------------------------------*/
function sr_toggle( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => 'Toggle',
      'size' => 'small',
      'open' => 'no'
      ), $atts ) );
			
	if ($open == 'yes') { $toggleopen = 'toggle-active'; } else { $toggleopen = ''; }
	
	return '	<div class="toggle '.$size.'-toggle">
					<div class="toggle-title '.$toggleopen.' clearfix">
						<div class="toggle-icon"><span></span></div>
						<div class="toggle-name">' . $title . '</div>
					</div>
					<div class="toggle-inner">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>
				</div>';
}
add_shortcode('toggle', 'sr_toggle');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Skills
/*-----------------------------------------------------------------------------------*/
function sr_skill( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'amount' => '55',
	  'name' => 'Skillname',
	  'size' => 'small',
	  'color' => false
      ), $atts ) );
	
	$skill_slug = preg_replace('/[^a-z]/', "", strtolower($name));
	
	if ($size == 'small') { $skillsize = 'skill-small'; } else { $skillsize = '';  }
	if ($color) { $skillcolor = 'background:'.$color; } else { $skillcolor = '';  }
		
	return '<div class="skill '.$skillsize.'">
				<span class="skill_name"><strong>'.$name.'</strong></span>
				<div class="skill_bar"><div class="skill_active '.$skill_slug.'" style="width: '.$amount.'%; '.$skillcolor.'"></div><span><i>'.$amount.'%</i></span></div>
			</div>';	
}
add_shortcode('skill', 'sr_skill');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Tabs
/*-----------------------------------------------------------------------------------*/
function sr_tabs( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => ''
      ), $atts ) );
	
	$return = '<div class="tabs"><ul class="tab_nav clearfix">';
	
	$title = substr($title, 0, -1);
	$title = explode(',', $title);
	$i = 1;
	foreach ($title as $t) {
		if ($i == 1) { $addclass = 'class="active"'; } else { $addclass = ''; }
		$return .= '<li><a href="tabid'.$i.'" '.$addclass.'><strong>'.$t.'</strong></a></li>';	
		$i++;
	}
	
	$return .= '</ul><div class="clear"></div><div class="tab_container">'.do_shortcode($content).'</div></div>';
	
	return $return;	
}
add_shortcode('tabs', 'sr_tabs');


function sr_tab( $atts, $content = null )
{	
	extract( shortcode_atts( array(
      'id' => ''
      ), $atts ) );
	
	if ($id == 1) { $addclass = 'active'; } else { $addclass = ''; }
	return '<div class="tab_content tabid'.$id.' '.$addclass.'">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';	
}
add_shortcode('tab', 'sr_tab');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Accordion
/*-----------------------------------------------------------------------------------*/
function sr_accordion( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => 'Toggle',
      'size' => 'small',
      'open' => 'no'
      ), $atts ) );
			
	if ($open == 'yes') { $toggleopen = 'toggle-active'; } else { $toggleopen = ''; }
	
	return '	<div class="toggle '.$size.'-toggle">
					<div class="toggle-title '.$toggleopen.' clearfix">
						<div class="toggle-icon"><span></span></div>
						<div class="toggle-name">' . $title . '</div>
					</div>
					<div class="toggle-inner">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>
				</div>';		
}
add_shortcode('accordion', 'sr_accordion');


function sr_accordiongroup( $atts, $content = null )
{	
	return '<div class="accordion">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';	
}
add_shortcode('accordiongroup', 'sr_accordiongroup');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Contact form
/*-----------------------------------------------------------------------------------*/
function sr_field( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'type' => 'textfield',
	  'name' => 'Fieldname',
	  'slug' => 'slugname',
	  'required' => 'yes'
      ), $atts ) );
		
	
	if ($required == 'yes') { $label_req = 'class="req"'; $req = "*"; } else { $label_req = ''; $req = ""; }
	$input_name = strtolower($slug);
	
	
	$output = '';
	if ($type == 'textfield') {
		$output .= '<div class="form-row clearfix">
					<label for="'.$input_name.'" '.$label_req.'>'.$name.' '.$req.'</label>
					<div class="form-value"><input type="text" name="'.$input_name.'" class="'.$input_name.'" id="'.$input_name.'" value="" /></div>
					</div>';
	} else if ($type == 'textarea') {
		$output .= '<div class="form-row clearfix textbox">
					<label for="'.$input_name.'" '.$label_req.'>'.$name.' '.$req.'</label>
					<div class="form-value"><textarea name="'.$input_name.'" class="'.$input_name.'" id="'.$input_name.'" rows="15" cols="50"></textarea></div>
					</div>';
	} 
	
	
	return $output;
	
}
add_shortcode('field', 'sr_field');

function sr_contactgroup( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'fields' => '',
      'email' => 'Testemail',
      'subject' => 'Subject',
      'submit' => 'Send'
      ), $atts ) );
	
	if ($fields == '') { 
		return '<p><span class="error_message">Please check your Contact form. Your shortcode [contactgroup] needs a "fields" attribute</span></p>';
	} else {
   		return '<form id="contact-form" class="checkform" action="" target="'.get_template_directory_uri().'/contact-form.php" method="post" >' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
		<div class="form-row form-submit"><input type="submit" name="submit_form" class="submit" value="'.$submit.'" /></div>
		<input type="hidden" name="subject" value="'.$subject.'" />
		<input type="hidden" name="fields" value="'.$fields.'" />
		<input type="hidden" name="sendto" value="'.$email.'" />
		</form>
		<div id="form-note">
			<div class="alert alert-error">
				<div class="alert-icon"><span class="icon"></span></div>
				<div class="alert-message">
					<b>'.__("Error", 'sr_yalu_theme').'</b>: '.__("Please check your entries", 'sr_yalu_theme').'!
				</div>
			</div>
		</div>';
	}
}
add_shortcode('contactgroup', 'sr_contactgroup');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Gallery
/*-----------------------------------------------------------------------------------*/
function sr_gallery( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'id' => '',
      'columns' => '5',
      'carousel' => 'no'
      ), $atts ) );
	
	global $sr_prefix;
	
	if ($id && $id !== '') {
		$gallery = get_post_meta($id, $sr_prefix.'_gallery', true);
		$pics = explode('|||',$gallery);
		
		$gallery_items = '';
		foreach ($pics as $p) {
			$image = explode('~~', $p);
			$img_big = wp_get_attachment_image_src($image[1], 'full');
			$img_thumb = wp_get_attachment_image_src($image[1], 'gallery-thumb'); 
			$gallery_items .= '<li>';
			if ($carousel == 'yes') { $gallery_items .= '<div class="inner">'; }
			$gallery_items .= '<div class="imgoverlay">
							<a class="openfancybox" data-fancybox-group="gallery'.$id.'" href="'.$img_big[0].'" alt=""><img src="'.$img_thumb[0].'" alt="'.get_the_title($image[1]).'"/>
                        	<div class="overlay"><span class="overlayicon overlaylupe"></span></div>
                        </a>
               		</div>';
			if ($carousel == 'yes') { $gallery_items .= '</div>'; }
			$gallery_items .= '</li>';
		}
	}
	
	if ($carousel == 'no') {
		return '<ul class="gallery-grid gallery-col-'.$columns.' clearfix">'.$gallery_items.'</ul>';
	} else {
		return '<div id="carousel"><a class="carousel_prev" href="" rel="carousel">prev</a><div class="carousel_container"><ul>'.$gallery_items.'</ul></div><a class="carousel_next" href="" rel="carousel">next</a></div>';
	}
	
	
}
add_shortcode('sr_customgallery', 'sr_gallery');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Highlight CONTAINER
/*-----------------------------------------------------------------------------------*/
function sr_highlight( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'style' => 'default',
      'align' => 'float'
      ), $atts ) );
	
	if ($style == 'colored') { $color = 'highlight-color'; } 
	else if ($style == 'bordered') { $color = 'highlight-grey-bordered'; } 
	else { $color = ''; }
	
	if ($align == 'center') { $center = 'aligncenter'; }  else { $center = ''; }
			
	return ' <div class="highlight-field '.$color.' '.$center.' clearfix">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('highlight', 'sr_highlight');


/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Highlight TEXT
/*-----------------------------------------------------------------------------------*/
function sr_highlighttext( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => '',
      'titlesize' => 'h2',
      'titlecolor' => '',
      'subtitle' => '',
      'align' => 'float'
      ), $atts ) );
	
	$output = '<'.$titlesize.' class="'.$titlecolor.'"><strong>'.$title.'</strong></'.$titlesize.'>';
    if ($subtitle) { $output .= '<h6 class="subtitle">'.$subtitle.'</h6>'; }
	
	if ($content) { $output .= '<p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';  }
	if ($align == 'float') { $output = '<div class="highlight-content left-float">'.$output.'</div>'; }
			
	return $output;
}
add_shortcode('highlighttext', 'sr_highlighttext');


/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Highlight BUTTON
/*-----------------------------------------------------------------------------------*/
function sr_highlightbutton( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'align' => 'float'
      ), $atts ) );
	
	$output = '';
	
	if ($content) {
		if ($align == 'float') { $output = '<div class="highlight-button right-float">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>'; }
		else { $output = '<p>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>'; }
	}
	
	return $output;
}
add_shortcode('highlightbutton', 'sr_highlightbutton');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Testimonial
/*-----------------------------------------------------------------------------------*/
function sr_testimonial( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'name' => '',
      'nameaddition' => ''
      ), $atts ) );
	
	if ($nameaddition) { $nameadd = '('.$nameaddition.')'; } else { $nameadd = '';  }
	
	return '	<div class="testimonial">
                	<div class="testimonial-main clearfix">
                        <span class="testimonial-icon"></span>
                        <div class="testimonial-text">
                            ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                        </div>
                    	<div class="testimonial-name">- <b>'.$name.'</b> '.$nameadd.'</div>
                	</div>
                </div>';
}
add_shortcode('testimonial', 'sr_testimonial');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Google Map
/*-----------------------------------------------------------------------------------*/
function sr_mapshortcode( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'latlong' => '-33.86938,151.204834',
      'icon' => get_template_directory_uri().'/files/images/map-pin.png',
      'height' => '400',
      'id' => '0'
      ), $atts ) );
	
	$text = preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content));
		
	return sr_googleMap($latlong, $text, $icon, $height, 1);
	
}
add_shortcode('googlemap', 'sr_mapshortcode');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Latest News
/*-----------------------------------------------------------------------------------*/
function sr_latestnews( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => 'Latest News',
      'number' => '2'
      ), $atts ) );
	
	$latest = new WP_Query(array(
		'post_type' => array('post'),
		'posts_per_page'=> $number,
	));
	
	$p = '';
	while ($latest->have_posts()) { $latest->the_post(); 
		$format = get_post_format(); 
		if( false === $format ) { $format = 'standard'; }

		$p .= '
					<div class="blog-entry blog-latest-entry clearfix">
                        <div class="blog-left">
                        	<div class="blog-date"><span class="day">'.get_the_time('d').'</span><span class="month">'.get_the_time('M').'</span></div>
                        	<div class="blog-format"><span class="format-'.$format.'"></span></div>
                        </div>
                        
                        <div class="blog-right">
                            <div class="blog-headline">
                            	<h4><a href="'.get_permalink().'"><strong>'.get_the_title().'</strong></a></h4>
                                <ul class="blog-meta clearfix">
                                    <li class="meta-comments">'.get_comments_number('0', '1', '%').' '.__("Comments", 'sr_yalu_theme').'</li>
                                </ul>
                            </div>
                            <div class="blog-intro">
                                <p>'.content('excerpt', 15, false).'
                                </p>							
                            </div>
                            <div class="blog-readmore"><a class="link-moreinfo" href="'.get_permalink().'">'.__("read more", 'sr_yalu_theme').'</a></div>
                        </div>
                    </div> <!-- END .blog-entry -->
		'; 
	}
	
	
	return '<h4 class="title"><span><strong>'.$title.'</strong></span></h4>
			<div id="latest-blog">
			'.$p.'
			</div>';
				
	wp_reset_postdata();			
	
}
add_shortcode('latestnews', 'sr_latestnews');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Recent Works
/*-----------------------------------------------------------------------------------*/
function sr_recentworks( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => 'Recent Works',
      'col' => '3',
      'number' => '2'
      ), $atts ) );
	
	global $sr_prefix;
	
	$recent = new WP_Query(array(
		'post_type' => array('portfolio'),
		'posts_per_page'=> $number,
	));
	
	$p = '';
	while ($recent->have_posts()) { $recent->the_post(); 
		$externlink = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_externlink', true);
		$subtitle = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_subtitle', true);
		
		if($externlink) { $link = '<a href="'.$externlink.'" target="_blank">'; } else { $link = '<a href="'.get_permalink().'">'; }
		if($subtitle) { $sub = '<p>'.$subtitle.'</p>'; } else { $sub = ''; }
		
		$p .= '
				<div class="portfolio-entry masonry-item">
                	<div class="entry-thumb">
                        <div class="imgoverlay">
                            '.$link.'
                                '.get_the_post_thumbnail(get_the_ID(),'portfolio-crop-thumb').'
                                <div class="overlay"><span class="overlayicon"></span></div>
                            </a>
                        </div>
                    </div>
                        
                    <div class="portfolio-intro">
                    	<h5>'.$link.'<strong>'.get_the_title().'</strong></a></h5>
                    	'.$sub.'                
                    </div>
                </div>
		'; 
	}
	wp_reset_query();
	
	return '<h4 class="title"><span><strong>'.$title.'</strong></span></h4>
			<div id="portfolio-grid" class="masonry portfolio-entries masonry-col-'.$col.' clearfix">
			'.$p.'
			</div>';
				
				
	
}
add_shortcode('recentworks', 'sr_recentworks');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Video
/*-----------------------------------------------------------------------------------*/
function sr_video( $atts, $content = null )
{		
	return '<div class="embeddedvideo">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';	
}
add_shortcode('sr_video', 'sr_video');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Selfhosted Audio
/*-----------------------------------------------------------------------------------*/
function sr_selhostedtaudio( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'mp3' => '',
      'oga' => '',
      'pic' => '',
      'id' => '0'
      ), $atts ) );
	
	$picid = sr_get_attachment_id_from_src($pic);
	$picimage = wp_get_attachment_image($picid, 'full');
	
	return $picimage.''.sr_selfaudio($mp3, $oga, $pic, $id);
	
}
add_shortcode('selhostedtaudio', 'sr_selhostedtaudio');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Selfhosted Video
/*-----------------------------------------------------------------------------------*/
function sr_selhostedtvideo( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'm4v' => '',
      'oga' => '',
      'webmv' => '',
      'pic' => '',
      'id' => '0'
      ), $atts ) );
	
	return sr_selfvideo($m4v, $oga, $webmv, $pic, $id);
	
}
add_shortcode('selhostedtvideo', 'sr_selhostedtvideo');





/*-----------------------------------------------------------------------------------*/
/*	Register Buttons
/*-----------------------------------------------------------------------------------*/

// Add our buttons
function init_buttons() {
	// If user has permission
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;
	 
	// Add only in Rich Editor mode
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "add_buttons_plugin");
		add_filter('mce_buttons', 'register_buttons');
	}
}
add_action('init', 'init_buttons');

function register_buttons($buttons) {
	array_push($buttons, "|", "popup");
	return $buttons;
}

// add the button to the tinyMCE bar
function add_buttons_plugin($plugin_array) {
	$plugin_array['popup'] = get_template_directory_uri().'/theme-admin/shortcodes/popup.js';
	return $plugin_array;
}

?>