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
$route->get('/', 'Home@index');

// Dashboard
$route->get('/dashboard', 'Dashboard@index');

// Users
$route->get('/dashboard/users', 'Users@index');
$route->get('/dashboard/users/create', 'Users@create');
$route->post('/dashboard/users/store', 'Users@store');
$route->get('/dashboard/users/edit/{id}', 'Users@edit');
$route->post('/dashboard/users/update', 'Users@update');
$route->get('/dashboard/users/delete/{id}', 'Users@delete');
