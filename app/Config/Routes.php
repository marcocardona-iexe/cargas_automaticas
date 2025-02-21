<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'DashboardController::index');
$routes->get('dashboard/create', 'DashboardController::create');

service('auth')->routes($routes);
