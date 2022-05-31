<?php 
    
 
function load_style_script()
{

  /* CSS */

  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', true  );
  wp_enqueue_style('child_style_css',  get_stylesheet_directory_uri() . '/style.css', true  );

  wp_enqueue_style('neew_style_css',  get_stylesheet_directory_uri() . '/assets/css/new-style.css', true  );
  wp_enqueue_style('slick_style_css',  get_stylesheet_directory_uri() . '/assets/css/slick.min.css', true  );

  /* JS */

  wp_enqueue_script('jquery_js', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js');
   wp_enqueue_script('light_js', get_stylesheet_directory_uri() . '/assets/js/lightslider.min.js');
   wp_enqueue_script('index_js', get_stylesheet_directory_uri() . '/assets/js/index.js');
   

//   wp_enqueue_script('slider_js', get_stylesheet_directory_uri() . '/assets/js/lightslider.min.js');

//   wp_enqueue_script('init_js', get_stylesheet_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Episodes page',
		'menu_title'	=> 'Episodes',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}