<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapak;
use App\Models\User;
use App\Models\SewaUser;
use App\Models\NomorTempat;


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

    public function pasarsumber()
    {
        $lapak = Lapak::where('user_id', '=', '13')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.sumber', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarpalimanan()
    {
        $lapak = Lapak::where('user_id', '=', '5')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.palimanan', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarjamblang()
    {
        $lapak = Lapak::where('user_id', '=', '6')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.jamblang', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarbatik()
    {
        $lapak = Lapak::where('user_id', '=', '7')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.batik', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarkue()
    {
        $lapak = Lapak::where('user_id', '=', '8')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.kue', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarpasalaran()
    {
        $lapak = Lapak::where('user_id', '=', '9')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.pasalaran', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarcipeujeuh()
    {
        $lapak = Lapak::where('user_id', '=', '10')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.cipeujeuh', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarbabakan()
    {
        $lapak = Lapak::where('user_id', '=', '11')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.babakan', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }

    public function pasarciledug()
    {
        $lapak = Lapak::where('user_id', '=', '12')->get();
        $data = [];
        foreach ($lapak as $key => $value) {
            $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();
            $nomor = [];
            foreach ($penyewa as $k => $v) {
                $nomor[] = $v->nomor_tempat;
            }
            $tempatkosong = NomorTempat::where('lapak_id', '=', $value->id)->whereNotIn('id', $nomor)->get();
            $data[] = [
                'jenis_tempat' => $value->jenis_tempat,
                'ukuran_tempat' => $value->ukuran_tempat,
                'harga' => $value->harga,
                'tempat_kosong' => count($tempatkosong),
                'gambar1' => $value->gambar1
            ];
        }
        // dd($data);

        // $penyewa = SewaUser::whereNotNull('nomor_tempat')->get();

        // $nomor = [];
        // foreach ($penyewa as $key => $value) {
        //     $nomor[] = $value->nomor_tempat;
        // }

        // $lapak = NomorTempat::where('lapak_id', '=', $lapaks->id)->whereNotIn('id', $nomor)->get();

        return view('landing.pages.pasar.ciledug', [
            'data' => $data,
            "title" => "Informasi Pasar"
        ]);
    }


    public function detailpasargambar($id)
    {
        //
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
