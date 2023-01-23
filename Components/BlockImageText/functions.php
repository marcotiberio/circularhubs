<?php

namespace Flynt\Components\BlockImageText;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockImageText',
        'label' => 'Block: Image Text',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Section Title', 'flynt'),
                'name' => 'preContent',
                'type' => 'text',
            ],
            [
                'label' => __('Image Position', 'flynt'),
                'name' => 'imagePosition',
                'type' => 'button_group',
                'choices' => [
                    'imageLeft' => '<i class=\'dashicons dashicons-align-left\' title=\'Image on the left\'></i>',
                    'imageRight' => '<i class=\'dashicons dashicons-align-right\' title=\'Image on the right\'></i>'
                ]
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg'
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('CTA', 'flynt'),
                'name' => 'ctaLink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' =>  [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            FieldVariables\getSectionId(),
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColor',
                'type' => 'select',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'choices' => [
                    'backgroundWhite' => __('White', 'flynt'),
                    'backgroundOrange' => __('Orange', 'flynt'),
                    'backgroundGreen' => __('Green', 'flynt'),
                ],
                'default_value' => 'backgroundWhite'
            ]
        ]
    ];
}
