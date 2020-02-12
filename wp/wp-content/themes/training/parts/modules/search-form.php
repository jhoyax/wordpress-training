<div class="search-form">
    <div class="search-form__button js-search-button"></div>
    <div action="" class="search-form__box js-search-form">
        <form role="search" method="get" class="search-form-category-form"
        action="<?php echo resolve_url(); ?>">
        <?php search_dropdown_categories(); ?>
        <input class="search-form-category-form-field" 
            type="search" class="search-field" 
            placeholder="Search..."
            value="<?php echo esc_attr(get_search_query()); ?>"
            name="s"
            title="<?php echo esc_attr_x('Search for:', 'label'); ?>" />
        <input type="submit" class="search-form-category-form-submit" value="Submit" />
        </form>
    </div>
</div>