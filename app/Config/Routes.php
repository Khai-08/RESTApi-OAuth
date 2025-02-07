<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\PagesController;

$routes->get('/', 'PagesController::index');

// Pages Route/s
$routes->get('pages', [PagesController::class, 'index']);
$routes->get('(:segment)', [PagesController::class, 'view']);
