<?php

namespace Flynt\Components\BlockMap;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockMap',
        'label' => 'Block: Map',
        'sub_fields' => [
            [
                'label' => __('Map', 'flynt'),
                'name' => 'map',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
