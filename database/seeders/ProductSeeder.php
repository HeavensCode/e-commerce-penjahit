<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\DetailProduct;
use App\Models\DetailGambarProduct;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat produk pertama
        $product1 = Product::create([
            'nama_product' => 'Baju Gaun Elegan',
            'id_toko' => 3,
            'stock' => 20,
            'harga' => 500000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk pertama
        DetailProduct::create([
            'id_product' => $product1->id,
            'deskripsi' => 'Baju gaun elegan dengan motif bunga, cocok untuk acara formal.',
            'merk' => 'FashionElegance',
            'rating' => '4.5',
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
            'gambar' => 'detailimage (1).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk pertama
        DetailGambarProduct::create([
            'id_product' => $product1->id,
            'gambar' => 'detailimage (2).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk pertama
        DetailGambarProduct::create([
            'id_product' => $product1->id,
            'gambar' => 'detailimage (3).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk pertama
        DetailGambarProduct::create([
            'id_product' => $product1->id,
            'gambar' => 'detailimage (4).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Buat produk kedua
        $product2 = Product::create([
            'nama_product' => 'Kemeja Klasik Pria',
            'id_toko' => 1,
            'stock' => 15,
            'harga' => 250000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk kedua
        DetailProduct::create([
            'id_product' => $product2->id,
            'deskripsi' => 'Kemeja klasik pria dengan desain minimalis dan elegan.',
            'rating' => '4.7',
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
            'gambar' => 'detailimage (5).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'detailimage (6).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'detailimage (7).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'detailimage (8).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'detailimage (9).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'detailimage (10).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'detailimage (11).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kedua
        DetailGambarProduct::create([
            'id_product' => $product2->id,
            'gambar' => 'detailimage (12).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Buat produk ketiga
        $product3 = Product::create([
            'nama_product' => 'Jaket Kulit Stylish',
            'id_toko' => 2,
            'stock' => 8,
            'harga' => 350000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk ketiga
        DetailProduct::create([
            'id_product' => $product3->id,
            'deskripsi' => 'Jaket kulit stylish dengan tampilan yang trendi.',
            'rating' => '4.9',
            'merk' => 'FashionTrend',
            'motif' => 'Kulit Asli',
            'panjang_kain' => 0,
            'seller' => 'Toko TrendyStyle',
            'bahan' => 'Kulit Asli',
            'size' => 'M',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'detailimage (13).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'detailimage (14).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'detailimage (15).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'detailimage (16).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'detailimage (17).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Buat produk keempat
        $product4 = Product::create([
            'nama_product' => 'Dress Cantik Wanita',
            'id_toko' => 3,
            'stock' => 12,
            'harga' => 200000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk keempat
        DetailProduct::create([
            'id_product' => $product4->id,
            'deskripsi' => 'Dress cantik dengan desain yang feminin dan menawan.',
            'rating' => '4.6',
            'merk' => 'FashionFeminin',
            'motif' => 'Bunga',
            'panjang_kain' => 130,
            'seller' => 'Toko FashionGlam',
            'bahan' => 'Sifon',
            'size' => 'S',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Gambar produk untuk produk keempat
        DetailGambarProduct::create([
            'id_product' => $product4->id,
            'gambar' => 'detailimage (18).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Buat produk kelima
        $product5 = Product::create([
            'nama_product' => 'Sepatu Sneakers Kasual',
            'id_toko' => 3,
            'stock' => 20,
            'harga' => 150000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk kelima
        DetailProduct::create([
            'id_product' => $product5->id,
            'deskripsi' => 'Sepatu sneakers kasual untuk gaya santai sehari-hari.',
            'rating' => '4.7',
            'merk' => 'KasualSneakers',
            'motif' => 'Solid',
            'panjang_kain' => 0,
            'seller' => 'Toko FootwearStyle',
            'bahan' => 'Kanvas',
            'size' => '38-45',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'detailimage (19).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'detailimage (20).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'detailimage (21).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'detailimage (22).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'detailimage (23).jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}