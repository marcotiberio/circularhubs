<?php

namespace Flynt\Components\HeroImageCta;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'heroImageCta',
        'label' => 'Hero: Image CTA',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Images', 'flynt'),
                'type' => 'group',
                'name' => 'images',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'label' => __('Desktop Image', 'flynt'),
                        'name' => 'imageDesktop',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png',
                        'required' => 1,
                        'instructions' => __('Image-Format: JPG, PNG. Recommended resolution greater than 2048 x 800 px.', 'flynt'),
                    ],
                    [
                        'label' => __('Mobile Image', 'flynt'),
                        'name' => 'imageMobile',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png',
                        'instructions' => __('Image-Format: JPG, PNG. Recommended resolution greater than 750 x 800 px.', 'flynt'),
                    ]
                ]
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'required' => 1,
                'instructions' => __('The content overlaying the image. Character Recommendations: Title: 30-100, Content: 80-250.', 'flynt'),
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
                    FieldVariables\getTheme(),
                    [
                        'label' => __('Align Image', 'flynt'),
                        'name' => 'alignImage',
                        'type' => 'group',
                        'layout' => 'table',
                        'sub_fields' => [
                            [
                                'label' => __('Desktop', 'flynt'),
                                'name' => 'desktop',
                                'type' => 'group',
                                'sub_fields' => [
                                    [
                                        'label' => __('Horizontal', 'flynt'),
                                        'name' => 'horizontal',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'desktopHorizontalAlign--left' => __('Left', 'flynt'),
                                            'desktopHorizontalAlign--center' => __('Center', 'flynt'),
                                            'desktopHorizontalAlign--right' => __('Right', 'flynt'),
                                        ],
                                        'default_value' => 'desktopHorizontalAlign--center'
                                    ],
                                    [
                                        'label' => __('Vertical', 'flynt'),
                                        'name' => 'vertical',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'desktopVerticalAlign--top' => __('Top', 'flynt'),
                                            'desktopVerticalAlign--center' => __('Center', 'flynt'),
                                            'desktopVerticalAlign--bottom' => __('Bottom', 'flynt'),
                                        ],
                                        'default_value' => 'desktopVerticalAlign--center'
                                    ],
                                ]
                            ],
                            [
                                'label' => __('Mobile', 'flynt'),
                                'name' => 'mobile',
                                'type' => 'group',
                                'sub_fields' => [
                                    [
                                        'label' => __('Horizontal', 'flynt'),
                                        'name' => 'horizontal',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'mobileHorizontalAlign--left' => __('Left', 'flynt'),
                                            'mobileHorizontalAlign--center' => __('Center', 'flynt'),
                                            'mobileHorizontalAlign--right' => __('Right', 'flynt'),
                                        ],
                                        'default_value' => 'mobileHorizontalAlign--center'
                                    ],
                                    [
                                        'label' => __('Vertical', 'flynt'),
                                        'name' => 'vertical',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'mobileVerticalAlign--top' => __('Top', 'flynt'),
                                            'mobileVerticalAlign--center' => __('Center', 'flynt'),
                                            'mobileVerticalAlign--bottom' => __('Bottom', 'flynt'),
                                        ],
                                        'default_value' => 'mobileVerticalAlign--center'
                                    ],
                                ]
                            ],
                        ]
                    ],
                    [
                        'label' => __('Full width image', 'flynt'),
                        'name' => 'fullWidth',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                ]
            ],
        ]
    ];
}
