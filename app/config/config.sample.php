<?php
return [
    'application' => [
        'modules' => [
            'Home',
            'Auth'
        ],
        'autoload' => [
            'App\Initializer' => APP_ROOT . '/app/initializers',
            'App\Shared' => APP_ROOT . '/app/shared',
            'App\Service' => APP_ROOT . '/app/services',
            'App\View' => APP_ROOT . '/app/view'
        ],
        'modulesDirectory' => 'app/modules',
        'sharedServices' => [
            'App\Shared\ViewCache',
            'App\Shared\Dao',
            'App\Shared\Mongo'
        ],
        'initializers'=> [
            'App\Initializer\Volt'
        ],
        'mongo' => [
            'db' => 'vegas_test',
        ],
        'view' => [
            'cacheDir' => APP_ROOT . '/app/cache/view/',
            'viewsDir' => APP_ROOT . '/app',
            'layout' => 'main',
            'layoutsDir' => 'layouts/',
            'engines' => [
                'volt' => [
                    'compiledPath' => APP_ROOT . '/app/cache/view/compiled/',
                    'compiledSeparator' => '_',
                    'compileAlways' => false
                ]
            ]
        ]
    ]
];