<?php

use CodeIgniter\Router\RouteCollection;

$routes->group('', static function ($routes) {
    $routes->get('/login', 'Home::index');
});
