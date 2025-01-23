<?php

use CodeIgniter\Router\RouteCollection;

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/login', 'Home::index');
});
