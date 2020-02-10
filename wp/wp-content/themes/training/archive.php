<?php
/**
 * The template for displaying archive pages.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
$post_list = [
  'news_category' => 'news',
  'events_category' => 'events',
];
$post_type = '';
if ($category = get_queried_object()->taxonomy) {
  $post_type = $post_list[$category];
}

get_header(); ?>
<div class="l-main-section">
  <?php import_part('archive-filter', ['post_type' => $post_type]); ?>
  
  <?php if (have_posts()) : ?>
    <div class="articles-group-list">
      <?php while (have_posts()) : the_post(); ?>
        <?php import_part('post-card'); ?>
      <?php endwhile; ?>
    </div>

    <div class="pagination"><?php wp_pagenavi(); ?></div>
  <?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
