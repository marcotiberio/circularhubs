<?php

namespace Flynt\Components\SliderImagesLanding;

use Flynt\Utils\Options;
use Flynt\Shortcodes;
use Flynt\Components;
use Flynt\Utils\Asset;
use Flynt\FieldVariables;

add_filter('wpcf7_load_js', '__return_false');
add_filter('wpcf7_load_css', '__return_false');

add_filter('Flynt/addComponentData?name=SliderImagesLanding', function ($data) {
    function_exists('wpcf7_enqueue_scripts') && enqueueWpcf7Scripts();
    function_exists('wpcf7_enqueue_styles') && wpcf7_enqueue_styles();
    wp_script_add_data('contact-form-7', 'defer', true);

    return $data;
});

add_filter('Flynt/addComponentData?name=SliderImagesLanding', function ($data) {
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/SliderImagesLanding/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});

add_filter('Flynt/addComponentData?name=SliderImagesLanding', function ($data) {
    $translatableOptions = Options::getTranslatable('SliderOptions');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];
    return $data;
});

function enqueueWpcf7Scripts()
{
    $inFooter = true;

    if ('header' === wpcf7_load_js()) {
        $inFooter = false;
    }

    wp_enqueue_script(
        'contact-form-7',
        wpcf7_plugin_url('includes/js/scripts.js'),
        ['Flynt/assets'],
        WPCF7_VERSION,
        $inFooter
    );

    $wpcf7 = [
        'apiSettings' => [
            'root' => esc_url_raw(rest_url('contact-form-7/v1')),
            'namespace' => 'contact-form-7/v1',
        ],
    ];

    if (defined('WP_CACHE') and WP_CACHE) {
        $wpcf7['cached'] = 1;
    }

    if (wpcf7_support_html5_fallback()) {
        $wpcf7['jqueryUi'] = 1;
    }

    wp_localize_script('contact-form-7', 'wpcf7', $wpcf7);

    do_action('wpcf7_enqueue_scripts');
}

remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit', 10, 0);

add_action('wpcf7_init', function () {
    wpcf7_add_form_tag('submit', function ($tag) {
        $class = wpcf7_form_controls_class($tag->type, 'button');

        $atts = [];

        $atts['class'] = $tag->get_class_option($class);
        $atts['id'] = $tag->get_id_option();
        $atts['tabindex'] = $tag->get_option('tabindex', 'signed_int', true);

        $value = isset($tag->values[0]) ? $tag->values[0] : '';

        if (empty($value)) {
            $value = __('Send', 'contact-form-7');
        }

        $atts['type'] = 'submit';
        $atts['value'] = $value;

        $atts = wpcf7_format_atts($atts);

        $html = sprintf('<button %1$s>%2$s</button>', $atts, $value);
        return $html;
    });
}, 10, 0);

function getACFLayout()
{
    return [
        'name' => 'SliderImagesLanding',
        'label' => 'Slider: Images Landing',
        'sub_fields' => [
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Info', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ],
            [
                'label' => __('Newsletter', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Newsletter', 'flynt'),
                'name' => 'newsletterShortcode',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ],
            // [
            //     'label' => __('Contact Form 7 Form', 'flynt'),
            //     'name' => 'formId',
            //     'type' => 'post_object',
            //     'post_type' => [
            //         'wpcf7_contact_form'
            //     ],
            //     'allow_null' => 0,
            //     'multiple' => 0,
            //     'return_format' => 'id',
            //     'ui' => 1,
            //     'required' => 0,
            //     'instructions' => __('If there is no form available, please first create a suitable one in the <a href="' . admin_url('admin.php?page=wpcf7') . '" target="_blank">Contact Form 7 admin page</a>.', 'flynt'),
            // ],
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'sliderTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'repeaterSlider',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => __('Add Image', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'panelImage',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                ],
            ],
            [
                'label' => __('About', 'flynt'),
                'name' => 'aboutTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('About', 'flynt'),
                'name' => 'aboutHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ],
            [
                'label' => __('Skills', 'flynt'),
                'name' => 'skillPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Skill', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Skill', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text'
                    ]
                ],
            ],
            [
                'label' => __('Bios', 'flynt'),
                'name' => 'bioPanels',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Bio', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Bio', 'flynt'),
                        'name' => 'panelText',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1
                    ]
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Enable Autoplay', 'flynt'),
                        'name' => 'autoplay',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => __('Autoplay Speed (in milliseconds)', 'flynt'),
                        'name' => 'autoplaySpeed',
                        'type' => 'number',
                        'min' => 2000,
                        'step' => 1,
                        'default_value' => 4000,
                        'required' => 1,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'autoplay',
                                    'operator' => '==',
                                    'value' => 1
                                ]
                            ]
                        ],
                    ],
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}
