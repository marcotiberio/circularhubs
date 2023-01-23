<?php

namespace Flynt\Components\BlockTextImageTwoCol;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockTextImageTwoCol',
        'label' => 'Block: Text/Image Two Columns',
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
                'label' => __('Text', 'flynt'),
                'name' => 'text',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
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
