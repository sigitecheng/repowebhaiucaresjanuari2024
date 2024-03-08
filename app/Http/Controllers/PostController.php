<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Fe_adminberanda;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->nama_kategori;
        }

        if (request('user')) {
            $author = User::firstWhere('username', request('user'));
            $title = ' by ' . $author->name;
        }

        // $post = Post::latest(); PAKET 2

        // if (request('search')) {
        //     $post->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('excerpt', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        // dd(request('search'));
        //  dd(request('search'));

        return view('backend.fe_dataprojectpekerjaan.sub_pekerjaan.index', [
            "title"    => "Data Project " . $title,
            "title_dashboard"    => "Data Project " . $title,
            "active" => 'posts',
            // "post"     => Post::all()
            // MENGGUNAKAN TOOLS EIGER LOADING AGAR OPTIMAL DALAM MANGANTISIPASI QUERY YANG ADA 
            // "post" => Post::latest()->get() PAKET 1

            
            "post" => Post::whereHas('user', function ($query) {
                $query->where('username', auth()->user()->username);
                        })->filter(request(['search', 'category', 'user']))->paginate(10)->withQueryString(),
           
            //  "post" => $post->get() // PAKET 2
            'categories'    => Category::all(),
                
                // $latestPosts = Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),

                // $userPosts = Post::where('user_id', auth()->user()->id)
                // ->orderBy('created_at', 'desc')
                // ->get(),
                
                // $post = $latestPosts->concat($userPosts),
                
                // "post" => $post,

            
            // Gunakan $posts sesuai kebutuhan Anda
            
        ]);
    }

    public function blogproject(Post $post)
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->nama_kategori;
            // ' in ' .
        }

        if (request('user')) {
            $author = User::firstWhere('username', request('user'));
            $title = ' by ' . $author->name;
        }
        
        return view('frontendweb.sub_project.sub_index', [
            "title"                 => "Data Project " . $title,
            "title_dashboard"       => "Data Project " . $title,
            "active"                => 'posts',
            "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
            'categories'    => Category::all(),
            'adminprojectkami'  => Fe_adminberanda::all(),

            $category_id = 1,
            'post' => Post::whereHas('category', function ($query) use ($category_id) {
                // Gantilah $categoryId dengan ID kategoriost yang diinginkan
                $query->where('id', $category_id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10),

         
            // MENGGUNAKAN TOOLS EIGER LOADING AGAR OPTIMAL DALAM MANGANTISIPASI QUERY YANG ADA 
            // "post" => Post::latest()->get() PAKET 1
            
            // "post" => Post::whereHas('user', function ($query) {
            //     $query->where('username', auth()->user()->username);
            //             })->filter(request(['search', 'category', 'user']))->paginate(10)->withQueryString(),
                        // 'posts' => Post::whereHas('user', function ($query) {
                        //     $query->where('username', auth()->user()->username);
                        // })->filter(request(['search', 'category', 'user']))
                        // ->orderByDesc('created_at') 
                        // // Menggunakan orderByDesc untuk descending order
                        // ->paginate(6)
                        // ->withQueryString(),
            
            //  "post" => $post->get() // PAKET 2
                
                // $latestPosts = Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),

                // $userPosts = Post::where('user_id', auth()->user()->id)
                // ->orderBy('created_at', 'desc')
                // ->get(),
                
                // $post = $latestPosts->concat($userPosts),
                
                // "post" => $post,

            
            // Gunakan $posts sesuai kebutuhan Anda
            
        ]);
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post

        ]);
    }

    public function destroy($data)
    {
        // Cari pengguna berdasarkan ID yang diberikan
        $user = User::findOrFail($data->id);
    
        // Hapus pengguna
        $user->delete();
    
        // Redirect kembali ke halaman /users dengan pesan sukses
        return redirect('/users')->with('delete', 'User has been successfully deleted!');
    }
    
}
