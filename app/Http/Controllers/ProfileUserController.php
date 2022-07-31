<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('user.pages.profile.profile', [
            "title" => "Profile",
            "user" => $user
        ]);
    }

    public function indexpengelola()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('admin.pages.akun.profile', [
            "title" => "Profile",
            "user" => $user
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
        $image_lama = $request->old_image;
        $image_baru = $request->file('foto');

        if($image_baru == ''){
            $foto = $image_lama;
        }else{

            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $foto = $new_image;
            $image_baru->move(public_path().'/img/profile', $new_image);
        }


        $user = User::find($id);

        $user->update(array(
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'tgl_lahir' => $request->tanggal_lahir,
            'j_kelamin' => $request->jenis_kelamin,
            'almt' => $request->alamat,
            'no_hp' => $request->nomor_hp,
            'foto' => $foto
        ));

        $user->save();

        return redirect('profile')->with('success', 'Data Berhasil Diubah');
    }

    public function updatepengelola(Request $request, $id)
    {
        $image_lama = $request->old_image;
        $image_baru = $request->file('foto');

        if($image_baru == ''){
            $foto = $image_lama;
        }else{

            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $foto = $new_image;
            $image_baru->move(public_path().'/img/profile', $new_image);
        }


        $user = User::find($id);

        $user->update(array(
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            'username' => $request->username,
            'tgl_lahir' => $request->tanggal_lahir,
            'j_kelamin' => $request->jenis_kelamin,
            'almt' => $request->alamat,
            'no_hp' => $request->nomor_hp,
            'foto' => $foto
        ));

        $user->save();

        return redirect('profil')->with('success', 'Data Berhasil Diubah');
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
