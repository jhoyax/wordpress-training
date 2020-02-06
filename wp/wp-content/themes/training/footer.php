<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
    <footer class="l-footer">
        <div class="l-container">
            <nav class="nav footer-nav">
                <?php
                    wp_nav_menu([
                    'menu' => 'Footer',
                    'fallback_cb' => false
                    ]);
                ?>
            </ul>
        </nav>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php echo resolve_asset_url('/js/app.js'); ?>" async></script>
</body>
</html>
