<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Datapekerjaanstatus;
use App\Models\Be_datakontraktor;
use App\Models\Be_datarumahmakan;
use App\Models\Be_datarumahsakit;
use App\Models\Be_datainstansipendidikan;
use App\Models\Datapenanggungjawab;
use App\Models\Datapengawaslapangan;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('backend.fe_dataprojectpekerjaan.index', [
            'posts' => Post::whereHas('user', function ($query) {
                $query->where('username', auth()->user()->username);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10),
                            
            'title'             => 'Data Project',
            'title_dashboard'   => 'Data Project Pekerjaan',
            'categories'        => Category::all(),
            'datapekerjaanstatus' => Datapekerjaanstatus::all()
        ]);
    // backend.fe_dataprojectpekerjaan.index
    
        
    }

    // public function sub_infrastruktur()
    // {
    //      // Mengambil post berdasarkan kategori 'Infrastruktur'
    //         $posts = Post::whereHas('category_id', function ($query) {
    //             $query->where('name', 'Infrastruktur');
    //         })
    //         ->where('user_id', auth()->user()->id)
    //         ->orderBy('created_at', 'desc')
    //         ->get();

    //         return view('backend.fe_dataprojectpekerjaan.sub_pekerjaan.infrastruktur', [
    //         'posts'             => $posts,
    //         'title'             => 'Data Project',
    //         'title_dashboard'   => 'Data Project Pekerjaan'           
    //         ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // UNTUK MELAKUKAN PEMANGGILAN TANGKAP DATA DARI FORM YANG DIKIRIMKAN USERS
    {
        return view('backend.fe_dataprojectpekerjaan.create', [
           
            $username = Auth::user()->username, // Mendapatkan username pengguna yang sedang masuk

            $datausers = User::where('username', $username)->get(['username']),

            'categories'            => Category::all(),
            'datapekerjaanstatus'   => Datapekerjaanstatus::all(),
            'datakontraktor'        => Be_datakontraktor::all(),
            'datarumahmakan'        => Be_datarumahmakan::all(),
            'datarumahsakit'        => Be_datarumahsakit::all(),
            'datainstansipendidikan'        => Be_datainstansipendidikan::all(),
            'datapenanggungjawab'           => Datapenanggungjawab::all(),
            'datapengawaslapangan'          => Datapengawaslapangan::all(),
            'datausers'             => $datausers,
            'title'                 => 'Create New Project',
            'title_halaman'         => 'Create New Project'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)  // UNTUK MELAKUKAN CREATE 
    {
        // return $request->file('image')->store('post-images');

        $validateData = $request->validate([
            'title'                     => 'required|max:255',
            'slug'                      => 'required|unique:posts',
            'category_id'               => 'required',
            // 'user_id'                   => 'required',
            'be_datakontraktor_id'      => 'required',
            'be_datarumahmakan_id'      => 'required',
            'be_datarumahsakit_id'      => 'required',
            'be_datainstansipendidikan_id'      => 'required',
            'datapenanggungjawab_id'       => 'required',
            'datapengawaslapangan_id'      => 'required',
            'lokasi'                    => 'required',
            'anggaran'                  => 'required',
            'body'                      => 'required',
            'image'                     => 'image|file|max:1024',
            'waktu_pelaksanaan'         => 'required',
            'tanggal_mulai'             => 'required',
            'tanggal_selesai'           => 'required',
            'datapekerjaanstatus_id'    => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('daftar-pekerjaan');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validateData);

        return redirect('/dashboard/posts')->with('success', 'New Project has been added was successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // return $post;

        return view('backend.fe_dataprojectpekerjaan.show', [
            'title'             => 'Show Data Project',
            'title_halaman'     => 'View Data',
            'post'              => $post,
            'categories'        => Category::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)  // METHOD UNTUK MELAKUKAN UPDATE DATA DENGAN MENAMPILKAN DATA SEBELUMNYA YANG AKAN DI EDIT 
    {
        return view('backend.fe_dataprojectpekerjaan.edit', [
            'post'              => $post,
            'title'             => 'Update Data',
            'title_halaman'     => 'Update Data',
            'categories'        => Category::all(),
            'datapekerjaanstatus' => Datapekerjaanstatus::all()
                                
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            // 'slug' => 'required|unique:posts',  // ITEM INI DI HILANGKAN KARENA SLUG YANG LAMA AKAN DITIMPA MENJADI YANG BARU 
            'category_id'               => 'required',
            'image'                     => 'image|file|max:1024',
            'body'                      => 'required',
            'be_datakontraktor_id'      => 'required',
            'be_datarumahmakan_id'      => 'required',
            'be_datarumahsakit_id'      => 'required',
            'be_datainstansipendidikan_id'      => 'required',
            'penanggung_jawab_id'       => 'required',
            'pengawas_lapangan_id'      => 'required',
            'lokasi'                    => 'required',
            'anggaran'                  => 'required',
            'waktu_pelaksanaan'         => 'required',
            'datapekerjaanstatus_id'    => 'required',
            'tanggal_mulai'             => 'required',
            'tanggal_selesai'           => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            // PENGKONDISIAN UNTUK MEMBAWA GAMBAR YANG SEBELUMNYA DAN KEMUDIAN DI HAPUS AGAR TIDAK MENUMPUK DI DATABASE SEHINGGA DATA YANG ADA TERUPDATE BERDASARKAN DATANYA DATA LAMA DI AMBIL DAN DIHAPUS LALU DI PERBAHARUI
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('daftar-pekerjaan');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validateData);

        return redirect('/dashboard/posts')->with('update', 'Project has been updated was successfully !');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('delete', 'Project has been deleted was successfully !');
    
    }

    public function checkSlug(request $request)
    {

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
