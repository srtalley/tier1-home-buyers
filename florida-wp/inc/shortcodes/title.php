<?php

// Subtitle
 function webnus_subtitle ($atts, $content = null) {
 	extract(shortcode_atts(array(
 	'title'      => '',
 	'subtitle_content'      => '',

						), $atts));

 	$out = '<h4 class="subtitle">';
 	$out .= $subtitle_content;
 	$out .= '</h4>';
 	return $out;
 }
 add_shortcode('subtitle','webnus_subtitle');



function subtitle2_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => '',
	'subtitle_content'      => '',
						), $atts));

	$out =  '<div class="title">';
	$out .= '<h4>'. $subtitle_content .'</h4>';
	$out .= '</div>';
	return $out;
}
add_shortcode('subtitle2','subtitle2_shortcode');




function subtitle3_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => '',
	'subtitle_content'      => '',
						), $atts));

	$out =  '<div class="sub-content">';
	$out .= '<h6 class="h-sub-content">'. $subtitle_content .'</h6>';
	$out .= '</div>';
	return $out;
}
add_shortcode('subtitle3','subtitle3_shortcode');



// Big Title
function bigtitle_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => '',
	'bigtitle_content'      => ''
						), $atts));

	
	$out = '<h1 class="mex-title">'. $bigtitle_content .'</h1>';
	
	return $out;
}

add_shortcode('big_title','bigtitle_shortcode');

function bigtitle2_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => '',
	'bigtitle_content'      => '',
	
						), $atts));

	
	$out = '<h2 class="mex-title">'. $bigtitle_content .'</h2>';
	
	return $out;
}
add_shortcode('big_title2','bigtitle2_shortcode');

function webnus_title($atts, $content)
{
	extract(shortcode_atts(array(
	'type'      => '4',

	), $atts));

	$out = '<h'.$type.'><strong>'.$content.'</strong></h'.$type.'>';
	return $out;
}

add_shortcode('title', 'webnus_title');



 // Max Title


function maxtitle_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'type'      => '',
	'maxtitle_content'      => '',
	), $atts));
	if( '1'==$type )
		$out = '<div class="max-title"><h2>'. $maxtitle_content .'</h2><span class="max-line"></span></div>';
	else
		$out = '<div class="max-title'.$type.'"><h2>'. $maxtitle_content .'</h2></div>';	
	
	return $out;
}
add_shortcode('maxtitle','maxtitle_shortcode');



function maxtitle2_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
		'title'      => '',
		'maxtitle_content'      => '',
	), $atts));

	$out = '<div class="max-title2"><h2>'. $maxtitle_content .'</h2></div>';
	return $out;
}
add_shortcode('max-title2','maxtitle2_shortcode');



function maxtitle3_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
		'title'      => '',
		'maxtitle_content'      => '',
	), $atts));

	$out = '<div class="max-title3"><h2>'. $maxtitle_content .'</h2></div>';
	return $out;
}
add_shortcode('max-title3','maxtitle3_shortcode');



function maxtitle4_shortcode ($atts, $maxtitle_content = null) {
	extract(shortcode_atts(array(
		'title'      => '',
		'maxtitle_content'      => '',
	), $atts));

	$out = '<div class="max-title4"><h2>'. $maxtitle_content .'</h2></div>';
	return $out;
}
add_shortcode('max-title4','maxtitle4_shortcode');



?>