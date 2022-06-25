<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;

class CalonSewaController extends Controller
{
    public function index(Request $request)
    {
        $data = SewaUser::OrderBy('created_at', 'desc');

        if($request->has('search')){
            $data->where('nama', 'like', '%' . $request->search . '%');
        }

        $data = $data->latest()->paginate(10);
        // $data = SewaUser::OrderBy('created_at', 'desc')->get();


        // dd($request->search);

        return view('admin.pages.calon_sewa.calon_sewa', [
            "title" => "Data Calon Penyewa"
        ])->with([
            "data" => $data,
            "search" => $request->search?$request->search:''
        ]);
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
