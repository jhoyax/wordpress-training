<?php
/**
 * The template for displaying archive pages.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<main class="l-main">
  <div class="l-container">
    <section class="section">
      <div class="section__content">
        <?php import_part('modules/archive-filter', ['post_type' => 'events']); ?>
      </div>
    </section>

    <?php if (have_posts()) : ?>
      <section class="section">
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
    <?php endif; ?>
    </div>
</main>
<?php
get_sidebar();
get_footer();
