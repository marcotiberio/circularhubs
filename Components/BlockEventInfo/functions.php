<?php

namespace Flynt\Components\BlockEventInfo;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=BlockEventInfo', function ($data) {
    $translatableOptions = Options::getTranslatable('BlockEventInfo');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockEventInfo',
        'label' => 'Block: Event Info',
        'sub_fields' => [
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'sliderTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Images', 'flynt'),
                'name' => 'images',
                'type' => 'gallery',
                'min' => 2,
                'preview_size' => 'medium',
                'mime_types' => 'jpg,jpeg,png',
                'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                'required' => 1
            ],
            // [
            //     'label' => __('Socials', 'flynt'),
            //     'name' => 'socialTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => __('Socials', 'flynt'),
            //     'name' => 'repeaterPanels',
            //     'type' => 'repeater',
            //     'layout' => 'table',
            //     'min' => 1,
            //     'button_label' => __('Add Social Link', 'flynt'),
            //     'sub_fields' => [
            //         [
            //             'label' => __('Panel Title', 'flynt'),
            //             'name' => 'panelTitle',
            //             'type' => 'text',
            //             'wrapper' => [
            //                 'width' => '50',
            //             ],
            //         ],
            //         [
            //             'label' => __('Panel Link', 'flynt'),
            //             'name' => 'panelLink',
            //             'type' => 'url',
            //             'wrapper' => [
            //                 'width' => '50',
            //             ],
            //         ],
            //     ],
            // ],
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Bio', 'flynt'),
                'name' => 'bioHtml',
                'type' => 'wysiwyg',
                'media_upload' => 0,
            ],
            [
                'label' => 'Soundcloud',
                'name' => 'soundcloudOembedText',
                'type' => 'textarea',
                'instructions' => __('Copy here the embed code from Soundcloud.', 'flynt'),
                'required' => 0
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
                        'step' => 1,
                        'default_value' => 4000,
                        'required' => 1,
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
                ]
            ]
        ]
    ];
}
