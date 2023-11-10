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

    // public function handlePayment(Request $request)
    // {
    //     DB::beginTransaction();

    //     try {
    //         $pembelian = new Pembelian();
    //         $pembelian->id_user = auth()->id(); // Ambil ID user yang sedang login
    //         $pembelian->jumlah_pembelian = $request->input('jumlah_pembelian');
    //         $pembelian->total_pembayaran = $request->input('total_pembayaran');
    //         $pembelian->sub_total = $request->input('sub_total');
    //         // dd($pembelian);
    //         // $pembelian->save();

    //         // Langkah 2: Simpan data ke tabel detail_pembelians
    //         $detailPembelian = new DetailPembelian();
    //         $detailPembelian->id_pembelian = $pembelian->id; // Menggunakan ID yang baru saja di-generate
    //         $detailPembelian->nama_product = $request->input('bukti_pembayaran');
    //         $detailPembelian->nama_product = $request->input('nama_product');
    //         $detailPembelian->bukti_pembayaran = $request->input('bukti_pembayaran');
    //         $detailPembelian->jumlah_pembelian = $request->input('jumlah_pembelian');
    //         $detailPembelian->total_biaya = $request->input('total_biaya');
    //         dd($detailPembelian);
    //         $detailPembelian->save();

    //         // Langkah 3: Hitung dan simpan data ke tabel pemasukanadmins
    //         $pemasukanAdmin = new PemasukanAdmin();
    //         $pemasukanAdmin->id_pembelian = $pembelian->id;
    //         $pemasukanAdmin->pemasukan = $request->input('total_biaya') * 0.1; // 10% dari total biaya
    //         $pemasukanAdmin->save();

    //         // Jika semuanya sukses, commit transaksi
    //         DB::commit();

    //         return redirect()->back()->with('success', 'Pembelian berhasil');
    //     } catch (\Exception $e) {
    //         // Jika terjadi kesalahan, rollback transaksi
    //         DB::rollBack();

    //         return redirect()->back()->with('error', 'Terjadi kesalahan saat melakukan pembelian');
    //     }
    // }


public function handlePayment(Request $request)
{
    DB::beginTransaction();

    try {
        $pembelian = new Pembelian();
        $pembelian->id_user = auth()->id();
        $pembelian->jumlah_pembelian = $request->input('jumlah_pembelian');
        $pembelian->total_pembayaran = $request->input('total_pembayaran');
        $pembelian->sub_total = $request->input('sub_total');
        // dd($pembelian);
        $pembelian->save();

        $detailPembelian = new DetailPembelian();
        $detailPembelian->id_pembelian = $pembelian->id;
        $detailPembelian->nama_product = $request->input('nama_product');
        $detailPembelian->jumlah_pembelian = $request->input('jumlah_pembelian');
        $detailPembelian->total_biaya = $request->input('total_biaya');
        $detailPembelian->bukti_pembayaran = $request->input('bukti_pembayaran');

        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPembayaran = $request->file('bukti_pembayaran');
            $buktiPath = $buktiPembayaran->store('bukti', 'public');
            $detailPembelian->bukti_pembayaran = $buktiPath;
        }
        // dd($detailPembelian);
        $detailPembelian->save();

        $pemasukanAdmin = new PemasukanAdmin();
        $pemasukanAdmin->id_pembelian = $pembelian->id;
        $pemasukanAdmin->pemasukan = $request->input('total_biaya') * 0.1;
        // dd($pemasukanAdmin);
        $pemasukanAdmin->save();

        DB::commit();

        return redirect()->back()->with('success', 'Pembelian berhasil');
    } catch (\Exception $e) {
        DB::rollBack();
        Log::error('Error in handlePayment: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Terjadi kesalahan saat melakukan pembelian');
    }
}
    // app/Http/Controllers/CartController.php
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        $product = Product::find($productId);
        $detailproduct = DetailProduct::find($productId);
        $detailgambarproduct = DetailGambarProduct::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Buat atau update session keranjang
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
            ];
        }


        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    // public function shoppingcart()
    // {
    //     $cart = session()->get('cart', []);
    //     $totalPrice = 0;
    //     foreach ($cart as $item) {
    //         $totalPrice += $item['quantity'] * $item['price'];
    //     }

    //     return view('user.pembayaran-user', [
    //         'cart' => $cart,
    //         'totalPrice' => $totalPrice,
    //     ]);
    // }
    public function shoppingcart()
    {
        $cart = session()->get('cart', []);
        // dd($cart);

        // Assuming you have a User model with a relationship to LokasiUser
        $user = auth()->user(); // You can replace this with your own logic to get the user

        // Fetch the LokasiUser data if available
        $lokasiUser = $user->lokasiUser ?? null;

        // Perform error handling if the data is not available
        if (!$lokasiUser) {
            return view('user.pembayaran-user', [
                'cart' => $cart,
                'totalPrice' => 0,
                'lokasiUser' => null, // Pass null to indicate that data is not available
            ]);
        }

        // Calculate total price from the cart
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }

        return view('user.pembayaran-user', [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'lokasiUser' => $lokasiUser,
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
