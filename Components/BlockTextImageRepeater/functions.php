<?php

namespace Flynt\Components\BlockTextImageRepeater;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockTextImageRepeater',
        'label' => 'Block: Text/Image Two Columns (steps)',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    FieldVariables\getSectionId(),
                ]
            ],
            [
                'label' => __('Column Text', 'flynt'),
                'name' => 'columnTextTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Text Editor Panels', 'flynt'),
                'name' => 'contentPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Text Editor', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('List Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Text Editor', 'flynt'),
                        'name' => 'panelTexteditor',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                ],
            ],
            [
                'label' => __('Column Image', 'flynt'),
                'name' => 'columnImageTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg'
            ],
        ]
    ];
}
