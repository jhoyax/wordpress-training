<?php

function posts_link( $post_link, $post = 0 )
{
  if ( $post->post_type === 'news' ) {
    return home_url( 'news/' . $post->ID . '/' );
  } elseif ( $post->post_type === 'events' ) {
    return home_url( 'events/' . $post->ID . '/' );
  } 
  
  return $post_link;
}
add_filter( 'post_type_link', 'posts_link', 1, 2 );

function custom_rewrite_rules( $wp_rewrite )
{
  $rules = array(
    'news/([0-9]{4})/page/([0-9]{1,})/?$'   => 'index.php?post_type=news&year=$matches[1]&paged=$matches[2]',
    'news/([0-9]{4})/?$'                    => 'index.php?post_type=news&year=$matches[1]',
    'news/([0-9]+)?$'                       => 'index.php?post_type=news&p=$matches[1]',

    'news/(.+)/page/([0-9]{1,})/?$'         => 'index.php?news_category=$matches[1]&paged=$matches[2]',
    'news/(.+)/?$'                          => 'index.php?news_category=$matches[1]',

    'events/([0-9]{4})/page/([0-9]{1,})/?$' => 'index.php?post_type=events&year=$matches[1]&paged=$matches[2]',
    'events/([0-9]{4})/?$'                  => 'index.php?post_type=events&year=$matches[1]',
    'events/([0-9]+)?$'                     => 'index.php?post_type=events&p=$matches[1]',

    'events/(.+)/page/([0-9]{1,})/?$'       => 'index.php?events_category=$matches[1]&paged=$matches[2]',
    'events/(.+)/?$'                        => 'index.php?events_category=$matches[1]',
  );
  $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}

add_action( 'generate_rewrite_rules', 'custom_rewrite_rules' );

/**
 * Override archive link by yearly
 */
function custom_archives_link($link_html, $url)
{
    $lists = [
        'news' => 'post_type=news',
        'events' => 'post_type=events',
    ];

    foreach ($lists as $key => $list) {
        if (strpos($url, $list) !== false) {
            $url = str_replace(home_url(), '', $url);
            $explode_url = explode('?', $url);

            $new_url = $explode_url[0];

            $link_html = str_replace($url, '/' . $key . $new_url, $link_html);

            break;
        }
    }

    return $link_html;
}
  add_filter('get_archives_link', 'custom_archives_link', 10, 2);

  function custom_flush_rules()
  {
      global $wp_rewrite;
      $wp_rewrite->flush_rules();
  }
  add_action('init', 'custom_flush_rules');
  