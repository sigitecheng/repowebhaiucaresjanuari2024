<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Datapengawaslapangan;
use App\Models\Category;

use App\Http\Requests\StoreDatapengawaslapanganRequest;
use App\Http\Requests\UpdateDatapengawaslapanganRequest;

class DatapengawaslapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.datapengawaslapangan.index', [
            'datapengawaslapangan'   => Datapengawaslapangan::latest()->paginate(15),
            'categories'        => Category::all(),
            'title'             => 'Data Pengawas Lapangan',
            'title_dashboard'   => 'Data Pengawas Lapangan',
        ]);
        //
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
    public function store(StoreDatapengawaslapanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Datapengawaslapangan $datapengawaslapangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Datapengawaslapangan $datapengawaslapangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDatapengawaslapanganRequest $request, Datapengawaslapangan $datapengawaslapangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Datapengawaslapangan $datapengawaslapangan)
    {
        //
    }
}
