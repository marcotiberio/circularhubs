<?php

function theme_add_color_palette()
{

    add_theme_support(
        'editor-color-palette',
        '#fff',
        '#000',
        '#c0ff00',
        '#d96b36',
    );
}
add_action('init', 'theme_add_color_palette');
