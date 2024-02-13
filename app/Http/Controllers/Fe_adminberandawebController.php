<?php

namespace App\Http\Controllers;
use App\Models\Feadminberanda;
use Illuminate\Http\Request;

class Fe_adminberandawebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.fe_halamanutama.beranda', [
            "title"             => "Admin Beranda",
            "title_database"    => "Halaman Beranda",
            'data_feadminberanda' => Feadminberanda::all()
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
    public function show(Feadminberanda $feadminberanda)
    {
        
        return view('backend.fe_halamanutama.show', [
            'title'             => 'Show Beranda ',
            'data'    => $feadminberanda
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feadminberanda $feadminberanda)
    {
        return view('backend.fe_halamanutama.edit_beranda1', [
            'feadminberanda'    => $feadminberanda,
            'title'             => 'Edit Beranda '
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feadminberanda $feadminberanda)
    {
        //
        $rules = [
            'beranda1' => 'required|max:255',
        ];

        $validateData = $request->validate($rules);

        
        Feadminberanda::where('id_feadminberanda', $feadminberanda->id_feadminberanda)
            ->update($validateData);
        
        return redirect('/backendberanda')->with('success', 'Post has been updated was successfully !');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}




