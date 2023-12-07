<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->post('/mahasiswa/processForm', 'MahasiswaController::processForm');

