<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama_kategori;
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
            "title"    => "All Posts" . $title,
            "title_dashboard"    => "All Posts" . $title,
            "active" => 'posts',
            // "post"     => Post::all()
            // MENGGUNAKAN TOOLS EIGER LOADING AGAR OPTIMAL DALAM MANGANTISIPASI QUERY YANG ADA 
            // "post" => Post::latest()->get() PAKET 1
            "post" => Post::whereHas('user', function ($query) {
                $query->where('username', auth()->user()->username);
                        })->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
           
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

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post

        ]);
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/blog')->with('delete', 'Project has been deleted was successfully !');
    }
}
