<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $user = auth()->user();
            if ($user->role === 'admin') {
                return redirect('/dashboard-admin');
            } else {
                return redirect()->back()->with('error', 'Anda tidak memiliki akses sebagai admin.');
            }
        }
        return redirect()->back()->with('error', 'Login gagal. Pastikan email dan password Anda benar.');
    }
}
