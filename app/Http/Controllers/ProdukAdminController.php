<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.produk.index', ['products' => $products]);
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
     * @param  \App\Http\Requests\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $products = Product::findOrFail($id);

        return view('admin.produk.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequest  $request
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        if (!$products) {
            return redirect()->back()->with('error', 'products not found');
        }
        $products->nama_product = $request->input('nama_product');
        $products->id_toko = $request->input('id_toko');
        $products->stock = $request->input('stock');
        $products->rating = $request->input('rating');
        $products->save();

        if ($products) {
            return redirect()->route('index.products-admin')->with('success', 'products updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('index.products-admin')->with('success', 'Toko berhasil dihapus.');
    }
}
