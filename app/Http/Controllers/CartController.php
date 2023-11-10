<?php

namespace App\Http\Controllers;

use App\Models\DetailGambarProduct;
use App\Models\DetailProduct;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
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

    public function shoppingcart()
    {
        // Mengambil data dari session cart
        $cart = session()->get('cart', []);

        // Menghitung total harga keranjang
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }

        return view('user.pembayaran-user', [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
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