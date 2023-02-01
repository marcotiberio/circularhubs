<?php

namespace Flynt\Components\BlockCountUp;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

function getACFLayout()
{
    return [
        'name' => 'BlockCountUp',
        'label' => 'Block: Count Up',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'row',
                'button_label' => __('Add Item', 'flynt'),
                'sub_fields' => [
                    FieldVariables\getIcon(),
                    [
                        'label' => __('Count Value', 'flynt'),
                        'name' => 'numberGroup',
                        'type' => 'group',
                        'layout' => 'table',
                        'sub_fields' => [
                            [
                                'label' => __('Prefix', 'flynt'),
                                'name' => 'numberPrefix',
                                'type' => 'text'
                            ],
                            [
                                'label' => __('Number', 'flynt'),
                                'name' => 'number',
                                'type' => 'number',
                                'required' => 1
                            ],
                            [
                                'label' => __('Suffix', 'flynt'),
                                'name' => 'numberSuffix',
                                'type' => 'text'
                            ]
                        ]
                    ],
                    [
                        'label' => __('Subtitle', 'flynt'),
                        'name' => 'subtitle',
                        'type' => 'text'
                    ],
                ],
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
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}

Options::addTranslatable('BlockCountUp', [
    [
        'label' => 'Decimal Separator',
        'name' => 'decimalSeparator',
        'type' => 'text',
        'required' => 1,
        'default_value' => ','
      ],
      [
        'label' => 'Thousands Separator',
        'name' => 'thousandsSeparator',
        'type' => 'text',
        'required' => 1,
        'default_value' => '.'
      ]
]);
