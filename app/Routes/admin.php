<?php

use CodeIgniter\Router\RouteCollection;

$routes->group('', ['filter' => 'only-can-access:all'], static function (RouteCollection $routes) {
    $routes->get('/', 'Home::index');
});
