<?php 
$sr_prefix = "_sr";

$standard_fonts = array('default', 'Arial','Lucida Sans Unicode','Times New Roman','Verdana', 'Helvetica', 'Georgia','Tahoma');

$bodyfont = get_option($sr_prefix.'_bodyfont');
$headingfont = get_option($sr_prefix.'_headingfont');
$navigationfont = get_option($sr_prefix.'_navigationfont');
$restfont = get_option($sr_prefix.'_restfont');

$fonts = array( $bodyfont,
				$headingfont,
				$navigationfont,
				$restfont
				);

$active_fonts = array();

foreach($fonts as $font) {
if(!in_array($font, $standard_fonts) && !in_array($font, $active_fonts) && $font ) {
	$active_fonts[] = $font;
?>
<link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $font); ?>' rel='stylesheet' type='text/css'>
<?php 
} }

// Default font
if ($headingfont == 'default' || $navigationfont == 'default' || $restfont == 'default' || $bodyfont == '' || $headingfont == '' || $navigationfont == '') { ?>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<?php }
?>