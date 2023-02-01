<?php

namespace Flynt\Components\BlockImageMedium;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockImageMedium',
        'label' => 'Block: Medium Image',
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
                    'imageCenter' => '<i class=\'dashicons dashicons-align-center\' title=\'Image center-align\'></i>',
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
