<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\DetailProduct;
use Illuminate\Support\Facades\DB;
use App\Models\DetailGambarProduct;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = Product::with('detailProduct', 'detailGambarProduct', 'toko')->get();
            // Mengarahkan ke halaman produk dengan data produk
            return $products;
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return redirect()->back()->with('error', 'An error occurred.');
        }
    }

    public function delete($id)
    {
        try {
            $product = Product::find($id);

            if (!$product) {
                return redirect()->route('toko')->with('error', 'Produk tidak ditemukan.');
            }

            $product->delete();

            return redirect()->route('toko')->with('success', 'Produk berhasil dihapus.');
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return redirect()->route('toko')->with('error', 'Terjadi kesalahan saat menghapus produk.');
        }
    }

    // public function updateProduct(Request $request, $id)
    // {
    //     DB::beginTransaction();

    //     try {
    //         $produk = Product::find($id);
    //         if (!$produk) {
    //             return redirect('/toko')->with('error', 'Produk tidak ditemukan.');
    //         }

    //         $produk->nama_product = $request->input('edit_namaProduk');
    //         $produk->harga = $request->input('edit_harga');
    //         $produk->stock = $request->input('edit_stok');

    //         if ($produk->save()) {
    //             // Menghapus gambar lama jika ada
    //             $detailGambar = DetailGambarProduct::where('id_product', $produk->id)->delete();

    //             if ($request->hasFile('gambarProduk')) {
    //                 foreach ($request->file('gambarProduk') as $file) {
    //                     $namaFile = time() . '_' . $file->getClientOriginalName();
    //                     Storage::disk('public')->put('gambar/' . $namaFile, file_get_contents($file));

    //                     $detailGambar = new DetailGambarProduct();
    //                     $detailGambar->id_product = $produk->id;
    //                     $detailGambar->gambar = $namaFile;
    //                     $detailGambar->save();
    //                 }
    //             }

    //             $detailProduk = DetailProduct::where('id_product', $produk->id)->first();

    //             $detailProduk->rating = $request->input('edit_rating');
    //             $detailProduk->deskripsi = $request->input('edit_deskripsi');
    //             $detailProduk->merk = $request->input('edit_merk');
    //             $detailProduk->motif = $request->input('edit_motif');
    //             $detailProduk->panjang_kain = $request->input('edit_panjangKain');
    //             $detailProduk->seller = $request->input('edit_seller');
    //             $detailProduk->bahan = $request->input('edit_bahan');
    //             $detailProduk->size = $request->input('edit_size');
    //             $detailProduk->save();

    //             DB::commit();
    //             return redirect('/toko')->with('success', 'Produk berhasil diperbarui.');
    //         } else {
    //             DB::rollBack();
    //             return redirect('/toko')->with('error', 'Gagal memperbarui produk.');
    //         }
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         return redirect('/toko')->with('error', 'Terjadi kesalahan saat memperbarui produk: ' . $e->getMessage());
    //     }
    // }

    public function updateProduct(Request $request, $id)
{
    DB::beginTransaction();

    try {
        $produk = Product::find($id);
        if (!$produk) {
            return redirect('/toko')->with('error', 'Produk tidak ditemukan.');
        }

        $produk->nama_product = $request->input('edit_namaProduk');
        $produk->harga = $request->input('edit_harga');
        $produk->stock = $request->input('edit_stok');

        if ($produk->save()) {
            // Menghapus gambar lama jika ada
            if ($request->hasFile('gambarProduk')) {
                DetailGambarProduct::where('id_product', $produk->id)->delete();

                foreach ($request->file('gambarProduk') as $file) {
                    $namaFile = time() . '_' . $file->getClientOriginalName();
                    Storage::disk('public')->put('gambar/' . $namaFile, file_get_contents($file));

                    $detailGambar = new DetailGambarProduct();
                    $detailGambar->id_product = $produk->id;
                    $detailGambar->gambar = $namaFile;
                    $detailGambar->save();
                }
            }

            $detailProduk = DetailProduct::where('id_product', $produk->id)->first();

            $detailProduk->rating = $request->input('edit_rating');
            $detailProduk->deskripsi = $request->input('edit_deskripsi');
            $detailProduk->merk = $request->input('edit_merk');
            $detailProduk->motif = $request->input('edit_motif');
            $detailProduk->panjang_kain = $request->input('edit_panjangKain');
            $detailProduk->seller = $request->input('edit_seller');
            $detailProduk->bahan = $request->input('edit_bahan');
            $detailProduk->size = $request->input('edit_size');
            $detailProduk->save();

            DB::commit();
            return redirect('/toko')->with('success', 'Produk berhasil diperbarui.');
        } else {
            DB::rollBack();
            return redirect('/toko')->with('error', 'Gagal memperbarui produk.');
        }
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect('/toko')->with('error', 'Terjadi kesalahan saat memperbarui produk: ' . $e->getMessage());
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request)
    {
        DB::beginTransaction();

        try {
            $produk = new Product();
            $produk->nama_product = $request->input('namaProduk');
            $produk->harga = $request->input('harga');
            $produk->stock = $request->input('stok');
            $produk->id_toko = Auth::id();

            if ($produk->save()) {
                if ($request->hasFile('gambarProduk')) {
                    foreach ($request->file('gambarProduk') as $file) {
                        $namaFile = time() . '_' . $file->getClientOriginalName();
                        Storage::disk('public')->put('gambar/' . $namaFile, file_get_contents($file));
                        $detailGambar = new DetailGambarProduct();
                        $detailGambar->id_product = $produk->id;
                        $detailGambar->gambar = $namaFile;
                        $detailGambar->save();
                    }
                }
                $detailProduk = new DetailProduct();
                $detailProduk->id_product = $produk->id;
                $detailProduk->rating = $request->input('rating');
                $detailProduk->deskripsi = $request->input('deskripsi');
                $detailProduk->merk = $request->input('merk');
                $detailProduk->motif = $request->input('motif');
                $detailProduk->panjang_kain = $request->input('panjangKain');
                $detailProduk->seller = $request->input('seller');
                $detailProduk->bahan = $request->input('bahan');
                $detailProduk->size = $request->input('size');
                $detailProduk->save();

                DB::commit();
                return redirect('/toko')->with('success', 'Produk berhasil ditambahkan.');
            } else {
                DB::rollBack();
                return redirect('/toko')->with('error', 'Gagal menambahkan produk.');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/toko')->with('error', 'Terjadi kesalahan saat menambahkan produk: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::with('detailProduct', 'detailGambarProduct', 'toko')->get();
        // Mengarahkan ke halaman produk dengan data produk
        return view('user.produk', ['products' => $products]);
    }
}
