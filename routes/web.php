<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/', function () {
    return redirect('/beranda');
});
Route::get('/user', function () {
    return redirect('/beranda');
});

Route::get('/beranda', function () {
    return view('user.beranda-user');
});

Route::get('/detail', function () {
    return view('user.detail-produk');
});

Route::get('/produk', function () {
    return view('user.produk');
});

Route::get('/about', function () {
    return view('user.about');
});
Route::get('/dashboard', function () {
    return view('user.profile-user.index-profile-user');
});
Route::get('/profile', function () {
    return view('user.profile-user.profile-user');
});
Route::get('/toko', function () {
    return view('user.profile-user.toko-user');
});
Route::get('/alamat', function () {
    return view('user.profile-user.alamat-user');
});


// super admin
Route::get('/admin', function () {
    return view('admin.index-admin');
});
Route::get('/login-admin', function () {
    return view('admin.auth-admin.login-admin');
});
Route::get('/register-admin', function () {
    return view('admin.auth-admin.register-admin');
});
Route::get('/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});
Route::get('/users', function () {
    return view('admin.user.index-user');
});
Route::get('/toko-admin', function () {
    return view('admin.toko.index');
});
Route::get('/edit-toko-admin', function () {
    return view('admin.toko.edit');
});
