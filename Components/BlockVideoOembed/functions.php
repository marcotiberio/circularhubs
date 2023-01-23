<?php

namespace Flynt\Components\BlockVideoOembed;

use Flynt\FieldVariables;
use Flynt\Utils\Oembed;

add_filter('Flynt/addComponentData?name=BlockVideoOembed', function ($data) {
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
        'name' => 'blockVideoOembed',
        'label' => 'Block: Banner Video',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Page Title', 'flynt'),
                'name' => 'pageTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Audio', 'flynt'),
                'name' => 'audioTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [    
                'label' => __('Audio Track', 'flynt'),
                'name' => 'audioEmbed',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'instructions' => __('Copy here the embed code from the audio player.', 'flynt')
            ],
            [
                'label' => __('Video', 'flynt'),
                'name' => 'videoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Poster Image', 'flynt'),
                'name' => 'posterImage',
                'type' => 'image',
                'preview_size' => 'medium',
                'mime_types' => 'jpg,jpeg,png',
                'instructions' => __('Recommended Size: Min-Width 1920px; Min-Height: 1080px; Image-Format: JPG, PNG. Aspect Ratio 16/9.', 'flynt'),
                'required' => 1,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Video', 'flynt'),
                'name' => 'oembed',
                'type' => 'oembed',
                'required' => 1,
                'wrapper' => [
                    'width' => '50',
                ],
            ]
        ]
    ];
}
