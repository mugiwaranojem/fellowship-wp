<?php
/**
 * @package 	WordPress
 * @subpackage 	My Religion
 * @version		1.3.6
 * 
 * Theme and Plugin functions
 * Created by CMSMasters
 * 
 */


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_fonts_list')) {
	function cmsmasters_fonts_list() {
		$cmsmasters_option = my_religion_get_global_options();
		
		
		$google_web_fonts = array();
		
		if (isset($cmsmasters_option['my-religion' . '_google_web_fonts']) && is_array($cmsmasters_option['my-religion' . '_google_web_fonts'])) {
			$google_web_fonts_array = $cmsmasters_option['my-religion' . '_google_web_fonts'];
			
			
			foreach ($google_web_fonts_array as $google_web_font) {
				$google_web_font = explode('|', $google_web_font);
				
				$google_web_fonts[$google_web_font[0]] = $google_web_font[1];
			}
		}
		
		
		$local_fonts = array();
		
		if (class_exists('Cmsmasters_Custom_Fonts') && CMSMASTERS_CUSTOM_FONTS) {
			$local_fonts_query = new WP_Query(array(
				'post_type' => 'cmsmasters_font', 
				'orderby' => 'title', 
				'order' => 'ASC', 
				'posts_per_page' => -1 
			));
			
			
			if (count($local_fonts_query->posts) > 0) {
				foreach ($local_fonts_query->posts as $local_font) {
					$value = $local_font->ID . ':' . $local_font->post_title;
					
					$local_fonts[$value] = $local_font->post_title;
				}
			}
			
			wp_reset_postdata();
		}
		
		
		ksort($google_web_fonts);
		
		
		$fonts = array( 
			'' => esc_html__('None', 'my-religion'), 
			'local' => $local_fonts, 
			'web' => $google_web_fonts 
		);
		
		
		return apply_filters('my_religion_google_fonts_list_filter', $fonts);
	}
}


// Add google web fonts if empty
function my_religion_add_google_web_fonts_first() {
	$font_google = get_option( 'cmsmasters_options_' . 'my-religion' . '_font_google', array() );

	if ( ! empty( $font_google ) ) {
		return;
	}

	$fonts = array(
		'my-religion' . '_google_web_fonts' => cmsmasters_google_fonts_list(),
		'my-religion' . '_google_web_fonts_subset' => '',
	);

	update_option( 'cmsmasters_options_' . 'my-religion' . '_font_google', $fonts );
}

add_action('init', 'my_religion_add_google_web_fonts_first');


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_google_fonts_list')) {
	function cmsmasters_google_fonts_list() {
		$fonts = my_religion_get_google_fonts_list();
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsmasters_font_weight_list')) {
	function cmsmasters_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsmasters_font_style_list')) {
	function cmsmasters_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {
	function cmsmasters_color_picker_palettes() {
		$palettes = array( 
			'#000000', 
			'#ffffff', 
			'#d43c18', 
			'#5173a6', 
			'#959595', 
			'#c0c0c0', 
			'#f4f4f4', 
			'#e1e1e1' 
		);
		
		
		return $palettes;
	}
}


// Theme Image Thumbnails Size
if (!function_exists('cmsmasters_image_thumbnail_list')) {
	function cmsmasters_image_thumbnail_list() {
		$list = my_religion_get_image_thumbnail_list();
		
		
		return $list;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsmasters_color_schemes_list')) {
	function cmsmasters_color_schemes_list() {
		$list = my_religion_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['navigation']);
		
		unset($list['header_top']);
		
		
		$out = array_merge($list, my_religion_custom_color_schemes_list());
		
		
		return $out;
	}
}

