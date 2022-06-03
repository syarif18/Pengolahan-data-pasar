<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $konten = Konten::get()->sortByDesc('created_at');
        $minikonten = Konten::take(4)->get()->sortbyDesc('created_at');
        $kontens = Konten::take(1)->get()->sortbyDesc('created_at');

        return view('landing.pages.berita', [
            'konten' => $konten,
            'minikonten' => $minikonten,
            'kontens' => $kontens,
            "title" => "Berita"
        ]);
    }
}
