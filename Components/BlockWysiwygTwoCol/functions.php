<?php

namespace Flynt\Components\BlockWysiwygTwoCol;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockWysiwygTwoCol',
        'label' => 'Block: Wysiwyg Two Columns',
        'sub_fields' => [
            // [
            //     'label' => __('General', 'flynt'),
            //     'name' => 'generalTab',
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
                'label' => __('Left Column', 'flynt'),
                'name' => 'contentLeftTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColorLeft',
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
            ],
            [
                'label' => __('Left Column', 'flynt'),
                'name' => 'contentHtmlLeft',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Right Column', 'flynt'),
                'name' => 'contentRightTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColorRight',
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
            ],
            [
                'label' => __('Right Column', 'flynt'),
                'name' => 'contentHtmlRight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
