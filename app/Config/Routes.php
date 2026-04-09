<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->group('/', function ($routes) {
    $routes->add('', 'Referensi::ref');
    $routes->add('ref', 'Referensi::ref');
    $routes->add('kod_rek', 'Referensi::kod_rek');
});