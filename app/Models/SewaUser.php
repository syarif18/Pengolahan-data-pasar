<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaUser extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $table = 'sewa_users';
    protected $fillable = [ 'user_id','nama_pasar', 'jenis_tempat', 'ukuran_tempat', 'nomor_tempat', 'status_lapak',
                            'nama', 'nik', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'jenis_jualan', 'nomor_hp',
                            'gambar_paspoto', 'gambar_ktp', 'gambar_kk', 'status', 'tahun_masuk',
                            'tahun_keluar', 'konfirmasi', 'bukti_pembayaran', 'status_pembayaran'];

}
