<?php

namespace Flynt\Components\BlockSubscriptionConfirmation;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockSubscriptionConfirmation',
        'label' => 'Subscription Confirmation',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Logo', 'flynt'),
                'name' => 'logo',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: SVG, PNG.', 'flynt'),
                'required' => 1,
                'mime_types' => 'svg,png'
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ]
        ]
    ];
}
