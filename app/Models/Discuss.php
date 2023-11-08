<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{
    use HasFactory;
    protected $table = 'discusses';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['pesan'];
}
