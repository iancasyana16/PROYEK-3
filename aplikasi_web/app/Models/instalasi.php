<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instalasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaKlien',
        'nomorHp',
        'alamat',
        'paket',
        // 'tgl_instalasi'
    ];
}
