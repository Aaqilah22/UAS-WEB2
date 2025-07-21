<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Auth::login');
$routes->post('/auth/authenticate', 'Auth::authenticate');

$routes->get('/', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::index');

$routes->get('form_antrian', 'FormAntrian::index');
$routes->post('form_antrian/submit', 'FormAntrian::submit');

$routes->get('nomor_antrian', 'NomorAntrian::index');

$routes->get('account', 'Account::index');
$routes->get('account/ubah_profil', 'Account::ubah_profil');

$routes->get('settings', 'Settings::index');
$routes->post('settings/simpan_perubahan', 'Settings::simpan_perubahan');
$routes->get('settings/ubah_nomor', 'Settings::ubah_nomor');
$routes->post('settings/simpan_nomor', 'Settings::simpan_nomor');

$routes->get('database-test', 'DatabaseTest::index');

$routes->get('user', 'UserController::index');
$routes->get('user/create', 'UserController::create');
$routes->post('user/store', 'UserController::store');
$routes->get('user/edit/(:num)', 'UserController::edit/$1');
$routes->post('user/update/(:num)', 'UserController::update/$1');
$routes->get('user/delete/(:num)', 'UserController::delete/$1');
