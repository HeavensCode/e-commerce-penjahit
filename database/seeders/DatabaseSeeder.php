<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TokoSeeder::class);
        $this->call(ProductSeeder::class);

        DB::table('users')->insert([
            'nama' => 'ekikkristiawan',
            'email' => 'ekikkristiawan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'no_telp' => '1234567890',
            'gender' => 'Laki-Laki',
            'role' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'nama' => 'udin',
            'email' => 'udin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'no_telp' => '2345678901',
            'gender' => 'Lakik',
            'role' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'nama' => 'ari',
            'email' => 'ari@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'no_telp' => '3456789012',
            'gender' => 'Lainnya',
            'role' => 'user',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
