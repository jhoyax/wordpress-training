<?php
/**
 * The template for displaying archive pages.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<div class="l-main-section">
  <div class="category-filter">
    <h2 class="title">Category Filter</h2>
    <ul>
      <?php echo category_list_filter('news_category'); ?>
    </ul>
  </div>
  <div class="category-filter">
    <h2 class="title">Year Filter</h2>
    <ul>
      <?php echo category_year_filter('news'); ?>
    </ul>
  </div>
  
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
