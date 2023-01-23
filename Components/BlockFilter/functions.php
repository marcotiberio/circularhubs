<?php

namespace Flynt\Components\BlockFilter;

function getACFLayout()
{
    return [
        'name' => 'BlockFilter',
        'label' => 'Block: Filter',
        'sub_fields' => [
            [
                // [
                //     'label' => __('Filter', 'flynt'),
                //     'name' => 'message',
                //     'type' => 'message',
                //     'message' => __('The collapse block reduces the vertical space between components.\nSimply move the component in between components with same color themes.', 'flynt'),
                //     'new_lines' => 'wpautop',
                //     'esc_html' => 1
                // ]
            ],
        ]
    ];
}
