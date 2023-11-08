<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGambarProduct extends Model
{
    use HasFactory;
    protected $table = 'detail_gambar_products';
    protected $fillable = ['id_product', 'gambar'];
}
