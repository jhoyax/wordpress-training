<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<main class="l-main">
    <div class="l-container">
        <article class="post-single">
            <div class="post-single__header">
                <h1 class="post-single__title"><?php the_title(); ?></h1>
            </div>
            <div class="post-single__content">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
</main>
<?php endwhile; // End of the loop.?>

<?php
get_sidebar();
get_footer();
