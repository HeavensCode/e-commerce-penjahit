<?php

use App\Http\Controllers\beranda;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserLoginController;

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

Route::get('/login-user', [UserLoginController::class, 'showFormLogin'])->name('form-login-user');
Route::post('/register', [UserLoginController::class, 'userRegister'])->name('form-register-user');
Route::get('/register', [UserLoginController::class, 'showFormRegister'])->name('user.register');
Route::post('/login-user', [UserLoginController::class, 'login'])->name('login.user');

Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');

Route::redirect('/', '/beranda');

Route::redirect('/user', '/beranda');

Route::get('/beranda', [beranda::class, 'index'])->name('beranda');

Route::get('/detail/{id}',  [DetailProductController::class, 'index'])->name('detail');

Route::get('/produk', [ProductController::class, 'show'])->name('produk');

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




// super admin
Route::post('/login', [AdminLoginController::class, 'login'])->name('login.admin');

Route::get('/login-admin', function () {
    return view('admin.auth-admin.login-admin');
});
Route::get('/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});
Route::get('/register-admin', [AdminLoginController::class, 'showFormRegister']);
Route::post('/admin-register', [AdminLoginController::class, 'registerAdmin'])->name('register.admin');

// Route::get('/register-admin', function () {
//     return view('admin.auth-admin.register-admin');
// });

Route::get('/users', function () {
    return view('admin.user.index-user');
});
Route::get('/toko-admin', function () {
    return view('admin.toko.index');
});
Route::get('/edit-toko-admin', function () {
    return view('admin.toko.edit');
});
