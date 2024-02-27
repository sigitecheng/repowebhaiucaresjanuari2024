<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.daftarpekerja.index', [
            'categories'            => Category::all(),
            'datausers'             => User::orderBy('created_at', 'desc')->paginate(15),
            'title'                 => 'Data Users',
            'title_dashboard'       => 'Daftar Users'
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($username)
    {
       
          // Temukan pengguna berdasarkan nama pengguna yang diberikan
            $user = User::where('username', $username)->first();

            // Periksa apakah pengguna ditemukan
            if ($user) {
                // Hapus pengguna jika ditemukan
                $user->delete();
                return redirect('/users')->with('delete', 'User ' . $username . ' has been deleted successfully!');
            } else {
                // Jika pengguna tidak ditemukan, berikan pesan kesalahan
                return redirect('/users')->with('error', 'User ' . $username . ' not found!');
            }
    }
}
