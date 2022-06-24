<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapak;

class PasarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.pages.pasar.pasar', [
            "title" => "Informasi Pasar"
        ]);
    }

    public function detailpasar()
    {
        $lapak = Lapak::where('user_id', '=', '2')->get();
        $gambar1 = Lapak::where('user_id', '=', '2')->take(3)->get();
        $gambar2 = Lapak::where('user_id', '=', '2')->take(3)->get();
        $gambar3 = Lapak::where('user_id', '=', '2')->take(3)->get();

        return view('landing.pages.pasar.detail', [
            'lapak' => $lapak,
            'gambar1' => $gambar1,
            'gambar2' => $gambar2,
            'gambar3' => $gambar3,
            "title" => "Informasi Pasar"
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
