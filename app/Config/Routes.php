<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

//$routes->get('/', 'Home::index',['filter' => 'auth']);
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('/produk', 'ProdukController::index');
    $routes->get('/keranjang', 'TransaksiController::index');
    $routes->get('/profile', 'ProfileController::index');
});
