<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         
        // elequant ORM -> get all data
        $Comments = Comment::cursorPaginate(5);
        // pass the data to the view
        return view('comment.index', ['comments'=> $Comments,'pagetitle' => 'comments']);
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
              
        
           return view('comment.create',['pagetitle'=>' create new coemment']);
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
         $comment = Comment::find($id);
         // hondle nulle -> message
  
        return view('comment.show',['comment' => $comment,'pagetitle' => 'show comment']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $comment = Comment::find($id);
         // hondle nulle -> message
        

        return view('comment.edit',['comment' => $comment,'pagetitle' => 'edit comment']);
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



    // function create(){
    //     // Comment::create([
            
    //     //     'author' => 'mohamed',
    //     //     'content'=>'this is a nother comment',
    //     //     'post_id'=> 2

    //     // ]);
    //      Comment::factory(5)->create();

    //     return redirect('/comments');
    // }