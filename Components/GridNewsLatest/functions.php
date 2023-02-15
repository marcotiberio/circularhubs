<?php

namespace Flynt\Components\GridNewsLatest;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'news';

add_filter('Flynt/addComponentData?name=GridNewsLatest', function ($data) {
    $postType = POST_TYPE;

    $data['taxonomies'] = $data['taxonomies'] ?: [];

    $today = date('Ymd');

    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => $postType,
        'category' => join(',', array_map(function ($taxonomy) {
            return $taxonomy->term_id;
        }, $data['taxonomies'])),
        'posts_per_page' => $data['options']['columns'],
        // 'meta_key'          => 'eventDate',
        // 'orderby'           => 'meta_value',
        // 'order'             => 'DESC',
        // 'meta_query'        => array(
        //     array(
        //         'key'           => 'eventDate',
        //         'compare'       => '>=',
        //         'value'         => $today,
        //     ),
        // ),
        'ignore_sticky_posts' => 1,
        'post__not_in' => array(get_the_ID())
    ]);

    $data['postTypeArchiveLink'] = get_post_type_archive_link($postType);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'GridNewsLatest',
        'label' => 'Grid: News Latest',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'text',
            ],
            [
                'label' => __('Categories', 'flynt'),
                'name' => 'taxonomies',
                'type' => 'taxonomy',
                'instructions' => __('Select 1 or more categories or leave empty to show from all posts.', 'flynt'),
                'taxonomy' => 'category',
                'field_type' => 'multi_select',
                'allow_null' => 1,
                'multiple' => 1,
                'add_term' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'object'
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            FieldVariables\getSectionId(),
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Posts shown', 'flynt'),
                        'name' => 'columns',
                        'type' => 'number',
                        'default_value' => 2,
                        'min' => 1,
                        'max' => 3,
                        'step' => 1
                    ]
                ]
            ],
        ]
    ];
}

Options::addTranslatable('GridNewsLatest', [
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
            // [
            //     'label' => __('Reading Time', 'flynt'),
            //     'name' => 'readingTime',
            //     'type' => 'text',
            //     'default_value' => 'min',
            //     'required' => 1,
            //     'wrapper' => [
            //         'width' => 50
            //     ],
            // ],
            // [
            //     'label' => __('All Posts Button Label', 'flynt'),
            //     'name' => 'allPostsname',
            //     'type' => 'text',
            //     'default_value' => 'See More Posts',
            //     'required' => 1,
            //     'wrapper' => [
            //         'width' => 50
            //     ],
            // ],
            [
                'label' => __('All Posts Button Link', 'flynt'),
                'name' => 'allPostslink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' =>  [
                    'width' => 100,
                ]
            ],
            // [
            //     'label' => __('Read More', 'flynt'),
            //     'name' => 'readMore',
            //     'type' => 'text',
            //     'default_value' => 'Read More',
            //     'required' => 1,
            //     'wrapper' => [
            //         'width' => 50
            //     ],
            // ]
        ],
    ]
]);
