<?php

namespace Flynt\Components\TabsDefault;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'TabsDefault',
        'label' => 'Tabs: Default',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContent',
                'type' => 'text'
            ],
            [
                'label' => __('Tabs', 'flynt'),
                'name' => 'accordionPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Tab', 'flynt'),
                'collapsed' => 'panelTitle',
                'sub_fields' => [
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text',
                        'wrapper' =>  [
                            'width' => '100',
                        ]
                    ],
                    [
                        'label' => __('Add another Company?', 'flynt'),
                        'name' => 'additionalCompany',
                        'type' => 'select',
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 1,
                        'ajax' => 0,
                        'choices' => [
                            'additionalCompanyYes' => __('Yes', 'flynt'),
                            'additionalCompanyNo' => __('No', 'flynt'),
                        ],
                        'default_value' => 'additionalCompanyNo'
                    ],
                    [
                        'label' => __('Company n.1', 'flynt'),
                        'name' => 'company1Tab',
                        'type' => 'tab',
                        'placement' => 'top',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'panelImage',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => '30',
                        ]
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'panelContent',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' =>  [
                            'width' => '70',
                        ]
                    ],
                    [
                        'label' => __('Company n.2', 'flynt'),
                        'name' => 'company2Tab',
                        'type' => 'tab',
                        'placement' => 'top',
                        'endpoint' => 0,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'additionalCompany',
                                    'operator' => '==',
                                    'value' => 'additionalCompanyYes'
                                ]
                            ]
                        ],
                    ],
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'panelImage2',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => '30',
                        ],
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'additionalCompany',
                                    'operator' => '==',
                                    'value' => 'additionalCompanyYes'
                                ]
                            ]
                        ],
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'panelContent2',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' =>  [
                            'width' => '70',
                        ],
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'additionalCompany',
                                    'operator' => '==',
                                    'value' => 'additionalCompanyYes'
                                ]
                            ]
                        ],
                    ],
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
                    FieldVariables\getTheme()
                ]
            ]
        ],
    ];
}
