<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                $user = auth()->user();
                if ($user->role === 'admin') {
                    return redirect('/dashboard-admin')->with('success', 'Selamat Datang Admin!');
                } else {
                    return redirect()->back()->with('error', 'Anda tidak memiliki akses sebagai admin.');
                }
            }

            throw new \Exception('Login gagal. Pastikan email dan password Anda benar.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function registerAdmin(Request $request)
    {
        try {
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
            $user->role = 'admin';
            $user->save();

            return redirect()->back()->with('success', 'Akun berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal membuat akun. ' . $e->getMessage());
        }
    }


    public function showFormRegister()
    {
        return view('admin.auth-admin.register-admin');
    }
    public function logout()
{
    Auth::logout();

    return redirect('/beranda');
}
}
