<?php

function grayscape_files() {
  wp_enqueue_script('js-main', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('social-icons', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('grayscape_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'grayscape_files' );

function grayscape_features() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'grayscape_features');
 ?>
