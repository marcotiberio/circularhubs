<?php

namespace Flynt\Components\ListSocial;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Flynt\ComponentManager;
use Timber;

function getACFLayout()
{
    return [
        'name' => 'listSocial',
        'label' => 'List: Social',
        'sub_fields' => [
            // [
            //     'label' => __('General', 'flynt'),
            //     'name' => 'generalTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => __('Contact Link', 'flynt'),
            //     'name' => 'contact',
            //     'type' => 'link',
            //     'return_format' => 'array',
            //     'wrapper' => [
            //         'width' => '100',
            //     ],
            // ],
            // [
            //     'label' => __('Socials', 'flynt'),
            //     'name' => 'socialTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => __('Title', 'flynt'),
            //     'name' => 'title',
            //     'type' => 'text'
            // ],
            [
                'label' => __('Socials', 'flynt'),
                'name' => 'repeaterPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Social Link', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Panel Link', 'flynt'),
                        'name' => 'panelLink',
                        'type' => 'link',
                        'return_format' => 'array',
                        'wrapper' => [
                            'width' => '100',
                        ],
                    ],
                ],
            ],
        ]
    ];
}

Options::addTranslatable('ListSocial', [
    [
        'label' => __('Socials', 'flynt'),
        'name' => 'repeaterPanels',
        'type' => 'repeater',
        'layout' => 'row',
        'min' => 1,
        'button_label' => __('Add Social Link', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Panel Link', 'flynt'),
                'name' => 'panelLink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '100',
                ],
            ],
        ],
    ],
]);
