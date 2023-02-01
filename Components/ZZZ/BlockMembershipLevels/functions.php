<?php

namespace Flynt\Components\BlockMembershipLevels;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockMembershipLevels',
        'label' => 'Membership: Levels',
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Text', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Shortcode', 'flynt'),
                'name' => 'shortcode',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    // FieldVariables\getSectionId(),
                    [
                        'label' => __('Background Color', 'flynt'),
                        'name' => 'backgroundColor',
                        'type' => 'color_picker',
                    ],
                    // [
                    //     'label' => __('Hide Title', 'flynt'),
                    //     'name' => 'hideTitle',
                    //     'type' => 'true_false',
                    //     'default_value' => 0,
                    //     'ui' => 1
                    // ],
                    // [
                    //     'label' => __('Hide Top Border', 'flynt'),
                    //     'name' => 'hideTopBorder',
                    //     'type' => 'true_false',
                    //     'default_value' => 0,
                    //     'ui' => 1
                    // ],
                ]
            ]
        ]
    ];
}
