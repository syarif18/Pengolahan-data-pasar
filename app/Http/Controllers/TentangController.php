<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use Illuminate\Support\Facades\File;


class TentangController extends Controller
{
    public function index()
    {
        $about = Tentang::first();
        return view('landing.pages.about', [
            "title" => "Tentang Kami",
            "about" => $about
        ]);
    }

    public function adminindex()
    {
        $data = Tentang::first();
        return view('admin.pages.about.tentang', [
            "title" => "Tentang Kami",
            "data" => $data
        ]);
    }

    public function create()
    {
        return view('admin.pages.about.create', [
            "title" => "Tambah Tentang Kami"
        ]);
    }

    // public function store(Request $request)
    // {
    //     $upload = $request->gambar;
    //     $logo = time().rand(100,999).".".$upload->getClientOriginalExtension();

    //     $dataTentang = new Tentang;
    //     $dataTentang->body = $request->body;
    //     $dataTentang->nomor_kantor = $request->nomor_kantor;
    //     $dataTentang->jam_kerja = $request->jam_kerja;
    //     $dataTentang->email = $request->email;
    //     $dataTentang->lokasi = $request->lokasi;
    //     $dataTentang->link = $request->link;
    //     $dataTentang->gambar = $logo;

    //     $upload->move(public_path().'/img/logo', $logo);
    //     $dataTentang->save();

    //     return redirect('tentang')->with('success', 'Data Tentang Kami Berhasil Ditambahkan!');


    // }

    public function update(Request $request)
    {
        $image_lama = $request->old_image;
        $image_baru = $request->file('gambar');

        if($image_baru == ''){
            $gambar = $image_lama;
        }else{

            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path().'/img/logo', $new_image);
        }


        $data = Tentang::first();

        $data->update(array(
            'gambar' => $gambar,
            'body' => $request->body,
            'email' => $request->email,
            'nomor_kantor' => $request->nomor_kantor,
            'jam_kerja' => $request->jam_kerja,
            'lokasi' => $request->lokasi,
            'lonk' => $request->lonk,
        ));

        $data->save();

        return redirect('tentang')->with('success', 'Data Berhasil Diubah');
    }
}
