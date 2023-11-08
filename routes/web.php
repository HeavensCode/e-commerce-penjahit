<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;

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
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');

Route::redirect('/', '/beranda');

Route::redirect('/user', '/beranda');

Route::get('/beranda', function () {
    return view('user.beranda-user');
})->name('beranda');

Route::get('/detail', function () {
    return view('user.detail-produk');
})->name('detail');

Route::get('/produk', function () {
    return view('user.produk');
})->name('produk');

Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::get('/dashboard', function () {
    return view('user.profile-user.index-profile-user');
});

Route::get('/profile', function () {
    return view('user.profile-user.profile-user');
})->name('profile');

Route::get('/toko', function () {
    return view('user.profile-user.toko-user');
})->name('toko');

Route::get('/alamat', function () {
    return view('user.profile-user.alamat-user');
})->name('alamat');


// Route::get('/panitia/test/tambah', [TestController::class, 'showtraining'])->name('tambahtest');
// super admin

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');

Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');

Route::get('/login-admin', function () {
    return view('admin.auth-admin.login-admin');
});

Route::get('/register-admin', function () {
    return view('admin.auth-admin.register-admin');
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
