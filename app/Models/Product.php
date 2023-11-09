<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable = [
        'nama_product',
        'id_toko',
        'stock',
        'harga',
    ];
    public function detailProduct()
    {
        return $this->hasOne(DetailProduct::class, 'id_product', 'id');
    }

    public function detailGambarProduct()
    {
        return $this->hasMany(detailGambarProduct::class, 'id_product' ,'id');
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'id_toko');
    }
}