<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Exports\PedagangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $user = Auth::user()->name;
        // $data = SewaUser::where('konfirmasi', '=', '1')->where('nama_pasar', '=', $user);

        // $request->search = 'syarif';
        // if(!$request->has('search')){
        //     $data->orWhere('jenis_tempat', 'like', '%' . $request->search . '%')->orWhere('nama', 'like', '%' . 'syarif' . '%');
        // }

        $data = SewaUser::where('nama_pasar', '=', Auth::user()->nama_pasar)->where('konfirmasi', '=', 1);

        if(!empty($request->search)){
            $data->where('nama', 'like', '%' . $request->search . '%')->orWhere('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        // dd($data->get());

        // $data = $data->get();

        return view('admin_pasar.pages.pedagang', [
            "title" => "Data pedagang"
        ])->with([
            "datas" => $data->get(),
            "auth" => Auth::user()->nama_pasar,
            "search" => $request->search?$request->search:''
        ]);
    }

    public function pedagangExport(Request $request){
        // dd($request->search);
        return Excel::download(new PedagangExport($request->nama_pasar, $request->search), 'pedagang.xlsx');
    }

    public function pedagangpdf(Request $request)
    {


        // $user = Auth::user()->name;
        // $this->nama_pasar = Auth::user()->name;
        $cetakpdf = SewaUser::where('nama_pasar', '=', Auth::user()->nama_pasar)->where('konfirmasi', '=', 1);
        $lk = SewaUser::where('nama_pasar', '=', Auth::user()->nama_pasar)->where('jenis_kelamin', '=', 'Laki-laki')->count();
        $pr = SewaUser::where('nama_pasar', '=', Auth::user()->nama_pasar)->where('jenis_kelamin', '=', 'perempuan')->count();

        $jum = $lk + $pr;

        if(!empty($request->search)){
            $cetakpdf->Where('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        // $cetakpdf = $cetakpdf->get();
        // dd($cetakpdf);
        return view('admin_pasar.pages.cetak_pedagangpdf')->with([
            'cetakpdf' => $cetakpdf->get(),
            "auth" => Auth::user()->nama_pasar,
            'tahun' => Carbon::now()->format('Y'),
            'lk' => $lk,
            'pr' => $pr,
            'jum' => $jum,
            'search' => $request->search?$request->search:''
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
        //
    }
}
