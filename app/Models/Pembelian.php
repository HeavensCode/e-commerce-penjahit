l<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Pembelian extends Model
    {
        use HasFactory;
        protected $table = 'discusses';
        protected $primaryKey = 'id';
        protected $guarded = ['id'];
        protected $fillable = ['id_user', 'id_pembayaran', 'jumlah_pembelian' . 'total_pembayaran', 'subtotal', 'id_pembelian', 'jenis_pembayaran'];
    }
