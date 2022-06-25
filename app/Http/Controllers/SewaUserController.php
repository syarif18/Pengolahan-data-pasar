<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Models\Lapak;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class SewaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user()->name;
        $data = SewaUser::where('nama_pasar', $user)->paginate(10);

        if($request->has('search')){
            $data->where('nama', 'like', '%' . $request->search . '%');
        }

        $data = $data->latest()->paginate(10);

        // dd($request->search);

        return view('admin_pasar.pages.sewa.sewa', [
            "title" => "Sewa Lapak"
        ])->with([
            "data" => $data,
            "search" => $request->search?$request->search:''
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lapak = Lapak::where('user_id', '=', Auth::user()->id)->get();
        return view('admin_pasar.pages.sewa.create', [
            "title" => "Sewa Lapak",
            "lapak" => $lapak
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload = $request->gambar_paspoto;
        $namaPoto = time().rand(100,999).".".$upload->getClientOriginalExtension();

        $uploadktp = $request->gambar_ktp;
        $namaKtp = time().rand(100,999).".".$uploadktp->getClientOriginalExtension();

        $uploadkk = $request->gambar_kk;
        $namaKk = time().rand(100,999).".".$uploadkk->getClientOriginalExtension();

        $datasewa = new SewaUser;
        $datasewa->nama_pasar = $request->nama_pasar;
        $datasewa->jenis_tempat = $request->jenis_tempat;
        $datasewa->nama = $request->nama;
        $datasewa->nik = $request->nik;
        $datasewa->tanggal_lahir = $request->tanggal_lahir;
        $datasewa->jenis_kelamin = $request->jenis_kelamin;
        $datasewa->alamat = $request->alamat;
        $datasewa->jenis_jualan = $request->jenis_jualan;
        $datasewa->nomor_hp = $request->nomor_hp;
        $datasewa->gambar_paspoto = $namaPoto;
        $datasewa->gambar_ktp = $namaKtp;
        $datasewa->gambar_kk = $namaKk;

        $upload->move(public_path().'/img/gambarpoto', $namaPoto);
        $uploadktp->move(public_path().'/img/gambarktp', $namaKtp);
        $uploadkk->move(public_path().'/img/gambarkk', $namaKk);
        $datasewa->save();
        return redirect('sewa')->with('success', 'Data Calon Penyewa Berhasil Ditambahkan!');

        // $datasewa = $request->validate([
        //     'nama_pasar' => 'required|max:255',
        //     'jenis_tempat' => 'required|max:255',
        //     'nama' => 'required|max:255',
        //     'nik' => 'requred|max:255',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required|max:255',
        //     'alamat' => 'required',
        //     'jenis_jualan' => 'required|max:255',
        //     'nomor_hp' => 'required|max:255',
        //     'gambar_paspoto' => 'image|file|max:2048',
        //     'gambar_ktp' => 'image|file|max:2048',
        //     'gambar_kk' => 'image|file|max:2048'
        // ]);

        // SewaUser::cretae($datasewa);
        // return redirect('sewa')->with('success', 'Konten Baru Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SewaUser::findOrFail($id);
        return view('admin_pasar.pages.sewa.show', [
            "title" => "Lihat Detail Data"
        ])->with([
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = SewaUser::findOrFail($id);
        $item->update(['tahun_masuk' => $request->tahun_masuk]);

        $item = SewaUser::findOrFail($id);
        $item->update(['konfirmasi' => $request->konfirmasi]);

        return redirect('sewa')->with('success', 'Data Calon Penyewa Berhasil Diupdate!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return redirect('sewa')->with('delete', 'Data Berhasil DIhapus!');
    }
}
