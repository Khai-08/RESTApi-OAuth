<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\UserController;
use App\Controllers\PagesController;

$routes->get('/', 'PagesController::index');

// Pages Route/s
$routes->get('pages', [PagesController::class, 'index']);
$routes->get('(:segment)', [PagesController::class, 'view']);

$routes->post('api/login', [UserController::class,'loginUser']);

