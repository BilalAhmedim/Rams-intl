<?php
function rams_resources(){
  wp_enqueue_style('base-fonts', '//fonts.googleapis.com/css?family=Montserrat:300,400,500.css');
  wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_style('main_style', get_stylesheet_uri());
  wp_enqueue_script('bootstrap-js', get_template_directory_uri()."/js/bootstrap.min.js", array('jquery') ,"1.0" , true);
  wp_enqueue_script('lazy','//cdn.jsdelivr.net/npm/vanilla-lazyload@11.0.2/dist/lazyload.min.js', null,"1.0" ,true);
  wp_enqueue_script('main', get_template_directory_uri()."/js/App.js", null ,"1.0" , true);
  if(is_single()){
    wp_enqueue_script('PhotoSwip-main', get_template_directory_uri()."/js/photoswipe.min.js", null ,"1.0" , false);
    wp_enqueue_script('PhotoSwip-UI', get_template_directory_uri()."/js/photoswipe-ui-default.min.js", null ,"1.0" , false);
    wp_enqueue_style('PhotoSwip-css', get_template_directory_uri().'/css/photoswipe.css');
    wp_enqueue_style('PhotoSwip-Skin', get_template_directory_uri().'/css/default-skin/default-skin.css');
  }
 }
add_action('wp_enqueue_scripts','rams_resources');

function ThemeSupport(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size( 'custom-size', 500, 500, true);
}

add_action('after_setup_theme', 'ThemeSupport');


function private_content_redirect_to_login() {
  global $wp_query,$wpdb;
  if (is_404()) {
    $private = $wpdb->get_row($wp_query->request);
    $location = wp_login_url($_SERVER["REQUEST_URI"]);
    if( 'private' == $private->post_status  ) {
      wp_safe_redirect($location);
      exit;
    }
  }
}
add_action('template_redirect', 'private_content_redirect_to_login', 9);

function custom_loginlogo() {
  echo '<style type="text/css">
  h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/logo.png) !important; }
  </style>';
}
add_action('login_head', 'custom_loginlogo');
?>
