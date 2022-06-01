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
	
	
}

function cta_action(){
	    echo '<div class="d-flex acenter jcenter cta-wrap ">';
		echo ' <div id="map"> <div class="row-fluid">';
		echo '  <h3>'. the_field("cta_headline", "option"). '</h3>';
        echo '  <p>' .the_field("cta_text_par", "option") . ' </p>';
		echo ' <p class="rtecenter">';
		echo ' <a class="cta_button btn" href="';
		echo  the_field("cta_link", "option") .'">';
		echo  the_field("cta_text", "option") .'</a>  </p>   </div>  </div> </div>'; 

}

add_shortcode('cta', 'cta_action');