<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class beranda extends Controller
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
            return view('user.beranda-user', ['products' => $products]);
        } catch (QueryException $e) {
            // Tangani kesalahan query database
            return back()->with('error', 'Error executing database query.');
        } catch (ModelNotFoundException $e) {
            // Tangani kesalahan model tidak ditemukan
            return back()->with('error', 'Error finding model.');
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return back()->with('error', 'An error occurred.');
        }
    }
}