<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\Tentang;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $konten = Konten::orderBy('created_at', 'desc')->take(3)->get();
        $about = Tentang::first();

        return view('landing.landing_page', [
            'konten' => $konten,
            'about' => $about,
            "title" => "Beranda"
        ]);
    }
}
