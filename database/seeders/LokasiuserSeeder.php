<?php

namespace Database\Seeders;

use App\Models\lokasiuser;
use Illuminate\Database\Seeder;

class LokasiuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lokasiuser::create([
            'id_user' => '3',
            'kota' => 'Bandung',
            'kecamatan' => 'Cimahi',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => 45678,
        ]);
    }
}