<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Models\NomorTempat;
use App\Models\Lapak;
use Illuminate\Support\Facades\File;
use Auth;

class CalonSewaController extends Controller
{
    public function index(Request $request)
    {
        $data = SewaUser::OrderBy('created_at', 'desc')->where('status', '1');

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

    public function destroy($id)
    {
        $data = SewaUser::findOrFail($id);
        $imgpoto = public_path("img/gambarpoto/{$data->gambar_paspoto}");
        File::delete($imgpoto);
        $imgktp = public_path("img/gambarktp/{$data->gambar_ktp}");
        File::delete($imgktp);
        $imgkk = public_path("img/gambarkk/{$data->gambar_kk}");
        File::delete($imgkk);

        $data->delete();
        return redirect('calon_sewa')->with('delete', 'Data Berhasil DIhapus!');
    }

    // afdsdgfhjkjl;l';
    public function indexpengelola(Request $request)
    {
        $user = Auth::user()->nama_pasar;
        $data = SewaUser::where('status', '2')->where('nama_pasar', $user);

        if($request->has('search')){
            $data->where('nama', 'like', '%' . $request->search . '%');
        }

        $data = $data->latest()->paginate(5);

        return view('admin_pasar.pages.calon_pedagang.calon_pedagang', [
            "title" => "Data Calon pedagang"
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


    public function showpengelola($id)
    {
        $data = SewaUser::findOrFail($id);
        return view('admin_pasar.pages.calon_pedagang.show', [
            "title" => "Lihat informasi data"
        ])->with([
            "data" => $data
        ]);
    }

    public function destroypengelola($id)
    {
        $data = SewaUser::findOrFail($id);
        $imgpoto = public_path("img/gambarpoto/{$data->gambar_paspoto}");
        File::delete($imgpoto);
        $imgktp = public_path("img/gambarktp/{$data->gambar_ktp}");
        File::delete($imgktp);
        $imgkk = public_path("img/gambarkk/{$data->gambar_kk}");
        File::delete($imgkk);

        $data->delete();
        return redirect('calon_penyewa')->with('delete', 'Data Berhasil DIhapus!');
    }
}
