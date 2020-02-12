<?php
/**
 * The template for displaying archive pages.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<main class="l-main">
  <div class="l-container">
  <?php import_part('modules/archive-filter', ['post_type' => 'news']); ?>
  
  <?php if (have_posts()) : ?>
    <div class="articles-group-list">
      <?php while (have_posts()) : the_post(); ?>
        <?php import_part('modules/post-card'); ?>
      <?php endwhile; ?>
    </div>

    <div class="pagination"><?php wp_pagenavi(); ?></div>
  <?php endif; ?>
    </div>
</main>
<?php
get_sidebar();
get_footer();
