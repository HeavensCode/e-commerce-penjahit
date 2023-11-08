<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\DetailProduct;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DetailGambarProduct;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


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


        // Buat produk pertama
        $product1 = Product::create([
            'nama_product' => 'Baju Gaun Elegan',
            'stock' => 20,
            'rating' => '4.5',
            'harga' => 500000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk pertama
        DetailProduct::create([
            'id_product' => $product1->id,
            'deskripsi' => 'Baju gaun elegan dengan motif bunga, cocok untuk acara formal.',
            'rating' => 4,
            'merk' => 'FashionElegance',
            'motif' => 'Bunga',
            'panjang_kain' => 150,
            'seller' => 'Toko Fashion Elegance',
            'bahan' => 'Satin',
            'size' => 'M',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Gambar produk untuk produk pertama
        DetailGambarProduct::create([
            'id_product' => $product1->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,woman,dress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk pertama
        DetailGambarProduct::create([
            'id_product' => $product1->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,woman,dress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk pertama
        DetailGambarProduct::create([
            'id_product' => $product1->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,woman,dress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk pertama
        DetailGambarProduct::create([
            'id_product' => $product1->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,woman,dress',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Buat produk kedua
        $product2 = Product::create([
            'nama_product' => 'Kemeja Klasik Pria',
            'stock' => 15,
            'rating' => '4.7',
            'harga' => 250000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk kedua
        DetailProduct::create([
            'id_product' => $product2->id,
            'deskripsi' => 'Kemeja klasik pria dengan desain minimalis dan elegan.',
            'rating' => 4,
            'merk' => 'MenStyle',
            'motif' => 'Solid',
            'panjang_kain' => 160,
            'seller' => 'Toko MenStyle',
            'bahan' => 'Katun',
            'size' => 'L',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,man,shirt',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,man,shirt',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,man,shirt',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,man,shirt',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,man,shirt',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
