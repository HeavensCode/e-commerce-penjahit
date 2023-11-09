<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    public function logout()
    {
        Auth::logout(); // Melakukan logout pengguna
        return redirect('/'); // Redirect pengguna ke halaman utama atau halaman lain sesuai kebutuhan
    }

    public function updateProfile(Request $request, $id)
    {
        try {
            $user = User::find($id);
            dd($user);

            if (!$user) {
                return redirect()->route('profile')->with('error', 'Profil tidak ditemukan.');
            }

            $user->nama = $request->input('edit_username');
            $user->email = $request->input('edit_email');
            $user->no_telp = $request->input('edit_nomor_telepon');
            $user->gender = $request->input('edit_gender');

            if ($user->save()) {
                return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
            } else {
                return redirect()->route('profile')->with('error', 'Gagal memperbarui profil.');
            }
        } catch (\Exception $e) {
            return redirect()->route('profile')->with('error', 'Terjadi kesalahan saat memperbarui profil: ' . $e->getMessage());
        }
    }
}