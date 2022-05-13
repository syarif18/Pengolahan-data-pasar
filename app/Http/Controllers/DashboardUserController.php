<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('user.dashboard-user', [
            "title" => "Dashboard"
        ]);
    }
}
