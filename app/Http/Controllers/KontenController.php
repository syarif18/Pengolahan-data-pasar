<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konten = Konten::all();
        return view('admin.pages.konten.konten', [
            "title" => "Konten"
        ])->with([
            "konten" => $konten
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.konten.create', [
            "title" => "Buat Konten"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->except(['_token']);
        // Konten::insert($data);
        // return redirect('konten');

        $konten = $request->validate([
            'judul' => 'required|max:225',
            'gambar' => 'image|file|max:2048',
            'body' => 'required'
        ]);


        $konten['gambar'] = $request->file('gambar')->store('konten-gambar');

        $konten['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        Konten::create($konten);
        return redirect('konten')->with('success', 'Konten Baru Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $konten = Konten::findOrFail($id);
        return view('admin.pages.konten.show', [
            "title" => "Lihat Konten"
        ])->with([
            "konten" => $konten
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
        $konten = Konten::findOrFail($id);
        return view('admin.pages.konten.edit', [
            "title" => "Edit Konten"
        ])->with([
            "konten" => $konten
        ]);
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
        // $item = [
        //     'judul' => 'required|max:225',
        //     'body' => 'required'
        // ];

        // $data = $request->validate($item);

        // $data['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        // Konten::where('id', $data->id)
        //         ->update($data);

        // return redirect('konten')->with('success', 'Konten Berhasil Diupdate!');

        $item = Konten::findOrFail($id);
        $konten = $request->validate([
            'judul' => 'required|max:225',
            'gambar' => 'image|file|max:2048',
            'body' => 'required'
        ]);

        if ($request->file('gambar')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $konten['gambar'] = $request->file('gambar')->store('konten-gambar');
        }

        $konten['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        $item->update($konten);


        return redirect('konten')->with('success', 'Konten Berhasil Diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Konten::findOrFail($id);
        if($item->gambar){
                Storage::delete($item->gambar);
            }
        $item->delete();
        return redirect('konten')->with('delete', 'Konten Berhasil DIhapus!');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Konten::class, 'slug', $request->judul);
    //     return response()->json(['slug' => $slug]);
    // }
}
