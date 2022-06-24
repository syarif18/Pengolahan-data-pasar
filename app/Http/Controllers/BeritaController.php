<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        // $konten = Konten::take(3)->get()->sortbyDesc('created_at');
        $konten = Konten::latest()->paginate(3);
        $minikonten = Konten::orderBy('created_at', 'desc')->take(3)->get();

        return view('landing.pages.berita.berita', [
            'konten' => $konten,
            'minikonten' => $minikonten,
            "title" => "Berita"
        ]);
    }

    public function detailberita($id)
    {
        $konten = Konten::findOrFail($id);
        $minikonten = Konten::orderBy('created_at', 'desc')->take(3)->get();


        return view('landing.pages.berita.detail', [
            "title" => "Lihat Konten"
        ])->with([
            "konten" => $konten,
            'minikonten' => $minikonten
        ]);
    }
}
