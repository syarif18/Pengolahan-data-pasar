<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use App\Exports\PedagangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;


class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $user = Auth::user()->name;
        $data = SewaUser::where('konfirmasi', '1')->where('nama_pasar', $user);

        if($request->has('search')){
            $data->where('jenis_tempat', 'like', '%' . $request->search . '%')->orWhere('nama', 'like', '%' . $request->search . '%');
        }

        $data = $data->latest()->paginate(5);

        return view('admin_pasar.pages.pedagang', [
            "title" => "Data pedagang"
        ])->with([
            "datas" => $data,
            "auth" => $user,
            "search" => $request->search?$request->search:''
        ]);
    }

    public function pedagangExport(Request $request){
        // dd($request->search);
        return Excel::download(new PedagangExport($request->nama_pasar, $request->search), 'pedagang.xlsx');
    }

    public function pedagangpdf(Request $request)
    {
        $user = Auth::user()->name;
        $cetakpdf = SewaUser::where('konfirmasi', '1')->where('nama_pasar', $user);

        if($request->has('search')){
            $cetakpdf->where('jenis_tempat', 'like', '%' . $request->search . '%')->orWhere('nama', 'like', '%' . $request->search . '%');
        }

        $cetakpdf = $cetakpdf->get();

        // dd($cetakpdf);

        return view('admin_pasar.pages.cetak_pedagangpdf', compact('cetakpdf'));
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
