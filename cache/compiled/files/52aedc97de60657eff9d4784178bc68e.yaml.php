<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Highland/user/plugins/login/blueprints.yaml',
    'modified' => 1730115083,
    'size' => 14999,
    'data' => [
        'name' => 'Login',
        'slug' => 'login',
        'type' => 'plugin',
        'version' => '3.7.9',
        'testing' => false,
        'description' => 'Enables user authentication and login screen.',
        'icon' => 'sign-in',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-login',
        'keywords' => 'login, authentication, admin, security',
        'bugs' => 'https://github.com/getgrav/grav-plugin-login/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.41'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=6.0.0'
            ],
            2 => [
                'name' => 'email',
                'version' => '>=3.1.6'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.OPTIONS',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_LOGIN.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'built_in_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'help' => 'PLUGIN_LOGIN.BUILTIN_CSS_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'redirect_to_login' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_TO_LOGIN',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_TO_LOGIN_HELP',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'redirect_after_login' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN_HELP',
                                    'force_bool' => true,
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'redirect_after_logout' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGOUT',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGOUT_HELP',
                                    'force_bool' => true,
                                    'default' => 1,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'parent_acl' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.USE_PARENT_ACL_LABEL',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_LOGIN.USE_PARENT_ACL_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'dynamic_page_visibility' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.DYNAMIC_VISIBILITY',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_LOGIN.DYNAMIC_VISIBILITY_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'twofa_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.2FA_ENABLED',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_LOGIN.2FA_ENABLED_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'protect_protected_page_media' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_LABEL',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'session_user_sync' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.SESSION_USER_SYNC',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_LOGIN.SESSION_USER_SYNC_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'rememberme' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.REMEMBER_ME',
                                    'fields' => [
                                        'rememberme.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_ADMIN.ENABLED',
                                            'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'rememberme.timeout' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'default' => 604800,
                                            'label' => 'PLUGIN_ADMIN.TIMEOUT',
                                            'help' => 'PLUGIN_LOGIN.TIMEOUT_HELP',
                                            'validate' => [
                                                'type' => 'number',
                                                'min' => 1
                                            ]
                                        ],
                                        'rememberme.name' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADMIN.NAME',
                                            'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'routes' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.ROUTES',
                            'fields' => [
                                'route' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE',
                                    'help' => 'PLUGIN_LOGIN.ROUTE_HELP',
                                    'placeholder' => '/login'
                                ],
                                'route_after_login' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGIN',
                                    'help' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGIN_HELP',
                                    'placeholder' => '/user_profile'
                                ],
                                'route_after_logout' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGOUT',
                                    'help' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGOUT_HELP',
                                    'placeholder' => '/'
                                ],
                                'route_forgot' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                                    'placeholder' => '/forgot_password'
                                ],
                                'route_reset' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                                    'placeholder' => '/reset_password'
                                ],
                                'route_profile' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                                    'placeholder' => '/user_profile'
                                ],
                                'route_activate' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_ACTIVATE',
                                    'placeholder' => '/activate_user'
                                ],
                                'user_registration.redirect_after_activation' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION_HELP',
                                    'placeholder' => '/page-to-show-after-activation'
                                ],
                                'route_register' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                                    'help' => 'PLUGIN_LOGIN.ROUTE_REGISTER_HELP',
                                    'placeholder' => '/register'
                                ],
                                'user_registration.redirect_after_registration' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION_HELP',
                                    'placeholder' => '/page-to-show-after-registration'
                                ]
                            ]
                        ],
                        'registration' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.USER_REGISTRATION',
                            'fields' => [
                                'user_registration.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                    'help' => 'PLUGIN_LOGIN.USER_REGISTRATION_ENABLED_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'registration_fields' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                                    'fields' => [
                                        'user_registration.fields' => [
                                            'type' => 'array',
                                            'value_only' => true,
                                            'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                                            'help' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS_HELP',
                                            'placeholder_key' => 'PLUGIN_LOGIN.REGISTRATION_FIELD_KEY',
                                            'placeholder_value' => 'PLUGIN_LOGIN.ADDITIONAL_PARAM_VALUE'
                                        ],
                                        'user_registration.default_values' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                                            'help' => 'PLUGIN_LOGIN.DEFAULT_VALUES_HELP',
                                            'placeholder_key' => 'PLUGIN_LOGIN.ADDITIONAL_PARAM_KEY',
                                            'placeholder_value' => 'PLUGIN_LOGIN.ADDITIONAL_PARAM_VALUE'
                                        ]
                                    ]
                                ],
                                'access_levels' => [
                                    'title' => 'PLUGIN_ADMIN.ACCESS_LEVELS',
                                    'type' => 'section',
                                    'security' => 'admin.super',
                                    'fields' => [
                                        'user_registration.groups' => [
                                            'type' => 'select',
                                            'multiple' => true,
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADMIN.GROUPS',
                                            'data-options@' => 'Grav\\Common\\Flex\\Types\\UserGroups\\UserGroupObject::groupNames',
                                            'classes' => 'fancy',
                                            'help' => 'PLUGIN_LOGIN.GROUPS_HELP',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ],
                                        'user_registration.access.site' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                                            'help' => 'PLUGIN_LOGIN.SITE_ACCESS_HELP',
                                            'multiple' => false,
                                            'validate' => [
                                                'type' => 'array'
                                            ]
                                        ]
                                    ]
                                ],
                                'options' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.OPTIONS',
                                    'fields' => [
                                        'user_registration.options.validate_password1_and_password2' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                                            'help' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.set_user_disabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                                            'help' => 'PLUGIN_LOGIN.SET_USER_DISABLED_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.login_after_registration' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                                            'help' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_activation_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.manually_enable' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.MANUALLY_ENABLE',
                                            'help' => 'PLUGIN_LOGIN.MANUALLY_ENABLE_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_notification_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_welcome_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'Security' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.SECURITY_TAB',
                            'fields' => [
                                'site_host' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.SITE_HOST',
                                    'help' => 'PLUGIN_LOGIN.SITE_HOST_HELP',
                                    'placeholder' => 'https://example.com'
                                ],
                                'max_pw_resets_count' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT',
                                    'help' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT_HELP',
                                    'append' => 'PLUGIN_LOGIN.RESETS',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ],
                                'max_pw_resets_interval' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL',
                                    'help' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL_HELP',
                                    'append' => 'PLUGIN_LOGIN.MINUTES',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ],
                                'max_login_count' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT',
                                    'help' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT_HELP',
                                    'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ],
                                'max_login_interval' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL',
                                    'help' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL_HELP',
                                    'append' => 'PLUGIN_LOGIN.MINUTES',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ],
                                'ipv6_subnet_size' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.IPV6_SUBNET_SIZE',
                                    'help' => 'PLUGIN_LOGIN.IPV6_SUBNET_SIZE_HELP',
                                    'append' => 'PLUGIN_LOGIN.MINUTES',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
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
