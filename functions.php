<?php 
    
 
function load_style_script()
{

  /* CSS */

  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', true  );
  wp_enqueue_style('child_style_css',  get_stylesheet_directory_uri() . '/style.css', true  );

  /* JS */

//   wp_enqueue_script('jquery_js', get_stylesheet_directory_uri() . '/assets/js/jquery-3.4.1.min.js');

//   wp_enqueue_script('slider_js', get_stylesheet_directory_uri() . '/assets/js/lightslider.min.js');

//   wp_enqueue_script('init_js', get_stylesheet_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');

