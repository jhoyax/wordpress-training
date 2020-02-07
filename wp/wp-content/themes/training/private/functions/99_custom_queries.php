<?php

function category_list_filter($taxonomy) {
  $args = array(
    'taxonomy' => $taxonomy,
    'title_li' => '', 
    'order' => 'DESC',
    'show_option_none' => 'No Category List',
  );

  return wp_list_categories($args);
}

function category_year_filter($post_type) {
  $args = array(
    'type'            => 'yearly',
    'limit'           => '',
    'format'          => 'html', 
    'show_post_count' => false, 
    'echo'            => 1,
    'order'           => 'DESC',
    'post_type'       => $post_type,
  );

  return wp_get_archives( $args );
}

function get_post_by_type($post_type, $limit = 0) {
    $args = array( 
      'post_type' => $post_type, 
      'posts_per_page' => $limit, 
      'order'=> 'DESC', 
      'orderby' => 'date', 
      'post_status' => 'publish' 
    );
    
    return new WP_Query( $args );
}