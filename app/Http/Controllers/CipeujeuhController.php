<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Exports\PedagangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CipeujeuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $cipeujeuh;
    public $wanita;
    public $pria;

    public function index(Request $request)
    {
        $cipeujeuh = DB::table('sewa_users')->where('nama_pasar', 'pasar cipeujeuh')->where('konfirmasi', '1')->count();
        $wanita = DB::table('sewa_users')->where('nama_pasar', 'pasar cipeujeuh')->where('jenis_kelamin', 'perempuan')->where('konfirmasi', '1')->count();
        $pria = DB::table('sewa_users')->where('nama_pasar', 'pasar cipeujeuh')->where('jenis_kelamin', 'laki-laki')->where('konfirmasi', '1')->count();

        $usercipeujeuh = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar cipeujeuh');

        if($request->has('search')){
            $usercipeujeuh->where('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        $usercipeujeuh = $usercipeujeuh->latest()->paginate(10);

        return view('admin.pages.pasar.cipeujeuh.cipeujeuh', [
            "title" => "Pasar Cipeujeuh"
        ])->with([
            "usercipeujeuh" => $usercipeujeuh,
            "cipeujeuh" => $cipeujeuh,
            "wanita" => $wanita,
            "pria" => $pria,
            "search" => $request->search?$request->search:''
        ]);
    }

    public function pedagangExport(Request $request){
        // dd($request->nama_pasar);
        return Excel::download(new PedagangExport('pasar cipeujeuh', $request->nama_pasar), 'pedagang cipeujeuh.xlsx');
    }

    public function pedagangpdf(Request $request)
    {
        $cetakpdf = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar cipeujeuh');

        if($request->has('search')){
            $cetakpdf->where('jenis_tempat', 'like', '%' . $request->search . '%')->orWhere('nama', 'like', '%' . $request->search . '%');
        }

        $cetakpdf = $cetakpdf->get();

        // dd($cetakpdf);

        return view('admin.pages.pasar.cipeujeuh.c_pedagangpdf', compact('cetakpdf'));
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
