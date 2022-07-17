<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class DashboardAdminPasarController extends Controller
{
    public $pedagang;
    public $wanita;
    public $pria;

    public function index()
    {
        $user = Auth::user()->name;
        $pedagang = DB::table('sewa_users')->where('nama_pasar', $user)->where('konfirmasi', '1')->count();
        $wanita = DB::table('sewa_users')->where('nama_pasar', $user)->where('jenis_kelamin', 'perempuan')->where('konfirmasi', '1')->count();
        $pria = DB::table('sewa_users')->where('nama_pasar', $user)->where('jenis_kelamin', 'laki-laki')->where('konfirmasi', '1')->count();


        return view('admin_pasar.adashboard_pasar', [
            "title" => "Dashboard Admin Pasar",
            "pedagang" => $pedagang,
            "wanita" => $wanita,
            "pria" => $pria,
            "user" => $user
        ]);
    }
}
