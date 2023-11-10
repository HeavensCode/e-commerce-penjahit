<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Toko;

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/beranda')->with('succes', 'Selamat Datang !.');
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

        // Membuat user baru
        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->no_telp = $request->input('no_telp');
        $user->gender = $request->input('gender');
        $user->role = 'user';

        // Menyimpan user baru
        if ($user->save()) {
            // Membuat toko baru
            $toko = new Toko();
            $toko->id_user = $user->id; // Menggunakan id dari user yang baru dibuat
            $toko->no_telp = $request->input('no_telp');
            $toko->email = $request->input('email');
            $toko->nama_toko = $request->input('nama');
            $toko->alamat_toko = 'Belum di set';
            $toko->kota ='Belum di set';
            $toko->kecamatan ='Belum di set';
            $toko->provinsi ='Belum di set';
            $toko->kode_pos ='00000';
            // Menyimpan toko baru
            if ($toko->save()) {
                return redirect()->back()->with('success', 'Akun dan toko berhasil dibuat!');
            } else {
                // Rollback jika penyimpanan toko gagal
                $user->delete();
                return redirect()->back()->with('error', 'Gagal menyimpan toko.');
            }
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan akun.');
        }
    }

    public function logout()
    {
        Session::forget('cart');

        Auth::logout();
        return redirect('/');
    }

    public function updateProfile(Request $request, $id)
    {
           // Validasi form jika diperlukan
    $request->validate([
        'nama' => 'required|string',
        'email' => 'required|email',
        'no_telp' => 'required|numeric',
        'gender' => 'required|in:laki-laki,Perempuan,Tidak Memilih',
    ]);

    // Lakukan update data
    $user = User::find($id);
    $user->nama = $request->input('nama');
    $user->email = $request->input('email');
    $user->no_telp = $request->input('no_telp');
    $user->gender = $request->input('gender');
    $user->save();
        return redirect()->back()->with('success', 'User updated successfully');
    }
}
