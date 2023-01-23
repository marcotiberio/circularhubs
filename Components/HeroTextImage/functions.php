<?php

namespace Flynt\Components\HeroTextImage;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'heroTextImage',
        'label' => 'Hero: Text Image',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'required' => 1
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_height' => 600,
                'mime_types' => 'gif,jpg,jpeg,png,svg',
                'instructions' => __('Image-Format: JPG, PNG, GIF, SVG. Recommended Height: 1200px. Minimum Height: 600px.', 'flynt'),
                'required' => 1
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
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Content Alignment', 'flynt'),
                        'name' => 'contentAlignment',
                        'type' => 'button_group',
                        'choices' => [
                            'textLeft' =>
                                '<i class=\'dashicons dashicons-editor-alignleft\' title=\'Align content left\'></i>',
                            'textRight' =>
                                '<i class=\'dashicons dashicons-editor-alignright\' title=\'Align content right\'></i>'
                        ],
                        'required' => 1,
                        'default_value' => 'textLeft'
                    ],
                    FieldVariables\getTheme()
                ]
            ],
        ]
    ];
}
