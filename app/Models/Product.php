<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function detailProduct()
    {
        return $this->hasOne(DetailProduct::class, 'id_product');
    }

    public function detailGambarProduct()
    {
        return $this->hasMany(detailGambarProduct::class, 'id_product');
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'id_toko');
    }
}
