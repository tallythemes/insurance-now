<?php
define('STEED_THEME_ID_HEADER', 'b681f27adaebc765eaea84716c781cf7');
define('STEED_THEME_ID', 'steed-insurance');

add_action( 'after_setup_theme', 'insurance_setup');
add_image_size('insurance_400', 400, 400, true);

function insurance_setup(){
	
	
	$sections = array();
	
	$sections[] = array(
		'uid'	=> 'slider',
		'title'	=> 'Slideshow',
		'name'	=> 'steed_pc_section_widget_layout',
		'settings'		=> array(
			'customize_description' => 'Please use <code>SC) Slider Item</code> widget here.', //full,none,excerpt
			'widget_title' => 'SC) Slider Item',
			'widget_slug' => 'steedcom_widget_advancetext',
			'widget_search' => '(SC) Slider Item',
			'css_class' => 'pcSkin1',
			'layout' => 'flexslider',//grid, flexslider, tab, owlcarousel, masonry, accordion, toggle
			'header' => false,
			'background' => false,
			'padding' => false,
			'item_style' => false,
			'flexslider_height' => true,
			'flexslider_options' => true,
			'flexslider_options2' => false,
			'flexslider_width' => true,
		),
	);
	$sections[] = array(
		'uid'	=> 'services',
		'title'	=> 'Services',
		'name'	=> 'steed_pc_section_widget_layout',
		'settings'		=> array(
			'customize_description' => 'Please use <code>Text</code> widget here.', //full,none,excerpt
			'widget_title' => 'Text',
			'widget_slug' => 'widget_text',
			'widget_search' => 'Text Arbitrary',
			'css_class' => '',
			'layout' => 'grid',//grid, flexslider, tab, owlcarousel, masonry, accordion, toggle
			
			'header' => true,
			'background' => true,
			'padding' => true,
			'item_style' => true,
			'content_width' => true,
			'content_style' => true,
			
			'flexslider_height' => false,
			'flexslider_options' => false,
			'flexslider_options2' => false,
			'flexslider_width' => false,
		),
	);
	$sections[] = array(
		'uid'	=> 'about',
		'title'	=> 'About Us',
		'name'	=> 'steed_pc_section_page_content',
		'settings'		=> array(
			'content' => 'excerpt', //full,none,excerpt
			'image' => 'right', //none, top, bottom, left, right, full_left, full_right, background
			'image_size' => 'full',
			'title' => true, //true, false
			'title_tag' => 'h2',
			'button' => true, //true, false
			'button_text' => 'Read More',
			'css_class' => '',
		),
	);
	$sections[] = array(
		'uid'	=> 'offers',
		'title'	=> 'Offers',
		'name'	=> 'steed_pc_section_widget_layout',
		'settings'		=> array(
			'customize_description' => 'Please use <code>Text</code> widget here.', //full,none,excerpt
			'widget_title' => 'Text',
			'widget_slug' => 'widget_text',
			'widget_search' => 'Text Arbitrary',
			'css_class' => '',
			'layout' => 'grid',//grid, flexslider, tab, owlcarousel, masonry, accordion, toggle
			
			'header' => false,
			'background' => true,
			'padding' => true,
			'item_style' => false,
			'content_width' => false,
			'content_style' => false,
			
			'flexslider_height' => false,
			'flexslider_options' => false,
			'flexslider_options2' => false,
			'flexslider_width' => false,
		),
	);
	$sections[] = array(
		'uid'	=> 'status',
		'title'	=> 'Status',
		'name'	=> 'steed_pc_section_widget_layout',
		'settings'		=> array(
			'customize_description' => 'Please use <code>Text</code> widget here.', //full,none,excerpt
			'widget_title' => 'Text',
			'widget_slug' => 'widget_text',
			'widget_search' => 'Text Arbitrary',
			'css_class' => '',
			'layout' => 'grid',//grid, flexslider, tab, owlcarousel, masonry, accordion, toggle
			
			'header' => true,
			'background' => true,
			'padding' => true,
			'item_style' => true,
			'content_width' => true,
			'content_style' => true,
			
			'flexslider_height' => false,
			'flexslider_options' => false,
			'flexslider_options2' => false,
			'flexslider_width' => false,
		),
	);
	$sections[] = array(
		'uid'	=> 'howitwork',
		'title'	=> 'How it Works',
		'name'	=> 'steed_pc_section_page_content',
		'settings'		=> array(
			'content' => 'excerpt', //full,none,excerpt
			'image' => 'left', //none, top, bottom, left, right, full_left, full_right, background
			'image_size' => 'full',
			'title' => true, //true, false
			'title_tag' => 'h2',
			'button' => true, //true, false
			'button_text' => 'Read More',
			'css_class' => '',
		),
	);
	$sections[] = array(
		'uid'	=> 'testimonials',
		'title'	=> 'Testimonials Slider',
		'name'	=> 'steed_pc_section_widget_layout',
		'settings'		=> array(
			'customize_description' => 'Please use <code>Text</code> widget here.', //full,none,excerpt
			'widget_title' => 'Text',
			'widget_slug' => 'widget_text',
			'widget_search' => 'Text Arbitrary',
			'css_class' => 'pcSkin2',
			'layout' => 'flexslider',//grid, flexslider, tab, owlcarousel, masonry, accordion, toggle
			
			'header' => true,
			'background' => true,
			'padding' => true,
			'content_style' => true,
			'content_width' => true,
			'color_mood' => true,
			'item_style' => false,
			'text_align' => true,
			
			'flexslider_height' => false,
			'flexslider_options' => true,
			'flexslider_options2' => false,
			'flexslider_width' => false,
		),
	);
	$sections[] = array(
		'uid'	=> 'logos',
		'title'	=> 'Logos',
		'name'	=> 'steed_pc_section_widget_layout',
		'settings'		=> array(
			'customize_description' => 'Please use <code>Text</code> widget here.', //full,none,excerpt
			'widget_title' => 'Text',
			'widget_slug' => 'widget_text',
			'widget_search' => 'Text Arbitrary',
			'css_class' => '',
			'layout' => 'grid',//grid, flexslider, tab, owlcarousel, masonry, accordion, toggle
			
			'header' => false,
			'background' => true,
			'padding' => true,
			'item_style' => false,
			'content_width' => false,
			'content_style' => false,
			
			'flexslider_height' => false,
			'flexslider_options' => false,
			'flexslider_options2' => false,
			'flexslider_width' => false,
		),
	);
	$sections[] = array(
		'uid'	=> 'contact',
		'title'	=> 'Contact Info',
		'name'	=> 'steed_pc_section_widget_layout',
		'settings'		=> array(
			'customize_description' => 'Please use <code>Text</code> widget here.', //full,none,excerpt
			'widget_title' => 'Text',
			'widget_slug' => 'widget_text',
			'widget_search' => 'Text Arbitrary',
			'css_class' => '',
			'layout' => 'grid',//grid, flexslider, tab, owlcarousel, masonry, accordion, toggle
			
			'header' => false,
			'background' => true,
			'padding' => true,
			'item_style' => true,
			'content_width' => false,
			'content_style' => false,
			
			'flexslider_height' => false,
			'flexslider_options' => false,
			'flexslider_options2' => false,
			'flexslider_width' => false,
		),
	);
	$settings = array(
		'title' => 'Home Page Content',
		'description' => '',
		'slug' => 'home_page',
		'sections' => $sections,
	);
	new steed_pc_builder($settings);
	
	
}


add_filter('tallythemesetup_load_v2', '__return_true');


add_filter('image_size_names_choose','insurance_image_size_names',10,1);
function insurance_image_size_names($sizes){
    // Give them a name, and presto!

    $sizes['insurance_400']= 'Hotel 400x300';

    // Don't forget to return the array of sizes.
    return $sizes;
}


function insurance_modify_theme_intro_page($data){
	$data['menu_name'] = 'About Hotel';
	$data['page_name'] = 'About Hotel';
	$data['welcome_title'] = sprintf( __( 'Welcome to %s! - Version ', 'insurance' ), 'Hotel' );
	$data['welcome_content'] = esc_html__( 'Free Responsive Multi-Purpose WordPress Theme – Hotel Lite is best for making any kind  of business website. Hotel lite can be used for any site purpose; one page, health, restaurant, agency, business, blogs and much more. This theme is fully responsive, Retina ready. It has video background and parallax effect and It is built on html5 and css3 with parallax support. It is a clean, responsive, modern, flat and minimal design.', 'steed' );
	$data['support_content']['second']['button_link'] = '#'; //Documentation Link
	$data['support_content']['sixth']['button_link'] = '#'; //Documentation Link
	$data['getting_started']['second']['button_link'] = '#'; //Documentation Link
	$data['free_pro']['free_theme_name'] = 'Hotel';
	$data['free_pro']['pro_theme_name'] = 'Hotel PRO';
	$data['free_pro']['pro_theme_link'] = '#'; // PRO Theme Link
	
	return $data;
}
add_filter('steed_about_page_array', 'insurance_modify_theme_intro_page');



add_filter('tallythemesetup_demo_data', 'insurance_demo_data');
function insurance_demo_data(){
		return  array(
			'xml' => get_stylesheet_directory().'/includes/demo/content.xml', //xml file path or false to disable
			'widget' => get_stylesheet_directory().'/includes/demo/widgets.wie', //wie file path or false to disable
			'home' => 'Home',  //Name or false to disable
			'blog' => 'Blog', //Name or false to disable
			'menus' => array(/*array or false to disable*/
				array('title' => 'Primary P', 'location' => 'header_menu'),
			),
			'revolution_sliders' => false, //array or false to disable
			'plugins' => array(/*array or false to disable*/
				'instagram-slider-widget/instaram_slider.php',
				'wc-responsive-video/wc-responsive-video.php',
				
				'steed-pro/steed-pro.php',
				'contact-form-7/wp-contact-form-7.php',
				'steed-companion/steed-companion.php',
			),
			'demo_url' => esc_url('http://wp4.tallythemesdemo.com'), //Extranal Demo URL
			'demo_image' => esc_url(get_stylesheet_directory().'/screenshot.png'), //Extranal Demo image URL
			'doc_url' => esc_url('http://tallythemes.com/doc-item/steed-theme-documentation/'), //Documentation URL
		);
}


add_filter('steed_tgm_plugins', 'insurance_tgm_plugins');
function insurance_tgm_plugins(){
	return array(
		array(
			'name'      => 'Tally Theme Setup',
			'slug'      => 'tally-theme-setup',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Instagram Slider Widget',
			'slug'      => 'instagram-slider-widget',
			'required'  => false,
		),
		array(
			'name'      => 'WC Responsive Video',
			'slug'      => 'wc-responsive-video',
			'required'  => false,
		),
		array(
			'name'               => 'Steed PRO',
			'slug'               => 'steed-pro',
			'source'             => esc_url('http://update-server.tallythemesdemo.com/api/?action=download&slug=steed-pro'),
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false,
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'Steed Companion',
			'slug'               => 'steed-companion',
			'source'             => esc_url('http://update-server.tallythemesdemo.com/api/?action=download&slug=steed-companion'),
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false,
			'external_url'       => '', 
			'is_callable'        => '', 
		),
	);
}