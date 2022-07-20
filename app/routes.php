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
$route->get('/', [HomeController::class, 'index']);

// Dashboard
$route->get('/dashboard', [DashboardController::class, 'index']);

// Users
$route->resource('/dashboard/users', UserController::class);
$route->get('/dashboard/users/2fa/{id}', [UserController::class, 'two_fa']);
