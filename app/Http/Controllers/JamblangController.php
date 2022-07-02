<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Exports\PedagangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;



class JamblangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $jamblang;
    public $wanita;
    public $pria;

    public function index(Request $request)
    {
        $jamblang = DB::table('sewa_users')->where('nama_pasar', 'pasar jamblang')->where('konfirmasi', '1')->count();
        $wanita = DB::table('sewa_users')->where('nama_pasar', 'pasar jamblang')->where('jenis_kelamin', 'perempuan')->where('konfirmasi', '1')->count();
        $pria = DB::table('sewa_users')->where('nama_pasar', 'pasar jamblang')->where('jenis_kelamin', 'laki-laki')->where('konfirmasi', '1')->count();

        $userjamblang = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar jamblang');

        if($request->has('search')){
            $userjamblang->where('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        $userjamblang = $userjamblang->latest()->paginate(10);

        return view('admin.pages.pasar.jamblang.jamblang', [
            "title" => "Pasar Jamblang"
        ])->with([
            "userjamblang" => $userjamblang,
            "jamblang" => $jamblang,
            "wanita" => $wanita,
            "pria" => $pria,
            "search" => $request->search?$request->search:''
        ]);
    }

    public function pedagangExport(Request $request){
        // dd($request->nama_pasar);
        // dd('pasar jamblang',$request->nama_pasar);
        return Excel::download(new PedagangExport('pasar jamblang', $request->search), 'pedagang jamblang.xlsx');
    }

    public function pedagangpdf(Request $request)
    {
        $cetakpdf = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar jamblang');

        if($request->has('search')){
            $cetakpdf->where('jenis_tempat', 'like', '%' . $request->search . '%')->orWhere('nama', 'like', '%' . $request->search . '%');
        }

        $cetakpdf = $cetakpdf->get();

        // dd($cetakpdf);

        return view('admin.pages.pasar.jamblang.c_pedagangpdf', compact('cetakpdf'));
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
