<?php

namespace Flynt\Components\BlockImageSmall;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockImageSmall',
        'label' => 'Block: Small Image',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image Position', 'flynt'),
                'name' => 'imagePosition',
                'type' => 'button_group',
                'choices' => [
                    'imageLeft' => '<i class=\'dashicons dashicons-align-left\' title=\'Image left-align\'></i>',
                    'imageMiddleLeft' => '<i class=\'dashicons dashicons-align-pull-left\' title=\'Image middle-left-align\'></i>',
                    'imageMiddleRight' => '<i class=\'dashicons dashicons-align-pull-right\' title=\'Image middle-right-align\'></i>',
                    'imageRight' => '<i class=\'dashicons dashicons-align-right\' title=\'Image right-align\'></i>'
                ],
                'default_value' => 'imageRight'
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'required' => 1,
                'mime_types' => 'gif,jpg,jpeg,png'
            ],
        ]
    ];
}
