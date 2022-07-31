<?php

namespace App\Http\Controllers;

use App\Models\SewaUser;
use Illuminate\Http\Request;
use App\Exports\PedagangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class BatikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $batik;
    public $wanita;
    public $pria;

    public function index(Request $request)
    {
        $batik = DB::table('sewa_users')->where('nama_pasar', 'pasar batik')->where('konfirmasi', '1')->count();
        $wanita = DB::table('sewa_users')->where('nama_pasar', 'pasar batik')->where('jenis_kelamin', 'perempuan')->where('konfirmasi', '1')->count();
        $pria = DB::table('sewa_users')->where('nama_pasar', 'pasar batik')->where('jenis_kelamin', 'laki-laki')->where('konfirmasi', '1')->count();

        $userbatik = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar batik');

        if($request->has('search')){
            $userbatik->where('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        $userbatik = $userbatik->latest()->paginate(10);

        return view('admin.pages.pasar.batik.batik', [
            "title" => "Pasar Batik"
        ])->with([
            "userbatik" => $userbatik,
            "batik" => $batik,
            "wanita" => $wanita,
            "pria" => $pria,
            "search" => $request->search?$request->search:''
        ]);
    }

    public function pedagangExport(Request $request){
        // dd($request->nama_pasar);
        return Excel::download(new PedagangExport('pasar batik', $request->nama_pasar), 'pedagang batik.xlsx');
    }

    public function pedagangpdf(Request $request)
    {
        $cetakpdf = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar batik');

        if($request->has('search')){
            $cetakpdf->where('jenis_tempat', 'like', '%' . $request->search . '%')->orWhere('nama', 'like', '%' . $request->search . '%');
        }

        $cetakpdf = $cetakpdf->get();

        // dd($cetakpdf);

        return view('admin.pages.pasar.batik.c_pedagangpdf', compact('cetakpdf'));
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
