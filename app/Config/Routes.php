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
$routes->get('/', 'Index::index');
$routes->get('daftarRuangan', 'DaftarRuangan::daftarRuangan');
$routes->post('detailRuangan', 'DetailRuangan::detailRuangan');
$routes->post('pinjamRuangan', 'PinjamRuangan::pinjamRuangan');
$routes->post('simpanPinjamRuangan', 'PinjamRuangan::simpanPinjamRuangan');
$routes->get('notifikasi', 'Notifikasi::notifikasi');
$routes->post('detailNotifikasi', 'Notifikasi::detailNotifikasi');
$routes->post('deleteNotifikasi', 'Notifikasi::deleteNotifikasi');
$routes->get('profile', 'Profile::profile');
$routes->add('/login', 'Login::login', ['post']);
$routes->get('logout', 'Login::logOut');
$routes->get('register', 'Register::register');
$routes->post('/addaccount/add', 'Register::addAccount');
$routes->post('/editProfile', 'Profile::editProfile');
$routes->post('/editPassword', 'Profile::editPassword');

// Admin
$routes->get('dashboard', 'AdminControllers\Dashboard::dashboard');
$routes->get('daftarAccount', 'AdminControllers\DaftarAccount::daftarAccount');
$routes->post('detailAccount', 'AdminControllers\DetailAccount::detailAccount');
$routes->post('editAccount', 'AdminControllers\DetailAccount::editAccount');
$routes->post('deleteAccount', 'AdminControllers\DetailAccount::deleteAccount');
$routes->get('semuaRuangan', 'AdminControllers\SemuaRuangan::semuaRuangan');
$routes->get('ruanganTerpakai', 'AdminControllers\RuanganTerpakai::ruanganTerpakai');
$routes->get('ruanganTidakTerpakai', 'AdminControllers\RuanganTidakTerpakai::ruanganTidakTerpakai');
$routes->get('tambahRuangan', 'AdminControllers\TambahRuangan::tambahRuangan');
$routes->post('addRuangan', 'AdminControllers\TambahRuangan::addRuangan');
$routes->post('lihatRuangan', 'AdminControllers\LihatRuangan::lihatRuangan');
$routes->post('editRuangan', 'AdminControllers\LihatRuangan::editRuangan');
$routes->post('editRuangan/save', 'AdminControllers\LihatRuangan::saveEditRuangan');
$routes->post('tambahJadwalRuangan', 'AdminControllers\LihatRuangan::tambahJadwalRuangan');
$routes->post('tambahJadwalRuangan/save', 'AdminControllers\LihatRuangan::saveTambahJadwalRuangan');
$routes->post('editJadwalRuangan', 'AdminControllers\LihatRuangan::editJadwalRuangan');
$routes->post('editJadwalRuangan/save', 'AdminControllers\LihatRuangan::saveEditJadwalRuangan');
$routes->get('allnotifikasi', 'AdminControllers\Notifikasi::notifikasi');
$routes->post('detailAdminNotifikasi', 'AdminControllers\Notifikasi::detailAdminNotifikasi');
$routes->post('rejectedNotifikasi', 'AdminControllers\Notifikasi::rejectedNotifikasi');
$routes->post('verification', 'AdminControllers\Notifikasi::verification');

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
