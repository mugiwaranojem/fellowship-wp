<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Religion
 * @version		1.3.6
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function my_religion_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'my-religion');
	$tabs['link'] = esc_attr__('Links', 'my-religion');
	$tabs['nav'] = esc_attr__('Navigation', 'my-religion');
	$tabs['heading'] = esc_attr__('Heading', 'my-religion');
	$tabs['other'] = esc_attr__('Other', 'my-religion');
	$tabs['google'] = esc_attr__('Google Fonts', 'my-religion');
	
	return $tabs;
}


function my_religion_options_font_sections() {
	$tab = my_religion_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'my-religion');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'my-religion');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'my-religion');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'my-religion');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'my-religion');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'my-religion');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function my_religion_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = my_religion_get_the_tab();
	}
	
	
	$cmsmasters_option = my_religion_get_global_options();
	
	
	$options = array();
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-religion' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Source+Sans+Pro:300,300italic,400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'my-religion' . '_link_font', 
			'title' => esc_html__('Links Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Source+Sans+Pro:300,300italic,400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'my-religion' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'my-religion'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'none', 
			'choices' => my_religion_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'my-religion' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Montserrat:400,700', 
				'font_size' => 			'12', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'my-religion' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Source+Sans+Pro:300,300italic,400,400italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'my-religion' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Montserrat:400,700', 
				'font_size' => 			'42', 
				'line_height' => 		'48', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'my-religion' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Montserrat:400,700', 
				'font_size' => 			'28', 
				'line_height' => 		'36', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'my-religion' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Montserrat:400,700', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'my-religion' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Crimson+Text:400,400italic,700,700italic', 
				'font_size' => 			'20', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'my-religion' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Montserrat:400,700', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'my-religion' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Crimson+Text:400,400italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'my-religion' . '_button_font', 
			'title' => esc_html__('Button Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Montserrat:400,700', 
				'font_size' => 			'12', 
				'line_height' => 		'42', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'my-religion' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Crimson+Text:400,400italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'my-religion' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Source+Sans+Pro:300,300italic,400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'my-religion' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'my-religion'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Crimson+Text:400,400italic,700,700italic', 
				'font_size' => 			'20', 
				'line_height' => 		'32', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'my-religion' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'my-religion'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => cmsmasters_google_fonts_list()
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'my-religion' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'my-religion'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'my-religion') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'my-religion') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'my-religion') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'my-religion') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'my-religion') . '|' . 'greek', 
				esc_html__('Greek Extended', 'my-religion') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'my-religion') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'my-religion') . '|' . 'japanese', 
				esc_html__('Korean', 'my-religion') . '|' . 'korean', 
				esc_html__('Thai', 'my-religion') . '|' . 'thai', 
				esc_html__('Bengali', 'my-religion') . '|' . 'bengali', 
				esc_html__('Devanagari', 'my-religion') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'my-religion') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'my-religion') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'my-religion') . '|' . 'hebrew', 
				esc_html__('Kannada', 'my-religion') . '|' . 'kannada', 
				esc_html__('Khmer', 'my-religion') . '|' . 'khmer', 
				esc_html__('Malayalam', 'my-religion') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'my-religion') . '|' . 'myanmar', 
				esc_html__('Oriya', 'my-religion') . '|' . 'oriya', 
				esc_html__('Sinhala', 'my-religion') . '|' . 'sinhala', 
				esc_html__('Tamil', 'my-religion') . '|' . 'tamil', 
				esc_html__('Telugu', 'my-religion') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

