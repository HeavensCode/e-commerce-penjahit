<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;
use App\Models\Toko;
use App\Models\Product;
use App\Models\PemasukanAdmin;

class DashboardAdminController extends Controller
{

    public function index()
    {
        try {
            $jumlahUser = User::count();
            $jumlahToko = Toko::count();
            $jumlahProduk = Product::count();
            $totalPemasukan = PemasukanAdmin::sum('pemasukan');

            return view('admin.dashboard-admin', [
                'jumlahUser' => $jumlahUser,
                'jumlahToko' => $jumlahToko,
                'jumlahProduk' => $jumlahProduk,
                'totalPemasukan' => $totalPemasukan,
            ]);
        } catch (QueryException $e) {
            return back()->with('error', 'Error executing database query.');
        } catch (ModelNotFoundException $e) {
            return back()->with('error', 'Error finding model.');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred.');
        }
    }
}
