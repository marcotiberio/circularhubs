<?php

namespace Flynt\Components\BlockSoundcloudOembed;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockSoundcloudOembed',
        'label' => 'Block: Soundcloud/Bandcamp Oembed',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'soundcloudOembedText',
                'type' => 'textarea',
                'instructions' => __('Copy here the embed code from Soundcloud or Bandcamp.', 'flynt'),
                'required' => 0
            ]
        ]
    ];
}
