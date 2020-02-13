<?php
    $category_list = [
    'news' => 'news_category',
    'events' => 'events_category',
    ];
    $category = '';
    if ($post_type = get_post_type()) {
        $category = $category_list[$post_type] ?? '';
    }

    $weekly_post = 7 * 86400;
    $post_age = date('U') - get_post_time('U');
    $new_post = $post_age < $weekly_post ? '<span class="post-card__new">NEW</span>' : '';

    $eyecatch = get_eyecatch_data(get_the_ID(), 'full', 'https://via.placeholder.com/' . POST_LIST_IMAGE_SIZE);
?>
<article class="post-card">
    <div class="post-card__image">
        <a href="<?php the_permalink(); ?>">
            <?php echo $new_post; ?>
            <div class="post-card__image-holder" style="background-image: url(<?php echo $eyecatch; ?>);height: <?php echo POST_LIST_IMAGE_SIZE; ?>px;"></div>
        </a>
    </div>
    <div class="post-card__content">
        <a class="post-card__link" href="<?php the_permalink(); ?>">
            <h2 class="post-card__title">
                <?php the_title(); ?>
            </h2>
        </a>
        <?php if ($terms = get_the_terms(get_the_ID(), $category)): // Return either array or false when custom taxonomy exist.?>
            <ul class="post-card__category-list">
                <?php foreach ($terms as $term): // $term is instance of WP_Term(タグ).?>
                    <li class="post-card__category-item"><?php echo esc_html($term->name); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="post-card__footer">
            <time class="post-card__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
        </div>
    </div>
</article>