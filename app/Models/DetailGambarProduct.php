<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGambarProduct extends Model
{
    use HasFactory;
    protected $table = 'detail_gambar_products';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'id_product',
        'gambar',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
