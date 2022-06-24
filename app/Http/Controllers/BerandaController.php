<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
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

        return view('landing.landing_page', [
            'konten' => $konten,
            "title" => "Beranda"
        ]);
    }
}
