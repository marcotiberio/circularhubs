<?php

namespace Flynt\Components\GridAllPosts;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

// add_filter('Flynt/addComponentData?name=GridAllPosts', function ($data) {

//     $data['items'] = Timber::get_posts([
//         'post_status' => 'publish',
//         'post_type' => array(
//             'event',
//             'podcast',
//             'article',
//         ),
//         'posts_per_page' => 20,
//         'paged' => 1,
//         'meta_query' => array(
//             array(
//                 'key' => 'datePost'
//             ),
//         ),
//         'order' => 'DESC',
//     ]);

//     return $data;
// });

// add_filter('Flynt/addComponentData?name=GridAllPosts', function ($data) {

//     $data['items'] = Timber::get_posts([
//         'post_status' => 'publish',
//         'post_type' => array(
//             'event',
//             'podcast',
//             'article',
//         ),
//         'posts_per_page' => 20,
//         'meta_query' => array(
//             array(
//                 'key' => 'datePost'
//             ),
//         ),
//         'order' => 'DESC',
//     ]);

//     return $data;
// });

function getACFLayout()
{
    return [
        'name' => 'GridAllPosts',
        'label' => 'Grid: All Posts',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'message',
                'type' => 'message',
                'message' => "This is a default component to show all posts.",
            ],
        ]
    ];
}

// Options::addGlobal('GridAllPosts', [
//     [
//         'label' => __('Load More Button?', 'flynt'),
//         'name' => 'loadMore',
//         'type' => 'true_false',
//         'default_value' => 1,
//         'ui' => 1
//     ],
// ]);

// Options::addTranslatable('GridAllPosts', [
//     [
//         'label' => __('Labels', 'flynt'),
//         'name' => 'labelsTab',
//         'type' => 'tab',
//         'placement' => 'top',
//         'endpoint' => 0
//     ],
//     [
//         'label' => '',
//         'name' => 'labels',
//         'type' => 'group',
//         'sub_fields' => [
//             [
//                 'label' => __('Reading Time', 'flynt'),
//                 'name' => 'loadMore',
//                 'type' => 'text',
//                 'default_value' => 'Load More'
//             ]
//         ],
//     ]
// ]);
