<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // elequant ORM -> get all data
        $data = post::cursorPaginate(10);
        // pass the data to the view
        return view('post.index', ['posts'=> $data,'pagetitle' => 'blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create',['pagetitle'=>'blog create new post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //to do will be completed in the form section 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $post = Post::find($id);
         // hondle nulle -> message
        

        return view('post.show',['post' => $post,'pagetitle' => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post.edit',['pagetitle'=>'blog edit post']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //to do complete in forme section
    }
}
