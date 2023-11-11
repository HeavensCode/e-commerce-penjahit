<?php

namespace App\Http\Controllers;

use App\Models\DetailGambarProduct;
use App\Models\DetailProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use App\Models\Pembelian;
use App\Models\DetailPembelian;
use Illuminate\Support\Facades\Storage;
use App\Models\PemasukanAdmin;
use App\Models\LokasiUser;

class CartController extends Controller
{

    public function handlePayment(Request $request)
    {
        try {
            $jumlahPembelian = $request->input('jumlah_pembelian');
            $totalPembayaran = $request->input('total_pembayaran');
            $pembelian = new Pembelian();
            $pembelian->id_user = auth()->id();
            $pembelian->jumlah_pembelian = $jumlahPembelian;
            $pembelian->total_pembayaran = $totalPembayaran;

            if ($pembelian->save()) {
                foreach ($request->input('nama_product_array', []) as $key => $productName) {
                    if (
                        !isset($request->input('id_produk_array')[$key]) ||
                        !isset($request->input('jumlah_pembelian_array')[$key]) ||
                        !isset($request->input('sub_total_array')[$key])
                    ) {
                        throw new \Exception('Input produk tidak valid.');
                    }

                    $detailPembelian = new DetailPembelian();
                    $detailPembelian->id_pembelian = $pembelian->id;
                    $detailPembelian->id_product = $request->input('id_produk_array')[$key];
                    $detailPembelian->nama_product = $productName;
                    $detailPembelian->jumlah_pembelian = $request->input('jumlah_pembelian_array')[$key];
                    $detailPembelian->total_biaya = $request->input('sub_total_array')[$key];

                    if ($request->hasFile('bukti_pembayaran') && $request->file('bukti_pembayaran')->isValid()) {
                        $file = $request->file('bukti_pembayaran');
                        $namaFile = time() . '_' . $file->getClientOriginalName();
                        Storage::disk('public')->put('bukti/' . $namaFile, file_get_contents($file));
                        $detailPembelian->bukti_pembayaran = $namaFile;
                    }

                    if ($detailPembelian->save()) {
                        $product = Product::find($detailPembelian->id_product);
                        $product->stock -= $detailPembelian->jumlah_pembelian;
                        $product->save();

                        $pemasukanAdmin = new PemasukanAdmin();
                        $pemasukanAdmin->id_pembelian = $pembelian->id;

                        $totalPemasukanAdmin = $request->input('pemasukan_admin');
                        $potongan = $totalPemasukanAdmin * 0.10;
                        $pemasukanAdmin->pemasukan = $totalPemasukanAdmin - $potongan;
                        $pemasukanAdmin->save();
                    }
                }
                return redirect()->back()->with('success', 'Pembelian berhasil');
            }

            return redirect()->back()->with('error', 'Terjadi kesalahan saat melakukan pembelian');
        } catch (\Exception $e) {
            // Hapus file gambar jika terjadi kesalahan
            $file = $request->file('bukti_pembayaran');
            if ($file && $file->isValid()) {
                // Mendapatkan nama file dari path
                $namaFile = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                // Hapus file jika ada
                Storage::disk('public')->delete('bukti/' . $namaFile);
            }

            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }







    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $id_toko = $request->input('id_toko');
        $quantity = $request->input('quantity', 1);
        $product = Product::find($productId);
        $detailproduct = DetailProduct::find($productId);
        $detailgambarproduct = DetailGambarProduct::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $product->nama_product,
                'gambar' => $detailgambarproduct->gambar,
                'quantity' => $quantity,
                'price' => $product->harga,
                'merk' => $detailproduct->merk,
                'id_toko' => $id_toko,
            ];
        }

        session()->put('cart', $cart);
        // dd($cart);
        return redirect()->back()->with('success', 'Product added to cart.');
    }


    public function shoppingcart()
    {
        $cart = session()->get('cart', []);
        // dd($cart);
        $user = auth()->user();
        $lokasiUser = LokasiUser::where('id_user', $user->id)->first();

        if (!$lokasiUser) {
            return view('user.pembayaran-user', [
                'cart' => $cart,
                'totalPrice' => 0,
                'lokasiUser' => null,
                'addressNotSet' => true,
            ]);
        }

        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }

        return view('user.pembayaran-user', [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'lokasiUser' => $lokasiUser,
            'addressNotSet' => false,
        ]);
    }


    public function updateCart(Request $request, $productId)
    {
        $action = $request->input('action');
        $quantity = $request->input('quantity');
        $cart = session()->get('cart', []);

        if ($action === 'increment') {
            $cart[$productId]['quantity']++;
        } elseif ($action === 'decrement') {
            if ($quantity > 1) {
                $cart[$productId]['quantity']--;
            }
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    public function __construct()
    {
        $this->middleware('checkUserLogin')->only('addToCart');
    }
}