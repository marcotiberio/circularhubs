<?php

namespace Flynt\Components\BlockNewsletter;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockNewsletter',
        'label' => 'Block: Newsletter',
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
            ],
            [
                'label' => __('Newsletter', 'flynt'),
                'name' => 'newsletterTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Newsletter', 'flynt'),
                'name' => 'newsletter',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
            ],
        ]
    ];
}
