<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'deskripsi',
        'rating',
        'merk',
        'motif',
        'panjang_kain',
        'seller',
        'bahan',
        'size',
    ];
}