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

Route::get('/profile', function () {
    return view('user.profile-user.index-profile-user');
});
