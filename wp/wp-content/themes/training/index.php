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

<div class="articles">
  <div class="articles-section">
    <div class="l-container">
      <h1 class="articles-title"><u>Latest Articles</u></h1>
      
      <div class="articles-group">
        <h2>Latest News</h2>
        <div class="articles-group-list">
          <?php import_part('post-list', ['post_type' => 'news', 'limit' => 3]); ?>
        </div>
      </div>
      
      <div class="articles-group">
        <h2>Latest Events</h2>
        <div class="articles-group-list">
          <?php import_part('post-list', ['post_type' => 'events', 'limit' => 3]); ?>
        </div>
      </div>
      
      <div class="articles-group">
        <h2>Featured News</h2>
        <div class="articles-group-list">
          <?php import_part('featured-post-list', ['field' => 'featured_news']); ?>
        </div>
      </div>
      
      <div class="articles-group">
        <h2>Featured Events</h2>
        <div class="articles-group-list">
          <?php import_part('featured-post-list', ['field' => 'featured_events']); ?>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
get_sidebar();
get_footer();
