<?php

namespace Flynt\Components\BlockFootnotes;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockFootnotes',
        'label' => 'Block: Footnotes',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Footnotes', 'flynt'),
                'name' => 'footnotesPanels',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 0,
                'button_label' => __('Add Footnote', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Footnote Number', 'flynt'),
                        'name' => 'footnoteNumber',
                        'type' => 'number',
                        'wrapper' => [
                            'width' => 20
                        ],
                    ],
                    [
                        'label' => __('Footnote', 'flynt'),
                        'name' => 'footnoteContent',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 80
                        ],
                    ],
                ],
            ],
        ]
    ];
}
