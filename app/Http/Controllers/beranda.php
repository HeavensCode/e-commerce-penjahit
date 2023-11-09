<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class beranda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('detailProduct', 'detailGambarProduct', 'toko')->get();
        // Mengarahkan ke halaman produk dengan data produk
        return view('user.beranda-user', ['products' => $products]);
    }
}
