<?php
/**
 * The template for displaying search results pages.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
get_header(); ?>
<main class="l-main">
  <div class="l-container">
  <?php if (have_posts()) : ?>
    <div class="articles-group-list">
      <?php while (have_posts()) : the_post(); ?>
        <?php import_part('modules/post-card'); ?>
      <?php endwhile; ?>
    </div>

    <div class="pagination"><?php wp_pagenavi(); ?></div>
  <?php else: ?>
    No post found.
  <?php endif; ?>
  </div>
</main>
<?php
get_sidebar();
get_footer();
