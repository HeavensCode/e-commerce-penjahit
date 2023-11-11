<?php

namespace App\Http\Controllers;

use App\Models\lokasiuser;
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
            $user = auth()->user();
            if ($user->role === 'admin') {
                return redirect()->route('dashboard.admin')->with('success', 'Welcome Admin!');
            } elseif ($user->role === 'user') {
                return redirect('/beranda')->with('success', 'Welcome User!');
            }
        }

        return redirect()->back()->with('error', 'Login failed. Make sure your email and password are correct.');
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

        // Menyimpan user baru
        if ($user->save()) {
            $toko = new Toko();
            $toko->id_user = $user->id;
            $toko->no_telp = $request->input('no_telp');
            $toko->email = $request->input('email');
            $toko->nama_toko = $request->input('nama');
            $toko->alamat_toko = 'Belum di set';
            $toko->kota = 'Belum di set';
            $toko->kecamatan = 'Belum di set';
            $toko->provinsi = 'Belum di set';
            $toko->kode_pos = '00000';

            // Menyimpan toko baru
            if ($toko->save()) {
                // Membuat lokasiuser baru
                $lokasiuser = new lokasiuser();
                $lokasiuser->id_user = $user->id;
                $lokasiuser->kota = 'Belum di set';
                $lokasiuser->kecamatan = 'Belum di set';
                $lokasiuser->provinsi = 'Belum di set';
                $lokasiuser->kode_pos = '00000';
                if ($lokasiuser->save()) {
                    return redirect()->route('form-login-user')->with('success', 'Akun, toko, dan lokasi berhasil dibuat!');
                } else {
                    $user->delete();
                    $toko->delete();
                    return redirect()->back()->with('error', 'Gagal menyimpan lokasiuser.');
                }
            } else {
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
