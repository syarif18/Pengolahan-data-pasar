<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use Illuminate\Support\Facades\File;

class InformasiUserController extends Controller
{
    public function index()
    {
        $data = SewaUser::all();
        return view('user.pages.informasi.informasi', [
            "title" => "Informasi"
        ])->with([
            "data" => $data
        ]);
    }

    public function show($id)
    {
        $data = SewaUser::findOrFail($id);
        return view('user.pages.informasi.show', [
            "title" => "Lihat Informasi"
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
        return redirect('informasi')->with('delete', 'Data Berhasil DIhapus!');
    }
}
