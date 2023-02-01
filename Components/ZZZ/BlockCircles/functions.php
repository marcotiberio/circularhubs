<?php

namespace Flynt\Components\BlockCircles;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockCircles',
        'label' => 'Block: Circles',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Boxes', 'flynt'),
                'name' => 'boxes',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Box', 'flynt'),
                'sub_fields' => [
                    // [
                    //     'label' => __('Link', 'flynt'),
                    //     'name' => 'blockLink',
                    //     'type' => 'link',
                    //     'return_format' => 'array',
                    //     'wrapper' =>  [
                    //         'width' => '30',
                    //     ]
                    // ],
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => '30',
                        ]
                    ],
                    [
                        'label' => __('Name', 'flynt'),
                        'name' => 'name',
                        'type' => 'text',
                        'wrapper' =>  [
                            'width' => '70',
                        ]
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'delay' => 1,
                        'media_upload' => 0,
                        'required' => 0,
                        'wrapper' =>  [
                            'width' => '100',
                        ]
                    ],
                ],
            ],
        ]
    ];
}
