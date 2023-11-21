<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $post = Post::latest()->paginate(4);

        //$post = Post::get();
        
        // return view('blogpost.index',compact('post'))
          //           ->with('i', (request()->input('page', 1) - 1) * 5);
          return view('dashboard',compact('post'));
       // return view('dashboard');
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
        //$post = Post::find($id);
//dd($post);
        //return view('postdetail', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::where('slug', $id)->first();
        $data = Post::get();
    
        return view('postdetail', compact('post','data'));
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
    public function destroy(string $id)
    {
        //
    }
}
