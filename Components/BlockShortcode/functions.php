<?php

namespace Flynt\Components\BlockShortcode;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockShortcode',
        'label' => 'Block: Shortcode',
        'sub_fields' => [
            [
                'label' => __('Type of Shortcode', 'flynt'),
                'name' => 'shortcodeType',
                'type' => 'select',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'choices' => [
                    'customForm' => __('Form', 'flynt'),
                    'customMap' => __('Map', 'flynt'),
                ],
                'default_value' => 'customMap'
            ],
            [
                'label' => __('Background Image', 'flynt'),
                'name' => 'backgroundImage',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg',
                'conditional_logic' => [
                    [
                        [
                            'fieldPath' => 'shortcodeType',
                            'operator' => '==',
                            'value' => 'customForm'
                        ]
                    ]
                ],
            ],
            [
                'label' => __('Shortcode', 'flynt'),
                'name' => 'shortcode',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
