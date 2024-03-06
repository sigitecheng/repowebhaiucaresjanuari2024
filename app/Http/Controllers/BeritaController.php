<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontendweb.berita.index', [
            'berita'            => Berita::orderBy('created_at', 'desc')->paginate(7),
            'title'             => 'Berita',
            'title_dashboard'   => 'Data Berita',
            'categories'        => Category::all(),
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
    public function show($judul)
    {
        // return $post;

        $data = Berita::where('judul', $judul)->first();
        return view('frontendweb.berita.show', [
            'title'             => 'Show Data Berita',
            'title_halaman'     => 'View Data Berita',
            'berita'            => $data,
            'categories'        => Category::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($judul)
    {
        $berita = Berita::where('judul', $judul)->firstOrFail(); // Mencari berita berdasarkan judul
    
        if ($berita->image) {
            Storage::delete($berita->image); // Menghapus gambar dari penyimpanan jika ada
        }
    
        $berita->delete(); // Menghapus berita dari database
    
        return redirect('/berita')->with('delete', 'Berita has been deleted successfully!');
    }
    
}
