<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::truncate();
        Tentang::create([
            'nomor_kantor' => '0231-321073-321495',
            'jam_kerja' => '09.00 AM - 04.00 PM',
            'email' => 'disperdagin@cirebonkab.go.id',
            'lokasi' => 'Jl. Sunan kalijaga No. 10 Sumber, Kabupaten Cirebon',
            'link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0614483499376!2d108.47431261414309!3d-6.762362268005592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1e52ed0f81cd%3A0xca2a5ac5bdbd16fd!2sDinas%20Perdagangan%20Dan%20Perindustrian%20Kabupaten%20Cirebon!5e0!3m2!1sid!2sid!4v1647499779824!5m2!1sid!2sid
            '
        ]);
    }
}
