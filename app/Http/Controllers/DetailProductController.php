<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DetailProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request, $id)
    {
        try {
            // Cari produk berdasarkan ID dan join tabel detailProduct, detailGambarProduct, dan toko
            $product = Product::with('detailProduct', 'detailGambarProduct', 'toko')->findOrFail($id);

            return view('user.detail-produk', ['product' => $product]);
        } catch (ModelNotFoundException $e) {
            // Tangani kesalahan model tidak ditemukan
            return abort(404);
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return back()->with('error', 'An error occurred.');
        }
    }
}