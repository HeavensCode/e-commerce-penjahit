<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'tokos';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['id_user', 'nama_toko', 'alamat_toko' . 'no_telp', 'email', 'kota', 'kecamatan', 'provinsi', 'kode_pos'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_toko');
    }
}
