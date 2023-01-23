<?php

namespace Flynt\Components\SliderMediumImage;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=SliderMediumImage', function ($data) {
    $translatableOptions = Options::getTranslatable('SliderMediumImage');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'SliderMediumImage',
        'label' => 'Slider: Medium Image',
        'sub_fields' => [
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'sliderTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Slider Position', 'flynt'),
                'name' => 'sliderPosition',
                'type' => 'button_group',
                'choices' => [
                    'sliderLeft' => '<i class=\'dashicons dashicons-align-left\' title=\'Slider left-align\'></i>',
                    'sliderCenter' => '<i class=\'dashicons dashicons-align-center\' title=\'Slider center-align\'></i>',
                    'sliderRight' => '<i class=\'dashicons dashicons-align-right\' title=\'Slider right-align\'></i>'
                ],
                'default_value' => 'sliderRight'
            ],
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'repeaterSlider',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => __('Add Image', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'panelImage',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionTab',
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
