<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\DetailProduct;
use App\Http\Requests\StoreDetailProductRequest;
use App\Http\Requests\UpdateDetailProductRequest;

class DetailProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        // Cari produk berdasarkan ID dan join tabel detailProduct, detailGambarProduct, dan toko
        $product = Product::with('detailProduct', 'detailGambarProduct', 'toko')->find($id);
        if ($product) {
            return view('user.detail-produk', ['product' => $product]);
        } else {
            // Handle jika produk tidak ditemukan
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetailProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailProduct  $detailProduct
     * @return \Illuminate\Http\Response
     */
    public function show(DetailProduct $detailProduct)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailProduct  $detailProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailProduct $detailProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailProductRequest  $request
     * @param  \App\Models\DetailProduct  $detailProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailProductRequest $request, DetailProduct $detailProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailProduct  $detailProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailProduct $detailProduct)
    {
        //
    }
}
