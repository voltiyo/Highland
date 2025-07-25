<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Highland/user/plugins/flex-objects/languages/en.yaml',
    'modified' => 1730115083,
    'size' => 3111,
    'data' => [
        'PLUGIN_FLEX_OBJECTS' => [
            'PLUGIN_NAME' => 'Flex Objects',
            'PLUGIN_DESCRIPTION' => 'Flex Objects plugin allows you to manage Flex Objects in Grav Admin.',
            'TITLE' => 'Flex Objects',
            'TYPES_TITLE' => 'Directories',
            'AFTER_SAVE' => 'After Save…',
            'LIST_INFO' => 'Displaying {from} to {to} out of {total} records',
            'EMPTY_RESULT' => 'The requested query returns no result',
            'USE_BUILT_IN_CSS' => 'Use built in CSS',
            'EXTRA_ADMIN_TWIG_PATH' => 'Extra Admin Twig Path',
            'DIRECTORIES' => 'Directories',
            'CSV' => 'CSV',
            'PARENTS' => 'Parents',
            'NEW' => 'New',
            'CONTROLLER' => [
                'TASK_DELETE_SUCCESS' => 'Entry deleted successfully',
                'TASK_DELETE_FAILURE' => 'Failed to delete entry: %s',
                'TASK_NEW_FOLDER_SUCCESS' => 'Folder created successfully',
                'TASK_COPY_SUCCESS' => 'Copy created successfully',
                'TASK_COPY_FAILURE' => 'Failed to create copy: %s',
                'TASK_SAVE_SUCCESS' => 'Entry saved successfully',
                'TASK_SAVE_FAILURE' => 'Failed to save entry: %s',
                'TASK_CONFIGURE_SUCCESS' => 'Configuration saved successfully',
                'TASK_CONFIGURE_FAILURE' => 'Failed to save configuration: %s'
            ],
            'ACTION' => [
                'CREATE_NEW' => 'Create New Item',
                'EDIT_ITEM' => 'Edit Item',
                'LIST_ITEMS' => 'List Items',
                'DELETE_N' => 'Delete',
                'REALLY_DELETE' => 'Are you sure you want to permanently delete the %s?',
                'SEARCH_PLACEHOLDER' => 'Search…',
                'ADVANCED_OPTIONS' => 'Advanced Options',
                'APPLY_FILTERS' => 'Apply Filters',
                'RESET_FILTERS' => 'Reset to Defaults',
                'ACTIONS' => 'Actions'
            ],
            'FILTER' => [
                'PAGE_ATTRIBUTES' => 'Page Attributes',
                'PAGE_TYPES' => 'Page Types',
                'MODULAR_TYPES' => 'Module Types'
            ],
            'LANGUAGE' => [
                'USING_DEFAULT' => 'Using <b>Default</b> language file.',
                'UNUSED_DEFAULT' => 'Unused <b>Default</b> language file also exists.',
                'USING_OVERRIDE' => 'Using <b>%s</b> language override.',
                'NOT_TRANSLATED_YET' => 'This page has not been translated to <i class="fa fa-flag-o"></i> <b>%s</b> language yet!',
                'NO_FALLBACK_FOUND' => 'No fallback translations found.',
                'FALLING_BACK' => 'Falling back to <b>%s</b> language.'
            ],
            'STATE' => [
                'LOADING' => 'Loading…',
                'CREATED_SUCCESSFULLY' => 'Successfully created',
                'UPDATED_SUCCESSFULLY' => 'Successfully updated',
                'DELETED_SUCCESSFULLY' => 'Successfully deleted',
                'EDITING_DRAFT' => 'You are editing a saved draft.',
                'NOT_CREATED_YET' => 'This page will not exist until it is saved.'
            ],
            'ERROR' => [
                'BAD_DIRECTORY' => 'Bad Directory',
                'PAGE_NOT_FOUND' => 'Page Not Found',
                'PAGE_NOT_EXIST' => 'Woops! Looks like this page doesn\'t exist.',
                'PAGE_FORBIDDEN' => 'Woops! Looks like you do not have permissions to access this page.',
                'LAYOUT_NOT_FOUND' => 'Object layout \'%s\' not found.',
                'BLUEPRINT_NO_LIST' => 'Blueprint for <i>%s</i> does not define displayed fields or list page override.',
                'BLUEPRINT_NO_LIST_ADVISE' => 'Please add list of fields to blueprints file.',
                'BLUEPRINT_NO_LIST_TEMPLATE' => 'Please create template file for the type in <b>flex-objects/types/%s/list.html.twig</b>',
                'LIST_EMPTY' => 'There are currently no entries.',
                'LIST_EMPTY_ADD' => 'There are currently no entries. Click the <a href="%s">Add</a> button to create a new one…',
                'NO_FLEX_DIRECTORIES' => 'No Flex Directories detected'
            ]
        ]
    ]
];
