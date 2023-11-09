<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Menggunakan view composer untuk semua views
        View::composer('*', function ($view) {
            $cart = session()->get('cart', []);
            $view->with('cart', $cart);
        });
    }
}
