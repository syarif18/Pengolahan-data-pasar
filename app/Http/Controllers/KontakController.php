<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('landing.pages.kontak', [
            "title" => "Kontak Kami"
        ]);
    }
}
