<?php

return [
	// General.
	'application_name' 	=> 'Base PHP',


	// Region.
	'language' 			=> 'es',
	'timezone' 			=> 'America/Caracas',
	'charset'			=> 'utf-8',
	
	// Environment.
	'environment' 		=> 'development',
	'errors' 			=> true,

	// Database.
	'database' 			=> [
		[
            'name'      => 'default',
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'username'  => 'root',
            'password'  => '',
            'database'  => 'base',
        ]
	],

	// Needed to send emails locally.
	'smtp' 				=> [
		'host' 			=> '',
		'username' 		=> '',
		'password'		=> '',
		'port'			=> ''
	]
];
