<?php

namespace App\Http\Controllers;

use App\Models\Datausersandroid;
use Illuminate\Http\Request;

class DatausersandroidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.fe_datausersandroid.index', [
            "title"                 => "Data Users",
            "title_database"        => "Halaman Data Users Android",
            'data_usersandroid'     => Datausersandroid::all()
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
    public function show(Datausersandroid $datausersandroid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // app/Http/Controllers/DatausersandroidController.php
    public function edit($id)
    {
        $datausersandroid = Datausersandroid::find($id);
        return view('backend.fe_datausersandroid.edit',[
            "title"             => "Edit Data Users Android",
            "title_database"    => "Halaman Data Users Android",
                  ])->with('data', $datausersandroid);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Datausersandroid $datausersandroid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Datausersandroid $datausersandroid)
    {
        //
    }
}
