<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             $tags = Tag::all();
        // pass the data to the view
        return view('tag.index', ['tags'=> $tags,'pagetitle' => 'tag']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('tag.create',['pagetitle'=>' create new tag']);
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
           $tag = Tag::find($id);
         // hondle nulle -> message
        

        return view('tag.show',['tag' => $tag,'pagetitle' => 'show tag']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $tag = Tag::find($id);
        return view('tag.edit',['tag' => $tag,'pagetitle'=>' edit tag']);
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


//  function testManyToMany (){
//     //     $post11 = post::find(7);
//     //     $post13 = post::find(5);

//     //     $post11->tags()->attach([3,4]);
//     //       $post13->tags()->attach([4,2]);

//     //         return response()->json(([
//     //     'post11'=>$post11->tags,
//     //     'post13'=>$post13->tags
//     // ]));
//   //  }
//     $tag = Tag::find( 1);

//    $tag->posts()->attach([5]);

//    return response()->json(([
//      'tag' => $tag->title,
//      'posts' => $tag->posts
//       ]));