<?php

$posts = get_post_by_type($post_type, $limit);

?>
<ul class="post__list">
  <?php if ($posts->have_posts()): ?>
      <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <li class="post__item">
        <?php import_part('modules/post-card'); ?>
      </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
  <?php else: ?>
    <li>No post found.</li>
  <?php endif; ?>
</ul>