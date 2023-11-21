<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $post = Post::latest()->paginate(5);
        
       // return view('blogpost.index',compact('post'))
         //           ->with('i', (request()->input('page', 1) - 1) * 5);
         return view('blogpost.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blogpost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            // 'slug' => 'required',
            'image' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required'
            ]);


            // $fileName = time() . '.' . $request->image->extension();
            // $request->image->storeAs('public/images', $fileName);
            $fileName = time().'.'.$request->image->extension();
            // Public Folder
            $request->image->move(public_path('images'), $fileName);

            //if($request->slug){
            //   $slug = $request->title;
            //}else{
            //    $slug = str::slug($request->title,'-');
            //}

            $post =  Post::create([
                'name' => $request->name,
                'title' => $request->title,
                'content' => $request->content,
                'slug' => str::slug($request->title,'-'),
                'image' => $fileName,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_description,
            ]);
            
            return redirect()->route('blogpost.index')->with('status', 'Post Created Successfully');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd($id);
        $post = post::find($id);
        return view('blogpost.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //dd($id);
        $post = post::find($id);
        return view('blogpost.edit',compact('post'))->with('status', 'Post Edited Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($id);
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            // 'slug' => 'required',
            'image' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required'
            ]);

            $fileName = time().'.'.$request->image->extension();
            // Public Folder
            $request->image->move(public_path('images'), $fileName);

            $post = Post::find($id);
                $post->name = $request->name;
                $post->title = $request->title;
                $post->content = $request->content;
                $post->slug = str::slug($request->title,'-');
                $post->image = $fileName;
                $post->meta_keyword = $request->meta_keyword;
                $post->meta_description = $request->meta_description;
                $post->save();
            
            return redirect()->route('blogpost.index')->with('status', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //dd($id);
        $post = post::find($id);
        $post->delete();

        return redirect()->route('blogpost.index')->with('status', 'Post Deleted Successfully');
    }
}
