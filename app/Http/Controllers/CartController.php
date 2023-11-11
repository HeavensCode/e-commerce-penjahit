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
        $pembelian = new Pembelian();
        $pembelian->id_user = auth()->id();
        $pembelian->jumlah_pembelian = $request->input('jumlah_pembelian');
        $pembelian->total_pembayaran = $request->input('total_pembayaran');
        $pemasukanAdmin = new PemasukanAdmin();
        $pemasukanAdmin->id_pembelian = $pembelian->id;
        $pemasukanAdmin->pemasukan = $request->input('pemasukan_admin');
        if ($pembelian->save()) {
            $pemasukanAdmin->id_pembelian = $pembelian->id;
            $pemasukanAdmin->save();
            foreach ($request->input('nama_product_array') as $key => $productName) {
                $detailPembelian = new DetailPembelian();
                $detailPembelian->id_pembelian = $pembelian->id;
                $detailPembelian->id_user = auth()->id();
                $detailPembelian->id_product = $request->input('id_produk_array')[$key];
                $detailPembelian->id_toko = $request->input('id_toko_array')[$key];
                $detailPembelian->nama_product = $productName;
                $detailPembelian->jumlah_pembelian = $request->input('jumlah_pembelian_array')[$key];
                $detailPembelian->total_biaya = $request->input('sub_total_array')[$key];
                $product = Product::find($detailPembelian->id_product);
                if ($product->stock < $detailPembelian->jumlah_pembelian) {
                    return redirect()->back()->with('error', 'Jumlah pembelian melebihi stok produk.');
                }

                if ($request->hasFile('bukti_pembayaran') && $request->file('bukti_pembayaran')[$key]->isValid()) {
                    $file = $request->file('bukti_pembayaran')[$key];
                    $namaFile = time() . '_' . $file->getClientOriginalName();
                    Storage::disk('public')->put('bukti/' . $namaFile, file_get_contents($file));
                    $detailPembelian->bukti_pembayaran = $namaFile;
                }

                if ($detailPembelian->save()) {
                    $product->stock -= $detailPembelian->jumlah_pembelian;
                    $product->save();
                }
            }

            session()->forget('cart');
            return redirect()->back()->with('success', 'Pembelian berhasil');
        }

        return redirect()->back()->with('error', 'Terjadi kesalahan saat melakukan pembelian');
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
        $phoneNumbers = [];

        foreach ($cart as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
            $userId = DB::table('tokos')
                ->where('id', $item['id_toko'])
                ->value('id_user');

            $phoneNumber = DB::table('users')
                ->where('id', $userId)
                ->value('no_telp');
            $phoneNumbers[$item['id_toko']] = $phoneNumber;
        }

        return view('user.pembayaran-user', [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'lokasiUser' => $lokasiUser,
            'addressNotSet' => false,
            'phoneNumbers' => $phoneNumbers,
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
