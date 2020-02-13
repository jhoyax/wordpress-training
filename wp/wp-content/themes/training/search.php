<?php
/**
 * The template for displaying search results pages.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
get_header(); ?>
<main class="l-main">
  <div class="l-container">
    <section class="section">
      <div class="section__header">
        <h2 class="section__title">Search Result for "<?php echo $_GET['s']; ?>"</h2>
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
        <div class="pagination"><?php wp_pagenavi(); ?></div>
      </div>
    </section>
  </div>
</main>
<?php
get_sidebar();
get_footer();
