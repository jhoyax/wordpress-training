<?php
/**
 * The template for displaying archive pages.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<div class="l-main-section">
  <?php import_part('archive-filter', ['post_type' => 'news']); ?>
  
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
