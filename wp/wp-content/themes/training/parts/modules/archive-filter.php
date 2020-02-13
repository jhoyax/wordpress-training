<?php if($post_type): ?>
  <div class="category-filter">
    <h2 class="category-filter__title">Category Filter</h2>
    <ul class="category-filter__list">
      <?php echo category_list_filter($post_type . '_category'); ?>
    </ul>
  </div>
  <div class="category-filter">
    <h2 class="category-filter__title">Year Filter</h2>
    <ul class="category-filter__list">
      <?php echo category_year_filter($post_type); ?>
    </ul>
  </div>
<?php endif; ?>