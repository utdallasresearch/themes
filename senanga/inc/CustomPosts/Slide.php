<?php

namespace Senanga\CustomPosts;

class Slide extends CustomPost
{
    /** @var array WordPress custom post type settings */
    public $settings = [
        'description' => '',
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => false,
        'query_var' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'page-attributes',
            'post-formats',
        ],
        'taxonomies' => [
            'category',
        ]
    ];

}