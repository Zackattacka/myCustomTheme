<?php
// Theme Functions Go Here

// function funky(){
//
// }
// funky();

function enqueue_my_styles_and_scripts(){
//Enqueueing Custom Portfolio CSS
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/External/css/myTheme.css', array(), '1.0.0', 'all');


  // Enqueueing Custom Portfolio Javascript
  wp_enqueue_script('my-scripts', get_theme_file_uri() . '/External/js/myTheme.js', array(), '1.0.0', 'true');

  }

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
