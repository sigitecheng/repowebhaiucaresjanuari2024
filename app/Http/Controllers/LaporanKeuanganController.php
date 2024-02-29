<?php

namespace App\Http\Controllers;

use App\Models\Laporankeuangan;
use Illuminate\Http\Request;

class LaporanKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Laporankeuangan $laporankeuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporankeuangan $laporankeuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporankeuangan $laporankeuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporankeuangan $laporankeuangan)
    {
        //
    }
}
