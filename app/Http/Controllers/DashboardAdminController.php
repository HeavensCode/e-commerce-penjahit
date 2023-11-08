<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Toko;
use App\Models\Product;

class DashboardAdminController extends Controller
{

    public function index()
    {
        $jumlahUser = User::count();
        $jumlahToko = Toko::count();
        $jumlahProduk = Product::count();

        return view('admin.dashboard-admin', [
            'jumlahUser' => $jumlahUser,
            'jumlahToko' => $jumlahToko,
            'jumlahProduk' => $jumlahProduk,
        ]);
    }
}
