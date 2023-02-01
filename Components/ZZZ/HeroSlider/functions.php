<?php

namespace Flynt\Components\HeroSlider;

use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=HeroSlider', function ($data) {
    $translatableOptions = Options::getTranslatable('SliderOptions');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'heroSlider',
        'label' => 'Hero: Slider',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'slides',
                'type' => 'repeater',
                'collapsed' => '',
                'min' => 1,
                'max' => 0,
                'layout' => 'row',
                'button_label' => __('Add Slide', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Images', 'flynt'),
                        'name' => 'imagesTab',
                        'type' => 'tab',
                        'placement' => 'top',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Images', 'flynt'),
                        'type' => 'group',
                        'name' => 'images',
                        'layout' => 'block',
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
                                'label' => __('Desktop Image Alignment', 'flynt'),
                                'name' => 'desktopAlignImage',
                                'type' => 'select',
                                'allow_null' => 0,
                                'multiple' => 0,
                                'ui' => 1,
                                'ajax' => 0,
                                'choices' => [
                                    'picture-imageEl--centerAlignDesktop' => __('Center', 'flynt'),
                                    'picture-imageEl--leftAlignDesktop' => __('Left', 'flynt'),
                                    'picture-imageEl--rightAlignDesktop' => __('Right', 'flynt'),
                                ],
                                'default_value' => 'picture-imageEl--centerAlignDesktop'
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
                            ],
                            [
                                'label' => __('Mobile Image Alignment', 'flynt'),
                                'name' => 'mobileAlignImage',
                                'type' => 'select',
                                'allow_null' => 0,
                                'multiple' => 0,
                                'ui' => 1,
                                'ajax' => 0,
                                'choices' => [
                                    'picture-imageEl--centerAlignMobile' => __('Center', 'flynt'),
                                    'picture-imageEl--leftAlignMobile' => __('Left', 'flynt'),
                                    'picture-imageEl--rightAlignMobile' => __('Right', 'flynt'),
                                ],
                                'default_value' => 'picture-imageEl--centerAlignMobile'
                            ],
                        ],
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentTab',
                        'type' => 'tab',
                        'placement' => 'top',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'media_upload' => 0,
                        'toolbar' => 'full',
                    ],
                ]
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
                        'label' => __('Enable Autoplay', 'flynt'),
                        'name' => 'autoplay',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => __('Autoplay Speed (in milliseconds)', 'flynt'),
                        'name' => 'autoplaySpeed',
                        'type' => 'number',
                        'min' => 2000,
                        'default_value' => 4000,
                        'required' => 1,
                        'step' => 1,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'autoplay',
                                    'operator' => '==',
                                    'value' => 1
                                ]
                            ]
                        ],
                    ],
                ],
            ],
        ]
    ];
}
