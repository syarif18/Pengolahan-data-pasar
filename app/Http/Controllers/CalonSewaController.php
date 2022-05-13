<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalonSewaController extends Controller
{
    public function index()
    {
        return view('admin.pages.calon_sewa', [
            "title" => "Data Calon Penyewa"
        ]);
    }
}
