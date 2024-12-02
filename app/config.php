<?php

return [
    // General.
    'application_name' => 'Base PHP',
    'version' => '1.9.53',

    // Region.
    'language' => 'es',
    'timezone' => 'America/Caracas',
    'charset' => 'utf-8',

    // Environment.
    'environment' => 'development',
    'errors' => true,
    'maintenance' => false,

    // Database.
    'database' => [
        [
            'name' => 'default',
            'driver' => 'sqlite',
            'database' => 'database/database',
        ],
    ],

    // Emails in localhost.
    'smtp' => [
        'host' => '',
        'username' => '',
        'password' => '',
        'port' => '',
    ],
];
