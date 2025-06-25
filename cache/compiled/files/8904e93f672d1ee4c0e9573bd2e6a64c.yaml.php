<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Highland/user/themes/quark/blueprints/home.yaml',
    'modified' => 1750789463,
    'size' => 1828,
    'data' => [
        'title' => 'Home Page',
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
                                'header.carousel_images' => [
                                    'type' => 'list',
                                    'label' => 'Carousel Images',
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'file',
                                            'multiple' => false,
                                            'destination' => 'theme://media/images',
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ]
                                    ]
                                ],
                                'header.MainTitle' => [
                                    'type' => 'text',
                                    'label' => 'Home Page Main Title'
                                ],
                                'descriptionsect' => [
                                    'label' => 'Description',
                                    'type' => 'section'
                                ],
                                'header.description_title' => [
                                    'label' => 'Description Title',
                                    'type' => 'text'
                                ],
                                'header.description_paragraphs' => [
                                    'label' => 'Description Paragraphs',
                                    'type' => 'list',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'textarea',
                                            'rows' => 4
                                        ]
                                    ]
                                ],
                                'header.projects' => [
                                    'type' => 'list',
                                    'label' => 'Projects',
                                    'fields' => [
                                        '.title' => [
                                            'label' => 'Project Title',
                                            'type' => 'text'
                                        ],
                                        '.image' => [
                                            'label' => 'Project Image',
                                            'type' => 'file',
                                            'multiple' => false,
                                            'destination' => 'theme://media/images',
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
