<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    // ACFComposer::registerFieldGroup([
    //     'name' => 'postMeta',
    //     'title' => 'Hover Image',
    //     'style' => '',
    //     'menu_order' => 1,
    //     'position' => 'side',
    //     'fields' => [
    //         [
    //             'label' => __('', 'flynt'),
    //             'name' => 'hoverImage',
    //             'type' => 'image',
    //             'return_format' => 'url',
    //             'preview_size' => 'medium',
    //             'library' => 'all',
    //             'wrapper' => [
    //                 'width' => '100',
    //             ],
    //         ],
    //     ],
    //     'location' => [
    //         [
    //             [
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'post',
    //             ],
    //         ],
    //     ],
    // ]);
    ACFComposer::registerFieldGroup([
        'name' => 'newsComponents',
        'title' => 'News Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'newsComponents',
                'label' => __('News Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockShortcode\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwygTwoCol\getACFLayout(),
                    Components\GridEventsPast\getACFLayout(),
                    Components\GridEventsUpcoming\getACFLayout(),
                    Components\GridPostsPremium\getACFLayout(),
                    Components\HeroImageText\getACFLayout(),
                    Components\SliderImagesDefault\getACFLayout(),
                    Components\TabsDefault\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'news',
                ]
            ],
        ],
    ]);
});
