<?php

namespace Flynt\Components\BlockPostHeader;

use Flynt\Utils\Options;

// add_filter('Flynt/addComponentData?name=BlockPostHeader', function ($data) {

//     return $data;
// });

// function getACFLayout()
// {
//     return [
//         'name' => 'blockPostHeader',
//         'label' => 'Block: Post Header',
//         'sub_fields' => [
//             [    
//                 'label' => __('Listen', 'flynt'),
//                 'name' => 'audioEmbed',
//                 'type' => 'wysiwyg',
//                 'tabs' => 'visual',
//                 'delay' => 1,
//                 'media_upload' => 0,
//                 'required' => 0,
//                 'instructions' => __('Copy here the embed code from the audio player.', 'flynt')
//             ],
//         ]
//     ];
// }

Options::addTranslatable('BlockPostHeader', [
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
                'label' => __('Posted by', 'flynt'),
                'name' => 'postedByLabel',
                'type' => 'text',
                'default_value' => 'Posted by',
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('(Posted) in', 'flynt'),
                'name' => 'postedInLabel',
                'type' => 'text',
                'default_value' => 'in',
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Reading Time - (20) min read', 'flynt'),
                'name' => 'readingtimeLabel',
                'type' => 'text',
                'default_value' => 'min read',
                'wrapper' => [
                    'width' => '50',
                ],
            ],
        ],
    ],
    [
        'label' => __('Dividers', 'flynt'),
        'name' => 'dividersTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'dividers',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('Datetime | Author', 'flynt'),
                'name' => 'authorDivider',
                'type' => 'text',
                'default_value' => '-',
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Author | Reading Time', 'flynt'),
                'name' => 'readingtimeDivider',
                'type' => 'text',
                'default_value' => '|',
                'wrapper' => [
                    'width' => '50',
                ],
            ],
        ],
    ],
]);
