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
    <div class="l-main-section">
        <div class="l-container">
            <h1 class="l-main-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <br><br>
            <h1>Contact Us Form</h1>
            <?php echo do_shortcode( '[mwform_formkey key="49"]' ); ?>
        </div>
    </div>
<?php endwhile; // End of the loop.?>

<?php
get_sidebar();
get_footer();