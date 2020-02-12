<?php
    $name = get_queried_object()->name;
    if (!$name) {
        $name = get_queried_object()->post_name;
    }
?>
<nav class="nav">
    <ul class="nav__list">
        <li class="nav__item">
            <a href="<?php echo resolve_url('news'); ?>" class="nav__link nav__link--green <?php echo $name == 'news' ? 'active' : ''; ?>">News</a>
        </li>
        <li class="nav__item">
            <a href="<?php echo resolve_url('events'); ?>" class="nav__link nav__link--orange <?php echo $name == 'events' ? 'active' : ''; ?>">Events</a>
        </li>
        <li class="nav__item">
            <a href="<?php echo resolve_url('contact'); ?>" class="nav__link nav__link--blue <?php echo $name == 'contact' ? 'active' : ''; ?>">Contact</a>
        </li>
    </ul>
</nav>