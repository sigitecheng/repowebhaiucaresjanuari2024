<?php

namespace App\Http\Controllers;

use App\Models\RunningProject;
use Illuminate\Http\Request;

class RunningProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('404', [
            'title' => '404'
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RunningProject $runningProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RunningProject $runningProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RunningProject $runningProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RunningProject $runningProject)
    {
        //
    }
}
