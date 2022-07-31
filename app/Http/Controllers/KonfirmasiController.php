<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Models\Lapak;
use App\Models\NomorTempat;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = Auth::user()->name;
        $data = SewaUser::where('status', '2');

        if($request->has('search')){
            $data->where('nama', 'like', '%' . $request->search . '%');
        }

        $data = $data->latest()->paginate(5);

        return view('admin.pages.calon_pedagang.calon_pedagang', [
            "title" => "Data Calon pedagang"
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.pages.calon_pedagang.show', [
            "title" => "Lihat informasi data"
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
        $data = SewaUser::findOrFail($id);
        // $lapaks = Lapak::where('user_id', '=', Auth::user()->id)->where('jenis_tempat', '=', $data->jenis_tempat)->first();
        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->get();

        // dd($lapak);
        return view('admin.pages.calon_pedagang.edit', [
            "title" => "Lihat informasi data"
        ])->with([
            "data" => $data
        ]);
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
        $item = SewaUser::findOrFail($id);
        $item->update(['tahun_masuk' => $request->tahun_masuk]);

        $item = SewaUser::findOrFail($id);
        $item->update(['konfirmasi' => $request->konfirmasi]);

        $item = SewaUser::findOrFail($id);
        $item->update(['status_pembayaran' => $request->status_pembayaran]);


        return redirect('konfirmasi')->with('success', 'Konten Berhasil Diupdate!');
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
        return redirect('konfirmasi')->with('delete', 'Data Berhasil DIhapus!');
    }
}
