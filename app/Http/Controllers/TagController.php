<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TagController extends Controller
{
    function index(){
        // elequant ORM -> get all data
        $data = Tag::all();
        // pass the data to the view
        return view('tag.index', ['tags'=> $data,'pagetitle' => 'tag']);

    }

       function create(){
        $tags=Tag::create([
            'title' => 'css',
            
        ]);
        return redirect('/tags');
    }
    
    function testManyToMany (){
    //     $post11 = post::find(7);
    //     $post13 = post::find(5);

    //     $post11->tags()->attach([3,4]);
    //       $post13->tags()->attach([4,2]);

    //         return response()->json(([
    //     'post11'=>$post11->tags,
    //     'post13'=>$post13->tags
    // ]));
  //  }
    $tag = Tag::find( 1);

   $tag->posts()->attach([5]);

   return response()->json(([
     'tag' => $tag->title,
     'posts' => $tag->posts
      ]));
    }
  
  }