<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Toko 1
        Toko::create([
            'nama_toko' => 'Toko A',
            'id_user' => '1',
            'alamat_toko' => 'Jl. Toko A No. 123',
            'no_telp' => '08123456789',
            'email' => 'tokoA@example.com',
            'kota' => 'Jakarta',
            'kecamatan' => 'Menteng',
            'provinsi' => 'DKI Jakarta',
            'kode_pos' => 12345,
        ]);

        // Toko 2
        Toko::create([
            'nama_toko' => 'Toko B',
            'id_user' => '2',
            'alamat_toko' => 'Jl. Toko B No. 456',
            'no_telp' => '08234567890',
            'email' => 'tokoB@example.com',
            'kota' => 'Surabaya',
            'kecamatan' => 'Genteng',
            'provinsi' => 'Jawa Timur',
            'kode_pos' => 67890,
        ]);

        // Toko 3
        Toko::create([
            'nama_toko' => 'Toko C',
            'id_user' => '3',
            'alamat_toko' => 'Jl. Toko C No. 789',
            'no_telp' => '08345678901',
            'email' => 'tokoC@example.com',
            'kota' => 'Bandung',
            'kecamatan' => 'Cimahi',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => 45678,
        ]);
    }
}