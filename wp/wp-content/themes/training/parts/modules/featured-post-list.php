<?php

$posts = get_field($field, 'options');
$image_size = 300;
$category_list = [
  'news' => 'news_category',
  'events' => 'events_category',
  ];

?>

<ul class="post__list">
  <?php if ($posts): ?>
      <?php foreach( $posts as $post): $postID = $post->ID;?>
        <?php
            $category = '';
            if ($post_type = $post->post_type) {
            $category = $category_list[$post_type];
            }

            $weekly_post = 7 * 86400;
            $post_age = date('U') - get_post_time('U', false, $post);
            $new_post = $post_age < $weekly_post ? '<span class="post-card__new">NEW</span>' : '';

            $eyecatch = get_eyecatch_data($postID, 'full', 'https://via.placeholder.com/' . $image_size);
        ?>
          <li class="post__item">
            <article class="post-card">
              <div class="post-card__image">
                <a href="<?php the_permalink($postID); ?>">
                  <?php echo $new_post; ?>
                  <div class="post-card__image-holder" style="background-image: url(<?php echo $eyecatch; ?>);height: <?php echo $image_size; ?>px;"></div>
                </a>
              </div>
              <div class="post-card__content">
                <a class="post-card__link" href="<?php echo get_the_permalink($postID); ?>">
                  <h2 class="post-card__title"><?php echo get_the_title($postID); ?></h2>
                </a>
                <?php if ($terms = get_the_terms($postID, $category)): // Return either array or false when custom taxonomy exist.?>
                  <ul class="post-card__category-list">
                    <?php foreach ($terms as $term): // $term is instance of WP_Term(タグ).?>
                        <li class="post-card__category-item"><?php echo esc_html($term->name); ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>  
              </div>
              <div class="post-card__footer">
                <time class="post-card__date" datetime="2019-01-14"><?php echo get_the_time('Y.m.d', $post); ?></time>
              </div>
            </article>
          </li>
      <?php endforeach; ?>
  <?php else: ?>
    <li>No post found.</li>
  <?php endif; ?>
</ul>