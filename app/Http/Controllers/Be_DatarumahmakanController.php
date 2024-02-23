<?php

namespace App\Http\Controllers;

use App\Models\Be_datarumahmakan;
use App\Models\Category;
use App\Http\Requests\StoreBe_datarumahmakanRequest;
use App\Http\Requests\UpdateBe_datarumahmakanRequest;

class Be_DatarumahmakanController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.fe_datarumahmakan.index', [
            'datarumahmakan'    => Be_datarumahmakan::orderBy('created_at', 'desc')->paginate(20),
            'title'             => 'Data Rumah Makan',
            'title_dashboard'   => 'Daftar Mitra Rumah Makan',
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
        return view('backend.fe_datarumahmakan.create', [
            'categories'            => Category::all(),
            'title'                 => 'Create New Rumah Makan',
            'title_halaman'         => 'Create New Rumah Makan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storebe_datarumahmakanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($nama_rumahmakan)
    {
        //
        $data = Be_datarumahmakan::where('nama_rumahmakan', $nama_rumahmakan)->first();
        return view('backend.fe_datarumahmakan.show', [
            'title'             => 'Show Data Rumah Makan',
            'title_halaman'     => 'View Data',
            'datarumahmakan'    => $data,
            'categories'        => Category::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(be_datarumahmakan $be_datarumahmakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebe_datarumahmakanRequest $request, be_datarumahmakan $be_datarumahmakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(be_datarumahmakan $be_datarumahmakan)
    {
        //
    }
}
