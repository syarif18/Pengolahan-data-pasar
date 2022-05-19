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
            'name' => 'Admin Dinas',
            'level' => 'admin',
            'email' => 'admindinas@admin.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'name' => 'Admin Pasar',
            'level' => 'pengelola',
            'email' => 'adminpasar@admin.com',
            'password' => bcrypt('23456'),
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'name' => 'Pedagang',
            'level' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('34567'),
            'remember_token' => Str::random(60)
        ]);
    }
}