<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use App\Models\DetailGambarProduct;
use Illuminate\Support\Facades\Storage;
use App\Models\DetailProduct;
class ProdukAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
            ->join('detail_gambar_products', 'products.id', '=', 'detail_gambar_products.id_product')
            ->join('detail_products', 'products.id', '=', 'detail_products.id_product')
            ->select('products.*', 'detail_gambar_products.*', 'detail_products.*')
            ->get();
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
         $products = DB::table('products')
             ->join('detail_gambar_products', 'products.id', '=', 'detail_gambar_products.id_product')
             ->join('detail_products', 'products.id', '=', 'detail_products.id_product')
             ->select('products.*', 'detail_gambar_products.*', 'detail_products.*')
             ->where('products.id', '=', $id)
             ->first();

         return view('admin.produk.edit', compact('products'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequest  $request
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $products = Product::find($id);
    //     if (!$products) {
    //         return redirect()->back()->with('error', 'products not found');
    //     }
    //     $products->nama_product = $request->input('nama_product');
    //     $products->id_toko = $request->input('id_toko');
    //     $products->stock = $request->input('stock');
    //     $products->rating = $request->input('rating');
    //     $products->save();

    //     if ($products) {
    //         return redirect()->route('index.products-admin')->with('success', 'products updated successfully');
    //     } else {
    //         return redirect()->back()->with('error', 'Failed to update products');
    //     }
    // }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        // Validasi request
        // $request->validate([
        //     'nama_product' => 'required',
        //     'stock' => 'required|numeric',
        //     'rating' => 'required|numeric',
        // ]);

        // Mengambil data dari tabel products
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Update data pada tabel products
        $product->nama_product = $request->input('nama_product');
        $product->stock = $request->input('stock');
        $product->id_toko = $request->input('id_toko');
        $product->harga = $request->input('Harga');

        // Update data pada tabel detail_products
        $detailProduct = DetailProduct::where('id_product', $id)->first();
        if ($detailProduct) {
            $detailProduct->deskripsi = $request->input('deskripsi');
            $detailProduct->rating = $request->input('rating');
            $detailProduct->merk = $request->input('merk');
            $detailProduct->motif = $request->input('motif');
            $detailProduct->panjang_kain = $request->input('panjang_kain');
            $detailProduct->seller = $request->input('seller');
            $detailProduct->bahan = $request->input('bahan');
            $detailProduct->size = $request->input('size');
            $detailProduct->save();
        }

        $detailGambar = DetailGambarProduct::where('id_product', $id)->first();

        if ($detailGambar) {

            if ($detailGambar->gambar) {
                Storage::disk('public')->delete($detailGambar->gambar);
            }

            // Mengupload gambar baru jika ada
            if ($request->hasFile('gambar')) {
                $gambarPath = $request->file('gambar')->store('produk', 'public');
                $detailGambar->gambar = $gambarPath;
            }

            $detailGambar->save();
        }


        return redirect()->route('index.products-admin')->with('success', 'Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Menghapus relasi dari tabel anak
        $product->detailGambarProduct()->delete();
        $product->detailProduct()->delete();

        // Menghapus gambar dari penyimpanan
        if ($product->gambar) {
            Storage::disk('public')->delete($product->gambar);
        }

        $product->delete();

        return redirect()->route('index.products-admin')->with('success', 'Produk berhasil dihapus.');
    }


}
