<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Models\Lapak;
use App\Models\NomorTempat;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class CalonPedagangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user()->nama_pasar;
        $data = SewaUser::OrderBy('created_at', 'desc')->where('nama_pasar', $user);

        if($request->has('search')){
            $data->where('nama', 'like', '%' . $request->search . '%');
        }

        $data = $data->latest()->paginate(10);
        // $data = SewaUser::OrderBy('created_at', 'desc')->get();


        // dd($request->search);

        return view('admin_pasar.pages.calon_sewa.calon_sewa', [
            "title" => "Data Calon Penyewa"
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
        return view('admin_pasar.pages.calon_sewa.show', [
            "title" => "Lihat Details"
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
        $lapaks = Lapak::where('user_id', '=', Auth::user()->id)->where('jenis_tempat', '=', $data->jenis_tempat)->first();
        $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        $nomor = [];
        foreach ($penyewa as $key => $value) {
            $nomor[] = $value->nomor_tempat;
        }

        $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        // dd($lapak);
        return view('admin_pasar.pages.calon_sewa.edit', [
            "title" => "Konfirmasi Data"
        ])->with([
            "data" => $data,
            "lapak" => $lapak,
            "lapaks" => $lapaks
            // "search" => $request->search?$request->search:''

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
        try {
            $item = Lapak::where('jenis_tempat', $request->jenis_tempat)->first();
            // return dd($request->jenis_tempat);
            $tempat_kosong = $item->tempat_kosong-1;
            $item->update(['tempat_kosong' => $tempat_kosong]);
        } catch (\Throwable $th) {
            return dd($th);
        }

        // $item = SewaUser::findOrFail($id);
        // $item->update(['tahun_masuk' => $request->tahun_masuk]);

        // $item = SewaUser::findOrFail($id);
        // $item->update(['konfirmasi' => $request->konfirmasi]);

        $item = SewaUser::findOrFail($id);
        $item->update(['status' => $request->status]);

        $item = SewaUser::findOrFail($id);
        $item->update(['nomor_tempat' => $request->nomor_tempat]);

        // $item = SewaUser::findOrFail($id);
        // $item->update(['status_pembayaran' => $request->status_pembayaran]);


        return redirect('calon_penyewa')->with('success', 'Konten Berhasil Diupdate!');
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
        return redirect('calon_penyewa')->with('delete', 'Data Berhasil DIhapus!');
    }


}
