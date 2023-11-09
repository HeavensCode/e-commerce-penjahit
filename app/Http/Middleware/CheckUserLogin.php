<?php
// app/Http/Middleware/CheckUserLogin.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }
        return redirect()->route('form-login-user')->with('error', 'Sebelum melakukan Checkout, Harap Login Terlebih Dahulu !.');
    }
}
