<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaUser;
use Illuminate\Support\Facades\File;
use Auth;

class InformasiUserController extends Controller
{
    public function index()
    {
        $data = SewaUser::select('*', 'sewa_users.id AS sewa_id')->join('users', 'sewa_users.user_id', '=', 'users.id' )->where('user_id', '=', Auth::user()->id)->where('status', '2')->get();
        // $user = SewaUser::select('*', 'sewa_users.id AS sewa_id')->join('users', 'sewa_users.user_id', '=', 'users.id' )->where('user_id', '=', Auth::user()->id)->where('status', '1')->first();
        // dd($data);
        return view('user.pages.informasi.informasi', [
            "title" => "Informasi"
        ])->with([
            "datas" => $data
            // "user" => $user
        ]);
    }

    public function show($id)
    {
        $data = SewaUser::findOrFail($id);
        return view('user.pages.informasi.show', [
            "title" => "Lihat Informasi"
        ])->with([
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {

        $image_lama = $request->old_image;
        $image_baru = $request->file('bukti_pembayaran');

        if($image_baru == ''){
            $foto = $image_lama;
        }else{

            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $bukti_pembayaran = $new_image;
            $image_baru->move(public_path().'/img/bukti', $new_image);
        }


        // $user = Auth::user()->name;
        // $data = SewaUser::where('nama', $user)->get();
        $item = SewaUser::findOrFail($id);

        $item->update(array(
            'bukti_pembayaran' => $bukti_pembayaran,
            'status_pembayaran' => $request->status_pembayaran
        ));

        $item->save();

        return redirect('informasi')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
        $data = SewaUser::findOrFail($id);
        $imgpoto = public_path("img/gambarpoto/{$data->gambar_paspoto}");
        File::delete($imgpoto);
        $imgktp = public_path("img/gambarktp/{$data->gambar_ktp}");
        File::delete($imgktp);
        $imgkk = public_path("img/gambarkk/{$data->gambar_kk}");
        File::delete($imgkk);

        $data->delete();
        return redirect('informasi')->with('delete', 'Data Berhasil DIhapus!');
    }
}
