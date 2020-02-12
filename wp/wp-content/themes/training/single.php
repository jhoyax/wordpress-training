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
      <section class="section">
        <?php the_title('<h1>', '</h1>'); // The title of post(タイトル).?>

        <?php the_time('Y-m-d H:i:s'); // The published time(local timezone) of post(公開日時).?>

        <div class="post-section-image">
            <?php $eyecatch = get_eyecatch_data(get_the_ID(), 'full', 'https://via.placeholder.com/' . POST_LIST_IMAGE_SIZE); ?>
            <div class="post-image" style="background-image: url(<?php echo $eyecatch; ?>);background-size: <?php echo POST_LIST_IMAGE_SIZE; ?>px auto; width: <?php echo POST_LIST_IMAGE_SIZE; ?>px; height: <?php echo POST_LIST_IMAGE_SIZE; ?>px;"></div>
        </div>

        <div>
          <?php the_content(); // The content of post(本文) with HTML.?>
        </div>
        <div>
        <?php the_author(); // The display name(ブログ上の表示名).?>
        </div>

        <?php
        // $user = get_userdata( get_the_author_meta( 'ID' ) ); // Return the instance of WP_User if exist.
        // echo $user->image; // If user has custom meta, can access the meta data via magic method like this.
        ?>

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
      </section>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();
