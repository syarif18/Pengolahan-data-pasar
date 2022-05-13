<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasar extends Model
{
    use HasFactory;

    protected $table = 'data_pasars';
    protected $fillable = [
        'nama_pasar',
        'jumlah_tempat',
        'buka',
        'tutup'
    ];

    protected $hidden;
}
