<?php

namespace App\Http\Controllers;

use App\Models\Be_datarumahsakit;
use App\Models\Category;
use App\Http\Requests\StoreBe_datarumahsakitRequest;
use App\Http\Requests\UpdateBe_datarumahsakitRequest;

class Be_DatarumahsakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.fe_datarumahsakit.index', [
            'datarumahsakit'    => Be_datarumahsakit::orderBy('created_at', 'desc')->paginate(20),
            'title'             => 'Data Rumah Sakit',
            'title_dashboard'   => 'Daftar Mitra Rumah Sakit',
            'categories'        => Category::all(),
            // 'datapekerjaanstatus' => Datapekerjaanstatus::all()
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
    public function store(StoreBe_datarumahsakitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Be_datarumahsakit $be_datarumahsakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Be_datarumahsakit $be_datarumahsakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBe_datarumahsakitRequest $request, Be_datarumahsakit $be_datarumahsakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Be_datarumahsakit $be_datarumahsakit)
    {
        //
    }
}
