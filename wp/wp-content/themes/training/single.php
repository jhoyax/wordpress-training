<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
$category_list = [
  'news' => 'news_category',
  'events' => 'events_category',
];
$category = '';
if ($post_type = get_queried_object()->post_type) {
  $category = $category_list[$post_type];
}

get_header(); ?>

<main class="l-main">
  <div class="l-container">
    <?php while (have_posts()) : the_post(); ?>
      
      <?php $eyecatch = get_eyecatch_data(get_the_ID(), 'full', 'https://via.placeholder.com/' . POST_LIST_IMAGE_SIZE); ?>

      <article class="post-single">
        <div class="post-single__header">
          <div class="post-single__image">
            <div class="post-single__image-holder" style="background-image: url(<?php echo $eyecatch; ?>);height: <?php echo POST_LIST_IMAGE_SIZE; ?>px;"></div>
          </div>
          <h1 class="post-single__title"><?php the_title(); ?></h1>
          <ul class="post-single__list">
            <li class="post-single__item"><?php the_author(); // The display name(ブログ上の表示名).?></li>
            <li class="post-single__item"><?php the_time('Y-m-d H:i:s'); // The published time(local timezone) of post(公開日時).?></li>
          </ul>
        </div>

        <div class="post-single__content">
          <?php the_content(); ?>
        </div>

        <div class="post-single__footer">
          <?php foreach (get_the_category() as $category): // $category is instance of WP_Term(カテゴリー).?>
            <?php echo esc_html($category->name); ?>
          <?php endforeach; ?>

          <?php if ($tags = get_the_tags()): // Return either array or false.?>
            <?php foreach ($tags as $tag): // $tag is instance of WP_Term(タグ).?>
              <?php echo esc_html($tag->name); ?>
            <?php endforeach; ?>
          <?php endif; ?>

          <?php if ($terms = get_the_terms(get_the_ID(), $category)): // Return either array or false when custom taxonomy exist.?>
            <ul>
            <?php foreach ($terms as $term): // $term is instance of WP_Term(タグ).?>
              <li><a href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a></li>
            <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if ($newer_post = get_next_post()): // Return the instance of Post newer post than current if exist.?>
            <a href="<?php the_permalink($newer_post); ?>"><u><< <?php echo esc_html(get_the_title($newer_post)); ?></u></a>
          <?php endif; ?>
          <?php 
            if (get_next_post() && get_previous_post()) {
              echo ' | ';
            }
          ?>
          <?php if ($older_post = get_previous_post()): // Return the instance of Post older than current if exist.?>
            <a href="<?php the_permalink($older_post); ?>"><u><?php echo esc_html(get_the_title($older_post)); ?> >></u></a>
          <?php endif; ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();
