<?php

$posts = get_field($field, 'options');
$image_size = 300;

?>
<?php if ($posts): ?>
    <?php foreach( $posts as $post): $postID = $post->ID;?>
        <article class="post-section">
          <div class="post-section-image">
            <?php
              $weekly_post = 7 * 86400;
              $post_age = date('U') - get_post_time('U', false, $post);
              $new_post = $post_age < $weekly_post ? '<span class="post-new">NEW</span>' : '';
              echo $new_post;
            ?>
            <?php $eyecatch = get_eyecatch_data($postID, 'full', 'https://via.placeholder.com/' . $image_size); ?>
            <div class="post-image" style="background-image: url(<?php echo $eyecatch; ?>);background-size: <?php echo $image_size; ?>px auto; width: <?php echo $image_size; ?>px; height: <?php echo $image_size; ?>px;"></div>
          </div>
          <div class="post-section-text">
            <div class="post-box">
            <div class="post-category">
                <?php if ($terms = get_the_terms($postID, 'events_category')): // Return either array or false when custom taxonomy exist.?>
                  <?php foreach ($terms as $term): // $term is instance of WP_Term(タグ).?>
                    <div class="category">
                      <?php echo esc_html($term->name); ?>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>  
              </div>
              <time class="post-date" datetime="2019-01-14"><?php echo get_the_time('Y.m.d', $post); ?></time>
            </div>
            <h2 class="post-title-heading js-truncate-text"><a class="post-link" href="<?php echo get_the_permalink($postID); ?>"><?php echo get_the_title($postID); ?></a></h2>
          </div>
        </article>
    <?php endforeach; ?>
<?php else: ?>
    No post found.
<?php endif; ?>