<?php

namespace Flynt\Components\BlockCredits;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockCredits',
        'label' => 'Block: Credits',
        'sub_fields' => [
            [
                'label' => __('Repeater', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'repeaterPanels',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Item', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Item Left', 'flynt'),
                        'name' => 'panelItemLeft',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                    [
                        'label' => __('Item Right', 'flynt'),
                        'name' => 'panelItemRight',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                ],
            ],
        ]
    ];
}
