<?php

namespace App\Http\Controllers;

use App\Models\UserSewa;
use App\Http\Requests\StoreUserSewaRequest;
use App\Http\Requests\UpdateUserSewaRequest;

class UserSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Http\Requests\StoreUserSewaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserSewaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSewa  $userSewa
     * @return \Illuminate\Http\Response
     */
    public function show(UserSewa $userSewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSewa  $userSewa
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSewa $userSewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserSewaRequest  $request
     * @param  \App\Models\UserSewa  $userSewa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserSewaRequest $request, UserSewa $userSewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSewa  $userSewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSewa $userSewa)
    {
        //
    }
}
