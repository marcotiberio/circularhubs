<?php

namespace Flynt\Components\HeroImageText;

function getACFLayout()
{
    return [
        'name' => 'heroImageText',
        'label' => 'Hero: Image Text',
        'sub_fields' => [
            [
                'label' => __('Image', 'flynt'),
                'name' => 'imageTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'posterImage',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'mime_types' => 'jpg,jpeg,png',
                'required' => 0,
                'instructions' => __('Image-Format: JPG, PNG. Recommended resolution greater than 2048 x 800 px.', 'flynt'),
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'accordionContent',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Content Alignment', 'flynt'),
                'name' => 'contentAlignment',
                'type' => 'select',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'choices' => [
                    'left' => __('Left', 'flynt'),
                    'center' => __('Center', 'flynt'),
                    'right' => __('Right', 'flynt'),
                ],
                'default_value' => 'right'
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'toolbar' => 'full'
            ]
        ]
    ];
}
