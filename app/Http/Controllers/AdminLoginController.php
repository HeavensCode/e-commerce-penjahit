<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\User;

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
                return redirect('/dashboard-admin')->with('succes', 'Selemat Datang Admin!');
            } else {
                return redirect()->back()->with('error', 'Anda tidak memiliki akses sebagai admin.');
            }
        }
        return redirect()->back()->with('error', 'Login gagal. Pastikan email dan password Anda benar.');
    }

    public function registerAdmin(Request $request)
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
        $user->save();

        return redirect()->back()->with('Succes', 'Akun Berhasil Dibuat !.');
    }
    public function showFormRegister()
    {
        return view('admin.auth-admin.register-admin');
    }
}
