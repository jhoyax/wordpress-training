<?php

// Add feature news ACF option page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Featured Posts',
    'menu_title'  => 'Featured Posts',
    'menu_slug'   => 'featured-posts'
  ));
}