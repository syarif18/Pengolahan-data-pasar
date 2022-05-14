<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaUser extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['nama_pasar', 'jenis_tempat', 'nama', 'nik', 'tanggal_lahir', 'jenis_kelamin',
     'alamat', 'jenis_jualan', 'nomor_hp', 'gambar_paspoto', 'gambar_ktp', 'gambar_kk', 'status'];

}
