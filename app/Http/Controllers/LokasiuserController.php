<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\lokasiuser;
use Illuminate\Http\Request;

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


    public function updateAlamatUser(Request $request, $id)
    {
        try {
            $lokasiuser = Lokasiuser::findOrFail($id);

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
        } catch (ModelNotFoundException $e) {
            // Tangani kesalahan model tidak ditemukan
            return redirect()->route('profile')->with('error', 'Lokasi User not found.');
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return redirect()->route('profile')->with('error', 'An error occurred.');
        }
    }
}