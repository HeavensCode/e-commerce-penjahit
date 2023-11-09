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
            'id_toko' => 1,
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

        // Buat produk ketiga
        $product3 = Product::create([
            'nama_product' => 'Jaket Kulit Stylish',
            'id_toko' => 2,
            'stock' => 8,
            'rating' => '4.9',
            'harga' => 350000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk ketiga
        DetailProduct::create([
            'id_product' => $product3->id,
            'deskripsi' => 'Jaket kulit stylish dengan tampilan yang trendi.',
            'rating' => 4,
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
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,leather,jacket',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,leather,jacket',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,leather,jacket',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,leather,jacket',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk ketiga
        DetailGambarProduct::create([
            'id_product' => $product3->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,leather,jacket',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Buat produk keempat
        $product4 = Product::create([
            'nama_product' => 'Dress Cantik Wanita',
            'id_toko' => 3,
            'stock' => 12,
            'rating' => '4.6',
            'harga' => 200000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk keempat
        DetailProduct::create([
            'id_product' => $product4->id,
            'deskripsi' => 'Dress cantik dengan desain yang feminin dan menawan.',
            'rating' => 4,
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
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,woman,dress',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Buat produk kelima
        $product5 = Product::create([
            'nama_product' => 'Sepatu Sneakers Kasual',
            'id_toko' => 3,
            'stock' => 20,
            'rating' => '4.7',
            'harga' => 150000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Detail produk untuk produk kelima
        DetailProduct::create([
            'id_product' => $product5->id,
            'deskripsi' => 'Sepatu sneakers kasual untuk gaya santai sehari-hari.',
            'rating' => 4,
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
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,shoes,sneakers',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,shoes,sneakers',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,shoes,sneakers',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,shoes,sneakers',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Gambar produk untuk produk kelima
        DetailGambarProduct::create([
            'id_product' => $product5->id,
            'gambar' => 'https://source.unsplash.com/800x800/?fashion,shoes,sneakers',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
