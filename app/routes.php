<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your application. These
| routes are loaded by the RoutingServiceProvider. Now create something great!
|
*/

// Auth
$route->auth();

// Home
$route->get('/', [Home::class, 'index']);

// Dashboard
$route->get('/dashboard', [Dashboard::class, 'index']);

// Users
$route->resource('/dashboard/users', Users::class);
