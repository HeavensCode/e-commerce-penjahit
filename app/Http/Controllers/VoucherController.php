<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Http\Requests\StoreVoucherRequest;
use App\Http\Requests\UpdateVoucherRequest;
use Illuminate\Http\Request;


class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::all();

        return view('admin.voucher.index', ['vouchers' => $vouchers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.voucher.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVoucherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_voucher' => 'required',
            'jumlah_potongan' => 'required|numeric',
        ]);

        $voucher = new Voucher();
        $voucher->kode_voucher = $request->input('kode_voucher');
        $voucher->jumlah_potongan = $request->input('jumlah_potongan');

        if ($voucher->save()) {
            return redirect()->route('index.voucher-admin')->with('success', 'Voucher berhasil dibuat.');
        } else {
            return redirect()->back()->with('error', 'Voucher Gagal Dibuat.');
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vouchers = Voucher::findOrFail($id);

        return view('admin.voucher.edit', compact('vouchers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVoucherRequest  $request
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher, $id)
    {
        $vouchers = Voucher::find($id);
        if (!$vouchers) {
            return redirect()->back()->with('error', 'Vouchers not found');
        }
        $vouchers->kode_voucher = $request->input('nama_product');
        $vouchers->jumlah_potongan = $request->input('jumlah_potongan');
        $vouchers->save();
        if ($vouchers) {
            return redirect()->route('index.voucher-admin')->with('success', 'Voucher  updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update Voucher');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher, $id)
    {
        $vouchers = Voucher::findOrFail($id);
        $vouchers->delete();
        return redirect()->route('index.voucher-admin')->with('success', 'Voucher berhasil dihapus.');
    }
}