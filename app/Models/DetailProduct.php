<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;
    protected $table = 'detail_pembelians';
    protected $fillable = ['id_pembelian', 'nama_product', 'jumlah_pembelian', 'total_biaya'];
}
