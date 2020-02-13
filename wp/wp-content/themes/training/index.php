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
      <div class="section__header">
        <h2 class="section__title">LATEST NEWS</h2>
      </div>
      <div class="section__content">
        <?php import_part('modules/post-list', ['post_type' => 'news', 'limit' => 3]); ?>
      </div>
      <div class="section__footer">
        <a href="<?php echo resolve_url('news'); ?>" class="section__link">ALL NEWS</a>
      </div>
    </section>
    <section class="section">
      <div class="section__header">
        <h2 class="section__title">LATEST EVENTS</h2>
      </div>
      <div class="section__content">
        <?php import_part('modules/post-list', ['post_type' => 'events', 'limit' => 3]); ?>
      </div>
      <div class="section__footer">
        <a href="<?php echo resolve_url('events'); ?>" class="section__link">ALL EVENTS</a>
      </div>
    </section>
    <section class="section">
      <div class="section__header">
        <h2 class="section__title">FEATURED NEWS</h2>
      </div>
      <div class="section__content">
        <?php import_part('modules/featured-post-list', ['field' => 'featured_news']); ?>
      </div>
    </section>
    <section class="section">
      <div class="section__header">
        <h2 class="section__title">FEATURED EVENTS</h2>
      </div>
      <div class="section__content">
        <?php import_part('modules/featured-post-list', ['field' => 'featured_events']); ?>
      </div>
    </section>
  </div>
</main>
<?php
get_sidebar();
get_footer();
