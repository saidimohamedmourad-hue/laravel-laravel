<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    function index(){
        // elequant ORM -> get all data
        $data = Post::cursorPaginate(10);
        // pass the data to the view
        return view('post.index', ['posts'=> $data,'pagetitle' => 'blog']);

    }

    function show($id){
        $post = Post::findOrFail($id);

        // hondle nulle -> message
        

        return view('post.show',['post' => $post,'pagetitle' => $post->title]);
    }


    function create(){
        // // $post=Post::create([
        // //     'title' => 'My first post',
        // //     'body' => 'my find unique post',
        // //     'author'=> 'mohamed',
        // //     'published'=> true,

        // ]);

        post::factory(100)->create();

        return redirect('/blog');
    }
    

    function delete(){
        post::destroy(1);
    }
}
