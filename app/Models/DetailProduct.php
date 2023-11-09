<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;
    protected $table = 'detail_products';
    protected $primaryKey = 'id_product';
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_products', 'id');
    }
}
