<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $table = 'tentang';
    protected $fillable = ['gambar', 'body', 'nomor_kantor', 'jam_kerja', 'email', 'lokasi', 'link'];
}
