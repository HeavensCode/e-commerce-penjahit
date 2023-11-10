<?php

namespace App\Http\Controllers;

use App\Models\lokasiuser;
use Illuminate\Http\Request;
use App\Http\Requests\StorelokasiuserRequest;
use App\Http\Requests\UpdatelokasiuserRequest;

class LokasiuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function updateAlamatUser(Request $request, lokasiuser $lokasiuser, $id)
    {
        $lokasiuser = Lokasiuser::find($id);

        if (!$lokasiuser) {
            return redirect()->back()->with('error', 'Lokasi User not found.');
        }

        // Validasi dan simpan pembaruan data
        $request->validate([
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'provinsi' => 'required|string',
            'kodepos' => 'required|string',
        ]);

        $lokasiuser->kota = $request->input('kota');
        $lokasiuser->kecamatan = $request->input('kecamatan');
        $lokasiuser->provinsi = $request->input('provinsi');
        $lokasiuser->kode_pos = $request->input('kodepos');

        if ($lokasiuser->save()) {
            return redirect()->route('profile')->with('success', 'Lokasi User updated successfully.');
        } else {
            return redirect()->route('profile')->with('error', 'Failed to update Lokasi User.');
        }
    }
}