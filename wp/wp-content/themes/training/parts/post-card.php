
<article class="post-section">
    <div class="post-section-image">
        <a href="<?php the_permalink(); ?>">
            <?php
            $weekly_post = 7 * 86400;
            $post_age = date('U') - get_post_time('U');
            $new_post = $post_age < $weekly_post ? '<span class="post-new">NEW</span>' : '';
            echo $new_post;
            ?>
            <?php $eyecatch = get_eyecatch_data(get_the_ID(), 'full', 'https://via.placeholder.com/' . POST_LIST_IMAGE_SIZE); ?>
            <div class="post-image" style="background-image: url(<?php echo $eyecatch; ?>);background-size: <?php echo POST_LIST_IMAGE_SIZE; ?>px auto; width: <?php echo POST_LIST_IMAGE_SIZE; ?>px; height: <?php echo POST_LIST_IMAGE_SIZE; ?>px;"></div>
        </a>
    </div>
    <div class="post-section-text">
        <div class="post-box">
        <div class="post-category">
            <?php if ($terms = get_the_terms(get_the_ID(), 'events_category')): // Return either array or false when custom taxonomy exist.?>
            <?php foreach ($terms as $term): // $term is instance of WP_Term(タグ).?>
                <div class="category">
                <?php echo esc_html($term->name); ?>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>  
        </div>
        <time class="post-date" datetime="2019-01-14"><?php the_time('Y.m.d'); ?></time>
        </div>
        <h2 class="post-title-heading js-truncate-text"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
</article>