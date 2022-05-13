<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminPasarController extends Controller
{
    public function index()
    {
        return view('admin_pasar.adashboard_pasar', [
            "title" => "Dashboard Admin Pasar"
        ]);
    }
}
