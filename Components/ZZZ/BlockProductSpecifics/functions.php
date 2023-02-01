<?php

namespace Flynt\Components\BlockProductSpecifics;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

function getACFLayout()
{
    return [
        'name' => 'blockProductSpecifics',
        'label' => 'Product Specifics',
        'sub_fields' => [
            [
                'label' => __('Slideshow', 'flynt'),
                'name' => 'slideshowTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Images', 'flynt'),
                'name' => 'images',
                'type' => 'gallery',
                'min' => 1,
                'preview_size' => 'medium',
                'mime_types' => 'jpg,jpeg,png',
                'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                'required' => 1
            ],
            [
                'label' => __('Product Info', 'flynt'),
                'name' => 'productinfoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Model', 'flynt'),
                'name' => 'model',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Producer', 'flynt'),
                'name' => 'producer',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Price', 'flynt'),
                'name' => 'price',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Description', 'flynt'),
                'name' => 'descriptionHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'wrapper' => [
                    'width' => '100',
                ],
            ],
            [
                'label' => __('Link', 'flynt'),
                'name' => 'buttonLink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' =>  [
                    'width' => '100',
                ]
            ]
        ]
    ];
}
