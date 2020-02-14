<header class="header">
    <div class="l-container">
        <div class="header__inner">
            <div class="logo">
                <a href="<?php echo resolve_url(); ?>"
                    class="logo__link">
                    <?php if (is_front_page()): ?>
                    <h1 class="logo__text">TRAINING</h1>
                    <?php else: ?>
                    TRAINING
                    <?php endif; ?>
                </a>
            </div>
            <div class="header__menu">
                <?php import_part('modules/nav'); ?>
                <?php import_part('modules/search-form'); ?>
            </div>
        </div>
    </div>
</header>