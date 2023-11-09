<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;

class CartController extends Controller
{
    // app/Http/Controllers/CartController.php
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        $product = Product::find($productId);

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
                'quantity' => $quantity,
                'price' => $product->harga,
            ];
        }

        // dd($cart);

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart.');
    }
    public function __construct()
    {
        $this->middleware('checkUserLogin')->only('addToCart');
    }

}
