<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::welcome');


//semua routing yg hanya bisa diakses setelah login dikelompokkan  ke dalam grup bernama //admin 

$routes->group('admin', ['filter' => 'auth'], function($routes) {
$routes->get('/', 'BeritaController::berita');
$routes->get('isi_berita', 'BeritaController::create');
$routes->post('berita_store', 'BeritaController::store');
$routes->get('edit_berita/(:num)', 'BeritaController::edit/$1');
$routes->post('update_berita/(:num)', 'BeritaController::update/$1');
$routes->get('delete_berita/(:num)', 'BeritaController::delete/$1');

$routes->get('feature', 'featureController::feature');
$routes->get('isi_feature', 'featureController::create');
$routes->post('feature_store', 'featureController::store');
$routes->get('edit_feature/(:num)', 'featureController::edit/$1');
$routes->post('update_feature/(:num)', 'featureController::update/$1');
$routes->get('delete_feature/(:num)', 'featureController::delete/$1');

$routes->get('ganti_password', 'AuthController::ganti_password');
$routes->post('proses_ganti_password', 'AuthController::proses_ganti_password');
});

//route dibawah ini tidak harus login
$routes->get('/main', 'mainController::main');
$routes->get('/baru', 'mainController::baru');
$routes->get('/review', 'mainController::review');
$routes->get('/subscribe', 'mainController::subscribe');
$routes->get('/detail/(:num)', 'mainController::detail/$1');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('register_user', 'AuthController::form_register');
$routes->post('proses_register_user', 'AuthController::proses_register_user');
$routes->get('activate/(:any)', 'AuthController::activate/$1');

$routes->get('lupa_password', 'AuthController::lupa_password');
$routes->post('proses_lupa_password', 'AuthController::proses_lupa_password');
