<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Category;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.be_email.index', [                            
            'title'             => 'Email',
            'title_dashboard'   => 'Email',
            'categories'        => Category::all(),
        ]);
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
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        //
    }
}
