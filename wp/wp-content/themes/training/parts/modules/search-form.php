<div class="search-form">
    <div class="search-form__button js-search-button"></div>
    <div action="" class="search-form__box js-search-form">
        <form role="search" method="get" class="search-form__form"
            action="<?php echo resolve_url(); ?>">
            <input class="search-form__keyword-field" type="search" class="search-field" placeholder="Search..."
                value="<?php echo esc_attr(get_search_query()); ?>"
                name="s" autocomplete="off"
                title="<?php echo esc_attr_x('Search for:', 'label'); ?>" />
            <button type="submit" class="search-form__submit-button"></button>
        </form>
    </div>
</div>