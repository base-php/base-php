<?php

return [
	// General.
	'application_name' 	=> 'Base',
	'version'			=> '1.3.24',

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
];