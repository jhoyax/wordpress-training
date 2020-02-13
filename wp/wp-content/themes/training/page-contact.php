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
        <section class="section">
            <div class="section__header">
                <h2 class="section__title">CONTACT US</h2>
            </div>
            <div class="section__content">
                <div class="contact-form">
                    <?php echo do_shortcode( '[mwform_formkey key="21"]' ); ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php endwhile; // End of the loop.?>

<?php
get_sidebar();
get_footer();
