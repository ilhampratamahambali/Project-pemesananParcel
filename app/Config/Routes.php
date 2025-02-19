<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
#routes landing page
$routes->get('/', 'LandingPage::index');
#routes dashboard
$routes->get('/dash', 'dashcont::index');
#routes tentang kami
$routes->get('/tentang-kami', 'TentangKamiController::index');
$routes->get('/login', 'Auth::login');
$routes->post('/auth/process', 'Auth::process');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/pemesanan', 'PemesananController::index');
$routes->get('/pemesanan/pesan/(:segment)', 'PemesananController::pesan/$1');

