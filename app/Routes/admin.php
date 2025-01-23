<?php

use CodeIgniter\Router\RouteCollection;

/*
    NOTE:
    - Untuk setiap route Group harus menggunakan prefix, contoh 'admin' atau 'user'
    - Sesuaikan dengan role yang ada di database
    - Filter 'only-can-access' akan memeriksa role user yang sedang login
 */

// Admin
$routes->group('admin', ['filter' => 'only-can-access:all'], static function (RouteCollection $routes) {
    $routes->get('/', 'Home::index');
});