<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;

class CalonSewaController extends Controller
{
    public function index()
    {
        $data = SewaUser::all();
        return view('admin_pasar.pages.calon_sewa', [
            "title" => "Data Calon Penyewa"
        ])->with([
            "data" => $data]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->status);
        $item = SewaUser::findOrFail($id);
        $item->update(['status' => $request->status]);

        return redirect('calon_sewa')->with('success', 'Konten Berhasil Diupdate!');
    }
}
