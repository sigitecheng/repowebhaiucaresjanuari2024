<?php

namespace App\Http\Controllers;

use App\Models\Be_datainstansipendidikan;
use App\Models\Category;
use App\Http\Requests\StoreBe_datainstansipendidikanRequest;
use App\Http\Requests\UpdateBe_datainstansipendidikanRequest;

class Be_DatainstansipendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.fe_datainstansipendidikan.index', [
            'datainstansipendidikan'    => Be_datainstansipendidikan::orderBy('created_at', 'desc')->paginate(20),
            'title'             => 'Data Instansi Pendidikan',
            'title_dashboard'   => 'Daftar Mitra Instansi Pendidikan',
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
    public function store(StoreBe_datainstansipendidikanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Be_datainstansipendidikan $be_datainstansipendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Be_datainstansipendidikan $be_datainstansipendidikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBe_datainstansipendidikanRequest $request, Be_datainstansipendidikan $be_datainstansipendidikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Be_datainstansipendidikan $be_datainstansipendidikan)
    {
        //
    }
}
