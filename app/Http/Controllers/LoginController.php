<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login', [
            "title" => "Login"
        ]);
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username', 'password'))){

            if (Auth::user()->level == 'admin') {
                return redirect('admin');
            }elseif (Auth::user()->level == 'kabid'){
                return redirect('admin');
            } elseif (Auth::user()->level == 'pengelola'){
                return redirect('admin_pasar');
            } elseif (Auth::user()->level == 'user'){
                return redirect('user');
            } else{

            }
        }
        return back()->with('loginError', 'Kesalahan pada saat Login');

    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

}
