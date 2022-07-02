<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Exports\PedagangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class PalimananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $palimanan;
    public $wanita;
    public $pria;

    public function index(Request $request)
    {
        $palimanan = DB::table('sewa_users')->where('nama_pasar', 'pasar palimanan')->where('konfirmasi', '1')->count();
        $wanita = DB::table('sewa_users')->where('nama_pasar', 'pasar palimanan')->where('jenis_kelamin', 'perempuan')->where('konfirmasi', '1')->count();
        $pria = DB::table('sewa_users')->where('nama_pasar', 'pasar palimanan')->where('jenis_kelamin', 'laki-laki')->where('konfirmasi', '1')->count();

        $userpalimanan = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar palimanan');

        if($request->has('search')){
            $userpalimanan->where('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        $userpalimanan = $userpalimanan->latest()->paginate(10);

        return view('admin.pages.pasar.palimanan.palimanan', [
            "title" => "Pasar Palimanan",
        ])->with([
            "userpalimanan" => $userpalimanan,
            "palimanan" => $palimanan,
            "wanita" => $wanita,
            "pria" => $pria,
            "search" => $request->search?$request->search:''

        ]);
    }

    public function pedagangExport(Request $request){
        // dd($request->search);
        // $data = SewaUser::where('konfirmasi', '=', '1')->where('nama_pasar', '=', 'pasar palimanan');
        // if(!empty($request->search)){
        //     $data->where('jenis_tempat', 'like','%' .$request->search. '%');
        // }

        // dd($data->get());
        return Excel::download(new PedagangExport('pasar palimanan', $request->search), 'pedagang palimanan.xlsx');
    }

    public function pedagangpdf(Request $request)
    {
        $cetakpdf = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar palimanan');

        if($request->has('search')){
            $cetakpdf->where('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        $cetakpdf = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar palimanan')->get();

        // dd($cetakpdf);

        return view('admin.pages.pasar.palimanan.c_pedagangpdf')->with([
            "cetakpdf" => $cetakpdf
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
