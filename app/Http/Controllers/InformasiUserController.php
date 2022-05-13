<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;

class InformasiUserController extends Controller
{
    public function index()
    {
        $data = SewaUser::all();
        return view('user.pages.informasi', [
            "title" => "Informasi"
        ])->with([
            "data" => $data
        ]);
    }

    public function show($id)
    {
        $data = SewaUser::findOrFail($id);
        return view('user.pages.show', [
            "title" => "Lihat Informasi"
        ])->with([
            "data" => $data
        ]);
    }
}
