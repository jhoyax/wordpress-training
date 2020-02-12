<?php

// Add feature news ACF option page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Featured Posts',
        'menu_title' => 'Featured Posts',
        'menu_slug' => 'featured-posts'
    ]);
}

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'group_5e43767aa71ab',
        'title' => 'Featured Posts',
        'fields' => [
            [
                'key' => 'field_5e4377358ad53',
                'label' => 'Featured News',
                'name' => 'featured_news',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => [
                    0 => 'news',
                ],
                'taxonomy' => '',
                'filters' => [
                    0 => 'search',
                    1 => 'taxonomy',
                ],
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ],
            [
                'key' => 'field_5e4377588ad54',
                'label' => 'Featured Events',
                'name' => 'featured_events',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => [
                    0 => 'events',
                ],
                'taxonomy' => '',
                'filters' => [
                    0 => 'search',
                    1 => 'taxonomy',
                ],
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'featured-posts',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ]);
}
