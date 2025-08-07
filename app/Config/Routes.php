<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// --- Grouping agar lebih rapi ---

// Rute untuk Autentikasi
$routes->get('login', 'AuthController::login');
$routes->post('login/process', 'AuthController::process');
$routes->get('logout', 'AuthController::logout');

// Rute yang memerlukan filter login
$routes->group('', ['filter' => 'auth'], static function ($routes) {

    // Dashboard
    $routes->get('dashboard', 'DashboardController::index');

    // Rute untuk Books (menggunakan resource route)
    // Ini akan secara otomatis membuat route untuk:
    // index, new, create, show, edit, update, delete
    $routes->resource('books', ['controller' => 'BookController']);

    // Rute untuk Members
    $routes->resource('members', ['controller' => 'MemberController']);

    // Rute untuk Borrowings
    // Hanya membuat route yang diperlukan saja
    $routes->get('borrowings', 'BorrowingController::index');
    $routes->get('borrowings/create', 'BorrowingController::create');
    $routes->post('borrowings/store', 'BorrowingController::store');
    $routes->put('borrowings/return/(:num)', 'BorrowingController::return/$1');

});

/*
 * --------------------------------------------------------------------
 * Penjelasan Route yang Dibuat:
 * --------------------------------------------------------------------
 *
 * - Login & Logout:
 *   - GET /login -> Menampilkan halaman login (AuthController::login)
 *   - POST /login/process -> Memproses data login (AuthController::process)
 *   - GET /logout -> Proses logout (AuthController::logout)
 *
 * - Dashboard:
 *   - GET /dashboard -> Menampilkan dashboard (DashboardController::index)
 *
 * - Books (Resourceful Route):
 *   - GET /books -> Tampil semua buku (BookController::index)
 *   - GET /books/new -> Form tambah buku (BookController::new)
 *   - POST /books -> Simpan buku baru (BookController::create)
 *   - GET /books/(:num) -> Detail buku (BookController::show/$1)
 *   - GET /books/(:num)/edit -> Form edit buku (BookController::edit/$1)
 *   - PUT/PATCH /books/(:num) -> Update buku (BookController::update/$1)
 *   - DELETE /books/(:num) -> Hapus buku (BookController::delete/$1)
 *
 * - Members (Resourceful Route):
 *   - Sama seperti Books, tapi untuk MemberController.
 *
 * - Borrowings (Manual Route):
 *   - GET /borrowings -> Tampil riwayat peminjaman (BorrowingController::index)
 *   - GET /borrowings/create -> Form peminjaman baru (BorrowingController::create)
 *   - POST /borrowings/store -> Simpan peminjaman baru (BorrowingController::store)
 *   - PUT /borrowings/return/(:num) -> Update status pengembalian (BorrowingController::return/$1)
 *
 * Filter 'auth' akan digunakan untuk memproteksi route di dalam grup.
 * Anda perlu membuat Filter AuthFilter terlebih dahulu.
 *
 */
