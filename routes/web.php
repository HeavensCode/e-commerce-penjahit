<?php

use App\Http\Controllers\beranda;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\TokoAdminController;
use App\Http\Controllers\ProductAdminController;

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
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard.admin');

Route::get('/register-admin', [AdminLoginController::class, 'showFormRegister']);
Route::post('/admin-register', [AdminLoginController::class, 'registerAdmin'])->name('register.admin');

// user super admin
Route::get('/users', [UserAdminController::class, 'index'])->name('index.user-admin');
Route::get('/edit-users/{id}', [UserAdminController::class, 'edit'])->name('user.edit');
Route::post('/edit-users/{id}', [UserAdminController::class, 'update'])->name('user.update');
Route::delete('/delete-users/{id}', [UserAdminController::class, 'destroy'])->name('user.delete');

// toko super admin
Route::get('/toko-admin', [TokoAdminController::class, 'index'])->name('index.toko-admin');
Route::get('/edit-toko/{id}', [TokoAdminController::class, 'edit'])->name('toko.edit');
Route::post('/edit-toko/{id}', [TokoAdminController::class, 'update'])->name('toko.update');
Route::delete('/delete-toko/{id}', [TokoAdminController::class, 'destroy'])->name('toko.delete');

// product super admin
Route::get('/product-admin', [TokoAdminController::class, 'index'])->name('index.product-admin');
Route::get('/edit-product/{id}', [TokoAdminController::class, 'edit'])->name('product.edit');
Route::post('/edit-product/{id}', [TokoAdminController::class, 'update'])->name('toko.update');
Route::delete('/delete-product/{id}', [TokoAdminController::class, 'destroy'])->name('product.delete');
