<?php

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