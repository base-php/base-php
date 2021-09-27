<?php

return [
	// General.
	'application_name' 	=> 'Base PHP',
	'version'			=> '1.3.46',

	// Region.
	'language' 			=> 'es',
	'timezone' 			=> 'America/Caracas',
	'charset'			=> 'utf-8',
	
	// Environment.
	'environment' 		=> 'development',
	'errors' 			=> true,

	// Database.
	'database' 		=> [
		[
			'name'			=> 'default',
			'driver' 		=> 'mysql',
			'host' 			=> 'localhost',
			'username' 		=> 'root',
			'database' 		=> 'base',
			'password' 		=> ''
		]
	],

	// Needed to send emails locally.
	'smtp' 				=> [
		'host' 			=> '',
		'username' 		=> '',
		'password'		=> '',
		'port'			=> ''
	],

	// Login with social networks
	'google' => [
		'client_id' 	=> '',
		'client_secret' => '',
		'redirect' 		=> ''
	],

	'facebook' => [
		'app_id'		=> '',
		'app_secret'	=> '',
		'redirect' 		=> ''
	]
];