<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_layanan', 'harga_layanan', 'deskripsi_layanan'
    ];

}
