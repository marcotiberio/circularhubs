<?php

namespace Flynt\Components\BlockImagePost;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockImagePost',
        'label' => 'Block: Image (Article)',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            // [
            //     'label' => __('Image Position', 'flynt'),
            //     'name' => 'imagePosition',
            //     'type' => 'button_group',
            //     'choices' => [
            //         'imageLeft' => '<i class=\'dashicons dashicons-align-left\' title=\'Image on the left\'></i>',
            //         'imageFull' => '<i class=\'dashicons dashicons-editor-justify\' title=\'Image on the right\'></i>',
            //         'imageRight' => '<i class=\'dashicons dashicons-align-right\' title=\'Image on the right\'></i>'
            //     ]
            // ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'required' => 1,
                'mime_types' => 'gif,jpg,jpeg,png'
            ],
            // [
            //     'label' => __('Options', 'flynt'),
            //     'name' => 'optionsTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => '',
            //     'name' => 'options',
            //     'type' => 'group',
            //     'layout' => 'row',
            //     'sub_fields' => [
            //         [
            //             'label' => __('Image Position', 'flynt'),
            //             'name' => 'imagePosition',
            //             'type' => 'button_group',
            //             'choices' => [
            //                 'imageLeft' => '<i class=\'dashicons dashicons-align-left\' title=\'Image on the left\'></i>',
            //                 'imageRight' => '<i class=\'dashicons dashicons-align-right\' title=\'Image on the right\'></i>',
            //                 'imageFull' => '<i class=\'dashicons dashicons-align-right\' title=\'Image on the right\'></i>'
            //             ]
            //         ],
            //     ]
            // ]
        ]
    ];
}
