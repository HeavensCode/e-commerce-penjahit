<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;
use App\Models\Toko;
use App\Models\Product;

class DashboardAdminController extends Controller
{

    public function index()
    {
        try {
            $jumlahUser = User::count();
            $jumlahToko = Toko::count();
            $jumlahProduk = Product::count();

            return view('admin.dashboard-admin', [
                'jumlahUser' => $jumlahUser,
                'jumlahToko' => $jumlahToko,
                'jumlahProduk' => $jumlahProduk,
            ]);
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