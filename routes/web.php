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
Route::get('/', function () {
    return view('user.index-user');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/user', function () {
    return redirect('/user/beranda');
});

Route::get('/user/beranda', function () {
    return view('user.beranda-user');
});

Route::get('/user/detail', function () {
    return view('user.detail-produk');
});
