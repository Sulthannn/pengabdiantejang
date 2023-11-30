<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');`
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
// $routes->set404Override();
$routes->setAutoRoute(true);
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
$routes->get('/', 'User\LandingPage');
$routes->get('/berita', 'User\Berita');
$routes->get('/berita/(:segment)', 'User\Berita::detailBerita/$1');
$routes->get('/sejarah', 'User\ProfileDesa::Sejarah');
$routes->get('/visi-misi', 'User\ProfileDesa::Visi_Misi');
$routes->get('/tentang', 'User\ProfileDesa::Deskripsi_Desa');
$routes->get('/pengaduan', 'User\Pengaduan');
$routes->post('/pengaduan', 'User\Pengaduan::index');
$routes->get('/aparatur', 'User\Aparatur');
$routes->get('/galeri', 'User\Galeri');

$routes->group('admin', function($routes){
    $routes->add('login', 'Admin\Admin::login', ['filter' => 'noauth']);
    $routes->add('logout', 'Admin\Admin::logout', ['filter' => 'auth']);
    $routes->add('dashboard', 'Admin\Dashboard', ['filter' => 'auth']);
    $routes->add('dashboard/visi-misi', 'Admin\ProfileDesa::CRUD_visi_misi', ['filter' => 'auth']);
    $routes->add('dashboard/profile-desa', 'Admin\ProfileDesa::ProfileDesaIndex', ['filter' => 'auth']);
    $routes->add('dashboard/sejarah-desa', 'Admin\ProfileDesa::SejarahDesaIndex', ['filter' => 'auth']);
    $routes->add('dashboard/gambar-utama', 'Admin\ProfileDesa::heroImage', ['filter' => 'auth']);
    $routes->add('dashboard/kategori', 'Admin\Post::kategoriPost', ['filter' => 'auth']);
    $routes->add('dashboard/sosmed', 'Admin\Sosmed', ['filter' => 'auth']);
    $routes->add('dashboard/posts', 'Admin\Post', ['filter' => 'auth']);
    $routes->add('dashboard/posts/create', 'Admin\Post::tambahPost', ['filter' => 'auth']);
    $routes->add('dashboard/posts/edit/(:num)', 'Admin\Post::editPost/$1', ['filter' => 'auth']);
    // $routes->add('dashboard/posts/delete', 'Admin\Post::deletePost', ['filter' => 'auth']);
    $routes->add('dashboard/pengaduan/', 'Admin\Pengaduan', ['filter' => 'auth']);
    $routes->add('dashboard/pengaduan/detail/(:num)', 'Admin\Pengaduan::detail/$1', ['filter' => 'auth']);
    $routes->add('dashboard/agenda/', 'Admin\Agenda', ['filter' => 'auth']);
    $routes->add('dashboard/agenda/create', 'Admin\Agenda::addAgenda', ['filter' => 'auth']);
    $routes->add('dashboard/aparatur/', 'Admin\Aparatur', ['filter' => 'auth']);
    $routes->add('dashboard/aparatur/create', 'Admin\Aparatur::addAparatur', ['filter' => 'auth']);
    $routes->add('dashboard/aparatur/edit/(:num)', 'Admin\Aparatur::editAparatur/$1', ['filter' => 'auth']);
    $routes->add('dashboard/galeri/', 'Admin\Galeri', ['filter' => 'auth']);
    $routes->add('dashboard/galeri/create', 'Admin\Galeri::addGaleri', ['filter' => 'auth']);
    $routes->add('dashboard/statistik/', 'Admin\Statistik', ['filter' => 'auth']);
    $routes->add('dashboard/statistik/create', 'Admin\Statistik::addStatistik', ['filter' => 'auth']);

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
