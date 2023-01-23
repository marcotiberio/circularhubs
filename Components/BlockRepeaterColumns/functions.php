<?php

namespace Flynt\Components\BlockRepeaterColumns;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockRepeaterColumns',
        'label' => 'Block: Text Editor Column (x3)',
        'sub_fields' => [
            [
                'label' => __('List', 'flynt'),
                'name' => 'listTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('List Title', 'flynt'),
                'name' => 'repeaterTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Panel', 'flynt'),
                'name' => 'itemPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Panel', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Description', 'flynt'),
                        'name' => 'panelDescription',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'delay' => 1,
                        'media_upload' => 0,
                        'required' => 0,
                    ],
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    FieldVariables\getSectionId(),
                    [
                        'label' => __('Background Color', 'flynt'),
                        'name' => 'backgroundColor',
                        'type' => 'color_picker',
                    ],
                    [
                        'label' => __('Hide Title', 'flynt'),
                        'name' => 'hideTitle',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ]
                ]
            ]
        ]
    ];
}
