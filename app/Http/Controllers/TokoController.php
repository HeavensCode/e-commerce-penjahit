<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTokoRequest;
use Illuminate\Database\QueryException;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::with('detailProduct', 'detailGambarProduct', 'toko')->get();
        $toko = Toko::find($request->user()->id);
        $productcount = Product::where('id_toko', $toko->id)->count();
        $productarray = Product::where('id_toko', $toko->id)->get();
        return view('user.profile-user.toko-user', [
            'toko' => $toko,
            'productcount' => $productcount,
            'productarray' => $productarray,
            'products' => $products
        ]);
    }

    public function alamat(Request $request)
    {

        $toko = Toko::find($request->user()->id);
        $product = Product::where('id_toko', $toko->id)->count();

        return view('user.profile-user.alamat-user', ['toko' => $toko], ['product' => $product]);
    }

    public function profil(Request $request)
    {
        $user = User::with('toko')->find($request->user()->id);

        return view('user.profile-user.profile-user', ['user' => $user]);
    }

    public function updateDataToko(Request $request, Toko $toko)
    {
        DB::beginTransaction();

        try {
            $result = DB::table('tokos')
                ->where('id', $request->input('id'))
                ->update([
                    'nama_toko' => $request->input('namaToko'),
                    'no_telp' => $request->input('noTelp'),
                    'email' => $request->input('email'),
                ]);

            if ($result) {
                DB::commit(); // Commit transaksi jika berhasil
                return redirect('/toko')->with('success', 'Data toko berhasil diperbarui.');
            } else {
                DB::rollBack(); // Rollback transaksi jika gagal
                return redirect('/toko')->with('error', 'Gagal memperbarui data toko.');
            }
        } catch (QueryException $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi kesalahan
            return redirect('/toko')->with('error', 'Terjadi kesalahan saat memperbarui data toko: ' . $e->getMessage());
        }
    }

    public function updateToko(Request $request, Toko $toko)
    {
        DB::beginTransaction();

        try {
            $result = DB::table('tokos')
                ->where('id', $request->input('id'))
                ->update([
                    'alamat_toko' => $request->input('alamatLengkap'),
                    'kota' => $request->input('kota'),
                    'kecamatan' => $request->input('kecamatan'),
                    'provinsi' => $request->input('provinsi'),
                    'kode_pos' => $request->input('kodePos'),
                ]);

            if ($result) {
                DB::commit(); // Commit transaksi jika berhasil
                return redirect('/alamat')->with('success', 'Data toko berhasil diperbarui.');
            } else {
                DB::rollBack(); // Rollback transaksi jika gagal
                return redirect('/alamat')->with('error', 'Gagal memperbarui data toko.');
            }
        } catch (QueryException $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi kesalahan
            return redirect('/alamat')->with('error', 'Terjadi kesalahan saat memperbarui data toko: ' . $e->getMessage());
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
     * @param  \App\Http\Requests\StoreTokoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTokoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko)
    {
        //
    }
}