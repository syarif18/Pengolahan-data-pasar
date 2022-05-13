<?php

namespace App\Http\Controllers;

use App\Models\DataPasar;
use Illuminate\Http\Request;

class DataPasarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataPasar::all();
        return view('admin.pages.data_pasar.data_pasar', [
            "title" => "Data Pasar"
        ])->with([
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.data_pasar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        DataPasar::insert($data);
        return redirect('data_pasar')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DataPasar::findOrFail($id);
        return view('admin.pages.data_pasar.show')->with([
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
        $item = DataPasar::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('data_pasar')->with('status', 'Data Beerhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DataPasar::findOrFail($id);
        $item->delete();
        return redirect('data_pasar')->with('status', 'Data Berhasil Dihapus');
    }
}
