<?php

namespace Flynt\Components\HeroVideo;

use Flynt\FieldVariables;
use Flynt\Utils\Oembed;

add_filter('Flynt/addComponentData?name=HeroVideo', function ($data) {
    $data['video'] = Oembed::setSrcAsDataAttribute(
        $data['oembed'],
        [
            'autoplay' => 'true',
            'background' => 'true',
            'muted' => 'true',
            'playsinline' => 'true',
            'loop' => 'true',
            'controls' => 'false',
        ]
    );

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'HeroVideo',
        'label' => 'Hero: Video',
        'sub_fields' => [
            [
                'label' => __('Video', 'flynt'),
                'name' => 'videoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            // [
            //     'label' => __('Poster Image', 'flynt'),
            //     'name' => 'posterImage',
            //     'type' => 'image',
            //     'preview_size' => 'medium',
            //     'mime_types' => 'jpg,jpeg,png',
            //     'instructions' => __('Recommended Size: Min-Width 1920px; Min-Height: 1080px; Image-Format: JPG, PNG. Aspect Ratio 2/1.', 'flynt'),
            //     'required' => 0,
            //     'wrapper' => [
            //         'width' => 50
            //     ],
            // ],
            [
                'label' => __('Video', 'flynt'),
                'name' => 'oembed',
                'type' => 'oembed',
                'required' => 1,
                'wrapper' => [
                    'width' => 100
                ],
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'textarea',
            ],
            // [
            //     'label' => __('Link', 'flynt'),
            //     'name' => 'pagelink',
            //     'type' => 'link',
            //     'return_format' => 'array'
            // ],
        ]
    ];
}
