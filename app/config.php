<?php

return [
	// General
	'application_name' 	=> 'Base',
	'version'			=> '1.3.10',

	// Region
	'language' 			=> 'es',
	'timezone' 			=> 'America/Caracas',
	'charset'			=> 'utf-8',
	
	// Environment
	'environment' 		=> 'development',
	'errors' 			=> true,

	// Database
	'database' 			=> [
		'driver' 		=> 'mysql',
		'host' 			=> 'localhost',
		'username' 		=> 'root',
		'database' 		=> 'base',
		'password' 		=> ''
	],

	// Facebook login
	'facebook'			=> [
		'app_id' 		=> '',
		'app_secret' 	=> ''
	],

	// Google login
	'google'			=> [
		'client_id' 	=> '',
		'client_secret' => ''
	],
];