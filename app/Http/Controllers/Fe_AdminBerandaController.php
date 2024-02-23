<?php

namespace App\Http\Controllers;

use App\Models\Fe_AdminBeranda;
use App\Models\Category;
use Illuminate\Http\Request;



class Fe_AdminBerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.fe_adminberanda.index', [
            'title'             => 'Fe Admin Beranda',
            'title_dashboard'   => 'Data Admin Beranda',
            'categories'        => Category::all(),
            'fe_adminberanda'   => Fe_AdminBeranda::all() 
        ]);
    }

    public function tentangkami()
    {
        //
        return view('backend.fe_tentangkami.index', [
            'title'             => 'Fe Admin Tentang Kami ',
            'title_dashboard'   => 'Data Tentang Kami',
            'categories'        => Category::all(),
            'fe_adminberanda'   => Fe_AdminBeranda::all() 
        ]);
    }

    public function layanankami()
    {
        //
        return view('backend.fe_layanankami.index', [
            'title'             => 'Fe Admin Layanan Kami ',
            'title_dashboard'   => 'Data Layanan Kami',
            'categories'        => Category::all(),
            'fe_adminberanda'   => Fe_AdminBeranda::all() 
        ]);
    }

    public function donasi()
    {
        //
        return view('backend.fe_donasi.index', [
            'title'             => 'Fe Admin Donasi ',
            'title_dashboard'   => 'Data Donasi',
            'categories'        => Category::all(),
            'fe_adminberanda'   => Fe_AdminBeranda::all() 
        ]);
    }

    public function projectkami()
    {
        //
        return view('backend.fe_projectkami.index', [
            'title'             => 'Fe Project Kami ',
            'title_dashboard'   => 'Data Project Kami',
            'categories'        => Category::all(),
            'fe_adminberanda'   => Fe_AdminBeranda::all() 
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
    public function show(Fe_AdminBeranda $fe_AdminBeranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit($beranda1)
     {
         $data = Fe_AdminBeranda::where('beranda1', $beranda1)->first();
         return view('backend.fe_adminberanda.edit', [
             'adminberanda'      => $data,
             'title'             => 'Update Data',
             'title_dashboard'   => 'Update Data',
             'categories'        => Category::all(),
         ]);
     }

     public function tentangkamiedit($tentang_kami)
     {
         $data = Fe_AdminBeranda::where('tentang_kami', $tentang_kami)->first();
         return view('backend.fe_tentangkami.edit', [
             'admintentangkami'  => $data,
             'title'             => 'Update Data',
             'title_dashboard'   => 'Update Data',
             'categories'        => Category::all(),
         ]);
     }

     public function layanankamiedit($layanan_kami)
     {
         $data = Fe_AdminBeranda::where('layanan_kami', $layanan_kami)->first();
         return view('backend.fe_layanankami.edit', [
             'adminlayanankami'  => $data,
             'title'             => 'Update Data',
             'title_dashboard'   => 'Update Data',
             'categories'        => Category::all(),
         ]);
     }

     public function donasiedit($donasi)
     {
         $data = Fe_AdminBeranda::where('donasi', $donasi)->first();
         return view('backend.fe_donasi.edit', [
             'admindonasi'  => $data,
             'title'             => 'Update Data',
             'title_dashboard'   => 'Update Data',
             'categories'        => Category::all(),
         ]);
     }
     
     public function projectkamiedit($project_kami)
     {
         $data = Fe_AdminBeranda::where('project_kami', $project_kami)->first();
         return view('backend.fe_projectkami.edit', [
             'adminprojectkami'  => $data,
             'title'             => 'Update Data',
             'title_dashboard'   => 'Update Data',
             'categories'        => Category::all(),
         ]);
     }
     


    /**
     * Update the specified resource in storage.
     */
    

        public function update(Request $request, $beranda1)
        {
            // Validasi form input
            $request->validate([
                'beranda1'        => 'required',
                'beranda2'        => 'required',
                'visi'            => 'required',
                'misi'            => 'required',
                'fokus_pekerjaan' => 'required',
            ]);

            // Cari data yang ingin diupdate
            $data = Fe_AdminBeranda::where('beranda1', $beranda1)->first();

            // Update data berdasarkan input dari form
            $data->update([
                'beranda1'        => $request->beranda1,
                'beranda2'        => $request->beranda2,
                'visi'            => $request->visi,
                'misi'            => $request->misi,
                'fokus_pekerjaan' => $request->fokus_pekerjaan,
                // tambahkan atribut lainnya sesuai kebutuhan
            ]);

            // Redirect kembali ke halaman edit dengan pesan sukses atau sesuai kebutuhan
            return redirect('/adminberanda/post')->with('update', 'Beranda has been updated was successfully !');
            
        }

        public function tentangkamiupdate(Request $request, $tentang_kami)
        {
            // Validasi form input
            $request->validate([
                'tentang_kami'      => 'required',
            ]);

            // Cari data yang ingin diupdate
            $data = Fe_AdminBeranda::where('tentang_kami', $tentang_kami)->first();

            // Update data berdasarkan input dari form
            $data->update([
                'tentang_kami'    => $request->tentang_kami,
            ]);

            // Redirect kembali ke halaman edit dengan pesan sukses atau sesuai kebutuhan
            return redirect('/adminberanda/tentangkami')->with('update', 'Tentang Kami has been updated was successfully !');
            
        }

        public function layanankamiupdate(Request $request, $layanan_kami)
        {
            // Validasi form input
            $request->validate([
                'layanan_kami'      => 'required'
            ]);

            // Cari data yang ingin diupdate
            $data = Fe_AdminBeranda::where('layanan_kami', $layanan_kami)->first();

            // Update data berdasarkan input dari form
            $data->update([
                'layanan_kami'        => $request->layanan_kami
            ]);

            // Redirect kembali ke halaman edit dengan pesan sukses atau sesuai kebutuhan
            return redirect('/adminberanda/layanankami')->with('update', 'Layanan Kami has been updated was successfully !');
            
        }

        public function donasiupdate(Request $request, $donasi)
        {
            // Validasi form input
            $request->validate([
                'donasi'      => 'required'
            ]);

            // Cari data yang ingin diupdate
            $data = Fe_AdminBeranda::where('donasi', $donasi)->first();

            // Update data berdasarkan input dari form
            $data->update([
                'donasi'        => $request->donasi
            ]);

            // Redirect kembali ke halaman edit dengan pesan sukses atau sesuai kebutuhan
            return redirect('/adminberanda/donasi')->with('update', 'Donasi has been updated was successfully !');
            
        }

        public function projectkamiupdate(Request $request, $project_kami)
        {
            // Validasi form input
            $request->validate([
                'project_kami'      => 'required'
            ]);

            // Cari data yang ingin diupdate
            $data = Fe_AdminBeranda::where('project_kami', $project_kami)->first();

            // Update data berdasarkan input dari form
            $data->update([
                'project_kami'        => $request->project_kami
            ]);

            // Redirect kembali ke halaman edit dengan pesan sukses atau sesuai kebutuhan
            return redirect('/adminberanda/projectkami')->with('update', 'Project Kami has been updated was successfully !');
            
        }      
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fe_AdminBeranda $fe_adminberanda)
    {
        //

        Fe_AdminBeranda::destroy($fe_adminberanda->fe_adminberanda_id);

        return redirect('/adminberanda/post')->with('delete', 'Admin Beranda has been deleted was successfully !');
    }
}
