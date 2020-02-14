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
} elseif ($name = get_queried_object()->name) {
  $post_type = $name;
}

get_header(); ?>
<main class="l-main">
  <div class="l-container">
    <section class="section">
      <div class="section__content">
        <?php import_part('modules/archive-filter', ['post_type' => $post_type]); ?>
      </div>
    </section>

    <section class="section">
      <div class="section__header">
        <h1 class="section__title"><?php echo ucfirst($post_type); ?></h1>
      </div>
      <div class="section__content">
        <ul class="post__list">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <li class="post__item">
            <?php import_part('modules/post-card'); ?>
          </li>
          <?php endwhile; ?>
          <?php else: ?>
          <li>No post found.</li>
          <?php endif; ?>
        </ul>
      </div>
    </section>

    <section class="section">
      <div class="section__content">
        <div class="pagination"><?php wp_pagenavi(); ?>
        </div>
      </div>
    </section>
  </div>
</main>
<?php
get_sidebar();
get_footer();
