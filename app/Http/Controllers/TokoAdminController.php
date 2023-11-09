<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tokos = Toko::all();

        return view('admin.toko.index', ['tokos' => $tokos]);
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
        $tokos = Toko::findOrFail($id);

        return view('admin.toko.edit', compact('tokos'));
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
        $toko = Toko::find($id);
        if (!$toko) {
            return redirect()->back()->with('error', 'Toko not found');
        }
        $toko->nama_toko = $request->input('nama_toko');
        $toko->alamat_toko = $request->input('alamat_toko');
        $toko->no_telp = $request->input('no_telp');
        $toko->email = $request->input('email');
        $toko->kota = $request->input('kota');
        $toko->kecamatan = $request->input('kecamatan');
        $toko->provinsi = $request->input('provinsi');
        $toko->kode_pos = $request->input('kode_pos');
        $toko->save();

        if ($toko) {
            return redirect()->route('index.toko-admin')->with('success', 'Toko updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update Toko');
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
        $toko = Toko::findOrFail($id);
        $toko->delete();
        return redirect()->route('index.toko-admin')->with('success', 'Toko berhasil dihapus.');
    }
}
