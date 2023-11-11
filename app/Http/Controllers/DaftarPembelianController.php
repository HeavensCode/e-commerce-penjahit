<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPembelian;
use App\Models\Toko;
use App\Models\DetailProduct;
use Illuminate\Support\Facades\DB;
class DaftarPembelianController extends Controller
{

        public function index()
        {
            $userId = auth()->id();

            $purchases = DetailPembelian::where('detail_pembelians.id_user', $userId)
            ->join('tokos', 'detail_pembelians.id_toko', '=', 'tokos.id')
            ->join('detail_products', 'detail_pembelians.id_product', '=', 'detail_products.id_product')
            ->select(
                'detail_pembelians.nama_product',
                'tokos.nama_toko',
                'detail_pembelians.jumlah_pembelian',
                'detail_pembelians.total_biaya',
                'detail_products.seller'
            )
            ->get();


            return view('user.profile-user.daftar-pembelian', compact('purchases'));
        }
        public function show()
        {
            $userId = auth()->id();

            $transactions = DB::table('detail_pembelians')
                ->join('users', 'detail_pembelians.id_user', '=', 'users.id')
                ->select(
                    'detail_pembelians.nama_product',
                    'users.nama as nama_user',
                    'detail_pembelians.jumlah_pembelian',
                    'detail_pembelians.total_biaya',
                    'detail_pembelians.bukti_pembayaran'
                )
                ->where('detail_pembelians.id_toko', $userId)
                ->get();
                // dd($transactions);

            return view('user.profile-user.daftar-transaksi', compact('transactions'));
        }
}
