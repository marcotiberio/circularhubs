<?php

namespace Flynt\Components\ListLogos;

use Flynt\FieldVariables;

add_filter('Flynt/addComponentData?name=ListLogos', function ($data) {

    if (!empty($data['items'])) {
        $data['items'] = array_map(function ($item) {
            if (isset($item['image']->post_mime_type) && $item['image']->post_mime_type === 'image/svg+xml') {
                $path = get_attached_file($item['image']->ID);
                $item['image']->svg = file_get_contents($path);
            }
            return $item;
        }, $data['items']);
    }
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'listLogos',
        'label' => 'List: Logos',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
            ],
            [
                'label' => __('Logos', 'flynt'),
                'name' => 'logosTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Logos', 'flynt'),
                'name' => 'logosAccordion',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 0,
            ],
            [
                'label' => '',
                'name' => 'logos',
                'type' => 'repeater',
                'collapsed' => '',
                'min' => 1,
                'max' => 30,
                'layout' => 'block',
                'button_label' => 'Add',
                'sub_fields' => [
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'link',
                        'type' => 'link',
                        'return_format' => 'array',
                        'wrapper' =>  [
                            'width' => '60',
                        ]
                    ],
                    [
                        'label' => __('Source', 'flynt'),
                        'name' => 'logoImage',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'small',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'required' => 0,
                        'wrapper' =>  [
                            'width' => '40',
                        ]
                    ]
                ]
            ],
            [
                'label' => '',
                'name' => 'logosAccordionEnd',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 1,
            ]
        ]
    ];
}
