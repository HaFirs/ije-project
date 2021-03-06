<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Ije');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Ije::index');


$routes->get('/nios', 'Nios::index');
$routes->get('/nios_news', 'Nios::nios_news');
$routes->get('/nios_project', 'Nios::nios_project');
$routes->get('/nios_contact', 'Nios::nios_contact');
$routes->get('/nios_about', 'Nios::nios_about');


$routes->get('/kanan', 'Kanan::index');
$routes->get('/kanan_undangan', 'Kanan::kanan_undangan');

$routes->group('admin', function ($routes) {
    $routes->get('users', 'Admin\Dashboard::index');
    $routes->get('add-news', 'Admin\Dashboard::add_news');
    $routes->get('news-list', 'Admin\Dashboard::news_list');
    $routes->get('news-category', 'Admin\Dashboard::news_category');
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
