<?php

namespace App\Http\Controllers;

use App\Models\Datapenanggungjawab;
use App\Models\Category;

use App\Http\Requests\StoreDatapenanggungjawabRequest;
use App\Http\Requests\UpdateDatapenanggungjawabRequest;

class DatapenanggungjawabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.datapenanggungjawab.index', [
            'datapenanggungjawab'   => Datapenanggungjawab::latest()->paginate(15),
            'categories'        => Category::all(),
            'title'             => 'Data Penanggung Jawab',
            'title_dashboard'   => 'Data Penanggung Jawab',
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
    public function store(StoreDatapenanggungjawabRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Datapenanggungjawab $datapenanggungjawab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Datapenanggungjawab $datapenanggungjawab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDatapenanggungjawabRequest $request, Datapenanggungjawab $datapenanggungjawab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Datapenanggungjawab $datapenanggungjawab)
    {
        //
    }
}
