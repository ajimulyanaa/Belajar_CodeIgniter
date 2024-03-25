<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// agar bisa mengakses router di url
$routes->setAutoRoute(true);
// akses pages
$routes->get('/', 'Home::index');
$routes->get('/pages/home', 'Pages::home');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');
