<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventMeta',
        'title' => 'Event Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Date', 'flynt'),
                'name' => 'eventDate',
                'type' => 'date_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => '33',
                ],
                'display_format' => 'd.m.Y',
                'return_format' => 'd.m.Y'
            ],
            [
                'label' => __('Venue', 'flynt'),
                'name' => 'eventVenue',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => __('Category', 'flynt'),
                'name' => 'eventCategory',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'eventIntro',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Link', 'flynt'),
                'name' => 'eventLink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' =>  [
                    'width' => '100',
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'eventComponents',
        'title' => 'Event Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventComponents',
                'label' => __('Event Components', 'flynt'),
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
                    'value' => 'event',
                ]
            ],
        ],
    ]);
});
