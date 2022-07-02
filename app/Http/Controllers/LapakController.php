<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapak;
use Illuminate\Support\Facades\File;
use Auth;

class LapakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalapak = Lapak::join('users', 'lapaks.user_id', '=', 'users.id' )->where('user_id', '=', Auth::user()->id)->get();
        // dd($datalapak);
        return view('admin_pasar.pages.lapak.lapak', [
            "title" => "Data Lapak"
        ])->with([
            "datalapak" => $datalapak
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_pasar.pages.lapak.create', [
            "title" => "Tambah Lapak"
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
        $upload = $request->gambar1;
        $gambarlapak1 = time().rand(100,999).".".$upload->getClientOriginalExtension();

        $upload2 = $request->gambar2;
        $gambarlapak2 = time().rand(100,999).".".$upload2->getClientOriginalExtension();

        $upload3 = $request->gambar3;
        $gambarlapak3 = time().rand(100,999).".".$upload3->getClientOriginalExtension();

        $datalapak = new Lapak;
        $datalapak->jenis_tempat = $request->jenis_tempat;
        $datalapak->jumlah_tempat = $request->jumlah_tempat;
        $datalapak->ukuran_tempat = $request->ukuran_tempat;
        $datalapak->gambar1 = $gambarlapak1;
        $datalapak->gambar2 = $gambarlapak2;
        $datalapak->gambar3 = $gambarlapak3;
        $datalapak->user_id = Auth::user()->id;

        $upload->move(public_path().'/img/gambarlapak', $gambarlapak1);
        $upload2->move(public_path().'/img/gambarlapak', $gambarlapak2);
        $upload3->move(public_path().'/img/gambarlapak', $gambarlapak3);
        $datalapak->save();
        return redirect('lapak')->with('success', 'Data Lapak Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $datalapak = Lapak::findOrFail($id);
        $upload = public_path("img/gambarlapak/{$datalapak->gambar1}");
        File::delete($upload);
        $upload2 = public_path("img/gambarlapak/{$datalapak->gambar1}");
        File::delete($upload2);
        $upload3 = public_path("img/gambarlapak/{$datalapak->gambar1}");
        File::delete($upload3);

        $datalapak->delete();
        return redirect('lapak')->with('delete', 'Data Berhasil DIhapus!');
    }
}
