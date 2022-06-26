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
$routes->setDefaultController('Home');
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

$routes->get('/', 'Home::index');
$routes->get('/donasi', 'DonasiController::index');
$routes->get('/about', 'DonasiController::about');
$routes->get('/donasi/donasi', 'DonasiController::donasi');


$routes->group('', ['filter' => 'authMiddleware'], function($routes) 
{     
    $routes->get('home','UserController::index',['as'=>'user.home']);
});

$routes->group('user',function($routes){

    $routes->get('profile','UserController::profile',['as'=>'user.profile']);
    $routes->get('user','UserController::user',['as'=>'user.user']);
    $routes->get('admin','UserController::admin',['as'=>'user.admin']);
    $routes->get('terkumpul','UserController::terkumpul',['as'=>'user.terkumpul']);
});

$routes->group('admin',function($routes){
    $routes->get('home','AdminController::index',['as'=>'admin.home']);
    $routes->get('profile','AdminController::profile',['as'=>'admin.profile']);
    $routes->get('user','AdminController::user',['as'=>'admin.user']);
    $routes->get('admin','AdminController::admin',['as'=>'admin.admin']);
    $routes->get('terkumpul','AdminController::terkumpul',['as'=>'admin.terkumpul']);
});

$routes->resource('register');
$routes->resource('login');
$routes->resource('loginAdmin');
$routes->resource('registerAdmin');

$routes->resource('DonasiController');
$routes->resource('UserController');


$routes->post('/index.php/loginAdmin',                      'LoginAdmin::index');
$routes->get('donasi/donasi',                               'DonasiController::donasi');
$routes->get('/user/home',                                  'UserController::index');
$routes->get('/user/user',                                  'UserController::user');
$routes->get('/user/admin',                                 'UserController::admin');
$routes->get('/user/terkumul',                              'UserController::terkumpul');
$routes->get('/admin/home',                                 'AdminController::index');
$routes->get('/admin/user',                                 'AdminController::user');
$routes->get('/admin/admin',                                'AdminController::admin');
$routes->get('/admin/terkumul',                             'AdminController::terkumpul');
$routes->post('/donasi/create',                             'DonasiController::create');
$routes->post('/donasi/createUser',                         'DonasiController::createUser');
$routes->post('/donasi/createAdmin',                        'DonasiController::createAdmin');
$routes->post('/donasi/createTerkumpul',                    'DonasiController::createTerkumpul');
$routes->get('/donasi/new',                                 'DonasiController::new');
$routes->get('/donasi/newUser',                             'DonasiController::newUser');
$routes->get('/donasi/newAdmin',                            'DonasiController::newAdmin');
$routes->get('/donasi/newTerkumpul',                        'DonasiController::newTerkumpul');
$routes->get('/donasi/donasi',                              'DonasiController::newTerkumpul');
$routes->get('donasi/(:segment)/edit',                      'DonasiController::edit/$1');
$routes->get('donasi/(:segment)/editUser',                  'DonasiController::editUser/$1');
$routes->get('donasi/(:segment)/editAdmin',                 'DonasiController::editAdmin/$1');
$routes->get('donasi/(:segment)/editTerkumpul',             'DonasiController::editTerkumpul/$1');
$routes->put('donasi/(:segment)/update',                    'DonasiController::update/$1');
$routes->put('donasi/(:segment)/updateUser',                'DonasiController::updateUser/$1');
$routes->put('donasi/(:segment)/updateAdmin',               'DonasiController::updateAdmin/$1');
$routes->put('donasi/(:segment)/updateTerkumpul',           'DonasiController::updateTerkumpul/$1');
$routes->delete('donasi/(:segment)/delete',                        'DonasiController::delete/$1');
$routes->delete('donasi/(:segment)/deleteUser',             'DonasiController::deleteUser/$1');
$routes->delete('donasi/(:segment)/deleteAdmin',            'DonasiController::deleteAdmin/$1');
$routes->delete('donasi/(:segment)/deleteTerkumpul',        'DonasiController::deleteTerkumpul/$1');
    
$routes->get('export-pdf',                                   'AdminController::exportPDF');
$routes->get('export-pdf',                                   'AdminController::index');
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