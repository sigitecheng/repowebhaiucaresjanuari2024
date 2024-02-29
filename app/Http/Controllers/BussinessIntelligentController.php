<?php

namespace App\Http\Controllers;

use App\Models\BussinessIntelligent;
use Illuminate\Http\Request;

class BussinessIntelligentController extends Controller
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
    public function show(BussinessIntelligent $bussinessIntelligent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BussinessIntelligent $bussinessIntelligent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BussinessIntelligent $bussinessIntelligent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BussinessIntelligent $bussinessIntelligent)
    {
        //
    }
}
