<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/colorCard', 'Pages::colorCard');
$routes->get('/pages/colorPicker', 'Pages::colorPicker');
$routes->get('/pages/kontakKami', 'Pages::kontakKami');
$routes->get('/pages/addPesan', 'Pages::addPesan');
$routes->post('/pages/addPesan', 'Pages::addPesan');
$routes->get('/pages/priceChecker', 'Pages::priceChecker');
$routes->get('/pages/guideline', 'Pages::guideline');
$routes->get('/pages/profil', 'Pages::profil');
$routes->get('/pages/toko', 'Pages::toko');
$routes->get('/housePaint/detail/(:segment)', 'Pages::detail/$1');
$routes->get('/colorCard/detailWarna/(:segment)', 'Pages::detailWarna/$1');
$routes->get('/pages/housePaint/(:segment)', 'Pages::housePaint/$1');
$routes->get('/pages/priceChecker/(:segment)', 'Pages::priceChecker/$1');
$routes->get('/pages/housePaint/Interior-Exterior-Metalic/(:segment)', 'Pages::housePaint/detail/$1');
$routes->get('/pages/drawingPaint/(:segment)', 'Pages::drawingPaint/$1');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
