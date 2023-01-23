<?php

namespace Flynt\Components\FormNewsletter;

use Flynt\Components;
use Flynt\Utils\Options;

function getACFLayout()
{
    return [
        'name' => 'formNewsletter',
        'label' => 'Form: Newsletter',
        'sub_fields' => [
            [
                'label' => __('Pre-built newsletter form', 'flynt'),
                'name' => 'message',
                'type' => 'message',
                'message' => '<p>Form: Newsletter displays a predefined contact form with theme options and fixed content.</p><p>Make sure that all required options are set on the <a href="' . admin_url('admin.php?page=TranslatableOptions-Default') . '" target="_blank">translatable options page</a>.</p>',
            ]
        ],
    ];
}


add_action('Flynt/afterRegisterComponents', function () {
    Options::addTranslatable('FormNewsletter', [
        [
            'label' => '',
            'name' => 'form',
            'type' => 'group',
            'sub_fields' => Components\FormContactForm7\getACFFields(),
        ]
    ]);
});
