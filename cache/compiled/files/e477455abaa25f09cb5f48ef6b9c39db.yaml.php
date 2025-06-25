<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Highland/user/themes/quark/blueprints/contact.yaml',
    'modified' => 1750848092,
    'size' => 1395,
    'data' => [
        'title' => 'Contact Page',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'details' => [
                            'type' => 'tab',
                            'title' => 'Page Settings',
                            'fields' => [
                                'section1' => [
                                    'type' => 'section',
                                    'title' => 'Page Settings',
                                    'underline' => true
                                ],
                                'header.page_title' => [
                                    'type' => 'text',
                                    'label' => 'Page Title'
                                ]
                            ]
                        ],
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Content',
                            'fields' => [
                                'header.contact_image' => [
                                    'type' => 'file',
                                    'label' => 'Contact Image',
                                    'multiple' => false,
                                    'destination' => 'theme://media/images',
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'sect2' => [
                                    'type' => 'section',
                                    'title' => 'General Information'
                                ],
                                'header.email' => [
                                    'type' => 'text',
                                    'label' => 'Email'
                                ],
                                'header.phone_number' => [
                                    'type' => 'text',
                                    'label' => 'Phone Number'
                                ],
                                'header.whatsapp_number' => [
                                    'type' => 'text',
                                    'label' => 'Whatsapp Number'
                                ],
                                'header.address' => [
                                    'type' => 'textarea',
                                    'rows' => 4,
                                    'label' => 'Address'
                                ],
                                'header.instagram_link' => [
                                    'type' => 'text',
                                    'label' => 'Instagram Link'
                                ],
                                'header.linkedin_link' => [
                                    'type' => 'text',
                                    'label' => 'Linkedin Link'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
