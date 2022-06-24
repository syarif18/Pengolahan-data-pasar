<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;

class CalonSewaController extends Controller
{
    public function index()
    {
        $data = SewaUser::OrderBy('created_at', 'desc')->get();
        return view('admin.pages.calon_sewa.calon_sewa', [
            "title" => "Data Calon Penyewa"
        ])->with([
            "data" => $data]);
    }

    // public function edit($id)
    // {
    //     $data = SewaUser::findOrFail($id);
    //     return view('admin_pasar.pages.edit', [
    //         "title" => "Data Calon Penyewa"
    //     ])->with([
    //         "data" => $data
    //     ]);
    // }

    public function update(Request $request, $id)
    {
        // dd($request->status);
        $item = SewaUser::findOrFail($id);
        $item->update(['status' => $request->status]);

        return redirect('calon_sewa')->with('success', 'Konten Berhasil Diupdate!');
    }

    public function show($id)
    {
        $data = SewaUser::findOrFail($id);
        return view('admin.pages.calon_sewa.show', [
            "title" => "Lihat Details"
        ])->with([
            "data" => $data
        ]);
    }
}
