<?php

namespace Flynt\Components\ListIcons;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'ListIcons',
        'label' => 'List: Icons',
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
                        'label' => __('Text content', 'flynt'),
                        'name' => 'textContentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1
                    ],
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'link',
                        'type' => 'link',
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
                    FieldVariables\getTheme(),
                    [
                        'label' => __('Item Alignment', 'flynt'),
                        'name' => 'align',
                        'type' => 'button_group',
                        'choices' => [
                            'left' => '<i class=\'dashicons dashicons-align-left\'></i>Left',
                            'centered' => '<i class=\'dashicons dashicons-align-center\'></i>Center'
                        ],
                        'default_value' => 'left'
                    ],
                ]
            ],
        ]
    ];
}
