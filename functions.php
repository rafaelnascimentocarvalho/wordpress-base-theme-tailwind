<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

add_action( 'wp_enqueue_scripts', 'theme_scripts');

// Page options
include('helpers/autoload.php');

function theme_scripts() {

  // CSS
  wp_register_style('global', get_template_directory_uri().'/public/css/global.css', false, NULL, 'all' );
  wp_enqueue_style('global');

  wp_register_style('style', get_template_directory_uri().'/public/css/styles.css', false, NULL, 'all' );
  wp_enqueue_style('style');

  // JS
  wp_register_script('jquery-3.5.1.min', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', '', '');
  wp_enqueue_script('jquery-3.5.1.min');
  
  wp_register_script('owl.carousel', get_template_directory_uri() . '/assets/owl.carousel/owl.carousel.min.js', '', '');
  wp_enqueue_script('owl.carousel');
  
  wp_register_script('owl.script', get_template_directory_uri() . '/assets/owl.carousel/owl.script.js', '', '');
  wp_enqueue_script('owl.script'); 
  
  wp_register_script('script', get_template_directory_uri() . '/public/js/script.js', '', '');
  wp_enqueue_script('script'); 
}

function render($src, $props = []){
 include('src/'.$src.'.php');
}

function autoload_($directory = __DIR__){  
  $files = glob($directory . '/*.php');;
  
  foreach ($files as $file) {    
    if (is_dir($file) || strpos($file, '.') === 0 || strpos($file, 'autoload') !== false) {
      continue;
    }

    include( $file );
  }
}
