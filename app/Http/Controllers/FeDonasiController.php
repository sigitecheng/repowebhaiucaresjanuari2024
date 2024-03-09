<?php

namespace App\Http\Controllers;

use App\Models\Be_datainstansipendidikan;
use App\Models\Be_datakontraktor;
use App\Models\Be_datarumahmakan;
use App\Models\Be_datarumahsakit;
use App\Models\FeDonasi;
use App\Models\Post;
use App\Models\Category;
use App\Models\Fe_adminberanda;
use Illuminate\Http\Request;

class FeDonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function show($title)
    {
        // return $post;

        $data = Post::where('title', $title)->first();
        return view('frontendweb/sub_project/sub_pekerjaan', [
            'title'             => 'Details Pekerjaan',
            'title_halaman'     => 'View Pekerjaan',
            'datapekerjaan'     => $data,
            'categories'        => Category::all(),
            'dataadminberanda'  => Fe_adminberanda::all(),

            'datakontraktor'    => Be_datakontraktor::all(),
            'datapendidikan'    => Be_datainstansipendidikan::all(),
            'datakesehatan'     => Be_datarumahsakit::all(),
            'datamakanan'       => Be_datarumahmakan::all(),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeDonasi $feDonasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FeDonasi $feDonasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeDonasi $feDonasi)
    {
        //
    }
}
