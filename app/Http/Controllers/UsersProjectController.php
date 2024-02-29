<?php

namespace App\Http\Controllers;

use App\Models\Usersproject;
use Illuminate\Http\Request;

class UsersProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('404', [
            'title' => '404'
          ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usersproject $usersproject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usersproject $usersproject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usersproject $usersproject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usersproject $usersproject)
    {
        //
    }
}
