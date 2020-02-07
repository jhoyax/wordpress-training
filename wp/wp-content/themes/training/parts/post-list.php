<?php

$posts = get_post_by_type($post_type, $limit);

?>
<?php if ($posts->have_posts()): ?>
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <?php import_part('post-card'); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    No post found.
<?php endif; ?>