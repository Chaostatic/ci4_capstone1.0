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

 /*
 * --------------------------------------------------------------------
 * public routes
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/attractions', 'Attractions::index'); 
$routes->get('views/attractions', 'Attractions::index/attractions'); 
$routes->get('/food', 'Food::index');
$routes->get('views/food', 'Food::index');
$routes->get('/aboutus', 'AboutUs::index');
$routes->get('views/aboutus', 'AboutUs::index');


$routes->get('views/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('logout', 'ProfileController::logout');








 

/*
 * --------------------------------------------------------------------
 * Admin Route Definitions
 * --------------------------------------------------------------------
 */


$routes->match(['get','post'],'views/admin/attractionsManagement.php', 'AttractionsManagement::index');
$routes->match(['get','post'],'views/admin/foodManagement.php', 'FoodManagement::index');
$routes->match(['get','post'],'views/admin/newsManagement.php', 'NewsManagement::index');
$routes->match(['get','post'],'views/admin/dataManagement.php', 'DataManagement::index');
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
