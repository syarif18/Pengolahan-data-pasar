<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorTempat extends Model
{
    use HasFactory;

    protected $table = 'nomor_tempat';
    protected $fillable = [
        'lapak_id', 'nomor_tempat'
    ];

}
