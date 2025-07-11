<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Highland/user/plugins/admin/blueprints/admin/pages/new.yaml',
    'modified' => 1730115083,
    'size' => 1263,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_PAGE'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PAGE_TITLE',
                    'help' => 'PLUGIN_ADMIN.PAGE_TITLE_HELP',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                    'validate' => [
                        'rule' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'parents',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'select',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                    'data-options@' => '\\Grav\\Plugin\\AdminPlugin::pagesTypes',
                    'data-default@' => '\\Grav\\Plugin\\Admin\\Admin::getLastPageName',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'visible' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.VISIBLE',
                    'help' => 'PLUGIN_ADMIN.VISIBLE_HELP',
                    'highlight' => '',
                    'default' => '',
                    'options' => [
                        '' => 'PLUGIN_ADMIN.AUTO',
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
