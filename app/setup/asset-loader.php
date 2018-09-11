<?php
// Theme assets to load
function fwd_asset_loader()
{

  // If the theme is set to, swap included jQuery and use a newer version
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), false, true);

  // Styles
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/styles/dist/main.css', false, null);

  // Scripts
  wp_enqueue_script('index', get_stylesheet_directory_uri() . '/assets/scripts/dist/index.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'fwd_asset_loader', 100);