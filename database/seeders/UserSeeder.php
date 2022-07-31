<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'nama' => 'Admin Dinas',
            'level' => 'admin',
            'username' => 'admindinas',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Kepala Bidang',
            'level' => 'kabid',
            'username' => 'kepalabidang',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Ahmad',
            'level' => 'user',
            'username' => 'ahmad',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Sumber',
            'level' => 'pengelola',
            'username' => 'pasarsumber',
            'nm_pasar' => 'Pasar Sumber',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Jamblang',
            'level' => 'pengelola',
            'username' => 'pasarjamblang',
            'nm_pasar' => 'Pasar Jamblang',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Palimanan',
            'level' => 'pengelola',
            'username' => 'pasarpalimanan',
            'nm_pasar' => 'Pasar Palimanan',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Batik',
            'level' => 'pengelola',
            'username' => 'pasarbatik',
            'nm_pasar' => 'Pasar Batik',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Kue',
            'level' => 'pengelola',
            'username' => 'pasarkue',
            'nm_pasar' => 'Pasar Kue',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Pasalaran',
            'level' => 'pengelola',
            'username' => 'pasarpasalaran',
            'nm_pasar' => 'Pasar Pasalaran',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Cipeujeuh',
            'level' => 'pengelola',
            'username' => 'pasarcipeujeuh',
            'nm_pasar' => 'Pasar Cipeujueh',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Babakan',
            'level' => 'pengelola',
            'username' => 'pasarbabakan',
            'nm_pasar' => 'Pasar Babakan',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'nama' => 'Pasar Ciledug',
            'level' => 'pengelola',
            'username' => 'pasarcileguh',
            'nm_pasar' => 'Pasar Ciledug',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);

    }
}
