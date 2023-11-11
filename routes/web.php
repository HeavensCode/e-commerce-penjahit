<?php

use App\Http\Controllers\beranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokoAdminController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\DashboardAdminController;

use App\Http\Controllers\ProdukAdminController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LokasiuserController;

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

Route::get('/produk-detail/{id}',  [DetailProductController::class, 'index'])->name('detail');

Route::get('/produk', [ProductController::class, 'show'])->name('produk');

Route::post('/produk/store', [ProductController::class, 'storeProduct'])->name('store-produk');

Route::delete('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');

Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('edit-product');

Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::get('/dashboard', function () {
    return view('user.profile-user.index-profile-user');
});
Route::get('/profile', [TokoController::class, 'profil'])->name('profile');
Route::post('profile/update-alamat/{id}', [LokasiuserController::class, 'updateAlamatUser'])->name('lokasiuser.update');
Route::post('/toko/{id}/update', [UserLoginController::class, 'updateProfile'])->name('user-profile.update');
Route::get('/toko', [TokoController::class, 'index'])->name('toko');
Route::post('/toko/edit-alamat', [TokoController::class, 'updateToko'])->name('edit-alamat-toko');
Route::post('/toko/edit-data', [TokoController::class, 'updateDataToko'])->name('edit-toko');
// toko hapus produk
Route::delete('/delete-product/toko/{id}', [TokoController::class, 'destroy'])->name('delete-product');

Route::get('/alamat',  [TokoController::class, 'alamat'])->name('alamat');

// checkout user

// routes/web.php
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart')->middleware('checkUserLogin');

Route::post('/update-cart/{productId}', [CartController::class, 'updateCart'])->name('update-cart');

Route::get('/shopping-cart', [CartController::class, 'shoppingcart'])->name('shopping-cart');

// payment
Route::post('/handle-payment', [CartController::class, 'handlePayment'])->name('handle-payment');



// super admin start
Route::post('/login', [AdminLoginController::class, 'login'])->name('login.admin');

Route::get('/login-admin', function () {
    return view('admin.auth-admin.login-admin');
});
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard.admin');

Route::get('/register-admin', [AdminLoginController::class, 'showFormRegister']);
Route::post('/admin-register', [AdminLoginController::class, 'registerAdmin'])->name('register.admin');

// user super admin
Route::get('/users', [UserAdminController::class, 'index'])->name('index.user-admin');
Route::post('/logout', [UserLoginController::class, 'logout'])->name('logout');
Route::get('/edit-users/{id}', [UserAdminController::class, 'edit'])->name('user.edit');
Route::post('/edit-users/{id}', [UserAdminController::class, 'update'])->name('user.update');
Route::delete('/delete-users/{id}', [UserAdminController::class, 'destroy'])->name('user.delete');

// toko super admin
Route::get('/toko-admin', [TokoAdminController::class, 'index'])->name('index.toko-admin');
Route::get('/edit-toko/{id}', [TokoAdminController::class, 'edit'])->name('toko.edit');
Route::post('/edit-toko/{id}', [TokoAdminController::class, 'update'])->name('toko.update');


Route::delete('/delete-toko/{id}', [TokoAdminController::class, 'destroy'])->name('toko.delete');

// produk super admin
Route::get('/produk-admin', [ProdukAdminController::class, 'index'])->name('index.products-admin');
Route::get('/edit-product/{id}', [ProdukAdminController::class, 'edit'])->name('product.edit');
Route::post('/edit-product/{id}', [ProdukAdminController::class, 'update'])->name('product.update');
Route::delete('/delete-product/{id}', [ProdukAdminController::class, 'destroy'])->name('product.delete');

// voucher super admin
Route::get('/voucher-admin', [VoucherController::class, 'index'])->name('index.voucher-admin');
Route::get('/edit-voucher/{id}', [VoucherController::class, 'edit'])->name('voucher.edit');
Route::post('/edit-voucher/{id}', [VoucherController::class, 'update'])->name('voucher.update');
Route::delete('/delete-voucher/{id}', [VoucherController::class, 'destroy'])->name('voucher.delete');
Route::get('/tambah-voucher', [VoucherController::class, 'create'])->name('voucher.create');
Route::post('/proses-voucher', [VoucherController::class, 'store'])->name('voucher.store');