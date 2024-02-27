<?php

namespace App\Http\Controllers;

use App\Models\Be_datakontraktor;
use App\Models\Category;
use App\Models\Datapekerjaanstatus;

use App\Http\Requests\StoreBe_datakontraktorRequest;
use App\Http\Requests\UpdateBe_datakontraktorRequest;

class Be_DatakontraktorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.fe_datakontraktor.index', [
            'datakontraktor'    => Be_datakontraktor::orderBy('created_at', 'desc')->paginate(20),
            'title'             => 'Data Kontraktor',
            'title_dashboard'   => 'Daftar Mitra Kontraktor',
            'categories'        => Category::all(),
            'datapekerjaanstatus' => Datapekerjaanstatus::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.fe_datakontraktor.create', [
            // 'post'                  => $post,
            'categories'            => Category::all(),
            'title'                 => 'Create New Kontraktor',
            'title_halaman'         => 'Create New Kontraktor'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBe_datakontraktorRequest $request)
    {
        //
        $validateData = $request->validate([
            'nama_perusahaan'           => 'required',
            'alamat'                    => 'required',
            'kota'                      => 'required',
            'nomor_telepon'             => 'required',
            'email'                     => 'required',
            'pimpinan_perusahaan'       => 'required',
            'sertifikat'                => 'required',
            'pengalaman'                => 'required',
            'bidang_keahlian'           => 'required',
            'dokumen'                   => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Be_datakontraktor::create($validateData);

        return redirect('/backend/kontraktor')->with('success', 'New Kontraktor has been added was successfully !');
    
    }

    /**
     
    * Display the specified resource.
     */
    public function show($nama_perusahaan)
    {
        //
        $data = Be_datakontraktor::where('nama_perusahaan', $nama_perusahaan)->first();
        return view('backend.fe_datakontraktor.show', [
            'title'             => 'Show Data Project',
            'title_halaman'     => 'View Data',
            'datakontraktor'    => $data,
            'categories'        => Category::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Be_datakontraktor $be_datakontraktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBe_datakontraktorRequest $request, Be_datakontraktor $be_datakontraktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Be_datakontraktor $be_datakontraktor)
    {
        //
    }

    
}
