<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public $palimanan;
    public $jamblang;
    public $sumber;
    public $kue;
    public $batik;
    public $pasalaran;
    public $babakan;
    public $cipeujeuh;
    public $ciledug;

    public function index()
    {
        $palimanan = DB::table('sewa_users')->where('nama_pasar', 'pasar palimanan')->where('konfirmasi', '1')->count();
        $jamblang = DB::table('sewa_users')->where('nama_pasar', 'pasar jamblang')->where('konfirmasi', '1')->count();
        $sumber = DB::table('sewa_users')->where('nama_pasar', 'pasar sumber')->where('konfirmasi', '1')->count();
        $kue = DB::table('sewa_users')->where('nama_pasar', 'pasar kue')->where('konfirmasi', '1')->count();
        $batik = DB::table('sewa_users')->where('nama_pasar', 'pasar batik')->where('konfirmasi', '1')->count();
        $pasalaran = DB::table('sewa_users')->where('nama_pasar', 'pasar pasalaran')->where('konfirmasi', '1')->count();
        $babakan = DB::table('sewa_users')->where('nama_pasar', 'pasar babakan')->where('konfirmasi', '1')->count();
        $cipeujeuh = DB::table('sewa_users')->where('nama_pasar', 'pasar cipeujeuh')->where('konfirmasi', '1')->count();
        $ciledug = DB::table('sewa_users')->where('nama_pasar', 'pasar ciledug')->where('konfirmasi', '1')->count();

        return view('admin.dashboard-admin', [
            'palimanan' => $palimanan,
            'jamblang' => $jamblang,
            'sumber' => $sumber,
            'batik' => $batik,
            'kue' => $kue,
            'pasalaran' => $pasalaran,
            'cipeujeuh' => $cipeujeuh,
            'babakan' => $babakan,
            'ciledug' => $ciledug,
            "title" => "Dashboard Admin"
        ]);

    }
}
