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
    //     $post11 = post::find(11);
    //     $post13 = post::find(13);

    //     $post11->tags()->attach([1,2]);
    //       $post13->tags()->attach([1,3]);

    //         return response()->json(([
    //     'poste11'=>$post11->tags,
    //     'poste13'=>$post13->tags
    // ]));
    // }
    $tag = Tag::find( 1);

  $tag->posts()->attach([11]);

  return response()->json(([
    'tag' => $tag->title,
    'posts' => $tag->posts
  ]));
    }
  
}