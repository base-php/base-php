<?php

return [
    // General.
    'application_name' => 'Base PHP',
    'version' => '1.8.04',

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
            'driver' => 'mysql',
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'base',
            'port' => '3306',
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
