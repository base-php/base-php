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

$route->auth();

// Dashboard
$route->get('/', 'Dashboard@index');

// Users
$route->get('/users', 'Users@index');
$route->get('/users/create', 'Users@create');
$route->post('/users/store', 'Users@store');
$route->get('/users/edit/{id}', 'Users@edit');
$route->post('/users/update', 'Users@update');
$route->get('/users/delete/{id}', 'Users@delete');
