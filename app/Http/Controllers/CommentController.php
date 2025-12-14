<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CommentController extends Controller
{
    function index(){
        // elequant ORM -> get all data
        $data = Comment::all();
        // pass the data to the view
        return view('comment.index', ['comments'=> $data,'pagetitle' => 'blog']);

    }


    function create(){
        // Comment::create([
            
        //     'author' => 'mohamed',
        //     'content'=>'this is a nother comment',
        //     'post_id'=> 2

        // ]);
         Comment::factory(5)->create();

        return redirect('/comments');
    }
}
