<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::index');
$routes->get('/product', 'ProductController::index');
$routes->get('/product/create', 'ProductController::create');
$routes->post('/product/store', 'ProductController::store');
$routes->get('/product/delete/(:any)', 'ProductController::delete/$1');


$routes->get('/product/edit/(:any)', 'ProductController::edit/$1');
$routes->post('/product/update/(:any)', 'ProductController::update/$1'); 