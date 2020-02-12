<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<main class="l-main">
  <div class="l-container">
    <section class="section">
      <h2>Latest News</h2>
      <?php import_part('modules/post-list', ['post_type' => 'news', 'limit' => 3]); ?>
    </section>
    <section class="section">
      <h2>Latest Events</h2>
      <?php import_part('modules/post-list', ['post_type' => 'events', 'limit' => 3]); ?>
    </section>
    <section class="section">
      <h2>Featured News</h2>
      <?php import_part('modules/featured-post-list', ['field' => 'featured_news']); ?>
    </section>
    <section class="section">
      <h2>Featured Events</h2>
      <?php import_part('modules/featured-post-list', ['field' => 'featured_events']); ?>
    </section>
  </div>
</main>
<?php
get_sidebar();
get_footer();
