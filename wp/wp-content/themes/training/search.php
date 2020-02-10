<?php
/**
 * The template for displaying search results pages.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
get_header(); ?>
<div class="l-main-section">
  <?php if (have_posts()) : ?>
    <div class="articles-group-list">
      <?php while (have_posts()) : the_post(); ?>
        <?php import_part('post-card'); ?>
      <?php endwhile; ?>
    </div>

    <div class="pagination"><?php wp_pagenavi(); ?></div>
  <?php else: ?>
    No post found.
  <?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
