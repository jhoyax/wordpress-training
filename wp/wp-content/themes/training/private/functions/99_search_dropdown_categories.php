<?php

function search_dropdown_categories() {
    $dropdown_categories = array(
      'show_option_all'  => 'All Categories',
      'class'            => 'search-form__categories-field',
      'taxonomy'         =>['news_category', 'events_category'],
      'name'             => 'category-id',
      'hide_empty'       => false,
      'selected'         => isset($_GET['category-id']) ? $_GET['category-id'] : '',
    );

    return wp_dropdown_categories( $dropdown_categories );
}

function category_search_filter($query) {
  if(isset($_GET['category-id']) && isset($_GET['s'])) {
    $cat_id = $_GET['category-id'];
    if ($cat_id && !is_admin()) {
      $query->set( 'tax_query',
              array(
                'relation' => 'OR',
                  array(
                      'taxonomy' => 'news_category',
                      'field' => 'id',
                      'terms' => array($cat_id),
                      'operator' => 'IN'
                  ),
                  array(
                      'taxonomy' => 'events_category',
                      'field' => 'id',
                      'terms' => array($cat_id),
                      'operator' => 'IN'
                  )
              )
          );
    }
  }
  return $query;
}
add_filter('pre_get_posts', 'category_search_filter');
