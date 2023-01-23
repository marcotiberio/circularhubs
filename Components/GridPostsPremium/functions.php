<?php

namespace Flynt\Components\GridPostsPremium;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'post';

// hydrate to initial render
add_filter('Flynt/addComponentData?name=GridPostsPremium', function ($data) {
    $postType = POST_TYPE;
    $data['postType'] = $postType;
    $data['taxonomies'] = $data['taxonomies'] ?: [];
    $catString = $data['taxonomies'];

    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => $postType,
        'category' => $catString,
        'posts_per_page' => -1,
        'ignore_sticky_posts' => 1,
        'post__not_in' => array(get_the_ID())
    ]);

    $data['topics'] = Timber::get_terms('category');
    $data['formats'] = Timber::get_terms('format');

    $data['postTypeArchiveLink'] = get_post_type_archive_link($postType);
    $data['category'] = $catString;
    $data['json'] = json_encode($catString);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'gridPostsPremium',
        'label' => 'Grid: Posts Premium',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    FieldVariables\getSectionId()
                ]
            ],
            [
                'label' => __('Category', 'flynt'),
                'name' => 'taxonomies',
                'type' => 'taxonomy',
                'instructions' => __('Select a category or leave empty to show from all posts.', 'flynt'),
                'taxonomy' => 'category',
                'field_type' => 'select',
                'allow_null' => 1,
                'multiple' => 1,
                'add_term' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'object'
            ],
        ]
    ];
}

Options::addTranslatable('GridPostsPremium', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('Reading Time', 'flynt'),
                'name' => 'readingTime',
                'type' => 'text',
                'default_value' => 'min',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('All Posts', 'flynt'),
                'name' => 'allPosts',
                'type' => 'text',
                'default_value' => 'See More Posts',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Read More', 'flynt'),
                'name' => 'readMore',
                'type' => 'text',
                'default_value' => 'Read More',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ]
        ],
    ]
]);
