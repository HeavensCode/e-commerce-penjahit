<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/beranda');
        } else {
            return redirect()->back()->with('error', 'Login gagal. Pastikan email dan password Anda benar.');
        }
    }
    public function showFormLogin()
    {
        return view('auth.login');
    }
    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function userRegister(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'no_telp' => 'required',
            'gender' => 'required',
        ]);

        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->no_telp = $request->input('no_telp');
        $user->gender = $request->input('gender');
        $user->role = 'user';

        if ($user->save()) {
            return redirect()->back()->with('success', 'Akun berhasil dibuat!');
        } else {
            return redirect()->back()->with('error', 'Gagal disimpan.');
        }
    }
}
