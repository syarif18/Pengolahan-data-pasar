<?php

namespace App\Http\Controllers;

use App\Models\SewaUser;
use Illuminate\Http\Request;
use App\Exports\PedagangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CiledugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $ciledug;
    public $wanita;
    public $pria;

    public function index(Request $request)
    {
        $ciledug = DB::table('sewa_users')->where('nama_pasar', 'pasar ciledug')->where('konfirmasi', '1')->count();
        $wanita = DB::table('sewa_users')->where('nama_pasar', 'pasar ciledug')->where('jenis_kelamin', 'perempuan')->where('konfirmasi', '1')->count();
        $pria = DB::table('sewa_users')->where('nama_pasar', 'pasar ciledug')->where('jenis_kelamin', 'laki-laki')->where('konfirmasi', '1')->count();

        $userciledug = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar ciledug');

        if($request->has('search')){
            $userciledug->where('jenis_tempat', 'like', '%' . $request->search . '%');
        }

        $userciledug = $userciledug->latest()->paginate(10);

        return view('admin.pages.pasar.ciledug.ciledug', [
            "title" => "Pasar Ciledug"
        ])->with([
            "userciledug" => $userciledug,
            "ciledug" => $ciledug,
            "wanita" => $wanita,
            "pria" => $pria,
            "search" => $request->search?$request->search:''
        ]);
    }

    public function pedagangExport(Request $request){
        // dd($request->nama_pasar);
        return Excel::download(new PedagangExport('pasar ciledug', $request->nama_pasar), 'pedagang ciledug.xlsx');
    }

    public function pedagangpdf(Request $request)
    {
        $cetakpdf = SewaUser::where('konfirmasi', '1')->where('nama_pasar', 'pasar ciledug');

        if($request->has('search')){
            $cetakpdf->where('jenis_tempat', 'like', '%' . $request->search . '%')->orWhere('nama', 'like', '%' . $request->search . '%');
        }

        $cetakpdf = $cetakpdf->get();

        // dd($cetakpdf);

        return view('admin.pages.pasar.ciledug.c_pedagangpdf', compact('cetakpdf'));
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
